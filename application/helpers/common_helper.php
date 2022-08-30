<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists("generate_unique_card_number")) {
    function generate_unique_card_number($userid)
    {

        $current_year = date("Y");
        $current_year = substr($current_year, -2);
        $current_month = date("m");
        $current_timestamp = time();
        return $current_year . $current_month . $current_timestamp . $userid;
    }
}

if (!function_exists("get_available_coin")) {
    function get_available_coin($userid, $data = false)
    {
        $CI = &get_instance();
        $coinDetails =  $CI->db->select("*")->from('coins_overview')->where('user_id', $userid)->or_where('referer_userid', $userid)->get()->result();
        if ($data) {
            return $coinDetails;
        }
        $total_coin = 0;
        foreach ($coinDetails as $key => $value) {
            if ($value->referer_userid != $userid || $value->status != 1) {
                if ($value->referer_userid != $userid) {
                    $total_coin = $total_coin + $value->coins;
                } else {
                    $total_coin = $total_coin - $value->coins;
                }
            }
        }
        return $total_coin;
    }
}

if (!function_exists("get_available_point")) {
    function get_available_point($userid, $data = false)
    {
        $totapoint = 0;
        $CI = &get_instance();
        $coinDetails =  $CI->db->select("*")->from('points_overview')->where('user_id', $userid)->or_where('referer_userid', $userid)->get()->result();
        if ($data) {
            return $coinDetails;
        }
        foreach ($coinDetails as $key => $value) {
            if ($value->referer_userid != $userid || $value->status != 1) {
                if ($value->user_id != $userid) {
                    $totapoint = $totapoint - $value->point;
                } else {
                    $totapoint = $totapoint + $value->point;
                }
            }
        }
        return $totapoint;
    }
}

if (!function_exists("member_username")) {
    function member_username($userid)
    {
        $CI = &get_instance();
        $memberDetails =  $CI->db->select("*")->from('members')->where('user_id', $userid)->get()->result();
        return $memberDetails[0]->user_name;
    }
}

if(!function_exists("drawTree")){
    function drawTree($data){
        $tree = '';
        $tree .= '<ul>';
        foreach($data as $key => $value){
            
            if(count($value['child'])==0){
                $tree .= "<li>".$value["name"]."</li>";
            }else{
                $tree .= "<li>".$value["name"].drawTree($value['child'][$value["name"]])."</li>";;
            }
        }
        $tree .= '</ul>';
        return $tree;
    }
}

if(!function_exists("generateLink")){
    function generateLink($userId,$board){
        $CI = &get_instance();

        $CI->db->select("*");
        $CI->db->from("members");
        $CI->db->where("user_id", $userId);
        $memberDetails = $CI->db->get()->row();
        $sponsorName = $memberDetails->sponsor_user_name;
        checkLink($sponsorName, $userId, $board);

        if($board != "Express"){
            if($board == "Third"){
                $board = "Express";
            }else{
                $board = "Third";
            }
            removePreviousLink($userId, $board);
        }
        
    }
}

if(!function_exists("checkLink")){
    function checkLink($sponsorName, $userId, $board){

        // var_dump($sponsorName, $userId, $board);die;
        $CI = &get_instance();
        // check if board exist
        $CI->db->select("*");
        $CI->db->from("sponsors");
        $CI->db->where("board_type", $board);

        $boardData = $CI->db->get();
        if($boardData->num_rows() > 0){

        }else{
            return;
        }

       
        // get sponsor user Id
        $CI->db->select("*");
        $CI->db->from("members");
        $CI->db->where("user_name", $sponsorName);
        $sponsorDetails = $CI->db->get()->row();

        $sponsorUserId = $sponsorDetails->user_id;
        $currentSponsor = $sponsorDetails->sponsor_user_name;

        // get sponsor details from sponsors table
        $CI->db->select("*");
        $CI->db->from("sponsors");
        $CI->db->where("child_id", $sponsorUserId);
        // $CI->db->where("board_type", $board);
        $sponsorDetails = $CI->db->get()->row();

        if($sponsorDetails && $sponsorDetails->board_type == $board){
            // return "4545";
            $checkCurrentLinks = json_decode($sponsorDetails->links);

            if($checkCurrentLinks == null){
                $link1[] = $userId;
                $link1 = json_encode($link1);
                $CI->db->set("links", $link1);
                $CI->db->where("child_id", $sponsorUserId);
                $CI->db->update("sponsors");
                // return $sponsorUserId;
                return;
            }elseif(count($checkCurrentLinks) == 1 && $checkCurrentLinks[0] != $userId) {
                $checkCurrentLinks[] = $userId;
                $link2 = json_encode($checkCurrentLinks);
                $CI->db->set("links", $link2);
                $CI->db->where("child_id", $sponsorUserId);
                $CI->db->update("sponsors");
                // return $sponsorUserId;
                return;
            }else{
                checkLink($currentSponsor, $userId, $board);
            }
        }else{
            checkLink($currentSponsor, $userId, $board);
        }
       
    }
}

if(!function_exists("removePreviousLink")){
    function removePreviousLink($userId, $board){
        $CI = &get_instance();
        // find user id where link 1210
        $CI->db->select('*');
        $CI->db->from('sponsors');
        $CI->db->where('board_type', $board);
        $CI->db->like('links', $userId);
        $common_result = $CI->db->get()->row();
    
        $myLinks = json_decode($common_result->links);
        $myKes = array_search('1210', $myLinks);
        unset($myLinks[$myKes]);
        $newLinks[] =  $myLinks[($myKes == 1)?0:1];
        $sponsorTableId = $common_result->id;
        // update links
        $CI->db->where('id', $sponsorTableId);
        $CI->db->update('sponsors', array('links' => json_encode($newLinks)));
        return;
    }
}