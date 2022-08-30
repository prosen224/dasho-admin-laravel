<?php
class Common_model extends CI_Model 
{
  public function check_admin_login($user_name,$password)
  {
    $this->db->select('company_user.*,company.company_name');
    $this->db->from('company_user');
    $this->db->join('company', 'company.id = company_user.company_id','left');
    $this->db->where('user_name',$user_name);
    $this->db->where('password',$password);
    $query_result=$this->db->get();
    $result=$query_result->row();

    // echo '<pre>';
    // print_r($result);
    // exit;
    return $result;


  }
  public function showallslide()
  {
     $this->db->select('*');
     $this->db->from('slider');
     $query_result=$this->db->get();
     $result=$query_result->result_array();
     return $result;  
  }
  public function showallbod()
  {
     $this->db->select('*');
     $this->db->from('bod');
     $query_result=$this->db->get();
     $result=$query_result->result_array();
     return $result;  
  }
}