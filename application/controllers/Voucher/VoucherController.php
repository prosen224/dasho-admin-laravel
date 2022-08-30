<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VoucherController extends CI_Controller {

	public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('session');
			$this->load->helper('common_helper');
	    }

	public function VoucherView()
	{
		$data = array();
		$result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$this->session->userdata('UserName').'"'),1);
		$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
		$data['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
		$data['usedVoucher'] =  $this->db->select('*')->from('vouchers')->where('created_by',$this->session->userdata('CurrentUserID'))->where('voucher_status','1')->get()->result_array();


		$data['user_info'] = $result;
	    $data['msg'] = '';
	    $data['first_tab_status'] = "active";
	    $data['hideStyle'] = '';
	    $data['verify_tab'] = '';
		$data['index_view'] = $this->load->view('Voucher/VoucherView',$data,true);
		$this->load->view('Homepage',$data);
	}
	
	public function VoucherView1()
	{
		$data = array();
		$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

		$data['user_info'] = $result;
		$data['index_view'] = $this->load->view('Voucher/GenerateVoucher',$data,true);
		$this->load->view('Homepage',$data);
	}
	
	
	public function GenerateVoucher($grand_total){
		 $userId = $this->session->userdata('CurrentUserID');
		 $last_id = $this->db->get('vouchers')->last_row();
		 
		 $random_number = mt_rand(100000, 999999);
		 $random_number = $random_number.$last_id->id;

         $validity = '20221231';
		 $data['created_by'] = $userId;//$this->session->userdata('CurrentUserID');
		 $length = 12;
		 $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  		 $data['voucher_code'] =  substr(str_shuffle($str), 0, $length);
		 $data['voucher_no'] = $random_number;//random_int(100000, 999999);
		 $data['voucher_status'] = 0;
		 $data['voucher_validity'] = $validity; //time() + (60 * 60 * 24 * $validity);
		 $data['created_at'] = date('y-m-d H:i:s');

		 if($validity)
		 {
			if($grand_total > 0):
				$this->db->trans_start();
				$createResult = $this->db->insert('vouchers',$data);
				$this->db->trans_complete();
			endif;
		    if($createResult)
		    {
				// insert data into coins_overview table
				$mydata= [];
				$mydata["referer_userid"] = $userId;
				$mydata["coins"] = $grand_total;
				$mydata["remarks"] = "Purchase E-V";

				// trnsaction start
				if($grand_total > 0):
					$this->db->trans_start();
					$insertDataIntoCoinTable = $this->db->insert('coins_overview',$mydata);
					$this->db->trans_complete();
				endif;

				// if($createcoinoverview):
					$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

					$data['user_info'] = $result;
					
					$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
				
					$this->VoucherView();

					return false;

					$data['index_view'] = $this->load->view('Voucher/VoucherView',$data,true);
							
					$this->load->view('Homepage',$data);
				// endif;

		    }

		 }
		 
		 
	}
	
	public function Purchasevouchers()
	{
	   $total_voucherNO = $this->input->post('total_voucherNO');
	   $TOTAL_no  =  $total_voucherNO[0];
	   
		//    $voucherPer = 999;
	   $voucherPer = 1;

	   $grand_total = $TOTAL_no * $voucherPer;
	
	  $Get_total_coins = get_available_coin($this->session->userdata('CurrentUserID'),false);
	  
	  if($Get_total_coins  >= $grand_total)
	  {
		for ($i=0; $i < $TOTAL_no ; $i++) { 
			$this->GenerateVoucher($voucherPer);
		}
	    // $this->GenerateVoucher($grand_total);
	  }else{
    	$data = array();
    	$data['msg'] = ("You Don't Have enough Coins");
            
        $result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$this->session->userdata('UserName').'"'),1);
		$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
		// $data['TotalVouchers'] =  $this->db->select('*')->from('vouchers')->join('members', 'members.user_id = vouchers.used_by')->where('vouchers.created_by', $this->session->userdata('CurrentUserID'))->get()->result_array();
		$data['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
		$data['usedVoucher'] =  $this->db->select('*')->from('vouchers')->where('created_by',$this->session->userdata('CurrentUserID'))->where('voucher_status','1')->get()->result_array();
		$data['user_info'] = $result;
		$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
	    $data['first_tab_status'] = 'active';
	    $data['verify_tab'] = '';
	    $data['hideStyle'] = '';
		$data['index_view'] = $this->load->view('Voucher/VoucherView',$data,true);
		$this->load->view('Homepage',$data);
	       
	  }

	}
	
	 public function CheckVoucher()
	{
	    
	    $voucher_no = $this->input->post('voucher_no');
	    $voucher_code = $this->input->post('voucher_code');
		$data['TotalVouchers'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
		$data['usedVoucher'] =  $this->db->select('*')->from('vouchers')->where('created_by',$this->session->userdata('CurrentUserID'))->where('voucher_status','1')->get()->result_array();
	   
	   // $data['voucher_data'] = $this->QueryBuilder_model->get_info('vouchers','*',array('voucher_no ="' .$voucher_no.'"','voucher_code ="' .$voucher_code.'"'),1);
	   
         $Query = $this->db->query("SELECT voucher_no,vouchers.created_by, vouchers.voucher_code, vouchers.used_by, vouchers.created_at, FirstName as voucher_owner, userd_on,used_for,vouchers.created_by
            FROM `vouchers`, members
            where  vouchers.voucher_no = '$voucher_no'
            and vouchers.voucher_code  = '$voucher_code'
            and vouchers.created_by = members.user_id");


		// $multiClause = array('voucher_no' => $voucher_no, 'voucher_code' => $voucher_code, 'created_by' => $this->session->userdata('CurrentUserID'));
		// // find query start with multi clause
		// $Query = 
		// 	$this->db->select('*')
		// 	->from('vouchers')
		// 	->where($multiClause)
		// 	// ->join('members', 'members.user_id = vouchers.used_by')
		// 	->get();
		// 	// ->result_array();

		// 	// print_r($check_query);die;

        $data['voucher_data'] = $Query->result();

        if($data['voucher_data'])
        {
            $voucher_data = $Query->result();
            $voucherOwnerID =  $voucher_data[0]->created_by;

			// print_r( $voucher_data[0]->used_by);die;
			$voucher_user_id = $voucher_data[0]->used_by;
            
            $VoucherOwnerDetailsQuery = $this->db->query("SELECT members.*, rank  from members, sponsors
            WHERE user_id = $voucherOwnerID
            and members.user_id = sponsors.child_id");
			$data['VouchersOwnersData'] = $VoucherOwnerDetailsQuery->result();

			$data['VouchersUserData'] = '';
			if($voucher_user_id):
            $VoucherUserDetailsQuery = $this->db->query("SELECT members.*, rank  from members, sponsors
            WHERE user_id = $voucher_user_id
            and members.user_id = sponsors.child_id");
			$data['VouchersUserData'] = $VoucherUserDetailsQuery->result();
			endif;
				
			$data['msg'] = '';
			$data['first_tab_status'] = '';
			$data['verify_tab'] = 'active';
			$data['hideStyle'] = 'display:none';
			$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
			
			$data['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
			$data['usedVoucher'] =  $this->db->select('*')->from('vouchers')->where('created_by',$this->session->userdata('CurrentUserID'))->where('voucher_status','1')->get()->result_array();
			// $data['TotalVouchers'] = $this->db->select('*')->from('vouchers')->join('members', 'members.user_id = vouchers.used_by')->where('vouchers.created_by', $this->session->userdata('CurrentUserID'))->get()->result_array();
			$data['index_view'] = $this->load->view('Voucher/VoucherView',$data,true);
			$this->load->view('Homepage',$data);
           
        } else {
        
			$Pdata['msg'] = 'Voucher No or Voucher Code is Not Correct!';
			$Pdata['first_tab_status'] = '';
			$Pdata['verify_tab'] = 'active';
			$Pdata['hideStyle'] = '';
			$data['voucherDetails'] = $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
			$Pdata['TotalVouchers'] =  $this->QueryBuilder_model->get_info('vouchers','*',array('created_by ="' .$this->session->userdata('CurrentUserID').'"'));
			// $Pdata['TotalVouchers'] = $this->db->select('*')->from('vouchers')->join('members', 'members.user_id = vouchers.used_by')->where('vouchers.created_by', $this->session->userdata('CurrentUserID'))->get()->result_array();	

			$Pdata['index_view'] = $this->load->view('Voucher/VoucherView',$Pdata,true);
			$this->load->view('Homepage',$Pdata);
                
        }
	 

	
	}

	

	

	

	

	
}
