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
        $SponsorSales = $this->QueryBuilder_model->get_info('sponsors','*',array('sponsor_id ="' .$SponsorDetails->user_id.'"'));
       
       
        if(!$SponsorDetails){
            
            $data['error_data'] = 'Invalid Sponsor ID';
            $data['index_view'] = $this->load->view('SignUp/Sponsors',$data,true);     
            $this->load->view('Master_view',$data);
            
        }
        
        else
        {
            if(isset($SponsorSales))
            {
                //$SponsorSales = $SponsorSales->sales_number;
                if(count($SponsorSales) >= 2)
                {
                    $data['error_data'] = 'Sponsors Limit is filled Up';
                    $data['index_view'] = $this->load->view('SignUp/Sponsors',$data,true);     
                    $this->load->view('Master_view',$data);
                }
            }
            
            
            $this->db->select('*');
            $this->db->from('members');
            $this->db->order_by("user_id", "desc");
            $totalMember=$this->db->get();
            $totalMembersMNumber=$totalMember->row_array();
        
                
            $data['MembershipNumber']  = $totalMembersMNumber['MembershipNumber']-1;
            
            $data['sponsor_name'] = $SponsorDetails->user_name;
            $this->session->set_userdata('sponsor_user_name',$SponsorDetails->user_name);
            $data['sponsor_user_name'] = $SponsorDetails->user_name;
            $data['sposnor_FullName'] = $SponsorDetails->FirstName.' '.$SponsorDetails->LastName;
            $data['index_view'] = $this->load->view('SignUp/Registration',$data,true);
            $this->load->view('Master_view',$data);
        }


    }

    public function Registration()
    {

         ini_set('memory_limit', '-1');
         
         $this->db->trans_start();
         $user_name = $this->input->post('user_name');
         $user_valid_check = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);
         if($user_valid_check)
         {
            $data['error_data'] = 'User Already Exist';
            $data['index_view'] = $this->load->view('SignUp/Sponsors',$data,true);     
            $this->load->view('Master_view',$data);
         }
         
        $this->db->select('*');
        $this->db->from('members');
        $this->db->order_by("user_id", "desc");
        $totalMember=$this->db->get();
        $totalMembersMNumber=$totalMember->row_array();
        
                
         $data['sponsor_user_name'] = $this->input->post('sponsor_name');
         $data['FirstName'] = $this->input->post('FirstName');
         $data['LastName']  = $this->input->post('LastName');
         $data['MembershipNumber']  = $totalMembersMNumber['MembershipNumber']-1;
         $email  = trim($this->input->post('email'));
         // $verify_email = trim($this->input->post('verify_email'));
        
         $data['email'] = $email;
        
         $data['dob'] = $this->input->post('dob');
         // $data['office_phone'] = $this->input->post('office_phone');
         $data['mobile_no'] = $this->input->post('mobile_no');
         $data['reference_user'] = $this->input->post('reference_user');
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
         $GetUserID = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);
         
         
        $last_inserted_child_id='';
        
        if($GetUserID)
        {   
            $PointsOverViewTable['user_id'] = $GetUserID->user_id;
            $PointsOverViewTable['point'] = '1000';
            $PointsOverViewTable['remarks'] = 'welcome point';
            $PointsOverViewTable['created_at'] = date('y-m-d H:i:s');
            
            // $this->db->trans_start();
            $PointsOverViewTableResult = $this->db->insert('points_overview',$PointsOverViewTable);
            // $this->db->trans_complete();
  
            if($PointsOverViewTableResult)
            {
                $PointsTable['user_id'] =  $GetUserID->user_id;
                $PointsTable['total_points'] = '100';
                $PointsTable['created_at'] = date('y-m-d H:i:s');
                
                $GetUserCheck = $this->QueryBuilder_model->get_info('points','*',array('user_id ="' .$GetUserID->user_id.'"'),1);
                if(!$GetUserCheck)
                {
                    $PoinstTableResult = $this->db->insert('points',$PointsTable);    
                 
                }
            }
            
            $SponsorUserName = $data['sponsor_user_name'];
            $Sponsor_userID = $this->QueryBuilder_model->get_info('members','user_id',array('user_name ="' .$SponsorUserName.'"'),1);
            $sponsor_data = $this->QueryBuilder_model->get_info('sponsors','sponsor_id,board_status',array('sponsor_id ="' . $Sponsor_userID->user_id.'"'));
            
            $board_status_of_sponsor = $this->QueryBuilder_model->get_info('sponsors','board_status',array('child_id ="' . $Sponsor_userID->user_id.'"'),1);
            
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
                
                // $board_status=$last_downline;
                
                $board_status=$board_status_of_sponsor->board_status;
                
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
           
        //   echo $GetUserID->user_id;
           
        //   exit;
            
            $updated_sales_number=array();
            $updated_sales_number['sales_number'] = $sales_number;
            $this->db->where('child_id',$Sponsor_userID->user_id) ;     
            $this->db->update('sponsors',$updated_sales_number);
            
           
            $board_status_for_ordering_count=$board_status_of_sponsor->board_status;
            $this->db->select('sponsors.*');
            $this->db->from('sponsors');
            $this->db->where('board_status',$board_status_for_ordering_count);
            $totalMembers_for_count_ordering=$this->db->get();
            $totalMembers_for_count_ordering=$totalMembers_for_count_ordering->result_array();
                
                
            $SponsorTable['sponsor_id'] = $Sponsor_userID->user_id;     
            $SponsorTable['child_id'] = $GetUserID->user_id;
            $SponsorTable['sponsor_level'] = '1';
            $SponsorTable['sales_number'] = 0;
            $SponsorTable['board_status'] = $board_status;
            $SponsorTable['ordering'] = count($totalMembers_for_count_ordering)+1;
            
            $this->db->trans_start();
            $user_result = $this->db->insert('sponsors',$SponsorTable);
            $last_inserted_child_id = $this->db->insert_id();
            $this->db->trans_complete();
            
            //For Chnaging Refer Coins, poinst Data
            if($user_result)
            {
              $CoinsData['user_id'] = $Sponsor_userID->user_id;
              $CoinsData['coins'] = '100';
              $CoinsData['remarks'] = 'Refer Coins';
              $CoinsData['referer_userid'] = $GetUserID->user_id;
              $CoinsData['created_at'] = date('y-m-d H:i:s');

              $this->db->trans_start();
              $coins_overview_result = $this->db->insert('coins_overview',$CoinsData);
              $this->db->trans_complete();
              


              if($coins_overview_result)
              {
                    $ReferPointsTable['user_id'] = $Sponsor_userID->user_id;
                    $ReferPointsTable['point'] = 1000;
                    $ReferPointsTable['remarks'] = 'Refer Points';
                    $ReferPointsTable['referer_userid'] = $GetUserID->user_id;
                    $ReferPointsTable['created_at'] =   date('y-m-d H:i:s');
                
                    $this->db->trans_start();
                    $points_overview = $this->db->insert('points_overview',$ReferPointsTable);
                    $this->db->trans_complete();
            

                    if($points_overview)
                    {

                      $TotalPoints = $this->QueryBuilder_model->get_info('points','total_points',array('user_id ="' .$Sponsor_userID->user_id.'"'),1);

                      
                      if($TotalPoints)
                      {

                        $Present_Points = $TotalPoints->total_points;
                        $SponsorUser_id = $Sponsor_userID->user_id;
                        $Updated_Refer_Total_Points['total_points'] = $Present_Points + 1000;
                        $Updated_Refer_Total_Points['updated_at'] = date('y-m-d H:i:s');

                        $this->db->trans_start();
                        $this->db->where('user_id',$SponsorUser_id) ;     
                        $Updated_Refer_Total_Points_Result = $this->db->update('points',$Updated_Refer_Total_Points);
                        $this->db->trans_complete();
            


                      }
                      else
                      {

                        $Updated_Refer_Total_Points['user_id'] = $Sponsor_userID->user_id;
                        $Updated_Refer_Total_Points['total_points'] = 1000;
                        $Updated_Refer_Total_Points['updated_at'] = date('y-m-d H:i:s');

                        $this->db->trans_start();
                        $Updated_Refer_Total_Points_Result = $this->db->insert('points',$Updated_Refer_Total_Points);     
                        $this->db->trans_complete();
                        
                      }

                      
                      if($Updated_Refer_Total_Points_Result)
                      {
                        $TotalCoins = $this->QueryBuilder_model->get_info('coins','total_coins',array('user_id ="' .$Sponsor_userID->user_id.'"'),1);
                        if($TotalCoins)
                        {
                          $Present_coins = $TotalCoins->total_coins;

                          $SponsorID  = $Sponsor_userID->user_id;
                          $Updated_Refer_Total_Coints['total_coins'] = $Present_coins + 100;
                          $Updated_Refer_Total_Coints['updated_at'] = date('y-m-d H:i:s');

                            $this->db->trans_start();
                            $this->db->where('user_id',$SponsorID);
                            $Updated_Refer_Total_Coins_Result = $this->db->update('coins',$Updated_Refer_Total_Coints);
                            $this->db->trans_complete();

                           


                        }
                        else
                        {
                                  $First_Refer_Total_Coints['user_id']  = $Sponsor_userID->user_id;
                                  $First_Refer_Total_Coints['total_coins'] = 100;
                                  $First_Refer_Total_Coints['created_at'] = date('y-m-d H:i:s');
                                  $First_Refer_Total_Coints['updated_at'] = date('y-m-d H:i:s');

                                      $this->db->trans_start();
                                      $First_Refer_Total_Coints_Result = $this->db->insert('coins',$First_Refer_Total_Coints);
                                      $this->db->trans_complete();

                                     
                        }

                      }

                    }
              }


            }
            //Ending For Chnaging Refers Coins, points Data
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
        $CurrentUserID=$this->session->userdata('CurrentUserID');
        $login_user_data = $this->QueryBuilder_model->get_info('sponsors','board_status,board_type',array('child_id ="' .$CurrentUserID.'"'),1);
        $sponsor_name_bt_bs=$this->input->post('sponsor_name');
        echo $sponsor_name_bt_bs;
        
        $Sponsor_userID_bs = $this->QueryBuilder_model->get_info('members','user_id',array('user_name ="' .$sponsor_name_bt_bs.'"'),1);
        $sponsor_data_bt = $this->QueryBuilder_model->get_info('sponsors','sponsor_id,board_status,board_type',array('child_id ="' . $Sponsor_userID_bs->user_id.'"'),1);
        
        /*Points Update*/
        
        $updated_sponsors_table=array();
        $updated_sponsors_table['points'] = 100;
        $this->db->where('child_id', $last_inserted_child_id);
        $this->db->update('sponsors', $updated_sponsors_table);
        
        $updated_sponsors_table=array();
        $updated_sponsors_table['points'] = 100;
        $this->db->where('child_id', $Sponsor_userID->user_id);
        $this->db->update('sponsors', $updated_sponsors_table);
        
        /*Points Update*/
        
        $board_status=$sponsor_data_bt->board_status;
        $board_type=$sponsor_data_bt->board_type;
        
        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id','left');
        $this->db->where('sponsors.board_status',$board_status);
        $this->db->where('sponsors.board_type',$board_type);
        $this->db->order_by("sponsors.sales_number", "desc");
        $this->db->order_by("sponsors.ordering", "asc");
        
        //$this->db->limit(15);
        $common_result=$this->db->get();
        $totalMembers=$common_result->result_array();
  
        $first_board=array();
        $second_board=array();
        $express_board=array();

        /* First Board Breaking... */

        if(count($totalMembers)>14)
        {
            foreach($totalMembers as $index=>$row_totalMembers)
            {
                if($row_totalMembers['traveller_board_position']=='Top')
                {
                    $express_board[]=$row_totalMembers;
                    unset($totalMembers[$index]);
                }
            }
            $totalMembers= array_values($totalMembers);
            foreach($totalMembers as $index=>$row_totalMembers)
            {
              if($index==0 || $index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12)
                {
                    $first_board[]=$row_totalMembers;
                    //$first_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                }
                else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                {
                    $second_board[]=$row_totalMembers;
                    //$second_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                }
            }
        }
        
        // echo '<pre>';
        // print_r($first_board);
        // print_r($second_board);
        // print_r($express_board);
        
        // exit;
        
        
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
            if($index==0)
            {
              $data['board_status']=$sponsor_max_value+1;
              $data['traveller_board_position']='Top';
              $data['ordering']=$index+1;
              $this->db->where('id', $row_first_board['id']);
              $this->db->update('sponsors', $data);
            }
            else
            {
                $data['board_status']=$sponsor_max_value+1;
                $data['ordering']=$index+1;
                $this->db->where('id', $row_first_board['id']);
                $this->db->update('sponsors', $data);
            }  
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
            
            if($index==0)
            {
              $data=array();
              $data['board_status']=$sponsor_max_value+1;
              $data['traveller_board_position']='Top';
              $data['ordering']=$index+1;
              $this->db->where('id', $row_second_board['id']);
              $this->db->update('sponsors', $data);
            }
            else
            {
                $data=array();
                $data['board_status']=$sponsor_max_value+1;
                $data['ordering']=$index+1;
                $this->db->where('id', $row_second_board['id']);
                $this->db->update('sponsors', $data);
            }
        }
        
        $sponsor_max_value='';
        foreach($express_board as $index=>$row_express_board)
        {
            
            /*First Board Topper going to Second Board*/

            $data=array();
            $board_status='';
            if($index==0)
            {
                $this->db->select('*');
                $this->db->from('sponsors');
                $this->db->where('board_type','Express');
                $totalMember=$this->db->get();
                $express_board_member=$totalMember->result_array();
                
                if(!$express_board_member)
                {
                    //  echo 'wrong first';
                    // exit;
                    $board_status=0;
                    $data['board_status']=0;
                    $data['ordering']=0;
                }
                else if(count($express_board_member)<14)
                {
                    // echo 'wrong sec';
                    // exit;
                    $board_status=0;
                    $data['board_status']=0;
                    $data['ordering']=count($express_board_member)+1;
                    
                }
                else
                {
                    $this->db->select('*');
                    $this->db->from('sponsors');
                    $this->db->where('board_type','Express');
                    $this->db->where('child_id',$row_express_board['sponsor_id']);
                    $totalMember=$this->db->get();
                    $imediate_team_lead=$totalMember->row_array();
                    
                    if($imediate_team_lead)
                    {
                        $board_status=$imediate_team_lead['board_status'];
                        $data['board_status']=$imediate_team_lead['board_status'];
                    }
                    else
                    {
                        $this->db->select('*');
                        $this->db->from('sponsors');
                        $this->db->where('child_id',$row_express_board['sponsor_id']);
                        $imediate_team_lead=$this->db->get();
                        $imediate_team_lead=$imediate_team_lead->row_array();
                        
                        
                          $check_imediate_team_lead = false;
                          $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                          do
                          {
                        
                                $this->db->select('*');
                                $this->db->from('sponsors');
                                $this->db->where('child_id',$imediate_team_lead_sponsor_id);
                                $totalMember=$this->db->get();
                                $imediate_team_lead=$totalMember->row_array();
                        
                              $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                              
                              if(count($imediate_team_lead)>0 && $imediate_team_lead['board_type']=='Express')
                              {
                                  $board_status=$imediate_team_lead['board_status'];
                                  $data['board_status']=$imediate_team_lead['board_status'];
                                  $check_imediate_team_lead = true;
                              }
                          }
                          while(!$check_imediate_team_lead);
                          
                          
                        
                    }
                    
                    
                    $this->db->select('sponsors.*');
                    $this->db->from('sponsors');
                    $this->db->where('board_status',$data['board_status']);
                    $this->db->where('board_type','Express');
                    $totalMembers_for_count_express_ordering=$this->db->get();
                    $totalMembers_for_count_express_ordering=$totalMembers_for_count_express_ordering->result_array();
                    $data['ordering']=count($totalMembers_for_count_express_ordering)+1;
                    // echo $board_status;
                    // exit;
                }  
            }
            
            $second_board_entrance_t = date('Y-m-d H:i:s');
            
            //Getting Point to insert minus value
            
            $this->db->select_sum('points_overview.point');
            $this->db->from('points_overview');
            $this->db->where('points_overview.user_id',$row_express_board['child_id']);
            $updated_member_point=$this->db->get();
            $updated_member_point=$updated_member_point->row_array();
                    
            $updated_members_point=array();
            $updated_members_point['user_id']=$row_express_board['child_id'];
            $updated_members_point['point']=-$updated_member_point['point'];
            $updated_members_point['remarks']='Going To Junior Exam';
            $this->db->insert('points_overview',$updated_members_point);
            
            $updated_members_coin=array();
            $updated_members_coin['user_id']=$row_express_board['child_id'];
            $updated_members_coin['coins']=800;
            $updated_members_coin['remarks']='Scholarship Coins - Primary Class';
            $this->db->insert('coins_overview',$updated_members_coin);
            

            $data['board_type']='Express';
            $data['points']=0;
            $data['rank']='First Class';
            $data['second_board_entrance_t']=$second_board_entrance_t;
            $this->db->where('id', $row_express_board['id']);
            $this->db->update('sponsors', $data);

            /*First Board Topper going to Second Board*/

            /* Second Board Breaking... */
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id','left');
            $this->db->where('sponsors.board_status',$board_status);
            $this->db->where('sponsors.board_type','Express');
            $this->db->order_by("sponsors.points", "desc");
            $this->db->order_by("sponsors.ordering", "asc");
            $totalExpressboardMember=$this->db->get();
            $totalExpressboardMember=$totalExpressboardMember->result_array();

            $express_first_board=array();
            $express_second_board=array();
            $third_board=array();
    
            if(count($totalExpressboardMember)>14)
            {
                foreach($totalExpressboardMember as $index=>$row_totalExpressboardMember)
                {
                    if($row_totalExpressboardMember['ordering']==0)
                    {
                        $third_board[]=$row_totalExpressboardMember;
                        unset($totalExpressboardMember[$index]);
                    }
                }
                $totalExpressboardMember= array_values($totalExpressboardMember);
                foreach($totalExpressboardMember as $index=>$row_totalExpressboardMember)
                {
                  if($index==0 || $index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12)
                    {
                        $express_first_board[]=$row_totalExpressboardMember;
                        //$first_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                    }
                    else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                    {
                        $express_second_board[]=$row_totalExpressboardMember;
                        //$second_board_sponsor[$row_totalMembers['sponsor_id']]=$row_totalMembers['sponsor_id'];
                    }
                }
            }
            

            $sponsor_max_value_second='';
            foreach($express_first_board as $index=>$row_express_first_board)
            {
                
                if($index==0)
                {
                    $this->db->select_max('board_status');
                    $this->db->from('sponsors');
                    $this->db->where('board_type','Express');
                    $totalMember=$this->db->get();
                    $max_board_status_second=$totalMember->row_array();
                    $sponsor_max_value_second=$max_board_status_second['board_status'];
                }
                
                $data=array();
                if($index==0)
                {
                  $data['board_status']=$sponsor_max_value_second+1;
                  $data['traveller_board_position']='Top';
                  $data['ordering']=$index;
                  
                  $this->db->where('id', $row_express_first_board['id']);
                  $this->db->update('sponsors', $data);
                }
                else
                {
                    $data['board_status']=$sponsor_max_value_second+1;
                    $data['ordering']=$index;
                    $this->db->where('id', $row_express_first_board['id']);
                    $this->db->update('sponsors', $data);
                }  
            }
            
            $sponsor_max_value_second='';
            foreach($express_second_board as $index=>$row_express_second_board)
            {
                
                if($index==0)
                {
                    $this->db->select_max('board_status');
                    $this->db->from('sponsors');
                    $this->db->where('board_type','Express');
                    $totalMember=$this->db->get();
                    $max_board_status_second=$totalMember->row_array();
                    $sponsor_max_value_second=$max_board_status_second['board_status'];
                }
                
                if($index==0)
                {
                  $data=array();
                  $data['board_status']=$sponsor_max_value_second+1;
                  $data['traveller_board_position']='Top';
                  $data['ordering']=$index;
                  $this->db->where('id', $row_express_second_board['id']);
                  $this->db->update('sponsors', $data);
    
                }
                else
                {
                    $data=array();
                    $data['board_status']=$sponsor_max_value_second+1;
                    $data['ordering']=$index;
                    $this->db->where('id', $row_express_second_board['id']);
                    $this->db->update('sponsors', $data);
                }
            }
            
            
            $sponsor_max_value='';
            foreach($third_board as $index=>$row_third_board)
            {
                /*Second Board Topper going to Third Board*/
                $data=array();
                $board_status='';
                if($index==0)
                {
                    $this->db->select('*');
                    $this->db->from('sponsors');
                    $this->db->where('board_type','Third');
                    $totalMember=$this->db->get();
                    $third_board_member=$totalMember->result_array();

                    
                    if(!$third_board_member)
                    {
                        $board_status=0;
                        $data['board_status']=0;
                        $data['ordering']=0;
                    }
                    else if(count($third_board_member)<=15)
                    {
                        $board_status=0;
                        $data['board_status']=0;
                        $data['ordering']=count($third_board_member)+1;
                        
                    }
                    else
                    {
                        $this->db->select('*');
                        $this->db->from('sponsors');
                        $this->db->where('board_type','Third');
                        $this->db->where('child_id',$row_third_board['sponsor_id']);
                        $totalMember=$this->db->get();
                        $imediate_team_lead=$totalMember->row_array();
                        
                        if($imediate_team_lead)
                        {
                            $board_status=$imediate_team_lead['board_status'];
                            $data['board_status']=$imediate_team_lead['board_status'];
                        }
                        else
                        {
                            $this->db->select('*');
                            $this->db->from('sponsors');
                            $this->db->where('child_id',$row_third_board['sponsor_id']);
                            $imediate_team_lead=$this->db->get();
                            $imediate_team_lead=$imediate_team_lead->row_array();
                            
                            $check_imediate_team_lead = false;
                            $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                            do
                            {
                          
                                $this->db->select('*');
                                $this->db->from('sponsors');
                                $this->db->where('child_id',$imediate_team_lead_sponsor_id);
                                $totalMember=$this->db->get();
                                $imediate_team_lead=$totalMember->row_array();
                          
                                $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                                
                                if(count($imediate_team_lead)>0 && $imediate_team_lead['board_type']=='Third')
                                {
                                    $board_status=$imediate_team_lead['board_status'];
                                    $data['board_status']=$imediate_team_lead['board_status'];
                                    $check_imediate_team_lead = true;
                                }
                            }
                            while(!$check_imediate_team_lead); 
                        }
                        
                        
                        $this->db->select('sponsors.*');
                        $this->db->from('sponsors');
                        $this->db->where('board_status',$data['board_status']);
                        $this->db->where('board_type','Third');
                        $totalMembers_for_count_third_board_ordering=$this->db->get();
                        $totalMembers_for_count_third_board_ordering=$totalMembers_for_count_third_board_ordering->result_array();
                        $data['ordering']=count($totalMembers_for_count_third_board_ordering)+1;
                    }   
                }
                
                $third_board_entrance_t=date('Y-m-d H:i:s');
                
   
                
                //Getting Point to insert minus value
            
                $this->db->select_sum('points_overview.point');
                $this->db->from('points_overview');
                $this->db->where('points_overview.user_id',$row_third_board['child_id']);
                $updated_member_point=$this->db->get();
                $updated_member_point=$updated_member_point->row_array();
                        
                $updated_members_point=array();
                $updated_members_point['user_id']=$row_third_board['child_id'];
                $updated_members_point['point']=-$updated_member_point['point'];
                $updated_members_point['remarks']='Going To Senior Exam';
                $this->db->insert('points_overview',$updated_members_point);
                
                $updated_members_coin=array();
                $updated_members_coin['user_id']=$row_third_board['child_id'];
                $updated_members_coin['coins']=5000;
                $updated_members_coin['remarks']='Scholarship Coins - Junior Class ';
                $this->db->insert('coins_overview',$updated_members_coin);
            
            
                    
                $data['board_type']='Third';
                $data['points']=0;
                $data['rank']='Second Class';
                $data['third_board_entrance_t']=$third_board_entrance_t;
                $this->db->where('id', $row_third_board['id']);
                $this->db->update('sponsors', $data);

                /* Third Board Breaking... */
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id','left');
                $this->db->where('sponsors.board_status',$board_status);
                $this->db->where('sponsors.board_type','Third');
                $this->db->order_by("sponsors.points", "desc");
                $this->db->order_by("sponsors.ordering", "asc");
                $totalThirdboardMember=$this->db->get();
                $totalThirdboardMember=$totalThirdboardMember->result_array();

                $third_first_board=array();
                $third_second_board=array();
                $fourth_board=array();

                if(count($totalThirdboardMember)>14)
                {
                    foreach($totalThirdboardMember as $index=>$row_totalThirdboardMember)
                    {
                        if($row_totalThirdboardMember['ordering']==0)
                        {
                            $fourth_board[]=$row_totalThirdboardMember;
                            unset($totalThirdboardMember[$index]);
                        }
                    }
                    $totalThirdboardMember= array_values($totalThirdboardMember);
                    foreach($totalThirdboardMember as $index=>$row_totalThirdboardMember)
                    {
                      if($index==0 || $index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12)
                        {
                            $third_first_board[]=$row_totalThirdboardMember;
                        }
                        else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                        {
                            $third_second_board[]=$row_totalThirdboardMember;
                        }
                    }
                }

                $sponsor_max_value_second='';
                foreach($third_first_board as $index=>$row_third_first_board)
                {
                    
                    if($index==0)
                    {
                        $this->db->select_max('board_status');
                        $this->db->from('sponsors');
                        $this->db->where('board_type','Third');
                        $totalMember=$this->db->get();
                        $max_board_status_second=$totalMember->row_array();
                        $sponsor_max_value_second=$max_board_status_second['board_status'];
                    }
                    
                    $data=array();
                    if($index==0)
                    {
                      $data['board_status']=$sponsor_max_value_second+1;
                      $data['traveller_board_position']='Top';
                      $data['ordering']=$index;
                      
                      $this->db->where('id', $row_third_first_board['id']);
                      $this->db->update('sponsors', $data);
                    }
                    else
                    {
                        $data['board_status']=$sponsor_max_value_second+1;
                        $data['ordering']=$index;
                        $this->db->where('id', $row_third_first_board['id']);
                        $this->db->update('sponsors', $data);
                    }  
                }

                $sponsor_max_value_second='';
                foreach($third_second_board as $index=>$row_third_second_board)
                {
                    
                    if($index==0)
                    {
                      $this->db->select_max('board_status');
                      $this->db->from('sponsors');
                      $this->db->where('board_type','Third');
                      $totalMember=$this->db->get();
                      $max_board_status_second=$totalMember->row_array();
                      $sponsor_max_value_second=$max_board_status_second['board_status'];
                    }
                    
                    if($index==0)
                    {
                      $data=array();
                      $data['board_status']=$sponsor_max_value_second+1;
                      $data['traveller_board_position']='Top';
                      $data['ordering']=$index;
                      $this->db->where('id', $row_third_second_board['id']);
                      $this->db->update('sponsors', $data);
                    }
                    else
                    {
                        $data=array();
                        $data['board_status']=$sponsor_max_value_second+1;
                        $data['ordering']=$index;
                        $this->db->where('id', $row_third_second_board['id']);
                        $this->db->update('sponsors', $data);
                    }
                }

                $sponsor_max_value='';
                foreach($fourth_board as $index=>$row_fourth_board)
                {
                    /*Third Board Topper going to Fourth Board*/
                    $data=array();
                    $board_status='';
                    if($index==0)
                    {
                        $this->db->select('*');
                        $this->db->from('sponsors');
                        $this->db->where('board_type','Fourth');
                        $totalMember=$this->db->get();
                        $fourth_board_member=$totalMember->result_array();

                        
                        if(!$fourth_board_member)
                        {
                            $board_status=0;
                            $data['board_status']=0;
                            $data['ordering']=0;
                        }
                        else if(count($fourth_board_member)<=15)
                        {
                            $board_status=0;
                            $data['board_status']=0;
                            $data['ordering']=count($fourth_board_member)+1;
                            
                        }
                        else
                        {
                            $this->db->select('*');
                            $this->db->from('sponsors');
                            $this->db->where('board_type','Fourth');
                            $this->db->where('child_id',$row_fourth_board['sponsor_id']);
                            $totalMember=$this->db->get();
                            $imediate_team_lead=$totalMember->row_array();
                            
                            if($imediate_team_lead)
                            {
                                $board_status=$imediate_team_lead['board_status'];
                                $data['board_status']=$imediate_team_lead['board_status'];
                            }
                            else
                            {
                                $this->db->select('*');
                                $this->db->from('sponsors');
                                $this->db->where('child_id',$row_fourth_board['sponsor_id']);
                                $imediate_team_lead=$this->db->get();
                                $imediate_team_lead=$imediate_team_lead->row_array();
                                
                                $check_imediate_team_lead = false;
                                $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                                do
                                {
                              
                                    $this->db->select('*');
                                    $this->db->from('sponsors');
                                    $this->db->where('child_id',$imediate_team_lead_sponsor_id);
                                    $totalMember=$this->db->get();
                                    $imediate_team_lead=$totalMember->row_array();
                              
                                    $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                                    
                                    if(count($imediate_team_lead)>0 && $imediate_team_lead['board_type']=='Fourth')
                                    {
                                        $board_status=$imediate_team_lead['board_status'];
                                        $data['board_status']=$imediate_team_lead['board_status'];
                                        $check_imediate_team_lead = true;
                                    }
                                }
                                while(!$check_imediate_team_lead); 
                            }
                            
                            
                            $this->db->select('sponsors.*');
                            $this->db->from('sponsors');
                            $this->db->where('board_status',$data['board_status']);
                            $this->db->where('board_type','Fourth');
                            $totalMembers_for_count_third_board_ordering=$this->db->get();
                            $totalMembers_for_count_third_board_ordering=$totalMembers_for_count_third_board_ordering->result_array();
                            $data['ordering']=count($totalMembers_for_count_third_board_ordering)+1;
                        }   
                    }
                    
                    $fourth_board_entrance_t=date('Y-m-d H:i:s');
                    
                   
                    
                    //Getting Point to insert minus value
            
                    $this->db->select_sum('points_overview.point');
                    $this->db->from('points_overview');
                    $this->db->where('points_overview.user_id',$row_fourth_board['child_id']);
                    $updated_member_point=$this->db->get();
                    $updated_member_point=$updated_member_point->row_array();
                            
                    $updated_members_point=array();
                    $updated_members_point['user_id']=$row_fourth_board['child_id'];
                    $updated_members_point['point']=-$updated_member_point['point'];
                    $updated_members_point['remarks']='Going To Higher Exam';
                    $this->db->insert('points_overview',$updated_members_point);
                    
                    $updated_members_coin=array();
                    $updated_members_coin['user_id']=$row_fourth_board['child_id'];
                    $updated_members_coin['coins']=25000;
                    $updated_members_coin['remarks']='Scholarship Coins - Senior Class ';
                    $this->db->insert('coins_overview',$updated_members_coin);
                
                
                    $data['board_type']='Fourth';
                    $data['points']=0;
                    $data['rank']='Third Class';
                    $data['fourth_board_entrance_t']=$fourth_board_entrance_t;
                    $this->db->where('id', $row_fourth_board['id']);
                    $this->db->update('sponsors', $data);

                    /* Fourth Board Breaking*/
                    $this->db->select('sponsors.*,members.user_name');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id','left');
                    $this->db->where('sponsors.board_status',$board_status);
                    $this->db->where('sponsors.board_type','Fourth');
                    $this->db->order_by("sponsors.points", "desc");
                    $this->db->order_by("sponsors.ordering", "asc");
                    $totalFourthboardMember=$this->db->get();
                    $totalFourthboardMember=$totalFourthboardMember->result_array();

                    $fourth_first_board=array();
                    $fourth_second_board=array();
                    $fifth_board=array();

                    if(count($totalFourthboardMember)>14)
                    {
                        foreach($totalFourthboardMember as $index=>$row_totalFourthboardMember)
                        {
                            if($row_totalFourthboardMember['ordering']==0)
                            {
                                $fifth_board[]=$row_totalFourthboardMember;
                                unset($totalFourthboardMember[$index]);
                            }
                        }
                        $totalFourthboardMember= array_values($totalFourthboardMember);
                        foreach($totalFourthboardMember as $index=>$row_totalFourthboardMember)
                        {
                          if($index==0 || $index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12)
                            {
                                $fourth_first_board[]=$row_totalFourthboardMember;
                            }
                            else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                            {
                                $fourth_second_board[]=$row_totalFourthboardMember;
                            }
                        }
                    }

                    $sponsor_max_value_second='';
                    foreach($fourth_first_board as $index=>$row_fourth_first_board)
                    {
                        
                        if($index==0)
                        {
                            $this->db->select_max('board_status');
                            $this->db->from('sponsors');
                            $this->db->where('board_type','Fourth');
                            $totalMember=$this->db->get();
                            $max_board_status_second=$totalMember->row_array();
                            $sponsor_max_value_second=$max_board_status_second['board_status'];
                        }
                        
                        $data=array();
                        if($index==0)
                        {
                          $data['board_status']=$sponsor_max_value_second+1;
                          $data['traveller_board_position']='Top';
                          $data['ordering']=$index;
                          
                          $this->db->where('id', $row_fourth_first_board['id']);
                          $this->db->update('sponsors', $data);
                        }
                        else
                        {
                            $data['board_status']=$sponsor_max_value_second+1;
                            $data['ordering']=$index;
                            $this->db->where('id', $row_fourth_first_board['id']);
                            $this->db->update('sponsors', $data);
                        }  
                    }

                    $sponsor_max_value_second='';
                    foreach($fourth_second_board as $index=>$row_fourth_second_board)
                    {
                        
                        if($index==0)
                        {
                          $this->db->select_max('board_status');
                          $this->db->from('sponsors');
                          $this->db->where('board_type','Fourth');
                          $totalMember=$this->db->get();
                          $max_board_status_second=$totalMember->row_array();
                          $sponsor_max_value_second=$max_board_status_second['board_status'];
                        }
                        
                        if($index==0)
                        {
                          $data=array();
                          $data['board_status']=$sponsor_max_value_second+1;
                          $data['traveller_board_position']='Top';
                          $data['ordering']=$index;
                          $this->db->where('id', $row_fourth_second_board['id']);
                          $this->db->update('sponsors', $data);
                        }
                        else
                        {
                            $data=array();
                            $data['board_status']=$sponsor_max_value_second+1;
                            $data['ordering']=$index;
                            $this->db->where('id', $row_fourth_second_board['id']);
                            $this->db->update('sponsors', $data);
                        }
                    }

                    $sponsor_max_value='';
                    foreach($fifth_board as $index=>$row_fifth_board)
                    {
                        /*Fourth Board Topper going to Fifth Board*/
                        $data=array();
                        $board_status='';
                        if($index==0)
                        {
                            $this->db->select('*');
                            $this->db->from('sponsors');
                            $this->db->where('board_type','Fifth');
                            $totalMember=$this->db->get();
                            $fifth_board_member=$totalMember->result_array();

                            
                            if(!$fifth_board_member)
                            {
                                $board_status=0;
                                $data['board_status']=0;
                                $data['ordering']=0;
                            }
                            else if(count($fifth_board_member)<=15)
                            {
                                $board_status=0;
                                $data['board_status']=0;
                                $data['ordering']=count($fifth_board_member)+1;
                                
                            }
                            else
                            {
                                $this->db->select('*');
                                $this->db->from('sponsors');
                                $this->db->where('board_type','Fifth');
                                $this->db->where('child_id',$row_fifth_board['sponsor_id']);
                                $totalMember=$this->db->get();
                                $imediate_team_lead=$totalMember->row_array();
                                
                                if($imediate_team_lead)
                                {
                                    $board_status=$imediate_team_lead['board_status'];
                                    $data['board_status']=$imediate_team_lead['board_status'];
                                }
                                else
                                {
                                    $this->db->select('*');
                                    $this->db->from('sponsors');
                                    $this->db->where('child_id',$row_fifth_board['sponsor_id']);
                                    $imediate_team_lead=$this->db->get();
                                    $imediate_team_lead=$imediate_team_lead->row_array();
                                    
                                    $check_imediate_team_lead = false;
                                    $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                                    do
                                    {
                                  
                                        $this->db->select('*');
                                        $this->db->from('sponsors');
                                        $this->db->where('child_id',$imediate_team_lead_sponsor_id);
                                        $totalMember=$this->db->get();
                                        $imediate_team_lead=$totalMember->row_array();
                                  
                                        $imediate_team_lead_sponsor_id=$imediate_team_lead['sponsor_id'];
                                        
                                        if(count($imediate_team_lead)>0 && $imediate_team_lead['board_type']=='Fifth')
                                        {
                                            $board_status=$imediate_team_lead['board_status'];
                                            $data['board_status']=$imediate_team_lead['board_status'];
                                            $check_imediate_team_lead = true;
                                        }
                                    }
                                    while(!$check_imediate_team_lead); 
                                }
                                
                                
                                $this->db->select('sponsors.*');
                                $this->db->from('sponsors');
                                $this->db->where('board_status',$data['board_status']);
                                $this->db->where('board_type','Fifth');
                                $totalMembers_for_count_third_board_ordering=$this->db->get();
                                $totalMembers_for_count_third_board_ordering=$totalMembers_for_count_third_board_ordering->result_array();
                                $data['ordering']=count($totalMembers_for_count_third_board_ordering)+1;
                            }   
                        }
                        
                        $fifth_board_entrance_t=date('Y-m-d H:i:s');
                        
                      
                        
                        
                         //Getting Point to insert minus value
            
                        $this->db->select_sum('points_overview.point');
                        $this->db->from('points_overview');
                        $this->db->where('points_overview.user_id',$row_fifth_board['child_id']);
                        $updated_member_point=$this->db->get();
                        $updated_member_point=$updated_member_point->row_array();
                                
                        $updated_members_point=array();
                        $updated_members_point['user_id']=$row_fifth_board['child_id'];
                        $updated_members_point['point']=-$updated_member_point['point'];
                        $updated_members_point['remarks']='Going To Final Exam';
                        $this->db->insert('points_overview',$updated_members_point);
                        
                        $updated_members_coin=array();
                        $updated_members_coin['user_id']=$row_fifth_board['child_id'];
                        $updated_members_coin['coins']=250000;
                        $updated_members_coin['remarks']='Scholarship Coins - Higher Class ';
                        $this->db->insert('coins_overview',$updated_members_coin);
                    
                    
                    
                        $data['board_type']='Fifth';
                        $data['points']=0;
                        $data['rank']='Fourth Class';
                        $data['fifth_board_entrance_t']=$fifth_board_entrance_t;
                        $this->db->where('id', $row_fifth_board['id']);
                        $this->db->update('sponsors', $data);

                        /* Fifth Board Breaking will be started...*/
                        $this->db->select('sponsors.*,members.user_name');
                        $this->db->from('sponsors');
                        $this->db->join('members', 'members.user_id = sponsors.child_id','left');
                        $this->db->where('sponsors.board_status',$board_status);
                        $this->db->where('sponsors.board_type','Fifth');
                        $this->db->order_by("sponsors.points", "desc");
                        $this->db->order_by("sponsors.ordering", "asc");
                        $totalFifthboardMember=$this->db->get();
                        $totalFifthboardMember=$totalFifthboardMember->result_array();

                        $fifth_first_board=array();
                        $fifth_second_board=array();
                        $sixth_board=array();

                        if(count($totalFifthboardMember)>14)
                        {
                            foreach($totalFifthboardMember as $index=>$row_totalFifthboardMember)
                            {
                                if($row_totalFifthboardMember['ordering']==0)
                                {
                                    $sixth_board[]=$row_totalFifthboardMember;
                                    unset($totalFifthboardMember[$index]);
                                }
                            }
                            $totalFifthboardMember= array_values($totalFifthboardMember);
                            foreach($totalFifthboardMember as $index=>$row_totalFifthboardMember)
                            {
                              if($index==0 || $index==2 || $index==4 || $index==6 || $index==8 || $index==10 || $index==12)
                                {
                                    $fifth_first_board[]=$row_totalFifthboardMember;
                                }
                                else if($index==1 || $index==3 || $index==5 || $index==7 || $index==9 || $index==11 || $index==13)
                                {
                                    $fifth_second_board[]=$row_totalFifthboardMember;
                                }
                            }
                        }

                        $sponsor_max_value_second='';
                        foreach($fifth_first_board as $index=>$row_fifth_first_board)
                        {
                            
                            if($index==0)
                            {
                                $this->db->select_max('board_status');
                                $this->db->from('sponsors');
                                $this->db->where('board_type','Fifth');
                                $totalMember=$this->db->get();
                                $max_board_status_second=$totalMember->row_array();
                                $sponsor_max_value_second=$max_board_status_second['board_status'];
                            }
                            
                            $data=array();
                            if($index==0)
                            {
                              $data['board_status']=$sponsor_max_value_second+1;
                              $data['traveller_board_position']='Top';
                              $data['ordering']=$index;
                              
                              $this->db->where('id', $row_fifth_first_board['id']);
                              $this->db->update('sponsors', $data);
                            }
                            else
                            {
                                $data['board_status']=$sponsor_max_value_second+1;
                                $data['ordering']=$index;
                                $this->db->where('id', $row_fifth_first_board['id']);
                                $this->db->update('sponsors', $data);
                            }  
                        }

                        $sponsor_max_value_second='';
                        foreach($fifth_second_board as $index=>$row_fifth_second_board)
                        {
                            
                            if($index==0)
                            {
                              $this->db->select_max('board_status');
                              $this->db->from('sponsors');
                              $this->db->where('board_type','Fifth');
                              $totalMember=$this->db->get();
                              $max_board_status_second=$totalMember->row_array();
                              $sponsor_max_value_second=$max_board_status_second['board_status'];
                            }
                            
                            if($index==0)
                            {
                              $data=array();
                              $data['board_status']=$sponsor_max_value_second+1;
                              $data['traveller_board_position']='Top';
                              $data['ordering']=$index;
                              $this->db->where('id', $row_fifth_second_board['id']);
                              $this->db->update('sponsors', $data);
                            }
                            else
                            {
                                $data=array();
                                $data['board_status']=$sponsor_max_value_second+1;
                                $data['ordering']=$index;
                                $this->db->where('id', $row_fifth_second_board['id']);
                                $this->db->update('sponsors', $data);
                            }
                        }


                        //Here will define where fifth board topper will go....

                        
                    }

                    
                }

            }   
        }
        
        $this->db->trans_complete();
        
        $data=array();
        $data['error_msg'] = '';
        $data['error_js'] = '';
        $data['index_view'] = $this->load->view('Login/login_view',$data,true);
        $this->load->view('Master_view',$data); 

    }
    
     public function CheckTPPassword($TPPassword)
    {
        $newPassword = md5($TPPassword);
        $TPPassword = $this->QueryBuilder_model->get_info('transaction_password','*',array('transaction_password ="' .$newPassword.'"'),1);

        if($TPPassword)
        {
          echo $pass = "success";
        }
        else{
          echo $pass = "";
        }
      

    }
    
    public function CheckUserName($user_name)
	{
		$user_name = $this->QueryBuilder_model->get_info('members','user_name',array('user_name ="' .$user_name.'"'),1);
		if(!empty($user_name))
		{
		   $user_name= $user_name->user_name;
			echo $user_name;
		}
		else{
			echo $user_name = '';
		}
	}
    
    public function Details()
    {
        $data=array();
        $data['error_data'] = '';
        $data['index_view'] = $this->load->view('SignUp/Details',$data,true);     
        $this->load->view('Master_view',$data);
    }

}
