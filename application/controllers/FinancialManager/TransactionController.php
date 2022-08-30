<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransactionController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function transactionHistory()
	{
		$data = array();
		$result = $this->QueryBuilder_model->get_info('members', '*', array('user_name ="' . $this->session->userdata('UserName') . '"'), 1);


		$data['user_info'] = $result;
		$userID = $result->user_id;
		$data["user_id"] = $userID;
		$data['TotalPoints'] = $this->QueryBuilder_model->get_info('points', '*', array('user_id ="' . $userID . '"'), 1);
		//$data['DetailsPoint'] = $this->QueryBuilder_model->get_info('points_overview','*',array('user_id ="' .$userID.'"'));


		$this->db->where("(user_id='$userID')", NULL, FALSE);


		$data['DetailsPoint'] =  get_available_point($userID, true);

		// $this->db->select('*')->from('points_overview')->where([
		// 	'user_id' => $userID,
		// 	'remarks' => 'Purchase Points',
		// 	'point >' => 0
		// ])->get()->result();


		//  $this->db->get('points_overview')->result();


		$data['TransferDeatils'] = $this->QueryBuilder_model->get_info('transfer_details', '*', array('sender_user_id ="' . $userID . '"'));

		$formatted_transfer_data = array();
		foreach ($data['TransferDeatils'] as $key => $value) {
			$receiver_user_id = $value->receiver_user_id;
			$formatted_transfer_data[$key]['receiver_name'] = $this->QueryBuilder_model->get_info('members', 'user_name', array('user_id ="' . $receiver_user_id . '"'));
			//$key++;
			$formatted_transfer_data[$key]['amount'] = $value->point_amount;
			$formatted_transfer_data[$key]['remarks'] = $value->remarks;
			$date = $value->transfer_time;
			$DateFormat = strtotime($date);
			$formatted_transfer_data[$key]['transfer_date'] = date('d-M-Y', $DateFormat);
			$formatted_transfer_data[$key]['transfer_time'] = date('H:i A', $DateFormat);


			$data['formatted_transfer_data'] = $formatted_transfer_data;
		}

		$data['index_view'] = $this->load->view('FinancialManager/TransactionHistoryView', $data, true);
		$this->load->view('Homepage', $data);
	}

	public function getUserName($userid)
	{

		$userName = $this->QueryBuilder_model->get_info('members', 'user_name', array('user_id ="' . $userid . '"'));

		return $userName[0]->user_name;
	}


	public function Epoints()
	{
		$data = array();
		$result = $this->QueryBuilder_model->get_info('members', '*', array('user_name ="' . $this->session->userdata('UserName') . '"'), 1);
		$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers', '*', array('created_by ="' . $this->session->userdata('CurrentUserID') . '"'));
		$data['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers', '*', array('created_by ="' . $this->session->userdata('CurrentUserID') . '"'));

		$data['user_info'] = $result;
		$userID = $result->user_id;
		$data['TotalPoints'] = get_available_point($userID);

		//$this->QueryBuilder_model->get_info('sponsors','points',array('child_id ="' .$userID.'"'),1);

		// $data['TotalPoints']->points;

		//$data['DetailsPoint'] = $this->QueryBuilder_model->get_info('points_overview','*',array('user_id ="' .$userID.'"'));
		$this->db->where("(user_id='$userID')", NULL, FALSE);


		$data['DetailsPoint'] = $this->db->select('*')->from('points_overview')->where([
			'user_id' => $userID,
			'remarks' => 'Purchase Points',
			'point >' => 0
		])->get()->result();
		//$this->db->get('points_overview')->result();

		$data['msg'] = '';
		$data['first_tab_status'] = "active";
		$data['hideStyle'] = '';
		$data['verify_tab'] = '';
		$data['index_view'] = $this->load->view('Epoints/EpointsView', $data, true);
		$this->load->view('Homepage', $data);
	}

	public function PurchasePoints()
	{
		$total_points = $this->input->post('total_points');

		$total_points  =  $total_points[0];


		$grand_total = $this->input->post('total_points') / 100;

		$user_id = $this->session->userdata('CurrentUserID');

		$result =  get_available_coin($user_id);//$this->QueryBuilder_model->get_info('coins', 'total_coins', array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);

		$Get_total_coins = get_available_coin($user_id, false); //$result->total_coins; 


		if ($Get_total_coins  >= $grand_total) {
			$InsertToCoinsOverview['referer_userid'] = $this->session->userdata('CurrentUserID');
			$InsertToCoinsOverview['coins'] = $grand_total;
			$InsertToCoinsOverview['remarks'] = "Purchase Points";

			// echo  json_encode($InsertToCoinsOverview);die;

			$this->db->trans_start();
			  $InsertToCoinsOverviewResult = $this->db->insert('coins_overview', $InsertToCoinsOverview);
			$this->db->trans_complete();

			if ($InsertToCoinsOverviewResult) {
				$UpdateCoinsTableMinus['total_coins'] = $Get_total_coins - $grand_total;
				$this->db->trans_start();
				$UpdateCoinsTable_Result = $this->QueryBuilder_model->update('coins', $UpdateCoinsTableMinus, array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'));
				$this->db->trans_complete();

				if ($UpdateCoinsTable_Result) {
					$InsertToPointsOverview['user_id'] = $this->session->userdata('CurrentUserID');
					$InsertToPointsOverview['point'] = $this->input->post('total_points');//$total_points;
					$InsertToPointsOverview['coin'] = $grand_total;
					$InsertToPointsOverview['remarks'] = "Purchase Points";
					$this->db->trans_start();
						$InsertToPointsOverviewResult = $this->db->insert('points_overview', $InsertToPointsOverview);
					$this->db->trans_complete();

					// decrease coin from coins_overview table
					// $this->db->insert('coins_overview',["coins"=>]);


					if ($InsertToPointsOverviewResult) {
						$result = $this->QueryBuilder_model->get_info('sponsors', 'points', array('child_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);

						$Get_total_points = $result->points;


						$UpdateSponsrsTablePlus['points'] = $Get_total_points + $total_points;
						$this->db->trans_start();
						$UpdateSponsrsTablePlusResult = $this->QueryBuilder_model->update('sponsors', $UpdateSponsrsTablePlus, array('child_id ="' . $this->session->userdata('CurrentUserID') . '"'));
						$this->db->trans_complete();

						$result = $this->QueryBuilder_model->get_info('members', '*', array('user_name ="' . $this->session->userdata('UserName') . '"'), 1);
						$data['user_info'] = $result;
						$userID = $result->user_id;
						$data['TotalPoints'] = $this->QueryBuilder_model->get_info('sponsors', 'points', array('child_id ="' . $userID . '"'), 1);


						$this->db->where("(user_id='$userID')", NULL, FALSE);
						$data['DetailsPoint'] = get_available_point($userID, true);


						// $this->db->select('*')->from('points_overview')->where([
						// 	'user_id' => $userID,
						// 	'remarks' => 'Purchase Points',
						// 	'point >' => 0
						// ])->get()->result();

						//$this->db->get('points_overview')->result();

						$data['msg'] = 'Points Purchase is Successfull!';
						$data['first_tab_status'] = "active";
						$data['hideStyle'] = '';
						$data['verify_tab'] = '';
					
						// if ajax request json response
						if ($this->input->is_ajax_request()) {
							$info = array(
								'status' => 'success',
								'msg' => $data['msg'],
							);
							echo json_encode($info);
						}else{
							$data['index_view'] = $this->load->view('Epoints/EpointsView', $data, true);
							$this->load->view('Homepage', $data);
						}



						// $data['index_view'] = $this->load->view('Epoints/EpointsView', $data, true);
						// $this->load->view('Homepage', $data);

					} else {
						echo "not working;";
					}
				} else {
					echo "UpdatesCoinstable error";
				}
			} else {
				echo "Insewrt Coin Over view Error";
			}
		} else {
			$data = array();
			$data['msg'] = ("You Don't Have enough Points");

			$result = $this->QueryBuilder_model->get_info('members', '*', array('user_name ="' . $this->session->userdata('UserName') . '"'), 1);
			$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers', '*', array('created_by ="' . $this->session->userdata('CurrentUserID') . '"'));
			$data['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers', '*', array('created_by ="' . $this->session->userdata('CurrentUserID') . '"'));

			$data['user_info'] = $result;
			$userID = $result->user_id;
			$data['TotalPoints'] = $this->QueryBuilder_model->get_info('sponsors', 'points', array('child_id ="' . $userID . '"'), 1);
			//$data['DetailsPoint'] = $this->QueryBuilder_model->get_info('points_overview','*',array('user_id ="' .$userID.'"'));


			$this->db->where("(user_id='$userID')", NULL, FALSE);


			$data['DetailsPoint'] = $this->db->select('*')->from('points_overview')->where([
				'user_id' => $userID,
				'remarks' => 'Purchase Points',
				'point >' => 0
			])->get()->result();

			//  $this->db->get('points_overview')->result();


			$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers', '*', array('created_by ="' . $this->session->userdata('CurrentUserID') . '"'));
			$data['first_tab_status'] = 'active';
			$data['verify_tab'] = '';
			$data['hideStyle'] = '';

			// if ajax request json response
			if ($this->input->is_ajax_request()) {
				$info = array(
					'status' => 'error',
					'msg' => $data['msg']
				);
				echo json_encode($info);
			}else{
				$data['index_view'] = $this->load->view('Epoints/EpointsView', $data, true);
				$this->load->view('Homepage', $data);
			}

			// $data['index_view'] = $this->load->view('Epoints/EpointsView', $data, true);
			// $this->load->view('Homepage', $data);
		}
	}
}
