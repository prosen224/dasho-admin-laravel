<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
		$data=array();
        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

		$data['user_info'] = $result;
		$data['Password_reset_success_msg'] = '';
		$data['index_view']= $this->load->view('Admin/PasswordResetForm',$data,true);
		$this->load->view('Homepage',$data);

	}
	public function passwordResetVerify()
	{
		$user_name = $this->input->post('user_name');
        $result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);
        if($result)
        {
        	$userID = $result->user_id;
        	$data['password'] = md5(123456);
        	$data['updated_by'] = $this->session->userdata('CurrentUserID');
        	
        	$this->db->trans_start();
			$Result = $this->QueryBuilder_model->update('members',$data,array('user_id ="' .$userID.'"'));
			$this->db->trans_complete();

			if($Result)
			{
				$data['Password_reset_success_msg'] = '<div class="alert alert-success alert-dismissible fade show">
								    <strong>Password  has been reset successfully.</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
				$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

				$data['user_info'] = $result;
				
				$data['index_view']= $this->load->view('Admin/PasswordResetForm',$data,true);
				$this->load->view('Homepage',$data);

			}

        }
        else
        {
        	$data['Password_reset_success_msg'] = '<div class="alert alert-danger alert-dismissible fade show">
								    <strong>Please, Enter Correct user Name!</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
		   $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

			$data['user_info'] = $result;
			
			$data['index_view']= $this->load->view('Admin/PasswordResetForm',$data,true);
			$this->load->view('Homepage',$data);

        }

	}

	public function ChangeEmailForm()
	{
		$data=array();
        $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

		$data['user_info'] = $result;
		$data['email_change_success_msg'] = '';
		$data['index_view']= $this->load->view('Admin/ChangeEmailForm',$data,true);
		$this->load->view('Homepage',$data);

	}

	public function EmailChangeVerify()
	{
		$user_name = $this->input->post('user_name');
		$user_email =  $this->input->post('email_id');
		$new_email = $this->input->post('new_email_id');
        $result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);

        $user_email_from_db = $result->email;
        if($user_email == $user_email_from_db)
        {
        	$userID = $result->user_id;
        	$data['email'] = $new_email;
        	$data['updated_by'] = $this->session->userdata('CurrentUserID');

        	$this->db->trans_start();
			$Result = $this->QueryBuilder_model->update('members',$data,array('user_id ="' .$userID.'"'));
			$this->db->trans_complete();
			if($Result)
			{
				$data['email_change_success_msg'] = '<div class="alert alert-success alert-dismissible fade show">
								    <strong>Email  has been Chnaged successfully.</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
				$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

				$data['user_info'] = $result;
				
				$data['index_view']= $this->load->view('Admin/ChangeEmailForm',$data,true);
				$this->load->view('Homepage',$data);

			}
        }
        else
        {
        	$data['email_change_success_msg'] = '<div class="alert alert-danger alert-dismissible fade show">
								    <strong>Please, Enter Correct user Name or Email ID!</strong>
								    <button type="button" class="close" data-dismiss="alert">&times;</button>
								</div>';
		    $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);

			$data['user_info'] = $result;
			
			$data['index_view']= $this->load->view('Admin/ChangeEmailForm',$data,true);
			$this->load->view('Homepage',$data);
        } 


	}
	public function UserList()
	{

		$result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
		$CurrentUserID = $this->session->userdata('CurrentUserID');
		$UserIDFromDB = $result->user_id;
		if($CurrentUserID == $UserIDFromDB)
		{
			$data['UserList'] = $this->QueryBuilder_model->get_info('members','*',array('email !="' .$this->session->userdata('email').'"'));
			$data['user_info'] = $result;
			$data['index_view']= $this->load->view('Admin/UserList',$data,true);
			$this->load->view('Homepage',$data);
		}
		

    }

    public function edit_by_id($id)
	{
		$data=array();
		$this->db->select('*');
                $this->db->from('members');
                $this->db->where('user_id',$id);
                $query_result=$this->db->get();
                $data['UserData']=$query_result->row_array();
                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';


		$data['index_view']=$this->load->view('Admin/EditUser',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function UpdateUser()
	{
		        $data=array();
                $id=$this->input->post('user_id');
                $data['FirstName']=$this->input->post('FirstName');
                $data['LastName']=$this->input->post('LastName');
                $data['office_phone']=$this->input->post('office_phone');
                $data['user_role']= $this->input->post('user_role');
                $data['updated_at'] = date("Y-m-d").','.date("h:i:sa");
                $data['updated_by'] = $this->session->userdata('CurrentUserID');

                $this->db->where('user_id',$id);
                $this->db->update('members',$data);
                $this->UserList();
	}

	public function CreateBannerPostForm()
	{
		    $data['user_info'] = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
			$data['index_view']= $this->load->view('BannerPost/BannerPostForm',$data,true);
			$this->load->view('Homepage',$data);
	}

	public function SavePost()
	{
			$PostData['post_title'] = $this->input->post('post_title');
			$PostData['post_details'] = $this->input->post('post_details');
			$PostData['post_type'] = $this->input->post('post_type');
			    
			    $this->db->select('max(ordering)');
                $this->db->from('post');
                $post_order=$this->db->get();
                
                 print_r($post_order);
                exit();

			$PostData['ordering'] = $post_order + 1;
			$PostData['created_at'] = date('Y-m-d H:i:s');
		    $PostData['created_by'] = $this->session->userdata('CurrentUserID'); 

	        $this->db->trans_start();
		    $user_result = $this->db->insert('post',$PostData);
		    $this->db->trans_complete();
		    if($user_result)
		    {
		    	echo "inserted successfully";
		    }
		    else{
		    	echo "no ";
		    }


	
	
	
	}
	
	public function ForgetPassword()
	{
	   
      $data['error_msg'] = "";
      $data['index_view'] = $this->load->view('Login/ResetPasswordView',$data,true);
      $this->load->view('Master_view',$data);
      
	}
	
	public function  ResetPassWord()
	{
	    $userName = $this->input->post('user_name');
	    $Data = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$userName.'"'),1);
	    $Email = $Data->email;
	    
	    
	   // if($Data)
	   // {
	       //  $Email = $Data->email;
	         $verifyCode = rand(100000,100);
	       //  $to_email = $Email;
    // 		 $this->load->library('email');
    // 		 $this->email->from($from_email, 'iqbal487.cse@gmail.com'); 
    // 	     $this->email->to($to_email);
    // 	     $this->email->subject('Reset Code'); 
    // 	     $this->email->message('Your Verification Code is'.$verifyCode); 
    // 	     if($this->email->send())
    // 	     {
    // 	        $data['FromEmail'] = $from_email;
    // 	     	$data['ToEmail'] = $to_email;
    // 	     	$data['OTP'] = $verifyCode;
    // 	     	$data['status'] = 0;
    // 	     	$data['remarks'] = 'Password Reset';
	   //         $this->db->trans_start();
		  //      $user_result = $this->db->insert('otp_data',$data);
		  //      $this->db->trans_complete();
		    
		    
    // 	        	$Viewdata['error_msg'] = "";
    //                 $Viewdata['index_view'] = $this->load->view('Login/EnterOTP',$Viewdata,true);
    //                 $this->load->view('Master_view',$Viewdata);
      
    // 	     }
    // 	     else{
    // 	     	echo "Email is not working";
    // 	     }
    	     
    	     //From ALpha net
    	    require_once 'PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'www.pathshalaglobal.com';
            $mail->Port = 25;
            // $mail->SMTPDebug = 3;
          //  $mail->SMTPSecure = "tls"; 
          $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                    );

            $mail->SMTPAuth = true;
            $mail->Username = 'mailer@pathshalaglobal.com';
            $mail->Password = 'n7sz@?BU%KC0';
            $mail->setFrom('mailer@pathshalaglobal.com', 'Pathshala Global,Learn Earn & Social');
            $mail->addAddress($Email);
            // $mail->Subject  = $_POST['subject'];
            $mail->Body = "Your Password Verification Code is".$verifyCode;
            if(!$mail->send()) {
                
                $data['error_msg'] = "Wrong UserName,Please Try Correct Email";
                $data['index_view'] = $this->load->view('Login/ResetPasswordView',$data,true);
                $this->load->view('Master_view',$data);
                
                
            //   echo 'Message was not sent.';
            //   echo 'Mailer error: ' . $mail->ErrorInfo;
            } 
            else 
            {
                $Email = $Data->email; 
                $data['FromEmail'] = "mailer@pathshalaglobal.com";
    	        $data['ToEmail'] = $Email;
    	        $data['userName'] = $userName;
    	     	$data['OTP'] = $verifyCode;
    	     	$data['status'] = 0;
    	     	$data['remarks'] = 'Password Reset';
	            $this->db->trans_start();
		        $user_result = $this->db->insert('otp_data',$data);
		        $this->db->trans_complete();
		        
		        $data['userName'] = $userName;
                $data['error_msg'] = "OTP has been sent to your Email,Please, Check";
                $data['index_view'] = $this->load->view('Login/EnterOTP',$data,true);
                $this->load->view('Master_view',$data);
          
            }
    
    
    	     //ending Alpha net
	    
	    
	    
	}
	
	public function EnterOTP()
	{
	     $OTPdata = $this->input->post('otp');
	     $userName = $this->input->post('userName');

	    $Data = $this->QueryBuilder_model->get_info('otp_data','*',array('OTP ="' .$OTPdata.'"','userName ="' .$userName.'"'),1);
	    if($Data)
	    {
	           
	            $data['userName'] = $userName;
	            $data['error_msg'] = "";
                $data['index_view'] = $this->load->view('Login/PasswordResetView',$data,true);
                $this->load->view('Master_view',$data);
	    }
	    else
	    {
	            $data['error_msg'] = "Invalid OTP";
                $data['index_view'] = $this->load->view('Login/PasswordResetView',$data,true);
                $this->load->view('Master_view',$data);
	    }
	    
	    
	}
	
	
	public function PasswordResetFromUser()
	{
	     $userName = $this->input->post('userName');
	    $Data = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$userName.'"'),1);
	    
	    if($Data)
	    {
	        $password = md5($this->input->post('password'));
	        $confirmPassword = md5($this->input->post('confirmPassword'));
	        
	        if($password == $confirmPassword)
	        {
	            $data['password'] = $password;
	            $this->db->set($data);
                $this->db->where('user_name', $userName);
                $this->db->update('members');
                
                $data['error_msg'] = "Password has been reset, Please Login";
                $data['index_view'] = $this->load->view('Login/ResetPasswordView',$data,true);
                $this->load->view('Master_view',$data);
                
	        }
	        else
	        {
	            $data['error_msg'] = "Update Failed";
                $data['index_view'] = $this->load->view('Login/ResetPasswordView',$data,true);
                $this->load->view('Master_view',$data);
                
	        }
	    
	    }
	    else
	    {
	            $data['error_msg'] = "Data Failed";
                $data['index_view'] = $this->load->view('Login/ResetPasswordView',$data,true);
                $this->load->view('Master_view',$data);   
	    }
	    
	
	}

}
