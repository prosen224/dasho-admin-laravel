<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper("common_helper");
        $dData =[];
    }

    public function makeDownline(array $commonResult)
    {
        $earned_child_id = [];
        foreach ($commonResult as $row_common_result) {
            $earned_child_id[] = $row_common_result['child_id'];
        }

        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
        $this->db->order_by("sponsors.board_status", "asc");
        $this->db->order_by("sponsors.second_board_entrance_t", "asc");
        $this->db->where('sponsors.board_type', 'Express');
        $common_result_downline = $this->db->get(); 

        // echo "<pre>";
        // print_r($common_result_downline->result_array());die;
        
        $data['common_result_downline'] = $common_result_downline->result_array();
        $formatedDownline = [];
        foreach ($data['common_result_downline'] as $row_common_result_downline) {
            if (isset($formatedDownline[$row_common_result_downline['sponsor_id']]) && count($formatedDownline[$row_common_result_downline['sponsor_id']]) < 2) {

                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t'] = $row_common_result_downline['second_board_entrance_t'];
                // $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            } else if (!(isset($formatedDownline[$row_common_result_downline['sponsor_id']]))) {
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                $formatedDownline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t'] = $row_common_result_downline['second_board_entrance_t'];

                // $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            }
            // $formatedDownline[$row_common_result_downline['sponsor_id']][] = $row_common_result_downline;
        }
        // echo "<pre>";
        // print_r($formatedDownline);die;

        $downLine = [];
        foreach ($commonResult as $key => $value) {
            $downLine[$value['child_id']] = $value;
            // $downLine[$value['id']]['children'] = [];
        }
        // echo "<pre>";
        // print_r($downLine);die;
        foreach ($commonResult as $key => $value) {
            
        }
    }

    public function filterIfDuplicate($next_formatted_common_result_downline)
    {
        $myNext = [];
        $downArray = [];
        // check if duplicate child 
        foreach ($next_formatted_common_result_downline as $key => $v) {
            if(is_array($v)){
                foreach ($v as $k => $down) {
                    if(!in_array($k,$downArray)){
                        $myNext[$key][$k] = $down;
                    }
                    array_push($downArray , $k);
                   
                }
            }
        }

        return $myNext;
    }

    public function getSponsorsMemberIds($userName)
    {
        $ids = [];
        $this->db->select('user_id');
        $this->db->from('members');
        $this->db->where('sponsor_user_name', $userName);
        $common_result = $this->db->get();
        $commonResult = $common_result->result_array();
        if(count($commonResult) > 0){
            foreach ($commonResult as $key => $value) {
                $ids[] = $value["user_id"];
            }
        }
        return $ids;
    }

    public $dData = [];
    public $i = 1;

    public function generateRecursiveData($userName,$board_type,$parentUserName)
    { 
        // Get sponsor per user
        $directSponsorIdsArr = $this->getSponsorsMemberIds($userName);
        // Get sponsor per user
        
        if (count($directSponsorIdsArr)>0) {
            foreach ($directSponsorIdsArr as $k=>$directSponsorData) {

                $this->db->select('sponsors.*,members.user_name, members.sponsor_user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('sponsors.child_id', $directSponsorData);
                // $this->db->where('sponsors.board_type', $board_type);
                $this->db->order_by("sponsors.board_status", "asc");
                $this->db->order_by("sponsors.second_board_entrance_t", "asc");
                // $this->db->order_by("sponsors.ordering", "asc");
                $common_result_downline = $this->db->get()->row();
                
              

                // $entrancDate = $common_result_downline->second_board_entrance_t;
                if($board_type == "Express"){
                    $entrancDate = $common_result_downline->second_board_entrance_t;
                } elseif  ($board_type = "Third") {
                    $entrancDate = $common_result_downline->third_board_entrance_t;
                }else{
                    $entrancDate = $common_result_downline->fourth_board_entrance_t;
                }
                // print_r($board_type);die;
                if($common_result_downline->board_type == $board_type){
                     $status = ($common_result_downline->sponsor_user_name != $parentUserName )?'s': 'ns';
                    $this->dData[strtotime($entrancDate)] = 
                    // $this->dData[$common_result_downline->child_id] = 
                    [
                        "user_name"=>$common_result_downline->user_name,
                        "board_type"=>$board_type,
                        "child_id"=>$common_result_downline->child_id,
                        "board_status"=>$common_result_downline->board_status,
                        "status"=>$status,
                        "second_board_entrance_t"=>$common_result_downline->second_board_entrance_t,
                        "third_board_entrance_t"=>$common_result_downline->third_board_entrance_t,
                        "fourth_board_entrance_t"=>$common_result_downline->fourth_board_entrance_t,
                        "step"=>$this->i
                    ];
                }
                $this->i++;
                
                // if(count($this->dData) < 1){
                    $this->generateRecursiveData($common_result_downline->user_name,$board_type,$parentUserName);
                // }
            }
            return $this->dData;
        }
        return $this->dData;   

    }

    // generate downline start
    public function generateDownline($common_result, $board_type){
        $downlineData = [];
        // new system code start
        if(is_array($common_result)){
            foreach ($common_result as $key => $value) {
                $data=[];
                if($value['links']){
                    $arrayLinks = json_decode($value['links'], true);
                    if(is_array($arrayLinks)){
                        foreach ($arrayLinks as $k => $v) {
                            $this->db->select('sponsors.*,members.user_name, members.sponsor_user_name');
                            $this->db->from('sponsors');
                            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                            $this->db->where('sponsors.child_id', $v);
                            // $this->db->where('sponsors.board_type', $board_type);
                            $this->db->order_by("sponsors.board_status", "asc");
                            $this->db->order_by("sponsors.second_board_entrance_t", "asc");
                            // $this->db->order_by("sponsors.ordering", "asc");
                            $common_result_downline = $this->db->get()->row();
                            // $downlineData[$value['user_name']][$v['user_name']] = $v;
                            $status = ($common_result_downline->sponsor_user_name != $value["user_name"] )?'s': 'ns';
                            $data[$common_result_downline->child_id] =
                            [
                                "user_name"=>$common_result_downline->user_name,
                                "board_type"=>$board_type,
                                "child_id"=>$common_result_downline->child_id,
                                "board_status"=>$common_result_downline->board_status,
                                // "status"=>$status,
                                "second_board_entrance_t"=>$common_result_downline->second_board_entrance_t,
                                "third_board_entrance_t"=>$common_result_downline->third_board_entrance_t,
                                "fourth_board_entrance_t"=>$common_result_downline->fourth_board_entrance_t,
                                "step"=>$this->i,
                                "status"=>$status,
                            ];
                        }
                    }

                    // echo "<pre>";
                    // print_r($value);die;
                }

                $downlineData[$value["child_id"]] = $data;
            }
        
            return $downlineData;die;

            // echo "<pre>";
            // print_r($downlineData);die;

        }

        // new system code end

        // echo "<pre>";
        //  print_r(generateLink(2461, "Express"));die;
        // print_r($board_type);die;

        // if(is_array($common_result)){
        //     $downLineData = [];
        //     $i = 0;
        //     foreach ($common_result as $key => $value) {
        //         $downlineData = $this->generateRecursiveData($value["user_name"],$board_type,$value["user_name"]);
        //         $downLineData[$value["child_id"]] = $downlineData;
        //         $this->dData =[];
        //         $i++;
        //         $this->i = 1;
        //     }
        //     // short downline data with key
        //     foreach ($downLineData as $key => $value) {
        //         ksort($value);
        //         $downLineData[$key] = array_slice($value, 0, 2);
        //     }

        //     foreach ($downLineData as $key => $value) {
        //         if(count($value) > 0 ){
        //             foreach ($value as $k => $v) {
        //                 $data[$v["child_id"]] = $v;
        //             }
        //             $downLineData[$key] = $data;
        //         }
        //     }
        //     return $downLineData;
        // }else{
        //     die("No Data Found");
        // }
    }
    // generate downline end
    // express classroom view function start
    public function ClassRoomViewExpress($board_status, $board_type){

        // echo "<pre>";
        // print_r($myLinks);die;
        $this->db->select('sponsors.*,members.user_name,members.MembershipNumber, members.reference_user');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where('sponsors.board_status', $board_status);
        $this->db->where('sponsors.board_type', $board_type);
        // $this->db->where_in('sponsors.id', [554]);
        $this->db->order_by("sponsors.ordering", "asc");
        //$this->db->limit(15);
        $common_result = $this->db->get();
        $common_result = $common_result->result_array();
        // common result = 15 all members in a classroom
        $data['common_result'] = $common_result;


        $downlineData = $this->generateDownline($data['common_result'], $board_type);

        // echo "<pre>";
        // print_r($data['common_result']);


        /*Next Board Following--- This Board Topper going on which Board.*/
        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where('board_type', 'Third');
        $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
        $next_board_following = $this->db->get();
        $next_board_following = $next_board_following->row_array();

        $data['splitted_leader'] = '';

        if ($next_board_following) {
            $next_board_following_user = $next_board_following['user_name'];
            $data['next_board_following_user'] = $next_board_following_user;
            $data['splitted_leader'] = 'ns';
            $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
        } else {

            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->row_array();
            $leader = array();
            $check_next_board_following = false;
            $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];
            $i = 1;

            do {
                $leader[] = $next_board_following_user_sponsor_id;
                $i = $i + 1;
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('child_id', $next_board_following_user_sponsor_id);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->row_array();

                $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];

                if (count($next_board_following) > 0 && $next_board_following['board_type'] == 'Third') {

                    $next_board_following_user = $next_board_following['user_name'];
                    $data['next_board_following_user'] = $next_board_following_user;
                    $data['splitted_leader'] = 's';
                    $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
                    $check_next_board_following = true;
                } elseif ($i == 500) {
                    $check_next_board_following = true;
                }
            } while (!$check_next_board_following);
        }
        /*Next Board Following*/

        $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
        $this->db->join('points', 'members.user_id = points.user_id', 'left');
        $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
        $this->db->where('sponsors.board_status', $board_status);
        $this->db->where('sponsors.board_type', $board_type);
        $this->db->order_by("members.user_id", "asc");
        //$this->db->limit(15);
        $common_result_details = $this->db->get();
        $common_result_details = $common_result_details->result_array();

        $formatted_common_result = array();
        foreach ($common_result_details as $row_common_result_details) {
            $formatted_common_result[$row_common_result_details['child_id']] = $row_common_result_details;
        }
        $data['formatted_common_result'] = $formatted_common_result;


        $earned_child_id = array();
        foreach ($data['common_result'] as $row_common_result) {
            $earned_child_id[] = $row_common_result['child_id'];
        }

        // next_formatted_common_result_downline

        /*Splitted And Non Splitted downline*/
        // print_r($earned_child_id);exit;


        /*Splitted And Non Splitted downline ---- Direct Following ----*/
        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
        $this->db->order_by("sponsors.board_status", "asc");
        $this->db->order_by("sponsors.second_board_entrance_t", "asc");
        $this->db->where('sponsors.board_type', 'Express');
        $common_result_downline = $this->db->get(); 
        
        $data['common_result_downline'] = $common_result_downline->result_array();
        
        // echo "<pre>";
        // print_r($data['common_result_downline']);
        // die;

        $formatted_common_result_downline = array();
        $following_child_id_in_express = array();
        foreach ($data['common_result_downline'] as $row_common_result_downline) {
            if (isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) && count($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) < 2) {
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t'] = $row_common_result_downline['second_board_entrance_t'];
                $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            } else if (!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))) {
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['second_board_entrance_t'] = $row_common_result_downline['second_board_entrance_t'];

                $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            }
            // echo "<pre>";
            // print_r($formatted_common_result_downline);die;
        }

        // echo "<pre>";
        // print_r($formatted_common_result_downline);
        // die;

        // $this->makeDownline($data['common_result']);

        $next_formatted_common_result_downline = array();
        $unchanged_next_formatted_common_result_downline = array();
        foreach ($data['common_result'] as $row_common_result_exp) {
            if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
            } else {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
            }
        }
            // echo '<pre>';
            // print_r($data['common_result'][6]);
            // die;

        foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {
            // echo "<pre>";
            // print_r($row_next_formatted_common_result_downline);die;
            // $next_formatted_common_result_downline

            if (count($row_next_formatted_common_result_downline) < 2) {

            }
          
        }
        // echo "<pre>";
        // print_r($next_formatted_common_result_downline);
        // die;
        $myNext = $this->filterIfDuplicate($downlineData);
        // $myNext = $this->filterIfDuplicate($downlineData);
        // echo "<pre>";
        // var_dump($myNext);die;
        // print_r($next_formatted_common_result_downline);die;
        $data['next_formatted_common_result_downline'] = $myNext;
        // Down line data End here
        // echo "<pre>";
        // print_r($data['next_formatted_common_result_downline']);
        // die;


        // echo '<pre>';
        // print_r($data['next_formatted_common_result_downline']);
        // exit;
        /*Splitted And Non Splitted Downline*/


        /*Following Downline Board*/
        $this->db->select('sponsors.*,members.user_name,members_sponsor.user_name sponsor_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->join('members members_sponsor', 'members_sponsor.user_id = sponsors.sponsor_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
        // $this->db->order_by("sponsors.sales_number", "desc");
        $this->db->where('sponsors.board_type', 'Traveller');
        $this->db->where('sponsors.traveller_board_position', 'Top');
        $common_result_downline = $this->db->get();
        $data['common_result_downline'] = $common_result_downline->result_array();

        $formatted_common_result_downline = array();
        $following_child_id_in_express = array();
        foreach ($data['common_result_downline'] as $row_common_result_downline) {

            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];

            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_name'] = $row_common_result_downline['sponsor_name'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_id'] = $row_common_result_downline['sponsor_id'];

            $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
        }

        //removing row_common_result_downline['sponsor_id']....

        $next_formatted_common_result_downline = array();
        $unchanged_next_formatted_common_result_downline = array();
        foreach ($data['common_result'] as $row_common_result_exp) {
            if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
            } else {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
            }
        }

        // echo '<pre>';
        // print_r($next_formatted_common_result_downline);
        // exit;

        foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {

            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('sponsors.sponsor_id', $index);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->row_array();
            $leader = array();

            $check_next_board_following = false;
            $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];
            $i = 1;

            do {
                $leader[] = $next_board_following_user_sponsor_id;

                $i = $i + 1;
                $this->db->select('sponsors.*,members.user_name,members_sponsor.user_name sponsor_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->join('members members_sponsor', 'members_sponsor.user_id = sponsors.sponsor_id', 'left');

                $this->db->where('sponsor_id', $next_board_following_user_sponsor_id);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->row_array();

                $next_board_following_user_sponsor_id = @$next_board_following['child_id'];

                if (count($next_formatted_common_result_downline[$index]) == 2) {
                    $check_next_board_following = true;
                } else if (@$next_board_following['board_type'] == 'Traveller' && @$next_board_following['traveller_board_position'] == 'Top' && !(in_array(@$next_board_following['child_id'], $following_child_id_in_express))) {
                    $next_formatted_common_result_downline[$index][$next_board_following['child_id']]['child_id'] = $next_board_following['child_id'];
                    $next_formatted_common_result_downline[$index][$next_board_following['child_id']]['board_type'] = $next_board_following['board_type'];
                    $next_formatted_common_result_downline[$index][$next_board_following['child_id']]['user_name'] = $next_board_following['user_name'];

                    $next_formatted_common_result_downline[$index][$next_board_following['child_id']]['sponsor_name'] = $next_board_following['sponsor_name'];
                    $next_formatted_common_result_downline[$index][$next_board_following['child_id']]['sponsor_id'] = $index;

                    $following_child_id_in_express[] = $next_board_following['child_id'];
                }
                if ($i == 500) {
                    $check_next_board_following = true;
                }
            } while (!$check_next_board_following);
        }

        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        if (count($following_child_id_in_express) > 0) {
            $this->db->where_in('sponsors.sponsor_id', $following_child_id_in_express);
        }
        $this->db->order_by("sponsors.sales_number", "desc");
        $this->db->where('sponsors.board_type', 'Traveller');
        $following_child_board_exp = $this->db->get();
        $following_child_board_exp = $following_child_board_exp->result_array();

        $formatted_following_child_board_exp = array();
        foreach ($following_child_board_exp as $row_following_child_board_exp) {
            $formatted_following_child_board_exp[$row_following_child_board_exp['sponsor_id']][] = $row_following_child_board_exp;
        }

        /*Following Downline Board*/

        // echo '<pre>';
        //print_r($following_child_id_in_express);
        // print_r($common_result);

        //exit;
        $data['formatted_following_child_board_exp'] = $formatted_following_child_board_exp;
        $data['formatted_common_result_following_board'] = $next_formatted_common_result_downline;

        // echo '<pre>';
        // var_dump($data);die;
        // print_r($data['common_result']);die;

        return $data;
    }
    // express classroom view function end

    // Traveller classroom view start
    public function classRoomViewTraveller($board_status, $board_type)
    {
        // var_dump($board_status);die;
        if ($board_status == 1) {
                
            $result = $this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);
            
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('sponsors.board_status', $board_status);
            $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("sponsors.id", "asc");
            $this->db->where('members.system_user', 'Yes');
            // $this->db->limit(15);
            $board_member = $this->db->get();
            $board_member = $board_member->result_array();
            $data['board_member'] = $board_member;

            // var_dump($data['board_member']);die;

            $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id');
            $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
            $this->db->join('points', 'members.user_id = points.user_id', 'left');
            $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
            //$this->db->where('sponsors.traveller_board_position','Top');
            $this->db->order_by("sponsors.sales_number", "desc");
            $board_member_details = $this->db->get();
            $data['board_member_details'] = $board_member_details->result_array();

            $formatted_board_member_details = array();
            foreach ($data['board_member_details'] as $row_board_member_details) {
                $formatted_board_member_details[$row_board_member_details['child_id']] = $row_board_member_details;
            }
            $data['formatted_board_member_details'] = $formatted_board_member_details;


            $earned_child_id_board_member = array();
            foreach ($data['board_member'] as $row_common_result_board_member) {
                $earned_child_id_board_member[] = $row_common_result_board_member['child_id'];
            }



            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $earned_child_id_board_member);
            $this->db->order_by("sponsors.sales_number", "desc");
            $common_result_board_member = $this->db->get();
            $data['common_result_downline_board_member'] = $common_result_board_member->result_array();


            $formatted_common_result_downline_board_member = array();
            foreach ($data['common_result_downline_board_member'] as $row_common_result_downline_board_member) {
                if ($row_common_result_downline_board_member['sponsor_id'] != $row_common_result_downline_board_member['child_id']) {
                    if (isset($formatted_common_result_downline_board_member[$row_common_result_downline_board_member['sponsor_id']]) && count($formatted_common_result_downline_board_member[$row_common_result_downline_board_member['sponsor_id']]) < 2) {
                        $formatted_common_result_downline_board_member[$row_common_result_downline_board_member['sponsor_id']][] = $row_common_result_downline_board_member;
                    } else if (!(isset($formatted_common_result_downline_board_member[$row_common_result_downline_board_member['sponsor_id']]))) {
                        $formatted_common_result_downline_board_member[$row_common_result_downline_board_member['sponsor_id']][] = $row_common_result_downline_board_member;
                    }
                }
            }

            $data['formatted_common_result_downline_board_member'] = $formatted_common_result_downline_board_member;


            $this->db->select('sponsors.*,members.user_name,members.MembershipNumber');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('sponsors.board_status', $board_status);
            $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("sponsors.id", "asc");
            $this->db->where('members.system_user !=', 'Yes');
            //$this->db->limit(15);
            $common_result = $this->db->get();
            $common_result = $common_result->result_array();
            $data['common_result'] = $common_result;


            $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id');
            $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
            $this->db->join('points', 'members.user_id = points.user_id', 'left');
            $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
            //$this->db->where('sponsors.traveller_board_position','Top');
            $this->db->order_by("members.user_id", "asc");
            $this->db->where('members.system_user !=', 'Yes');
            $common_result_details = $this->db->get();
            $data['common_result_details'] = $common_result_details->result_array();

            $formatted_common_result_details = array();
            foreach ($data['common_result_details'] as $row_common_result_details) {
                $formatted_common_result_details[$row_common_result_details['child_id']] = $row_common_result_details;
            }
            $data['formatted_common_result_details'] = $formatted_common_result_details;


            $earned_child_id = array();
            foreach ($data['common_result'] as $row_common_result) {
                $earned_child_id[] = $row_common_result['child_id'];
            }

            $this->db->select('sponsors.*,members.user_name,members.MembershipNumber');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
            $this->db->where('members.system_user !=', 'Yes');
            $this->db->order_by("sponsors.id", "asc");
            $common_result = $this->db->get();
            $common_result = $common_result->result_array();
            $data['common_result_downline'] = $common_result;

            // echo '<pre>';
            // print_r($data['common_result_downline']);
            // exit;

            $formatted_common_result_downline = array();
            foreach ($data['common_result_downline'] as $row_common_result_downline) {
                if ($row_common_result_downline_board_member['sponsor_id'] != $row_common_result_downline_board_member['child_id']) {
                    if (isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) && count($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) < 2) {
                        $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][] = $row_common_result_downline;
                    } else if (!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))) {
                        $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][] = $row_common_result_downline;
                    }
                }
            }

            $data['formatted_common_result_downline'] = $formatted_common_result_downline;
        } else {

            // var_dump($board_type);die;
            $this->db->select('sponsors.*,members.user_name,members.MembershipNumber, members.reference_user, members.sponsor_user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where(['sponsors.board_status'=> $board_status, 'sponsors.board_type'=> $board_type]);
            // $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("sponsors.ordering", "asc");
            // $this->db->limit(15);
            $common_result = $this->db->get();
            $common_result = $common_result->result_array();
            // echo "<pre>";
            // print_r($common_result);die;

            $data['common_result'] = $common_result;
            
            /*Next Board Following*/
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('board_type', 'Express');
            $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->row_array();

            $data['splitted_leader'] = '';
            if ($next_board_following) {
                $next_board_following_user = $next_board_following['user_name'];
                $data['next_board_following_user'] = $next_board_following_user;

                $data['next_board_following_user_child_id'] = $next_board_following['child_id'];

                $data['splitted_leader'] = 'ns';
            } else {
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->row_array();
                
                $check_next_board_following = false;
                $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];
                $i = 1;
                do {
                    $i = $i + 1;
                    $this->db->select('sponsors.*,members.user_name');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                    $this->db->where('child_id', $next_board_following_user_sponsor_id);
                    $next_board_following = $this->db->get();
                    $next_board_following = $next_board_following->row_array();

                    $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];

                    if (count($next_board_following) > 0 && $next_board_following['board_type'] == 'Express') {
                        $next_board_following_user = $next_board_following['user_name'];
                        $data['next_board_following_user'] = $next_board_following_user;
                        $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
                        $data['splitted_leader'] = 's';
                        $check_next_board_following = true;
                    } elseif ($i == 500) {
                        $check_next_board_following = true;
                    }
                } while (!$check_next_board_following);
            }

            $earned_child_id = array();
            foreach ($data['common_result'] as $row_common_result) {
                $earned_child_id[] = $row_common_result['child_id'];
            }

            $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
            $this->db->join('points', 'members.user_id = points.user_id', 'left');
            $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
            $this->db->where('sponsors.board_status', $board_status);
            $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("members.user_id", "asc");
            //$this->db->limit(15);
            $common_result_details = $this->db->get();
            $common_result_details = $common_result_details->result_array();

            $formatted_common_result = array();
            foreach ($common_result_details as $row_common_result_details) {
                $formatted_common_result[$row_common_result_details['child_id']] = $row_common_result_details;
            }

            $data['formatted_common_result'] = $formatted_common_result;
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
            $this->db->order_by("sponsors.sales_number", "desc");
            $common_result_downline = $this->db->get();
            $data['common_result_downline'] = $common_result_downline->result_array();
            $formatted_common_result_downline = array();

            foreach ($data['common_result_downline'] as $row_common_result_downline) {
                if ($row_common_result_downline['sponsor_id'] != $row_common_result_downline['child_id']) {
                    if (isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) && count($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) < 2) {
                        $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][] = $row_common_result_downline;
                    } else if (!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))) {
                        $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][] = $row_common_result_downline;
                    }
                }
            }
            $data['formatted_common_result_downline'] = $formatted_common_result_downline;

            // echo '<pre>';
            // print_r($data);
            // exit;
            return $data;
        }
    }
    // Traveller classroom view end

    // Third board class room data start
    public function classroomViewThird($board_status, $board_type)
    {
        $this->db->select('sponsors.*,members.user_name,members.MembershipNumber');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('sponsors.board_status', $board_status);
            $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("sponsors.ordering", "asc");
            //$this->db->limit(15);
            $common_result = $this->db->get();
            $common_result = $common_result->result_array();
            $data['common_result'] = $common_result;

            $downlineData = $this->generateDownline($data['common_result'], $board_type);

            /*Next Board Following*/
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('board_type', 'Fourth');
            $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->row_array();

            $data['splitted_leader'] = '';
            if ($next_board_following) {
                $next_board_following_user = $next_board_following['user_name'];
                $data['next_board_following_user'] = $next_board_following_user;
                $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
                $data['splitted_leader'] = 'ns';
            } else {
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->row_array();


                $check_next_board_following = false;
                $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];
                $i = 1;
                do {
                    $i = $i + 1;
                    $this->db->select('sponsors.*,members.user_name');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                    $this->db->where('child_id', $next_board_following_user_sponsor_id);
                    $next_board_following = $this->db->get();
                    $next_board_following = $next_board_following->row_array();

                    $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];

                    if (count($next_board_following) > 0 && $next_board_following['board_type'] == 'Fourth') {
                        $next_board_following_user = $next_board_following['user_name'];
                        $data['next_board_following_user'] = $next_board_following_user;
                        $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
                        $data['splitted_leader'] = 's';
                        $check_next_board_following = true;
                    } elseif ($i == 500) {
                        $check_next_board_following = true;
                    }
                } while (!$check_next_board_following);
            }
            /*Next Board Following*/


            $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
            $this->db->join('points', 'members.user_id = points.user_id', 'left');
            $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
            $this->db->where('sponsors.board_status', $board_status);
            $this->db->where('sponsors.board_type', $board_type);
            $this->db->order_by("members.user_id", "asc");
            //$this->db->limit(15);
            $common_result_details = $this->db->get();
            $common_result_details = $common_result_details->result_array();

            $formatted_common_result = array();
            foreach ($common_result_details as $row_common_result_details) {
                $formatted_common_result[$row_common_result_details['child_id']] = $row_common_result_details;
            }
            $data['formatted_common_result'] = $formatted_common_result;


            $earned_child_id = array();
            foreach ($data['common_result'] as $row_common_result) {
                $earned_child_id[] = $row_common_result['child_id'];
            }

            /*Splitted And Non Splitted Downline*/
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
            // $this->db->order_by("sponsors.sales_number", "desc");
            $this->db->where('sponsors.board_type', 'Third');
            $common_result_downline = $this->db->get();
            $data['common_result_downline'] = $common_result_downline->result_array();

            $formatted_common_result_downline = array();
            $following_child_id_in_express = array();
            foreach ($data['common_result_downline'] as $row_common_result_downline) {
                if (isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) && count($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) < 2) {
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['third_board_entrance_t'] = $row_common_result_downline['third_board_entrance_t'];

                    $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
                } else if (!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))) {
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_status'] = $row_common_result_downline['board_status'];
                    $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['third_board_entrance_t'] = $row_common_result_downline['third_board_entrance_t'];

                    $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
                }
            }

            $next_formatted_common_result_downline = array();
            $unchanged_next_formatted_common_result_downline = array();
            foreach ($data['common_result'] as $row_common_result_exp) {
                if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                    $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];

                    $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
                } else {
                    $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];

                    $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
                }
            }

            foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {
                if (count($row_next_formatted_common_result_downline) < 2) {
                    $this->db->select('sponsors.*,members.user_name');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                    $this->db->where('sponsors.sponsor_id', $index);
                    $next_board_following = $this->db->get();
                    $next_board_following = $next_board_following->result_array();
                    $leader = array();

                    $check_next_board_following = false;
                    $next_board_following_user_sponsor_id = array();
                    foreach ($next_board_following as $row_next_board_following) {
                        $next_board_following_user_sponsor_id[] = $row_next_board_following['sponsor_id'];
                    }
                    $i = 1;

                    do {

                        $leader[] = $next_board_following_user_sponsor_id;

                        $olddd = $next_board_following_user_sponsor_id;

                        $i = $i + 1;
                        if (count($next_board_following_user_sponsor_id) > 0) {
                            $this->db->select('sponsors.*,members.user_name');
                            $this->db->from('sponsors');
                            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                            $this->db->where_in('sponsor_id', $next_board_following_user_sponsor_id);
                            $next_board_following = $this->db->get();
                            $next_board_following = $next_board_following->result_array();
                        }

                        $next_board_following_user_sponsor_id = array();
                        foreach ($next_board_following as $row_next_board_following) {
                            // echo $row_next_board_following['sponsor_id'].'<br/>';
                            $next_board_following_user_sponsor_id[] = $row_next_board_following['child_id'];
                        }


                        $next_board_following_user_sponsor_id = array_diff($next_board_following_user_sponsor_id, $olddd);

                        foreach ($next_board_following as $next_board_following_index => $row_fol_next_board_following) {
                            if (count($next_formatted_common_result_downline[$index]) == 2) {
                                $check_next_board_following = true;
                            } else if ($next_board_following[$next_board_following_index]['board_type'] == 'Third') {
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['child_id'] = $next_board_following[$next_board_following_index]['child_id'];
                                if (count($unchanged_next_formatted_common_result_downline[$index]) == 1) {
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status'] = 's';
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type'] = $next_board_following[$next_board_following_index]['board_type'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name'] = $next_board_following[$next_board_following_index]['user_name'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_status'] = $next_board_following[$next_board_following_index]['board_status'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['third_board_entrance_t'] = $next_board_following[$next_board_following_index]['third_board_entrance_t'];
                                } else {
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type'] = $next_board_following[$next_board_following_index]['board_type'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name'] = $next_board_following[$next_board_following_index]['user_name'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_status'] = $next_board_following[$next_board_following_index]['board_status'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['third_board_entrance_t'] = $next_board_following[$next_board_following_index]['third_board_entrance_t'];
                                    $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status'] = 'ns';
                                }

                                $following_child_id_in_express[] = $next_board_following[$next_board_following_index]['child_id'];
                            }
                        }

                        if ($i == 500) {
                            $check_next_board_following = true;
                        }
                    } while (!$check_next_board_following);
                }
            }

            $myNext = $this->filterIfDuplicate($downlineData);
            $data['next_formatted_common_result_downline'] =$myNext; //$next_formatted_common_result_downline;

            /*Splitted And Non Splitted Downline*/

            /*Following Downline Board*/
            $this->db->select('sponsors.*,members.user_name,members_sponsor.user_name sponsor_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->join('members members_sponsor', 'members_sponsor.user_id = sponsors.sponsor_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
            // $this->db->order_by("sponsors.sales_number", "desc");
            $this->db->where('sponsors.board_type', 'Express');
            $this->db->where('sponsors.ordering', 0);
            $common_result_downline = $this->db->get();
            $data['common_result_downline'] = $common_result_downline->result_array();

            $formatted_common_result_downline = array();
            $following_child_id_in_express = array();
            foreach ($data['common_result_downline'] as $row_common_result_downline) {

                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];

                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_name'] = $row_common_result_downline['sponsor_name'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_id'] = $row_common_result_downline['sponsor_id'];

                $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            }


            //removing row_common_result_downline['sponsor_id']....

            $next_formatted_common_result_downline = array();
            $unchanged_next_formatted_common_result_downline = array();
            foreach ($data['common_result'] as $row_common_result_exp) {
                if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                    $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
                    $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
                } else {
                    $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
                    $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
                }
            }


            foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {


                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('sponsors.sponsor_id', $index);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->result_array();
                $leader = array();

                $check_next_board_following = false;
                $next_board_following_user_sponsor_id = array();
                foreach ($next_board_following as $row_next_board_following) {
                    $next_board_following_user_sponsor_id[] = $row_next_board_following['sponsor_id'];
                }
                // $next_board_following_user_sponsor_id=$next_board_following['sponsor_id'];
                $i = 1;

                do {

                    $leader[] = $next_board_following_user_sponsor_id;

                    $olddd = $next_board_following_user_sponsor_id;

                    $i = $i + 1;
                    if (count($next_board_following_user_sponsor_id) > 0) {
                        $this->db->select('sponsors.*,members.user_name');
                        $this->db->from('sponsors');
                        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                        $this->db->where_in('sponsor_id', $next_board_following_user_sponsor_id);
                        $next_board_following = $this->db->get();
                        $next_board_following = $next_board_following->result_array();
                    }


                    $next_board_following_user_sponsor_id = array();
                    foreach ($next_board_following as $row_next_board_following) {
                        $next_board_following_user_sponsor_id[] = $row_next_board_following['child_id'];
                    }
                    $next_board_following_user_sponsor_id = array_diff($next_board_following_user_sponsor_id, $olddd);




                    foreach ($next_board_following as $row_next_board_following_third_b) {
                        if (count($next_formatted_common_result_downline[$index]) == 2) {
                            $check_next_board_following = true;
                        } else if ($row_next_board_following_third_b['board_type'] == 'Express' && $row_next_board_following_third_b['ordering'] == 0 && !(in_array($row_next_board_following_third_b['child_id'], $following_child_id_in_express))) {
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['child_id'] = $row_next_board_following_third_b['child_id'];
                            if (count($unchanged_next_formatted_common_result_downline[$index]) == 0) {
                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['status'] = 's';
                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['board_type'] = $row_next_board_following_third_b['board_type'];
                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['user_name'] = $row_next_board_following_third_b['user_name'];
                            } else {
                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['board_type'] = $row_next_board_following_third_b['board_type'];
                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['user_name'] = $row_next_board_following_third_b['user_name'];

                                $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['status'] = 'ns';
                            }

                            $following_child_id_in_express[] = $row_next_board_following_third_b['child_id'];
                        }
                    }


                    // echo '<pre>';
                    // echo $i.'...';
                    // print_r($next_formatted_common_result_downline);
                    if ($i == 500) {
                        $check_next_board_following = true;
                    }
                } while (!$check_next_board_following);
            }

            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where_in('sponsors.sponsor_id', $following_child_id_in_express);
            //$this->db->order_by("sponsors.sales_number", "desc");
            $this->db->where('sponsors.board_type', 'Express');
            $following_child_board_exp = $this->db->get();
            $following_child_board_exp = $following_child_board_exp->result_array();

            $formatted_following_child_board_exp = array();
            foreach ($following_child_board_exp as $row_following_child_board_exp) {
                $formatted_following_child_board_exp[$row_following_child_board_exp['sponsor_id']][] = $row_following_child_board_exp;
            }

            /*Following Downline Board*/


            $data['formatted_following_child_board_exp'] = $formatted_following_child_board_exp;
            $data['formatted_common_result_following_board'] = $next_formatted_common_result_downline;

            return $data;
    } 
    // Third board class room data  end

    // Forth board class room data start
    public function classroomViewForth($board_status, $board_type)
    {
        $this->db->select('sponsors.*,members.user_name,members.MembershipNumber');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where('sponsors.board_status', $board_status);
        $this->db->where('sponsors.board_type', $board_type);
        $this->db->order_by("sponsors.ordering", "asc");
        //$this->db->limit(15);
        $common_result = $this->db->get();
        $common_result = $common_result->result_array();
        $data['common_result'] = $common_result;

        $downlineData = $this->generateDownline($data['common_result'], $board_type);

        /*Next Board Following*/
        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where('board_type', 'Fifth');
        $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
        $next_board_following = $this->db->get();
        $next_board_following = $next_board_following->row_array();

        $data['splitted_leader'] = '';
        if ($next_board_following) {
            $next_board_following_user = $next_board_following['user_name'];
            $data['next_board_following_user'] = $next_board_following_user;
            $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
            $data['splitted_leader'] = 'ns';
        } else {
            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('child_id', $data['common_result'][0]['sponsor_id']);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->row_array();


            $check_next_board_following = false;
            $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];
            $i = 1;
            do {
                $i = $i + 1;
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('child_id', $next_board_following_user_sponsor_id);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->row_array();

                $next_board_following_user_sponsor_id = $next_board_following['sponsor_id'];

                if (count($next_board_following) > 0 && $next_board_following['board_type'] == 'Fifth') {
                    $next_board_following_user = $next_board_following['user_name'];
                    $data['next_board_following_user'] = $next_board_following_user;
                    $data['next_board_following_user_child_id'] = $next_board_following['child_id'];
                    $data['splitted_leader'] = 's';
                    $check_next_board_following = true;
                } elseif ($i == 500) {
                    $check_next_board_following = true;
                }
            } while (!$check_next_board_following);
        }
        /*Next Board Following*/


        $this->db->select('sponsors.*,members.user_name,points.total_points,coins.total_coins,sponsor_name.user_name sponsors_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->join('members sponsor_name', 'sponsor_name.user_id = sponsors.sponsor_id', 'left');
        $this->db->join('points', 'members.user_id = points.user_id', 'left');
        $this->db->join('coins', 'members.user_id = coins.user_id', 'left');
        $this->db->where('sponsors.board_status', $board_status);
        $this->db->where('sponsors.board_type', $board_type);
        $this->db->order_by("members.user_id", "asc");
        //$this->db->limit(15);
        $common_result_details = $this->db->get();
        $common_result_details = $common_result_details->result_array();

        $formatted_common_result = array();
        foreach ($common_result_details as $row_common_result_details) {
            $formatted_common_result[$row_common_result_details['child_id']] = $row_common_result_details;
        }
        $data['formatted_common_result'] = $formatted_common_result;


        $earned_child_id = array();
        foreach ($data['common_result'] as $row_common_result) {
            $earned_child_id[] = $row_common_result['child_id'];
        }

        /*Splitted And Non Splitted Downline*/
        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
        // $this->db->order_by("sponsors.sales_number", "desc");
        $this->db->where('sponsors.board_type', 'Fourth');
        $common_result_downline = $this->db->get();
        $data['common_result_downline'] = $common_result_downline->result_array();

        $formatted_common_result_downline = array();
        $following_child_id_in_express = array();
        foreach ($data['common_result_downline'] as $row_common_result_downline) {
            if (isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) && count($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]) < 2) {
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['fourth_board_entrance_t'] = $row_common_result_downline['fourth_board_entrance_t'];

                $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            } else if (!(isset($formatted_common_result_downline[$row_common_result_downline['sponsor_id']]))) {
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];
                $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['fourth_board_entrance_t'] = $row_common_result_downline['fourth_board_entrance_t'];

                $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
            }
        }

        $next_formatted_common_result_downline = array();
        $unchanged_next_formatted_common_result_downline = array();
        foreach ($data['common_result'] as $row_common_result_exp) {
            if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
            } else {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];

                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
            }
        }

        foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {
            if (count($row_next_formatted_common_result_downline) < 2) {
                $this->db->select('sponsors.*,members.user_name');
                $this->db->from('sponsors');
                $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                $this->db->where('sponsors.sponsor_id', $index);
                $next_board_following = $this->db->get();
                $next_board_following = $next_board_following->result_array();
                $leader = array();

                $check_next_board_following = false;
                $next_board_following_user_sponsor_id = array();
                foreach ($next_board_following as $row_next_board_following) {
                    $next_board_following_user_sponsor_id[] = $row_next_board_following['sponsor_id'];
                }
                // $next_board_following_user_sponsor_id=$next_board_following['sponsor_id'];
                $i = 1;

                do {

                    $leader[] = $next_board_following_user_sponsor_id;

                    $olddd = $next_board_following_user_sponsor_id;

                    $i = $i + 1;
                    if (count($next_board_following_user_sponsor_id) > 0) {
                        $this->db->select('sponsors.*,members.user_name');
                        $this->db->from('sponsors');
                        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                        $this->db->where_in('sponsor_id', $next_board_following_user_sponsor_id);
                        $next_board_following = $this->db->get();
                        $next_board_following = $next_board_following->result_array();
                    }

                    $next_board_following_user_sponsor_id = array();
                    foreach ($next_board_following as $row_next_board_following) {
                        // echo $row_next_board_following['sponsor_id'].'<br/>';
                        $next_board_following_user_sponsor_id[] = $row_next_board_following['child_id'];
                    }


                    $next_board_following_user_sponsor_id = array_diff($next_board_following_user_sponsor_id, $olddd);
                    foreach ($next_board_following as $next_board_following_index => $row_fol_next_board_following) {
                        if (count($next_formatted_common_result_downline[$index]) == 2) {
                            $check_next_board_following = true;
                        } else if ($next_board_following[$next_board_following_index]['board_type'] == 'Fourth') {
                            $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['child_id'] = $next_board_following[$next_board_following_index]['child_id'];
                            if (count($unchanged_next_formatted_common_result_downline[$index]) == 1) {
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status'] = 's';
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type'] = $next_board_following[$next_board_following_index]['board_type'];
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name'] = $next_board_following[$next_board_following_index]['user_name'];
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['fourth_board_entrance_t'] = $next_board_following[$next_board_following_index]['fourth_board_entrance_t'];
                            } else {
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['board_type'] = $next_board_following[$next_board_following_index]['board_type'];
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['user_name'] = $next_board_following[$next_board_following_index]['user_name'];
                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['fourth_board_entrance_t'] = $next_board_following[$next_board_following_index]['fourth_board_entrance_t'];

                                $next_formatted_common_result_downline[$index][$next_board_following[$next_board_following_index]['child_id']]['status'] = 'ns';
                            }

                            $following_child_id_in_express[] = $next_board_following[$next_board_following_index]['child_id'];
                        }
                    }


                    if ($i == 500) {
                        $check_next_board_following = true;
                    }
                } while (!$check_next_board_following);
            }
        }

        $myNext = $this->filterIfDuplicate($downlineData);
        $data['next_formatted_common_result_downline'] =$myNext; //$next_formatted_common_result_downline;

        /*Splitted And Non Splitted Downline*/

        /*Following Downline Board*/
        $this->db->select('sponsors.*,members.user_name,members_sponsor.user_name sponsor_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->join('members members_sponsor', 'members_sponsor.user_id = sponsors.sponsor_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $earned_child_id);
        // $this->db->order_by("sponsors.sales_number", "desc");
        $this->db->where('sponsors.board_type', 'Third');
        $this->db->where('sponsors.ordering', 0);
        $common_result_downline = $this->db->get();
        $data['common_result_downline'] = $common_result_downline->result_array();

        $formatted_common_result_downline = array();
        $following_child_id_in_express = array();
        foreach ($data['common_result_downline'] as $row_common_result_downline) {

            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['child_id'] = $row_common_result_downline['child_id'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['status'] = 'ns';
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['board_type'] = $row_common_result_downline['board_type'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['user_name'] = $row_common_result_downline['user_name'];

            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_name'] = $row_common_result_downline['sponsor_name'];
            $formatted_common_result_downline[$row_common_result_downline['sponsor_id']][$row_common_result_downline['child_id']]['sponsor_id'] = $row_common_result_downline['sponsor_id'];

            $following_child_id_in_express[$row_common_result_downline['child_id']] = $row_common_result_downline['child_id'];
        }


        //removing row_common_result_downline['sponsor_id']....

        $next_formatted_common_result_downline = array();
        $unchanged_next_formatted_common_result_downline = array();
        foreach ($data['common_result'] as $row_common_result_exp) {
            if (isset($formatted_common_result_downline[$row_common_result_exp['child_id']])) {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = $formatted_common_result_downline[$row_common_result_exp['child_id']];
            } else {
                $next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
                $unchanged_next_formatted_common_result_downline[$row_common_result_exp['child_id']] = [];
            }
        }


        foreach ($next_formatted_common_result_downline as $index => $row_next_formatted_common_result_downline) {


            $this->db->select('sponsors.*,members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
            $this->db->where('sponsors.sponsor_id', $index);
            $next_board_following = $this->db->get();
            $next_board_following = $next_board_following->result_array();
            $leader = array();

            $check_next_board_following = false;
            $next_board_following_user_sponsor_id = array();
            foreach ($next_board_following as $row_next_board_following) {
                $next_board_following_user_sponsor_id[] = $row_next_board_following['sponsor_id'];
            }
            // $next_board_following_user_sponsor_id=$next_board_following['sponsor_id'];
            $i = 1;

            do {

                $leader[] = $next_board_following_user_sponsor_id;

                $olddd = $next_board_following_user_sponsor_id;

                $i = $i + 1;
                if (count($next_board_following_user_sponsor_id) > 0) {
                    $this->db->select('sponsors.*,members.user_name');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
                    $this->db->where_in('sponsor_id', $next_board_following_user_sponsor_id);
                    $next_board_following = $this->db->get();
                    $next_board_following = $next_board_following->result_array();
                }


                $next_board_following_user_sponsor_id = array();
                foreach ($next_board_following as $row_next_board_following) {
                    $next_board_following_user_sponsor_id[] = $row_next_board_following['child_id'];
                }
                $next_board_following_user_sponsor_id = array_diff($next_board_following_user_sponsor_id, $olddd);




                foreach ($next_board_following as $row_next_board_following_third_b) {
                    if (count($next_formatted_common_result_downline[$index]) == 2) {
                        $check_next_board_following = true;
                    } else if ($row_next_board_following_third_b['board_type'] == 'Third' && $row_next_board_following_third_b['ordering'] == 0 && !(in_array($row_next_board_following_third_b['child_id'], $following_child_id_in_express))) {
                        $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['child_id'] = $row_next_board_following_third_b['child_id'];
                        if (count($unchanged_next_formatted_common_result_downline[$index]) == 0) {
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['status'] = 's';
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['board_type'] = $row_next_board_following_third_b['board_type'];
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['user_name'] = $row_next_board_following_third_b['user_name'];
                        } else {
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['board_type'] = $row_next_board_following_third_b['board_type'];
                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['user_name'] = $row_next_board_following_third_b['user_name'];

                            $next_formatted_common_result_downline[$index][$row_next_board_following_third_b['child_id']]['status'] = 'ns';
                        }

                        $following_child_id_in_express[] = $row_next_board_following_third_b['child_id'];
                    }
                }


                // echo '<pre>';
                // echo $i.'...';
                // print_r($next_formatted_common_result_downline);
                if ($i == 500) {
                    $check_next_board_following = true;
                }
            } while (!$check_next_board_following);
        }

        $this->db->select('sponsors.*,members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id', 'left');
        $this->db->where_in('sponsors.sponsor_id', $following_child_id_in_express);
        //$this->db->order_by("sponsors.sales_number", "desc");
        $this->db->where('sponsors.board_type', 'Third');
        $following_child_board_exp = $this->db->get();
        $following_child_board_exp = $following_child_board_exp->result_array();

        $formatted_following_child_board_exp = array();
        foreach ($following_child_board_exp as $row_following_child_board_exp) {
            $formatted_following_child_board_exp[$row_following_child_board_exp['sponsor_id']][] = $row_following_child_board_exp;
        }

        /*Following Downline Board*/


        $data['formatted_following_child_board_exp'] = $formatted_following_child_board_exp;
        $data['formatted_common_result_following_board'] = $next_formatted_common_result_downline;

        return $data;
    }
    // Forth board class room data end

    public function ClassRoomView()
    {

        // $currentUserDetails

        $CurrentUserID = $this->session->userdata('CurrentUserID');
        // print($CurrentUserID);die;
        $login_user_data = $this->QueryBuilder_model->get_info('sponsors', 'board_status,board_type', array('child_id ="' . $CurrentUserID . '"'), 1);
        $this->db->select('members.user_name');
        $this->db->from('sponsors');
        $this->db->join('members', 'members.user_id = sponsors.child_id');
        $this->db->where('sponsors.child_id', $CurrentUserID);
        $common_result = $this->db->get();
        $own_user_name = $common_result->row_array();
        // echo "<pre>";
        // print_r($common_result->result_array());
        //  exit;
        $board_status = $login_user_data->board_status;
        $board_type = $login_user_data->board_type;

        // print_r($board_status .' '. $board_type .' '.$CurrentUserID);
        // die;

        $data = array();

        if ($board_type == 'Traveller') {
            $data = $this->classRoomViewTraveller($board_status, $board_type);
        } else if ($board_type == 'Express') {
            $data = $this->ClassRoomViewExpress($board_status, $board_type);
            // echo "<pre>";
            // print_r($data);
        } else if ($board_type == 'Third') {
            $data = $this->classroomViewThird($board_status, $board_type);
        } else if ($board_type == 'Fourth') {
            $data = $this->classroomViewForth($board_status, $board_type);
        }
        
        if ($board_type == 'Traveller') {
            $data['own_user_name'] = $own_user_name;
            if ($board_status == 1) {
                $this->load->view('ClassRoomCommonViewBoardMember', $data);
            } else {

                $this->load->view('ClassRoomCommonView', $data);
            }
        } else if ($board_type == 'Express') {

            // echo 'done';
            // exit;
            $data['own_user_name'] = $own_user_name;
            $this->load->view('ClassRoomCommonExpressView', $data);
        } else if ($board_type == 'Third') {

            // echo 'done';
            // exit;
            $data['own_user_name'] = $own_user_name;
            $this->load->view('ClassRoomCommonThirdView', $data);
        } else if ($board_type == 'Fourth') {

            // echo 'done';
            // exit;
            $data['own_user_name'] = $own_user_name;
            $this->load->view('ClassRoomCommonFourthView', $data);
        }
    }


    public function SearchClassroomByUserID()
    {

        $user_name = $this->input->post('user_id');
        $CurrentUserData = $this->QueryBuilder_model->get_info('members', 'user_id', array('user_name ="' . $user_name . '"'), 1);
        if ($CurrentUserData) {
            $CurrentUserID = $CurrentUserData->user_id;
            $login_user_data = $this->QueryBuilder_model->get_info('sponsors', 'board_status,board_type', array('child_id ="' . $CurrentUserID . '"'), 1);

            $this->db->select('members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id');
            $this->db->where('sponsors.child_id', $CurrentUserID);
            $common_result = $this->db->get();
            $own_user_name = $common_result->row_array();

            $board_status = $login_user_data->board_status;
            $board_type = $login_user_data->board_type;
            $data = array();

            // print_r($board_type .' '.
            // $board_status); die;

            if ($board_type == 'Traveller') {
                $data = $this->classRoomViewTraveller($board_status, $board_type);
            } else if ($board_type == 'Express') {
                $data = $this->ClassRoomViewExpress($board_status, $board_type);
            } else if ($board_type == 'Third') {
                $data = $this->classroomViewThird($board_status, $board_type);
            } else if ($board_type == 'Fourth') {
                $data = $this->classroomViewForth($board_status, $board_type);
            }

            //$data['index_view']= $this->load->view('ClassRoomView',$data,true);
            if ($board_type == 'Traveller') {
                $data['own_user_name'] = $own_user_name;
                if ($board_status == 1) {

                    $this->load->view('ClassRoomCommonViewBoardMember', $data);
                } else {
                    $this->load->view('ClassRoomCommonView', $data);
                }
            } else if ($board_type == 'Express') {
                $data['own_user_name'] = $own_user_name;
                $this->load->view('ClassRoomCommonExpressView', $data);
            } else if ($board_type == 'Third') {

                $data['own_user_name'] = $own_user_name;
                $this->load->view('ClassRoomCommonThirdView', $data);
            } else if ($board_type == 'Fourth') {

                $data['own_user_name'] = $own_user_name;
                $this->load->view('ClassRoomCommonFourthView', $data);
            }
        } else {
            $data = array();
            $data['exist_user'] = 'Given UserName is not found in system';
            //$this->session->set_userdata($user_data_error);


            $result = $this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);
        //    get user data from session
            // $result = $this->session->userdata;
            
            //$this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);

            $user_id = $result->user_id;
            

            $present_board_status = $this->db->query("SELECT * FROM sponsors s
                                                        WHERE s.sponsor_id = $user_id
                                                        AND  s.sales_number = ( SELECT MAX(sales_number) FROM sponsors WHERE sponsor_id  = '$user_id')")->result();
            if (count($present_board_status) != 0) {
                $loggedInTableID = $present_board_status[0]->id;
                $present_board_status = $present_board_status[0]->board_type;
                $EnrolledMembersDirectly = $this->QueryBuilder_model->get_info('sponsors', 'count(sponsor_id) as EnrolledMembersDirectly', array('sponsor_id ="' . $user_id . '"'), 1);
                $DirectlyEnrolledThisMonth = $this->db->query(" SELECT count(sponsor_id) as DirectlyEnrolledThisMonth FROM sponsors
                                                                WHERE sponsor_id  = '$user_id'
                                                                AND MONTH(created_at)  = MONTH(CURRENT_DATE())")->result();

                $DirectlyEnrolledThisMonth = $DirectlyEnrolledThisMonth[0]->DirectlyEnrolledThisMonth;
                $EnrolledMembersDirectly = $EnrolledMembersDirectly->EnrolledMembersDirectly;

            } else {

                $present_board_status = $this->QueryBuilder_model->get_info('sponsors', '*', array('child_id ="' . $user_id . '"'), 1);
                $loggedInTableID = $present_board_status->id;
                $present_board_status = $present_board_status->board_type;
                $EnrolledMembersDirectly = 0;
                $DirectlyEnrolledThisMonth = 0;
            }

            $EnrolledThisMonth = $this->db->query("SELECT count(sponsor_id) as EnrolledThisMonth FROM sponsors s WHERE MONTH(s.created_at) = MONTH(CURRENT_DATE())")->result();

            $EnrolledThisWeek = $this->db->query("SELECT count(sponsor_id) as EnrolledThisWeek from sponsors s where WEEK(s.created_at)  = WEEK(NOW())")->result();

            $NoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors', 'count(id) as NoOfMembersDownline', array('id >"' . $loggedInTableID . '"'), 1);

            
            $data['NoOfMembersDownline'] = $NoOfMembersDownline->NoOfMembersDownline;
            $data['EnrolledThisMonth'] = $EnrolledThisMonth[0]->EnrolledThisMonth;
            $data['EnrolledThisWeek'] = $EnrolledThisWeek[0]->EnrolledThisWeek;
            $data['EnrolledMembersDirectly'] = $EnrolledMembersDirectly;
            $data['DirectlyEnrolledThisMonth'] = $DirectlyEnrolledThisMonth;
            $data['rank'] = $present_board_status;
            $data['user_info'] = $result;

            $data['index_view'] = $this->load->view('Geneaology/GeneaologyView', $data, true);

            $this->load->view('Homepage', $data);
        }
    }

    public function SearchClassroomByUserIDLink($user_id)
    {
        // echo $user_id;
        // exit;
        $CurrentUserData = $this->QueryBuilder_model->get_info('sponsors', 'board_status,board_type', array('child_id ="' . $user_id . '"'), 1);

        if ($CurrentUserData) {
            //$CurrentUserID=$CurrentUserData->user_id;
            $login_user_data = $this->QueryBuilder_model->get_info('sponsors', 'board_status,board_type', array('child_id ="' . $user_id . '"'), 1);

            $this->db->select('members.user_name');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id');
            $this->db->where('sponsors.child_id', $user_id);
            $common_result = $this->db->get();
            $own_user_name = $common_result->row_array();

            $board_status = $login_user_data->board_status;
            $board_type = $login_user_data->board_type;

            // print_r($data['own_user_name']);
            // exit;
            $data = array();

            if ($board_type == 'Traveller') {
                $data = $this->classRoomViewTraveller($board_status, $board_type);
            } else if ($board_type == 'Express') {
                $data = $this->ClassRoomViewExpress($board_status, $board_type);
            } else if ($board_type == 'Third') {
                $data = $this->classroomViewThird($board_status, $board_type);
            } else if ($board_type == 'Fourth') {
                $data = $this->classroomViewForth($board_status, $board_type);
            }

            //$data['index_view']= $this->load->view('ClassRoomView',$data,true);
            if ($board_type == 'Traveller') {
                $data['own_user_name'] = $own_user_name;
                if ($board_status == 1) {
                    $this->load->view('ClassRoomView', $data);
                } else {

                    // echo '<pre>';
                    // print_r($data);
                    // exit;
                    $this->load->view('ClassRoomCommonView', $data);
                }
            } else if ($board_type == 'Express') {
                $data['own_user_name'] = $own_user_name;
                // echo '<pre>';
                // print_r($data['common_result']);
                // exit;
                $this->load->view('ClassRoomCommonExpressView', $data);
            } else if ($board_type == 'Third') {

                // echo 'done';
                // exit;
                $data['own_user_name'] = $own_user_name;
                $this->load->view('ClassRoomCommonThirdView', $data);
            } else if ($board_type == 'Fourth') {
                $data['own_user_name'] = $own_user_name;
                $this->load->view('ClassRoomCommonFourthView', $data);
            }
        } else {
            $data = array();
            $data['exist_user'] = 'Given UserName is not found in system';
            //$this->session->set_userdata($user_data_error);


            $result = $this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);

            $user_id = $result->user_id;

            $present_board_status = $this->db->query("SELECT * FROM sponsors s
                                                        WHERE s.sponsor_id = $user_id
                                                        AND  s.sales_number = ( SELECT MAX(sales_number) FROM sponsors WHERE sponsor_id  = '$user_id')")->result();
            if (count($present_board_status) != 0) {
                $loggedInTableID = $present_board_status[0]->id;
                $present_board_status = $present_board_status[0]->board_type;
                $EnrolledMembersDirectly = $this->QueryBuilder_model->get_info('sponsors', 'count(sponsor_id) as EnrolledMembersDirectly', array('sponsor_id ="' . $user_id . '"'), 1);
                $DirectlyEnrolledThisMonth = $this->db->query(" SELECT count(sponsor_id) as DirectlyEnrolledThisMonth FROM sponsors
                                                                WHERE sponsor_id  = '$user_id'
                                                                AND MONTH(created_at)  = MONTH(CURRENT_DATE())")->result();

                $DirectlyEnrolledThisMonth = $DirectlyEnrolledThisMonth[0]->DirectlyEnrolledThisMonth;
                $EnrolledMembersDirectly = $EnrolledMembersDirectly->EnrolledMembersDirectly;
            } else {

                $present_board_status = $this->QueryBuilder_model->get_info('sponsors', '*', array('child_id ="' . $user_id . '"'), 1);
                $loggedInTableID = $present_board_status->id;
                $present_board_status = $present_board_status->board_type;
                $EnrolledMembersDirectly = 0;
                $DirectlyEnrolledThisMonth = 0;
            }

            $EnrolledThisMonth = $this->db->query("SELECT count(sponsor_id) as EnrolledThisMonth FROM sponsors s WHERE MONTH(s.created_at) = MONTH(CURRENT_DATE())")->result();

            $EnrolledThisWeek = $this->db->query("SELECT count(sponsor_id) as EnrolledThisWeek from sponsors s where WEEK(s.created_at)  = WEEK(NOW())")->result();

            $NoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors', 'count(id) as NoOfMembersDownline', array('id >"' . $loggedInTableID . '"'), 1);

            $data['NoOfMembersDownline'] = $NoOfMembersDownline->NoOfMembersDownline;
            $data['EnrolledThisMonth'] = $EnrolledThisMonth[0]->EnrolledThisMonth;
            $data['EnrolledThisWeek'] = $EnrolledThisWeek[0]->EnrolledThisWeek;
            $data['EnrolledMembersDirectly'] = $EnrolledMembersDirectly;
            $data['DirectlyEnrolledThisMonth'] = $DirectlyEnrolledThisMonth;
            $data['rank'] = $present_board_status;
            $data['user_info'] = $result;

            $data['index_view'] = $this->load->view('Geneaology/GeneaologyView', $data, true);

            $this->load->view('Homepage', $data);
        }
    }


    public function getTreeViewDataRecursive($user_id)
    {  
        $treeData = [];
        $directSponsorsData = $this->db->select('user_name,user_id')->from("members")->where("sponsor_user_name", $user_id)->get()->result();

        if (count($directSponsorsData)>0) {
            foreach ($directSponsorsData as $directSponsorData) {
                $treeData[$user_id][] = array(
                    'name'=>$directSponsorData->user_name,
                    'child'=>$this->getTreeViewDataRecursive($directSponsorData->user_name)
                );
            }
            return $treeData;
        }
        return $treeData;   

    }

    public function SearchDownlineByUserID()
    {
        // print_r($_POST['search_downline']);die;
        // print_r();die;
        $req_userid = @$_POST['user_id'];
        $members_data = $this->session->userdata;


        
        if ($req_userid == $members_data['UserName'] && @$_POST["sd"] !=1) {
        // if (!$_POST['search_downline'] !=1) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            // $this->form_validation->set_rules('user_id', 'Username', 'required');
            $this->form_validation->set_rules('user_id', 'Serach By User ID', 'required');
            if ($this->form_validation->run() == FALSE) {
                print_r(validation_errors());
                die;

                $this->load->view('GeneaologyView.php');
            } else {
                $this->load->helper('common_helper');
                $members_id = $members_data['CurrentUserID'];
                $card_number = generate_unique_card_number($members_id);
                // print_r($card_number);die;
                $expire_date = date('Y-m-d', strtotime('+1 year'));
                $find_application = $this->db->query("SELECT * FROM membership_card WHERE member_id = '$members_id' AND status ='1'")->result();
                if (count($find_application) > 0) {
                    $this->session->set_flashdata('success', 'An application has already been processed.');
                    redirect('/Geneaology');
                }

               

                // insert data for card application
                $data = array(
                    'member_id' => $members_id,
                    'card_id' => $card_number,
                    // 'Members_rank'=>$rank,
                    'status' => '1',
                    'expire_date' => $expire_date,
                    'created_at' => date('Y-m-d H:i:s')
                );

                $this->db->insert('membership_card', $data);
                $card_id = $this->db->insert_id();
                $this->session->set_flashdata('success', 'Your application submitted successfully.');

                redirect('/Geneaology');
            }
        }

       
        
        // $this->QueryBuilder_model->insert_data('card_application',$data);

        // print_r($this->session->userdata);die;

        $user_name = $this->input->post('user_id');
        //$CurrentUserData = $this->QueryBuilder_model->get_info('members','user_id',array('user_name ="' .$user_name.'"'),1);

        $this->db->select('members.user_id');
        $this->db->from('members');
        $this->db->where('members.user_name', $user_name);
        $CurrentUserData = $this->db->get();
        $CurrentUserData = $CurrentUserData->row();

        // $cUserName = 'mehedi';
        // $treeData = [];
        // $directSponser = $this->db->select('*')->from('members')->where('sponsor_user_name', $cUserName)->get()->result();
        // $i = 0;
        // if(count($directSponser)>0){
        //     $treeData[$i] = $directSponser;
        //     $childsSponser = $this->db->select('*')->from('members')->where('sponsor_user_name', $directSponser[$i]->user_name)->get()->result();
        //     if($childsSponser){
        //         $treeData[$i][$i] = $childsSponser;
        //     }
        //     $i++;
        // }

        

        // echo "<pre>";
        // echo json_encode($this->getTreeViewDataRecursive('mehedi',true));die;

        if ($CurrentUserData) {


            $CurrentUserID = $CurrentUserData->user_id;
            $this->db->select('sponsors.*,members.user_name,points.total_points');
            $this->db->from('sponsors');
            $this->db->join('members', 'members.user_id = sponsors.child_id');
            $this->db->join('points', 'members.user_id = points.user_id', 'left');
            $this->db->where('sponsors.sponsor_id', $CurrentUserID);
            $this->db->order_by("id", "asc");
            //$this->db->group_by('sponsors.child_id');
            //$this->db->limit(15);
            $common_result = $this->db->get();
            $common_result = $common_result->result_array();


            $child_id = array();
            foreach ($common_result as $row_common_result) {
                $child_id[] = $row_common_result['child_id'];
            }

            if ($child_id) {
                $recursive_child = true;
                while ($recursive_child == true) {
                    $this->db->select('sponsors.*,members.user_name,points.total_points');
                    $this->db->from('sponsors');
                    $this->db->join('members', 'members.user_id = sponsors.child_id');
                    $this->db->join('points', 'members.user_id = points.user_id', 'left');
                    $this->db->where_in('sponsors.sponsor_id', $child_id);
                    $this->db->order_by("id", "asc");
                    //$this->db->limit(15);
                    $recursive_result = $this->db->get();
                    $recursive_result = $recursive_result->result_array();

                    if ($recursive_result) {
                        $recursive_child = true;
                        $child_id = array();
                        foreach ($recursive_result as $row_recursive_result) {
                            $child_id[] = $row_recursive_result['child_id'];
                        }
                        $common_result = array_merge($common_result, $recursive_result);
                    } else {
                        $recursive_child = false;
                    }
                }
            }

            $data = array();
            $data["treeData"] = $this->getTreeViewDataRecursive($req_userid);
            // echo "<pre>";
            // print_r($data["treeData"]);die;
            $parent_result = array();
            $parent_wise_common_result = array();
            foreach ($common_result as $row_common_result) {
                $parent_wise_common_result[$row_common_result['sponsor_id']][$row_common_result['child_id']] = $row_common_result;
                $parent_result[$row_common_result['sponsor_id']] = $row_common_result;
            }

            $data['parent_wise_common_result'] = $parent_wise_common_result;
            // print_r($data['parent_wise_common_result']);die;

            $data['parent_result'] = $parent_result;
            $data['user_name'] = $user_name;
            // echo '<pre>';
            // print_r($data);
            // exit;

            $result = $this->QueryBuilder_model->get_info('members', '*', array('email ="' . $this->session->userdata('email') . '"'), 1);

            $user_id = $result->user_id;

            $present_board_status = $this->db->query("SELECT * FROM sponsors s
                                                        WHERE s.sponsor_id = $user_id
                                                        AND  s.sales_number = ( SELECT MAX(sales_number) FROM sponsors WHERE sponsor_id  = '$user_id')")->result();
            if (count($present_board_status) != 0) {
                $loggedInTableID = $present_board_status[0]->id;
                $present_board_status = $present_board_status[0]->board_type;
                $EnrolledMembersDirectly = $this->QueryBuilder_model->get_info('sponsors', 'count(sponsor_id) as EnrolledMembersDirectly', array('sponsor_id ="' . $user_id . '"'), 1);
                $DirectlyEnrolledThisMonth = $this->db->query(" SELECT count(sponsor_id) as DirectlyEnrolledThisMonth FROM sponsors
                                                                WHERE sponsor_id  = '$user_id'
                                                                AND MONTH(created_at)  = MONTH(CURRENT_DATE())")->result();

                $DirectlyEnrolledThisMonth = $DirectlyEnrolledThisMonth[0]->DirectlyEnrolledThisMonth;
                $EnrolledMembersDirectly = $EnrolledMembersDirectly->EnrolledMembersDirectly;
            } else {

                $present_board_status = $this->QueryBuilder_model->get_info('sponsors', '*', array('child_id ="' . $user_id . '"'), 1);
                $loggedInTableID = $present_board_status->id;
                $present_board_status = $present_board_status->board_type;
                $EnrolledMembersDirectly = 0;
                $DirectlyEnrolledThisMonth = 0;
            }

            $EnrolledThisMonth = $this->db->query("SELECT count(sponsor_id) as EnrolledThisMonth FROM sponsors s WHERE MONTH(s.created_at) = MONTH(CURRENT_DATE())")->result();

            $EnrolledThisWeek = $this->db->query("SELECT count(sponsor_id) as EnrolledThisWeek from sponsors s where WEEK(s.created_at)  = WEEK(NOW())")->result();

            $NoOfMembersDownline = $this->QueryBuilder_model->get_info('sponsors', 'count(id) as NoOfMembersDownline', array('id >"' . $loggedInTableID . '"'), 1);

            $data['NoOfMembersDownline'] = $NoOfMembersDownline->NoOfMembersDownline;
            $data['EnrolledThisMonth'] = $EnrolledThisMonth[0]->EnrolledThisMonth;
            $data['EnrolledThisWeek'] = $EnrolledThisWeek[0]->EnrolledThisWeek;
            $data['EnrolledMembersDirectly'] = $EnrolledMembersDirectly;
            $data['DirectlyEnrolledThisMonth'] = $DirectlyEnrolledThisMonth;
            $data['rank'] = $present_board_status;
            $data['user_info'] = $result;
            $data["currentUserName"] = $members_data['UserName'];

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
            // parent_wise_common_result
            $sales = $this->QueryBuilder_model->get_info('sponsors','*',array('child_id ="' .$members_data['CurrentUserID'].'"'),1);

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

            $next_formatted_common_result_downline=array();
            $unchanged_next_formatted_common_result_downline=array();

            // $user_id = $result->user_id;
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





            
            $data['Members_rank'] = $rank;
            $data['downline_counter'] = $downline_counter;

            $NoOfMembersUnderhisRefernce  =  $this->QueryBuilder_model->get_info('members','count(user_id) as NoOfMembersUnderhisRefernce',array('reference_user ="' .$this->session->userdata('UserName').'"'),1);
                $rank = "Primary Associate";
		    $data['NoOfMembersUnderhisRefernce'] = $NoOfMembersUnderhisRefernce->NoOfMembersUnderhisRefernce;

            $data['index_view'] = $this->load->view('Geneaology/GeneaologyDownlineView', $data, true);




            $this->load->view('Homepage', $data);

            //echo $this->load->view('Geneaology/Downlineview','',true);
        }
    }

    //  public function get_sub_modules_tasks_tree($module,$prefix,&$tree,$children)
    //     {
    //         $tree[]=array('prefix'=>$prefix,'module_task'=>$module);
    //         $subs=array();
    //         if(isset($children[$module['id']]))
    //         {
    //             $subs=$children[$module['id']]['modules'];
    //         }
    //         if(sizeof($subs)>0)
    //         {
    //             foreach($subs as $sub)
    //             {
    //                 $this->get_sub_modules_tasks_tree($sub,$prefix.'- ',$tree,$children);
    //             }
    //         }
    //     }
}
