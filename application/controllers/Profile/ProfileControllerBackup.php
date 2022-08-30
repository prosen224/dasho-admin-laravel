<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    public function index()
    {
        $data=array();
        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
        $GetUserID = $result->user_id;

         $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
        $data['profile_update_success_msg'] = '';
        $data['blood_info_update_success_msg'] = '';
        $data['user_info'] = $result;
        $data['security_question'] = $security_question;
        $data['index_view']=$this->load->view('Profile/ProfileView',$data,true);
        $this->load->view('Homepage',$data);
    }
    public function UpdateProfile()
    {
    	$data['user_name'] = $this->input->post('user_name');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['LastName'] = $this->input->post('LastName');
		$data['dob'] = $this->input->post('dob');
		$data['street_address'] = $this->input->post('street_address');
		$data['mobile_no'] = $this->input->post('mobile_no');
		$data['country'] = $this->input->post('country');
		$data['email'] = $this->input->post('email');
		
		 $security_question = $this->input->post('security_question');
		 $security_answer = $this->input->post('security_answer');

		$Inputted_transaction_password = md5(trim($this->input->post('transaction_password')));
		




        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$data['email'].'"'),1);
        if($result)
        {

        $user_id = $result->user_id;

        $transaction_password_result = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$user_id.'"'),1);
		         
		         $transaction_password_result->transaction_password;
		       
		        if($Inputted_transaction_password == $transaction_password_result->transaction_password)
		        { 
		        	

			        $this->db->trans_start();
			        $Result = $this->QueryBuilder_model->update('members',$data,array('email ="' .$data["email"].'"'));
			        $this->db->trans_complete();

			        if(!is_null($security_question) && !is_null($security_answer))
			        {
			        	$data_trans_table['security_question'] = $security_question;
			        	$data_trans_table['security_answer'] = $security_answer;

			        	$this->db->trans_start();
			        	$SecurityQsAnswer = $this->QueryBuilder_model->update('transaction_password',$data_trans_table,array('user_id ="' .$user_id.'"'));
			        	$this->db->trans_complete();

			        	


			        }
			        if($Result)
			        {
			        
			        	$data=array();
				        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
				        $GetUserID = $result->user_id;
				        $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
				        $data['user_info'] = $result;
				        $data['security_question'] = $security_question;
				        $data['profile_update_success_msg'] = '<div class="alert alert-success alert-dismissible fade show">
								    <strong>Your Profile has been updated successfully.</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
						 $data['index_view']=$this->load->view('Profile/ProfileView',$data,true);
	       				 $this->load->view('Master_view',$data);

			        	
			        }

		        }
		        else{
		        	echo "does not work";
		    		exit();
		        }
        }


        


    }

    public function UpdateBloodInformation()
    {
    	$data['blood_group'] = $this->input->post('blood_group');
		$data['total_donate'] = $this->input->post('total_donate');
		$data['last_donate_date'] = $this->input->post('last_donate_date');

		$transaction_password = md5($this->input->post('transaction_password'));

		$user_id = $this->session->userdata('CurrentUserID');


        $transaction_password_result = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$user_id.'"'),1);
		         
		$encrypted_transaction_password = $transaction_password_result->transaction_password;


		if(!empty($transaction_password) && $encrypted_transaction_password == $transaction_password)
		{
			        
			        $this->db->trans_start();
			        $Result = $this->QueryBuilder_model->update('members',$data,array('user_id ="' .$user_id.'"'));
			        $this->db->trans_complete();

			        if($Result)
			        {
			        	
			        	$data=array();
				        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
				        $GetUserID = $result->user_id;
				        $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
				        $data['user_info'] = $result;
				        $data['security_question'] = $security_question;
				        $data['blood_info_update_success_msg'] = '<div class="alert alert-success alert-dismissible fade show">
								    <strong>Your Blood Information has been updated successfully.</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
        				$data['profile_update_success_msg'] = '';

						 $data['index_view']=$this->load->view('Profile/ProfileView',$data,true);
	       				 $this->load->view('Master_view',$data);
			        }
			
		}
    }
}
