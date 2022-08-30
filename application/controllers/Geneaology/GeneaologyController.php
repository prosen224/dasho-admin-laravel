<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneaologyController extends CI_Controller {

	public function View()
	{
		$data=array();
        $result = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$this->session->userdata('UserName').'"'),1);

        $user_id = $result->user_id;
       
        $present_board_status = $this->db->query("SELECT * FROM sponsors s
													WHERE s.sponsor_id = $user_id
													AND  s.sales_number = ( SELECT MAX(sales_number) FROM sponsors WHERE sponsor_id  = '$user_id')")->result();
		if(count($present_board_status) != 0)
		{
         	$loggedInTableID = $present_board_status[0]->id;
			$present_board_status = $present_board_status[0]->board_type;
        	$EnrolledMembersDirectly = $this->QueryBuilder_model->get_info('sponsors','count(sponsor_id) as EnrolledMembersDirectly',array('sponsor_id ="' .$user_id.'"'),1);
        	$DirectlyEnrolledThisMonth = $this->db->query(" SELECT count(sponsor_id) as DirectlyEnrolledThisMonth FROM sponsors
															WHERE sponsor_id  = '$user_id'
															AND MONTH(created_at)  = MONTH(CURRENT_DATE())")->result();

            $DirectlyEnrolledThisMonth= $DirectlyEnrolledThisMonth[0]->DirectlyEnrolledThisMonth;
            $EnrolledMembersDirectly = $EnrolledMembersDirectly->EnrolledMembersDirectly;
		}
		else
		{
        
        $present_board_status = $this->QueryBuilder_model->get_info('sponsors','*',array('child_id ="' .$user_id.'"'),1);
        $loggedInTableID = $present_board_status->id;
        $present_board_status = $present_board_status->board_type;
        $EnrolledMembersDirectly = 0;
        $DirectlyEnrolledThisMonth = 0;
		}
		
		$EnrolledThisMonth = $this->db->query("SELECT count(sponsor_id) as EnrolledThisMonth FROM sponsors s WHERE MONTH(s.created_at) = MONTH(CURRENT_DATE()) and child_id > $user_id")->result();
		$EnrolledThisWeek = $this->db->query("SELECT count(sponsor_id) as EnrolledThisWeek from sponsors s where WEEK(s.created_at)  = WEEK(NOW()) and child_id > $user_id")->result();
		$NoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors','count(id) as NoOfMembersDownline',array('sponsor_id ="' .$user_id.'"'),1);
		
		$NoOfMembersUnderhisRefernce  =  $this->QueryBuilder_model->get_info('members','count(user_id) as NoOfMembersUnderhisRefernce',array('reference_user ="' .$this->session->userdata('UserName').'"'),1);
        
		$TotalRegisterdNoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors','count(id) as TotalRegisterdNoOfMembersDownline',array('child_id >"' .$user_id.'"'),1);
        $sales = $this->QueryBuilder_model->get_info('sponsors','*',array('child_id ="' .$user_id.'"'),1);
        
        switch($sales->rank)
        {
            case "First Class":
                $rank = "Primary Associate";
                break;
            case "Second Class":
                $rank = "Junior Associate";
                break;
            case "Third Class":
                $rank = "Senior Associate";
                break;
            case "Fourth Class":
                $rank = "Higher Associate";
                break;
            
            case "Fifth Class":
                $rank = "Final Associate";
                break;
            default:
                $rank = "Associate";
                break;
                
                
        }
        
        $data['Members_rank'] = $rank;
        
		$data['NoOfMembersDownline'] = $NoOfMembersDownline->NoOfMembersDownline;
		$data['NoOfMembersUnderhisRefernce'] = $NoOfMembersUnderhisRefernce->NoOfMembersUnderhisRefernce;
	
		
		$data['TotalRegisterdNoOfMembersDownline'] = $TotalRegisterdNoOfMembersDownline->TotalRegisterdNoOfMembersDownline;
		
		$TotalRegisterdNoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors','count(id) as TotalRegisterdNoOfMembersDownline',array('child_id >"' .$user_id.'"'),1);

		
		 /*Splitted And Non Splitted Downline ---- Direct Following ----*/
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id','left');
            $this->db->where('sponsors.sponsor_id',$user_id);
            $this->db->order_by("sponsors.board_status", "asc");
            $this->db->where('sponsors.board_type',$present_board_status);
            $common_result_downline=$this->db->get();
            $data['common_result_downline']=$common_result_downline->result_array();
                    
            $formatted_common_result_downline=array();
            $following_child_id_in_express=array();
            foreach($data['common_result_downline'] as $row_common_result_downline)
            {
                if(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))
                {
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id']=$row_common_result_downline['child_id'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status']='ns';
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type']=$row_common_result_downline['board_type'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name']=$row_common_result_downline['user_name'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status']=$row_common_result_downline['board_status'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t']=$row_common_result_downline['second_board_entrance_t'];
                    
                    $following_child_id_in_express[$row_common_result_downline['child_id']]=$row_common_result_downline['child_id'];
                }
                else if(!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']])))
                {   $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id']=$row_common_result_downline['child_id'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status']='ns';
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type']=$row_common_result_downline['board_type'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name']=$row_common_result_downline['user_name'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status']=$row_common_result_downline['board_status'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t']=$row_common_result_downline['second_board_entrance_t'];
                    
                    $following_child_id_in_express[$row_common_result_downline['child_id']]=$row_common_result_downline['child_id'];
                }
                
                
            }
        
            $next_formatted_common_result_downline=array();
            $unchanged_next_formatted_common_result_downline=array();
            
            if(isset($formatted_common_result_downline[$user_id]))
            {
                $next_formatted_common_result_downline[$user_id]=$formatted_common_result_downline[$user_id];
                
                $unchanged_next_formatted_common_result_downline[$user_id]=$formatted_common_result_downline[$user_id];
                
            }
            else
            {
                $next_formatted_common_result_downline[$user_id]=[];
                
                $unchanged_next_formatted_common_result_downline[$user_id]=[];
            }
            
            foreach($next_formatted_common_result_downline as $index=>$row_next_formatted_common_result_downline)
            {
   
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id','left');
                $this->db->order_by("sponsors.board_status", "asc");
                $this->db->where('sponsors.sponsor_id',$index);
                $next_board_following=$this->db->get();
                $next_board_following=$next_board_following->result_array();
                $leader=array();
                
                  $check_next_board_following = false;
                  $next_board_following_user_sponsor_id=array();
                  foreach($next_board_following as $row_next_board_following)
                  {
                    $next_board_following_user_sponsor_id[]=$row_next_board_following['sponsor_id'];
                  }
                  // $next_board_following_user_sponsor_id=$next_board_following['sponsor_id'];
                  $i=1;
                 
                  do
                  {

                      $leader[]=$next_board_following_user_sponsor_id;
                        
                        $olddd=$next_board_following_user_sponsor_id;

                        $i=$i+1;
                        if(count($next_board_following_user_sponsor_id)>0)
                        {
                          $this->db->select('sponsors.*,members.user_name');
                          $this->db->from('sponsors');
                          $this->db->join('members', 'members.user_id = sponsors.child_id','left');
                          $this->db->where_in('sponsor_id',$next_board_following_user_sponsor_id);
                          $this->db->order_by("sponsors.board_status", "asc");
                          $this->db->order_by("sponsors.second_board_entrance_t", "asc");
                          $next_board_following=$this->db->get();
                          $next_board_following=$next_board_following->result_array();
                        }
                        

                        $next_board_following_user_sponsor_id=array();
                        foreach($next_board_following as $row_next_board_following)
                        {
                            // echo $row_next_board_following['sponsor_id'].'<br/>';
                            $next_board_following_user_sponsor_id[]=$row_next_board_following['child_id'];
                            
                        }


                        $next_board_following_user_sponsor_id=array_diff($next_board_following_user_sponsor_id,$olddd);

                  
                        foreach($next_board_following as $next_board_following_index=>$row_fol_next_board_following)
                        {
                           
                          
                                //It was before,,
                               //else if($next_board_following[1]['board_type']=='Express' && !(in_array($next_board_following[1]['child_id'], $following_child_id_in_express)))
                               $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['child_id']=$next_board_following[$next_board_following_index]['child_id'];
                               if(count($unchanged_next_formatted_common_result_downline[$index])==1)
                               {
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status']='s';
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type']=$next_board_following[$next_board_following_index]['board_type'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name']=$next_board_following[$next_board_following_index]['user_name'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_status']=$next_board_following[$next_board_following_index]['board_status'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['second_board_entrance_t']=$next_board_following[$next_board_following_index]['second_board_entrance_t'];
                                   
                               }
                               else
                               {
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type']=$next_board_following[$next_board_following_index]['board_type'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name']=$next_board_following[$next_board_following_index]['user_name'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_status']=$next_board_following[$next_board_following_index]['board_status'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['second_board_entrance_t']=$next_board_following[$next_board_following_index]['second_board_entrance_t'];
                                   $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status']='ns';
                               }
                               
                               $following_child_id_in_express[]=$next_board_following[$next_board_following_index]['child_id'];
                            
                        }

                      if($i==500)
                      {
                          $check_next_board_following = true;
                      }

                  }
                  while(!$check_next_board_following);
                  
            }
            $next_formatted_common_result_downline=$next_formatted_common_result_downline;
            
            // echo '<pre>';
            // print_r($next_formatted_common_result_downline);
            // exit;
            
            $downline_counter=count($next_formatted_common_result_downline[$user_id]);
            // echo $downline_counter;
            // exit;
            
		$data['EnrolledThisMonth'] = $EnrolledThisMonth[0]->EnrolledThisMonth;
		$data['EnrolledThisWeek'] = $EnrolledThisWeek[0]->EnrolledThisWeek;
		$data['EnrolledMembersDirectly'] = $EnrolledMembersDirectly;
		$data['DirectlyEnrolledThisMonth'] = $DirectlyEnrolledThisMonth;
		$data['downline_counter'] = $downline_counter;
		$data['rank'] = $present_board_status;
		$data['user_info'] = $result;

        // print_r($this->session->userdata);die;
        $members_data = $this->session->userdata;
        $data["userName"] = $members_data['UserName'];
		
        $data["card_info"] = [];
        if($members_data['CurrentUserID']){
            $this->db->select('*');
            $this->db->from('membership_card');
            $this->db->where('member_id', $members_data['CurrentUserID']);
            $this->db->where('status', '1');
            $query = $this->db->get();
            $result = $query->result();

            if(count($result) > 0){
                $data["card_info"] = $result;
            }

            // print_r( $data["userName"]);die;
            // // $data["cards"] = 
        }
        // return 1;die;
		$data['index_view']= $this->load->view('Geneaology/GeneaologyView',$data,true);
		$this->load->view('Homepage',$data);

	}

	//Getting Data For Search Downline
	public function getItem()
    {

          $data = [];
          $parent_key = $this->session->userdata('CurrentUserID');
          $row = $this->db->query('SELECT id,sponsor_id, child_id from sponsors');
            
          if($row->num_rows() > 0)
          {
              $data = $this->membersTree($parent_key);
          }else{
              $data=["id"=>"0","name"=>"No Members presnt in list","text"=>"No Members is presnt in list","nodes"=>[]];
          }
   
          echo json_encode(array_values($data));
    }
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function membersTree($parent_key)
    {
        $row1 = [];
      
        $row = $this->db->query("SELECT id, sponsor_id,child_id, user_name as name FROM sponsors, members
								WHERE sponsors.sponsor_id = $parent_key
								AND sponsors.child_id = members.user_id")->result_array();
								    
        foreach($row as $key => $value)
        {
           $id = $value['id'];
           $row1[$key]['id'] = $value['id'];
           $row1[$key]['name'] = $value['name'];
           $row1[$key]['text'] = $value['name'];
           $row1[$key]['nodes'] = array_values($this->membersTree($value['id']));
        }
  
        return $row1;
    }

}
