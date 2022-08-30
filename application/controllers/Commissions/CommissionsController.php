<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommissionsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function view()
	{
		
		$Viewdata=array();
        $TransactionPasswordInfo = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$this->session->userdata('CurrentUserID').'"'),1);
        
        if(!isset($TransactionPasswordInfo))
        {
            $Viewdata['user_info'] = $TransactionPasswordInfo;
            $Viewdata['index_view']=$this->load->view('Dashboard/TransactionPassWordView',$Viewdata,true);
            $this->load->view('Homepage',$Viewdata);
            
        }
        
        else
        {
            $data=array();
		$result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$this->session->userdata('UserName').'"'),1);

		$data['user_info'] = $result;
		$userID = $result->user_id;
		$data['TotalCoins'] = $this->QueryBuilder_model->get_info('coins','*',array('user_id ="' .$userID.'"'),1);
		

		// get details coin with pagination
		$data['DetailsCoins'] = get_available_coin($userID ,true);
		
		
		//$this->db->select("*")->from('coins_overview')->where('user_id',$userID)->or_where('referer_userid',$userID)->get()->result();
		
		//$this->QueryBuilder_model->get_info('coins_overview','*',['user_id ="' .$userID.'"','referer_userid ="' .$userID.'"']);
			
		// print_r($data['DetailsCoins']);die;
		
		$data["userId"] = $userID;
		
		$data['TransferDeatils'] = $this->QueryBuilder_model->get_info('transfer_details','*',array('sender_user_id ="' .$userID.'"'));	

		$formatted_transfer_data = array();
		foreach ($data['TransferDeatils'] as $key => $value) {
			$receiver_user_id = $value->receiver_user_id;
			$formatted_transfer_data[$key]['receiver_name'] = $this->QueryBuilder_model->get_info('members','FirstName',array('user_id ="' .$receiver_user_id.'"'));		
			//$key++;
			$formatted_transfer_data[$key]['amount'] = $value->point_amount;
			$formatted_transfer_data[$key]['remarks'] = $value->remarks;
			$date = $value->transfer_time;
			$DateFormat = strtotime($date);
	        $formatted_transfer_data[$key]['transfer_date'] = date('d-M-Y',$DateFormat);
	        $formatted_transfer_data[$key]['transfer_time'] = date('H:i A',$DateFormat);


	        $data['formatted_transfer_data'] = $formatted_transfer_data;

		}
	
		$data['index_view']=$this->load->view('Commissions/CommisionsView',$data,true);
		$this->load->view('Homepage',$data);    
        }    
            
		
	}
	
	public function getUserName($userid) 
    {
    $userName = $this->QueryBuilder_model->get_info('members','user_name',array('user_id ="' .$userid.'"'));	
    return $userName[0]->user_name;
    }
}
