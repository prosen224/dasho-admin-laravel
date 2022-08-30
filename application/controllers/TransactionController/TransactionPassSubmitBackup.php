<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionPassSubmit extends CI_Controller {

	public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('session');
	    }

	public function index()
	{
		$this->load->view('SignUp/VerificationRegistration');
	}
	public function VerifyOTP(){
		$this->load->view('Login/login_view');
	}

	public function VerifyTransactionPass()
	{
		

		 $GetUserID = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
		 
		 $data=array();

		 $trans_pass = trim($this->input->post('trans_password'));
		 $verify__trans_password = trim($this->input->post('trans_password'));
		 $data['security_question'] = $this->input->post('security_question');
		 $data['security_answer'] = $this->input->post('secuirty_answer');
		 if($trans_pass == $verify__trans_password)
		 {
		 	$data['transaction_password'] = md5($trans_pass);
		 }

		 $data['user_id'] = $GetUserID->user_id;
		 $data['created_at'] = date('Ymd');
		 $data['transaction_password_status'] = 'Yes';

	     $this->db->trans_start();
	     $createResult = $this->db->insert('transaction_password',$data);
	     $this->db->trans_complete();

	     if($createResult)
	     {
		     $data['user_info'] = $GetUserID;

	       $data['index_view']  = $this->load->view('Product/Product',$data,true);
			$this->load->view('Homepage',$data);
	     }
	}

	public function VerifyTPassForChangeLoginPass(){
		$data=array();
		$data['old_password'] = $this->input->post('old_password');
		
		 $encrypted_old_password = md5($data['old_password']);

		 $new_password = $this->input->post('new_password');
		$confirm_password = $this->input->post('confirm_password');
		

		$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

		  $DB_password = $result->password;
		



		if($DB_password == $encrypted_old_password)
		{
			

			if($new_password == $confirm_password)
			{


			$data['new_password'] = $new_password;        	

			}
		}
		
        
        $data['user_info'] = $result;

		$data['index_view']=$this->load->view('ChangePassword/ChangeLoginPass',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function VerifyChangeLoginPass()
	{
		$transaction_password = $this->input->post('transaction_password');
		$data['password'] = md5($this->input->post('password'));
		
	

		$encoded_transaction_password = md5($transaction_password);
		$result = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$this->session->userdata('CurrentUserID').'"'),1);
		$transaction_password = $result->transaction_password;
		if($transaction_password == $encoded_transaction_password)
		{
			$this->db->trans_start();
			$UpdatePassword = $this->QueryBuilder_model->update('members',$data,array('user_id ="' .$this->session->userdata('CurrentUserID').'"'));
			$this->db->trans_complete();
			if($UpdatePassword){
				echo "upadted";
				exit();

			}

		}




	}

	public function ViewofTransactionPassChange()
	{
			
			$data=array();
		    $data['old_transaction_passwsord'] = $this->input->post('old_transaction_passwsord');
		    $encrypted_old_transaction_password = md5($data['old_transaction_passwsord']);
			$new_transaction_password = $this->input->post('new_transaction_password');
			$confirm_transaction_password = $this->input->post('confirm_transaction_password');

			$result = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$this->session->userdata('CurrentUserID').'"'),1);


		$DB_password = $result->transaction_password;
		
		if($DB_password == $encrypted_old_transaction_password)
		{
			if($new_transaction_password == $confirm_transaction_password)
			{
				$data['new_transaction_password'] = $new_transaction_password;  
			}
		}
		
		$result = $this->QueryBuilder_model->get_info('members','*',array('user_id ="' .$this->session->userdata('CurrentUserID').'"'),1);
        
        $data['user_info'] = $result;
		$data['index_view']=$this->load->view('ChangePassword/ChangeTransactionPassView',$data,true);
		$this->load->view('Homepage',$data);


	}

	public function ChangeTransactionPassword()
	{
		$transaction_password = $this->input->post('transaction_password');
		$data['transaction_password'] = md5($this->input->post('new_transaction_password'));
		
		$encoded_transaction_password = md5($transaction_password);
		$result = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$this->session->userdata('CurrentUserID').'"'),1);
		$transaction_password = $result->transaction_password;
		if($transaction_password == $encoded_transaction_password)
		{
			$this->db->trans_start();
			$UpdatePassword = $this->QueryBuilder_model->update('transaction_password',$data,array('user_id ="' .$this->session->userdata('CurrentUserID').'"'));
			$this->db->trans_complete();
			if($UpdatePassword){
				echo "working";
			}
			else{
				echo "Try Again";
			}

		}		
	}







	 //    $data=array();
		// $this->load->view('Website/HomePage',$data);
}
