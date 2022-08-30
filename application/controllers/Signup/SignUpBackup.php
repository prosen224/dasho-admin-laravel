<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller 
{
    public function index()
    {

        $data=array();
        $data['error_data'] = '';
        $data['index_view'] = $this->load->view('SignUp/Sponsors',$data,true);     
        $this->load->view('Master_view',$data);
    }

    public function SponsorDetails()
    {
        $Sponsor_user_name = trim(preg_replace("/OR/",'', $this->input->post('sponsor_uname')));

        $SponsorDetails = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$Sponsor_user_name.'"'),1);
        
        if(!$SponsorDetails){

            $data['error_data'] = 'Invalid Sponsor ID';
        }
        else
        {

        $data['sponsor_name'] = $SponsorDetails->user_name;
        $this->session->set_userdata('sponsor_user_name',$SponsorDetails->user_name);
        $data['sponsor_user_name'] = $SponsorDetails->user_name;
        $data['index_view'] = $this->load->view('SignUp/Registration',$data,true);
         $this->load->view('Master_view',$data);
        }


    }

    public function Registration()
    {
    
         ini_set('memory_limit', '-1');
         $data['sponsor_user_name'] = $this->input->post('sponsor_name');
         $data['FirstName'] = $this->input->post('FirstName');
         $data['LastName']  = $this->input->post('LastName');
         $email  = trim($this->input->post('email'));
         // $verify_email = trim($this->input->post('verify_email'));
        
         $data['email'] = $email;
        
         $data['dob'] = $this->input->post('dob');
         // $data['office_phone'] = $this->input->post('office_phone');
         $data['mobile_no'] = $this->input->post('mobile_no');
         $data['street_address'] = $this->input->post('street_address');
         $data['city'] = $this->input->post('city');
         $data['postal'] = $this->input->post('postal');
         $data['user_name'] = $this->input->post('user_name');
         $data['country'] = $this->input->post('country');
         $password = $this->input->post('password');
         $confirm_password = $this->input->post('confirm_password');
         if($password == $confirm_password){
            $data['password'] = md5($password);
         }
         $data['payment_method'] =  $this->input->post('payment_method');
         $data['voucher_number'] =  $this->input->post('voucher_number');
         $data['voucher_code'] =  $this->input->post('voucher_code');
         $data['ordering'] = 1;
         
        
         $this->db->trans_start();
         $createResult = $this->db->insert('members',$data);
         $this->db->trans_complete();
         // $InsertId = $this->db->inser
         $GetUserID = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$data['email'].'"'),1);
         
         
         
        $last_inserted_child_id='';
        
        if($GetUserID)
        {   
            $PointsOverViewTable['user_id'] = $GetUserID->user_id;
            $PointsOverViewTable['point'] = '100';
            $PointsOverViewTable['remarks'] = 'welcome point';
            $PointsOverViewTable['created_at'] = date('y-m-d H:i:s');
            
            $this->db->trans_start();
            $PointsOverViewTableResult = $this->db->insert('points_overview',$PointsOverViewTable);
            $this->db->trans_complete();
            
         
            
            
            if($PointsOverViewTableResult)
            {
                    $TotalPoints = $this->QueryBuilder_model->get_info('points_overview','*',array('user_id ="' .$GetUserID->user_id.'"'),1);
                    $PointsTable['user_id'] = $TotalPoints->user_id;
                    $PointsTable['total_points'] = $TotalPoints->point;
                    $PointsTable['created_at'] = date('y-m-d H:i:s');
                    
                    $this->db->trans_start();
                    $PoinstTableResult = $this->db->insert('points',$PointsTable);
                    $this->db->trans_complete();
            
            }
            
            
            
            
            $SponsorUserName = $data['sponsor_user_name'];
            $Sponsor_userID = $this->QueryBuilder_model->get_info('members','user_id',array('user_name ="' .$SponsorUserName.'"'),1);
            $sponsor_data = $this->QueryBuilder_model->get_info('sponsors','sponsor_id,board_status',array('sponsor_id ="' . $Sponsor_userID->user_id.'"'));
            
           // echo '<pre>';
           // print_r($sponsor_data);
           // exit;
           
            $last_downline_counter=count($sponsor_data);
            $board_status='';
            
            $total_members_without_condition = $this->QueryBuilder_model->get_info('members','user_id',array());
            
            if(count($total_members_without_condition)<=15)
            {
                $board_status=1;
            }
            else if(count($sponsor_data)>0)
            {
                $last_downline=$sponsor_data[$last_downline_counter-1]->board_status;
                
                $board_status=$last_downline;
                
                $this->db->select('sponsors.*');
                $this->db->from('sponsors');
                $this->db->where('board_status',$last_downline);
                $totalMember=$this->db->get();
                $totalMembers=$totalMember->result_array();
            }
            
           if($sponsor_data)
           {
               $sales_number=count($sponsor_data)+1;
           }
           else
           {
               $sales_number=1;
           }
            $SponsorTable['sponsor_id'] = $Sponsor_userID->user_id;     
            $SponsorTable['child_id'] = $GetUserID->user_id;
            $SponsorTable['sponsor_level'] = '1';
            $SponsorTable['sales_number'] = $sales_number;
            $SponsorTable['board_status'] = $board_status;
            $this->db->trans_start();
            $user_result = $this->db->insert('sponsors',$SponsorTable);
            $last_inserted_child_id = $this->db->insert_id();
            $this->db->trans_complete();
            
            if(count($total_members_without_condition)<=14)
            {
                $board_status=1;
            }
            else
            {
                if(count($sponsor_data)>0)
                {
                    
                }
                else
                {
                   //when have no sposor id previous
                   $sponsor_data_new = $this->QueryBuilder_model->get_info('sponsors','board_status',array('child_id ="' . $Sponsor_userID->user_id.'"'),1);

                   $individual_sponsor_board_st=array();
                   $individual_sponsor_board_st['board_status']=$sponsor_data_new->board_status;
                   $this->db->where('id', $last_inserted_child_id);
                   $this->db->update('sponsors', $individual_sponsor_board_st);
                
                    //echo $GetUserID->user_id;
                    $individual_sponsor_data = $this->QueryBuilder_model->get_info('sponsors','board_status',array('child_id ="' .$GetUserID->user_id.'"'),1);
                    // print_r($individual_sponsor_data);
                    // exit;
                    $board_status=$individual_sponsor_data->board_status;
                }
            }
        }
        
         $board_status_of_last_inserted_id = $this->QueryBuilder_model->get_info('sponsors','board_status',array('id ="' .$last_inserted_child_id.'"'),1);

        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id');
        $this->db->where('sponsors.board_status',$board_status_of_last_inserted_id->board_status);
        $this->db->order_by("sales_number", "desc");
        $totalMember=$this->db->get();
        $totalMembers=$totalMember->result_array();
        
        // echo '<pre>';
        // print_r($totalMembers);
        // exit;
        
        $first_board=array();
        
        //$first_board_sponsor=array();
        
        $second_board=array();
        //$second_board_sponsor=array();
        $express_board=array();

        if(count($totalMembers)>14)
        {
            foreach($totalMembers as $index=>$row_totalMembers)
            {
               // print_r($row_totalMembers);
               // exit;
                if($index==0)
                {
                    $express_board[]=$row_totalMembers;
                }
                else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                {
                    $first_board[]=$row_totalMembers;
                    //$first_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                }
                
                else if($index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12 || $index==14)
                {
                    $second_board[]=$row_totalMembers;
                    //$second_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                }
                else
                {
                   // if($index>0)
                   // {
                   //     if(in_array($row_totalMembers['sponsor_id'],$first_board_sponsor))
                   //     {
                   //         $first_board[]=$row_totalMembers;
                   //     }
                   //     else if(in_array($row_totalMembers['sponsor_id'],$second_board_sponsor))
                   //     {
                   //         $second_board[]=$row_totalMembers;
                   //     }
                   //     else
                   //     {
                   //         $recursive_data_status=false;
                   //         $i=0;
                   //         while($recursive_data_status==false) 
                   //         {
                   //           $recusrive_sponsor_id='';
                   //           if($i==0)
                   //           {
                   //               $recursive_data= $this->QueryBuilder_model->get_info('sponsors','sponsor_id',array('child_id ="' .$row_totalMembers['sponsor_id'].'"'),1);
                   //               $recusrive_sponsor_id=$recursive_data->sponsor_id;
                   //               if(in_array($recusrive_sponsor_id,$first_board_sponsor))
                   //               {
                   //                  $first_board[]=$row_totalMembers;
                   //                  $recursive_data_status==true;
                   //               }
                   //               else if(in_array($recusrive_sponsor_id,$second_board_sponsor))
                   //               {
                   //                 $second_board[]=$row_totalMembers;
                   //                 $recursive_data_status==true;
                   //               }
                   //           }
                   //           else
                   //           {
                   //               $recursive_data= $this->QueryBuilder_model->get_info('sponsors','sponsor_id',array('child_id ="' .$recusrive_sponsor_id.'"'),1);
                   //               $recusrive_sponsor_id=$recursive_data->sponsor_id;
                   //               if(in_array($recusrive_sponsor_id,$first_board_sponsor))
                   //               {
                   //                  $first_board[]=$row_totalMembers;
                   //                  $recursive_data_status==true;
                   //               }
                   //               else if(in_array($recusrive_sponsor_id,$second_board_sponsor))
                   //               {
                   //                 $second_board[]=$row_totalMembers;
                   //                 $recursive_data_status==true;
                   //               }
                   //           }
                              
                //             }
                   //     }
                   // }
                }
            }
        }
        
       // print_r($first_board);
       // print_r($second_board);
       // print_r($express_board);
        
        $sponsor_max_value='';
        foreach($first_board as $index=>$row_first_board)
        {
            
            if($index==0)
            {
                $this->db->select_max('board_status');
                $this->db->from('sponsors');
                $this->db->where('board_type','Traveller');
                $totalMember=$this->db->get();
                $max_board_status=$totalMember->row_array();
                $sponsor_max_value=$max_board_status['board_status'];
            }
            
            $data=array();
            $data['board_status']=$sponsor_max_value+1;
            $this->db->where('id', $row_first_board['id']);
            $this->db->update('sponsors', $data);
        }
        
        $sponsor_max_value='';
        foreach($second_board as $index=>$row_second_board)
        {
            
            if($index==0)
            {
                $this->db->select_max('board_status');
                $this->db->from('sponsors');
                $this->db->where('board_type','Traveller');
                $totalMember=$this->db->get();
                $max_board_status=$totalMember->row_array();
                $sponsor_max_value=$max_board_status['board_status'];
            }
            
            $data=array();
            $data['board_status']=$sponsor_max_value+1;
            $this->db->where('id', $row_second_board['id']);
            $this->db->update('sponsors', $data);
        }
        
        $sponsor_max_value='';
        foreach($express_board as $index=>$row_express_board)
        {
            
            if($index==0)
            {
                $this->db->select_max('board_status');
                $this->db->from('sponsors');
                $this->db->where('board_type','Express');
                $totalMember=$this->db->get();
                $max_board_status=$totalMember->row_array();
                
                $this->db->select('*');
                $this->db->from('sponsors');
                $this->db->where('board_type','Express');
                $totalMember=$this->db->get();
                $express_board_member=$totalMember->row_array();
                
                if(count($max_board_status)>0)
                {
                    $sponsor_max_value=$max_board_status['board_status'];
                }
                else
                {
                    $sponsor_max_value=0;
                }
                
            }
            
            $data=array();
            if(count($max_board_status)>0 && count($express_board_member)<15)
            {
                $data['board_status']=$sponsor_max_value;
            }
            else
            {
                $data['board_status']=$sponsor_max_value+1;
            }
            
            $data['board_type']='Express';
            $this->db->where('id', $row_express_board['id']);
            $this->db->update('sponsors', $data);
        }
        
        $data=array();
        $data['error_css'] = '';
        $data['error_js'] = '';
        $data['index_view'] = $this->load->view('Login/login_view',$data,true);
        $this->load->view('Master_view',$data); 

    }



}
