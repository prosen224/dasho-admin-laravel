<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function index()
    {

        $data=array();
        $data['error_msg'] = '';
        $data['username_msg'] = '';
        $data['index_view'] = $this->load->view('Login/login_view',$data,true);     
        $this->load->view('Master_view',$data);
    }

    public function LoginVerification()
    {
     
      $CurrentDate = date('Ymd');
      $InputPasswd = trim($this->input->post('password'));
      $user_name = trim($this->input->post('user_name'));
      $InputPasswd = md5($InputPasswd);
      
      if($user_name)
      {
          $result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);
          
        if($result)
        {
            $Rank = $this->QueryBuilder_model->get_info('sponsors','*',array('child_id ="' .$result->user_id.'"'),1);
          //   echo $Rank->board_type;
          //   exit();
        
          
            $UserData=array();
            $UserData['CurrentUserID']=$result->user_id;
            $UserData['UserName']=$result->user_name;
            $UserData['CurrentUserFirstName'] = $result->FirstName;
            $UserData['CurrentUserLastName'] = $result->LastName;
            $UserData['sponsor_user_name'] = $result->sponsor_user_name;
            $UserData['email'] = $result->email;
            $UserData['dob'] = $result->dob;
            $UserData['office_phone'] = $result->office_phone;
            $UserData['mobile_no'] = $result->mobile_no;
            $UserData['street_address'] = $result->street_address;
            $UserData['city'] = $result->city;
            $UserData['postal'] = $result->postal;
            $UserData['user_name'] = $result->user_name;
            $UserData['country'] = $result->country;
            $UserData['userPassword'] = $result->password;
            $UserData['payment_method'] = $result->payment_method;
            $UserData['voucher_number'] = $result->voucher_number;
            $UserData['voucher_code'] = $result->voucher_code;
            $UserData['user_logged_in'] = '1';
            
          //   echo "<pre>";
          //   print_r($UserData);
          //   exit();
            
              if($Rank->sales_number >= '2')
          {
              $UserData['status'] = 'Qualified';
          }
          else
          {
              $UserData['status'] = 'Non-Qualified';  
          }
            
            switch($Rank->board_type)
            {
                
              // case "Traveller":
              //     // $UserData['Star'] = '*';
              //     // echo "s";
              //     // exit();
              //     $UserData['Star']  = '<i class="fa fa-graduation-cap" aria-hidden="true"></i>';
              //     break;

              case "Express":
                  // $UserData['Star'] = '**';
                  $UserData['Star']  = '<i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i>';
                  break;
              case "Third":
                  // $UserData['Star'] = '***';
                  $UserData['Star']  = '<i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i  style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i>';
                  break;
                  
              case "Fourth":
                  // $UserData['Star'] = '****';
                  $UserData['Star']  = '<i  style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i  style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i>';
                  break;
              
              case "Fifth":
                  // $UserData['Star'] = '****';
                  $UserData['Star']  = '<i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i><i style = "color:black;" class="fa fa-graduation-cap" aria-hidden="true"></i>';
                  break;
                  
              
            }

            $this->session->set_userdata($UserData);
            $DbPassword1 = $UserData['userPassword'];
            
            $DbPassword = $DbPassword1;
            if($InputPasswd != $DbPassword)
            {  
                $data['error_msg'] = 'Wrong Password';
                $data['error_msg'] = '';
                $data['username_msg'] = '';
                $data['index_view'] = $this->load->view('Login/login_view',$data,true);
                $this->load->view('Master_view',$data);

            }
          else
          {
            if($InputPasswd == $DbPassword)
            {
              
              $data=array();
              $TransactionPasswordInfo = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$UserData['CurrentUserID'].'"'),1);
              if(!$TransactionPasswordInfo)
              {
              $data['user_info'] = $result;
              $data['index_view']=$this->load->view('Dashboard/TransactionPassWordView',$data,true);


            }

            else
            {
                $data['index_view'] =  $this->load->view('Product/Product',$data,true);
                $data['user_info'] = $result;
                      $secuirtyQS_Answer = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$UserData['CurrentUserID'].'"'),1);
                      $UserData['security_question'] = $secuirtyQS_Answer->security_question;
                      $UserData['security_answer'] = $secuirtyQS_Answer->security_answer;

                      $UserRole = $this->QueryBuilder_model->get_info('user_role','*',array('user_created ="' .$UserData['CurrentUserID'].'"'),1);

                      //$data['user_role'] = $UserRole->name;
                  $this->session->set_userdata($UserData);


            }
              $data['error_css'] = '';
              $data['error_js']= '';
              // $data['index_view']  = $this->load->view('Product/Product',$data,true);
              $this->load->view('Homepage',$data);

            }

          }
        }
        else
        {
                $data['username_msg'] = "Invalid UserName!";
                $data['error_msg'] = "";
                $data['index_view'] = $this->load->view('Login/login_view',$data,true);
                $this->load->view('Master_view',$data);
        }
      }

    }

    public function Logout()
    {

        $user_data = $this->session->UserData();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'CurrentUserID' && $key != 'CurrentUserName' && $key != 'CurrentUserPassword') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        // redirect('index.php/LoginPage');
        $data['error_css'] = '';
        $data['error_js']= '';
        $this->load->view('website_view',$data);

    }

}
