<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VirtualBankController extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function VirtualBank()
	{
		// helper('name');

		// print_r(get_available_coin(1203 ,false));
		// die;

		// die;
		$Viewdata = array();
		$TransactionPasswordInfo = $this->QueryBuilder_model->get_info('transaction_password', '*', array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);
		// print_r($TransactionPasswordInfo);
		// exit();
		if (!$TransactionPasswordInfo) {
			$Viewdata['user_info'] = $result;
			$Viewdata['index_view'] = $this->load->view('Dashboard/TransactionPassWordView', $Viewdata, true);
			$this->load->view('Homepage', $Viewdata);
		} else {
			$data = array();
			$result = $this->QueryBuilder_model->get_info('members', '*', array('user_name ="' . $this->session->userdata('UserName') . '"'), 1);

			$data['user_info'] = $result;
			$userID = $result->user_id;
			// print_r($userID);die;
			// $userID = 1185;
			//new Code Added For Received Data Coins
			$data['TotalCoins'] = $this->QueryBuilder_model->get_info('coins', '*', array('user_id ="' . $userID . '"'), 1);
			// print_r($data['TotalCoins']->total_coins);die;
			if (!$data['TotalCoins']) {
				$data['TotalCoins'] = 0;
			} else {
				$data['TotalCoins'] = $data['TotalCoins']->total_coins;
			}
			// $data['DetailsCoins'] = $this->QueryBuilder_model->get_info('coins_overview','*',array('user_id ="' .$userID.'"'));


			// $data['DetailsCoins'] = $this->QueryBuilder_model->get_info('transfer_details','*',array('receiver_user_id ="' .$userID.'"'));
			// print_r($data['DetailsCoins']->total_coins);die;
			$data['TransferDeatils'] = $this->db->select('*')->from("transfer_details")->where('sender_user_id',$userID)->order_by('transfer_time','desc')->get()->result();
			
			//$this->QueryBuilder_model->get_info('transfer_details', '*', array('sender_user_id ="' . $userID . '"'));

			$data["ReceivedDetails"] = $this->db->select('*')->from("transfer_details")->where('receiver_user_id',$userID)->order_by('transfer_time','desc')->get()->result();
			// echo "<pre>";
			// print_r($data["ReceivedDetails"]);die;
			
			//$this->QueryBuilder_model->get_info('transfer_details', '*', array('receiver_user_id ="' . $userID . '"'));

			$data["CoinDetails"] =  $this->db->select("*")->from('coins_overview')->where('user_id', $userID)->or_where('referer_userid', $userID)->get()->result();

			// echo "<pre>";
			// // print_r($availableCoin);die;
			// print_r($data["CoinDetails"]);
			// echo "<pre>";
			// die;
			$availableCoin = 0;
			foreach ($data["CoinDetails"] as $key => $value) {
				if ($value->referer_userid == $userID) {
					$availableCoin = $availableCoin - $value->coins;
				} else {
					$availableCoin = $availableCoin + $value->coins;
				}
			}
			$data['availableCoin'] = get_available_coin($userID, false);
			//$availableCoin;

			$data["ReceivedCoinDetails"] =
				$this->db->select("*")
				->from('transfer_details')
				// ->order_by("transfer_date", "desc")
				->join('members', 'members.user_id = transfer_details.sender_user_id')
				->where('receiver_user_id', $userID)
				->get()
				->result();

			$formatted_transfer_data = array();
			foreach ($data['TransferDeatils'] as $key => $value) {
				$receiver_user_id = $value->receiver_user_id;
				$Receiver = $this->QueryBuilder_model->get_info('members', 'user_name', array('user_id ="' . $receiver_user_id . '"'), 1);
				//$key++;

				$formatted_transfer_data[$key]['receiver_name'] = @$Receiver->user_name;

				$formatted_transfer_data[$key]['amount'] = $value->point_amount;
				$formatted_transfer_data[$key]['remarks'] = $value->remarks;
				$date = $value->transfer_time;
				$DateFormat = strtotime($date);
				$formatted_transfer_data[$key]['transfer_date'] = date('d-M-Y', $DateFormat);
				$formatted_transfer_data[$key]['transfer_time'] = date('H:i A', $DateFormat);
				$formatted_transfer_data[$key]['receiver_user_id'] = $value->receiver_user_id;
				$formatted_transfer_data[$key]['sender_user_id'] = $value->sender_user_id;


				$data['formatted_transfer_data'] = $formatted_transfer_data;
			}


			//Ending code of Received Data Coins
			$data['Total_Available_Funds_Point'] = $this->QueryBuilder_model->get_info('points', '*', array('user_id ="' . $userID . '"'), 1);
			$data['Total_Available_Funds_Coins'] = $this->QueryBuilder_model->get_info('coins', '*', array('user_id ="' . $userID . '"'), 1);
			$data['index_view'] = $this->load->view('FinancialManager/VirtualBankView', $data, true);
			$this->load->view('Homepage', $data);
		}
	}
	public function FundTransferView()
	{
		$TransactionPassword = $this->input->post('tp_pass');
		$EncryptedTP = md5($TransactionPassword);
		$result = $this->QueryBuilder_model->get_info('transaction_password', '*', array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);
		//  print_r($result);die;
		$DB_Password = $result->transaction_password;

		if ($EncryptedTP == $DB_Password) {


			$result = $this->QueryBuilder_model->get_info('members', '*', array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);

			$data['user_info'] = $result;
			$userID = $result->user_id;
			$data['Total_Available_Funds_Coins'] = $this->QueryBuilder_model->get_info('coins', '*', array('user_id ="' . $userID . '"'), 1);

			$data['index_view'] = $this->load->view('FundTransfer/FundTransferView', $data, true);
			$this->load->view('Homepage', $data);
		} else {

			$error_msg =  "Sorry, The Given Password is wrong";
			$this->session->set_flashdata('error_msg', $error_msg);
			$this->VirtualBank();
		}
	}

	public function FundTransfer()
	{

		$userID = $this->session->userdata('CurrentUserID');
		$available_coin = get_available_coin($userID, false);
		$transfer_amount = $this->input->post('amount');
		// if(!)
		if ($available_coin <= 0 || $transfer_amount > $available_coin) {
			// print_r("You don't have enough coins to transfer");
			$error_msg =  "Sorry, You Do not have available coins right now!";
			$this->session->set_flashdata('error_msg', $error_msg);
			$this->VirtualBank();
			return false;
			//   die;
		}

		$receiveruser_name = $this->input->post('user_name');

		$remarks = $this->input->post('remarks');
		$sender_user_id = $this->session->userdata('CurrentUserID');

		$data['sender_user_id'] = $sender_user_id;

		$Available_Funds_Coins = $this->QueryBuilder_model->get_info('coins', '*', array('user_id ="' . $sender_user_id . '"'), 1);
		$Reciever_UserID = $this->QueryBuilder_model->get_info('members', 'user_id', array('user_name ="' . $receiveruser_name . '"'), 1);


		$GetAmountFromDB = $Available_Funds_Coins->total_coins;
		$receiveruser_id = $Reciever_UserID->user_id;


		if ($transfer_amount <= $GetAmountFromDB) {
			$data['receiver_user_id'] = $receiveruser_id;
			$data['point_amount'] = $transfer_amount;
			$data['remarks'] = $remarks;
			$data['transfer_time'] = date('y-m-d H:i:s');
			$length = 6;
			$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
			$data['transfer_id'] =  substr(str_shuffle($str), 0, $length);

			$this->db->trans_start();
			$Transfer_Result = $this->db->insert('transfer_details', $data);
			$this->db->trans_complete();

			if ($Transfer_Result) {
				$Update_Transfer_details_data['total_coins'] = $GetAmountFromDB - $transfer_amount;
				$this->db->trans_start();
				$Update_Total_Coins_table = $this->QueryBuilder_model->update('coins', $Update_Transfer_details_data, array('user_id ="' . $sender_user_id . '"'));
				$this->db->trans_complete();

				if ($Update_Total_Coins_table) {
					$UpdateCoinsTable['user_id'] = $receiveruser_id;
					$UpdateCoinsTable['coins'] = $transfer_amount;
					$UpdateCoinsTable['remarks'] = "FT ";
					$UpdateCoinsTable['referer_userid'] = $sender_user_id;

					$this->db->trans_start();
					$UpdateCoinsTable_Result = $this->db->insert('coins_overview', $UpdateCoinsTable);
					$this->db->trans_complete();

					if ($UpdateCoinsTable_Result) {
						$Available_Funds_Coins = $this->QueryBuilder_model->get_info('coins', '*', array('user_id ="' . $receiveruser_id . '"'), 1);
						if ($Available_Funds_Coins) {
							$UpdateRecieverTotalCoins['total_coins'] = $Available_Funds_Coins->total_coins + $transfer_amount;

							$this->db->trans_start();
							$UpdateCoinsTable_Result = $this->QueryBuilder_model->update('coins', $UpdateRecieverTotalCoins, array('user_id ="' . $receiveruser_id . '"'));
							$this->db->trans_complete();
							$error_msg = "fund transfer Successful";
							$this->session->set_flashdata('error_msg', $error_msg);
							$this->VirtualBank();
						} else {
							$NewReceieverTotalCoins['total_coins'] =  $transfer_amount;
							$NewReceieverTotalCoins['user_id'] = $receiveruser_id;
							$NewReceieverTotalCoins['created_at'] = date('y-m-d H:i:s');

							$this->db->trans_start();
							$success = $this->db->insert('coins', $NewReceieverTotalCoins);
							$this->db->trans_complete();
							if ($success) {
								$error_msg = "fund transfer Successful";
								$this->session->set_flashdata('error_msg', $error_msg);
								$this->VirtualBank();
							}
						}
					}
				}
			}
		} else {
			$error_msg =  "Sorry, You Do not have available Points right now!";
			$this->session->set_flashdata('error_msg', $error_msg);
			$this->VirtualBank();
		}
	}

	public function PayoutView()
	{
		$TransactionPassword = $this->input->post('tp_pass');
		$EncryptedTP = md5($TransactionPassword);
		$result = $this->QueryBuilder_model->get_info('transaction_password', '*', array('user_id ="' . $this->session->userdata('CurrentUserID') . '"'), 1);
		$DB_Password = $result->transaction_password;

		if ($EncryptedTP == $DB_Password) {

			$result = $this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);

			$data['user_info'] = $result;
			$userID = $result->user_id;
			$data['Total_Available_Funds_Point'] = $this->QueryBuilder_model->get_info('points', '*', array('user_id ="' . $userID . '"'), 1);

			$data['index_view'] = $this->load->view('Payout/PayoutView', $data, true);
			$this->load->view('Homepage', $data);
		} else {
			echo "Sorry, The Given Password is wrong";
		}
	}

	public function PayOut()
	{
		$receiveruser_id = '3';
		$transfer_amount = $this->input->post('amount');
		$remarks = $this->input->post('remarks');
		$sender_user_id = $this->session->userdata('CurrentUserID');

		$data['sender_user_id'] = $sender_user_id;

		$Available_Funds_Point = $this->QueryBuilder_model->get_info('points', '*', array('user_id ="' . $sender_user_id . '"'), 1);

		$GetAmountFromDB = $Available_Funds_Point->total_points;

		if ($transfer_amount <= $GetAmountFromDB) {
			$data['receiver_user_id'] = $receiveruser_id;
			$data['point_amount'] = $transfer_amount;
			$data['remarks'] = $remarks;
			$data['transfer_time'] = date('y-m-d H:i:s');

			$length = 6;

			$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

			$data['transfer_id'] =  substr(str_shuffle($str), 0, $length);

			$this->db->trans_start();
			$Transfer_Result = $this->db->insert('transfer_details', $data);
			$this->db->trans_complete();

			if ($Transfer_Result) {
				$Update_Transfer_details_data['total_points'] = $GetAmountFromDB - $transfer_amount;
				$this->db->trans_start();
				$Update_Total_Point_table = $this->QueryBuilder_model->update('points', $Update_Transfer_details_data, array('user_id ="' . $sender_user_id . '"'));
				$this->db->trans_complete();

				if ($Update_Total_Point_table) {
					echo "PayOut Successful";
				}
			}
		} else {
			$data['erro_msg'] =  "Sorry, You Do not have available Points right now!";
			$this->VirtualBank();
		}
	}

	//Get User Name from View To Controller 


	public function getUserName($userid)
	{
		$userName = $this->QueryBuilder_model->get_info('members', 'user_name', array('user_id ="' . $userid . '"'));
		return $userName[0]->user_name;
	}

	//Ending Get User Name Controller

}
