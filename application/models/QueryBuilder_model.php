<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QueryBuilder_model extends CI_Model
{
    public function get_info($table_name,$field_names,$conditions,$limit=0,$start=0,$where_in_tbl_field='',$where_in=array(),$order_by=null)
    {
        //getting field names
        if(is_array($field_names))
        {
            foreach($field_names as $field_name)
            {
                $this->db->select($field_name);
            }
        }
        else
        {
            $this->db->select($field_names);
        }
        //getting conditions
        foreach($conditions as $condition)
        {
            $this->db->where($condition);
            
        }
        if(sizeof($where_in)>0)
        {
            $this->db->where_in($where_in_tbl_field,$where_in);
        }
        if(is_array($order_by))
        {
            foreach($order_by as $order)
            {
                $this->db->order_by($order);
            }
        }
        if($limit==0)
        {
            $query=$this->db->get($table_name);
            return $query->result();
             
        }
        if($limit==1)
        {
            return $this->db->get($table_name)->row();
        }
        else
        {
            $this->db->limit($limit,$start);
            $this->db->get($table_name)->result();
        }
        print_r($this->db->last_query());
             exit;

    }

    //password reset
    public static  function update($table_name,$data,$conditions)
    {
        $CI =& get_instance();
        foreach($conditions as $condition)
        {
            $CI->db->where($condition);
        }
        $rows=$CI->db->get($table_name)->result_array();
        foreach($conditions as $condition)
        {
            $CI->db->where($condition);
        }
        $CI->db->update($table_name, $data);
       
        return true;
    }
    


    public function upload_file($save_dir="images")
    {

        $this->load->library('upload');
        $config=array();
        $config['upload_path'] = FCPATH.$save_dir;
        $config['allowed_types'] = 'gif|jpg|png|csv';
        $config['max_size'] = $this->config->item("max_file_size");
        $config['overwrite'] = false;
        $config['remove_spaces'] = true;
        $uploaded_files=array();
        foreach ($_FILES as $key => $value)
        {
            if(strlen($value['name'])>0)
            {
                $this->upload->initialize($config);
                if (!$this->upload->do_upload($key))
                {
                    $uploaded_files[$key]=array("status"=>false,"message"=>$value['name'].': '.$this->upload->display_errors());
                }
                else
                {
                    $uploaded_files[$key]=array("status"=>true,"info"=>$this->upload->data());
                }
            }
        }
        return $uploaded_files;
    }
    public function upload_profilePic($save_dir="images")
    {
        
        $CurrentUserID=$this->session->userdata('CurrentUserID');
        $this->load->library('upload');
        $config=array();
        $config['upload_path'] = FCPATH.$save_dir;
        $config['allowed_types'] = 'gif|jpg|png|csv';
        $config['max_size'] = $this->config->item("max_file_size");
        $config['overwrite'] = true;
        $config['remove_spaces'] = true;
        $uploaded_files=array();
        // echo '<pre>';
        // print_r($_FILES);
        // exit;
        $_FILES['image_profile']['name']=$CurrentUserID.'.jpg';
        foreach ($_FILES as $key => $value)
        {
            if(strlen($value['name'])>0)
            {   
                
                // echo $value['name'];
                // exit;
                // $imageLentgth = strlen($value['name']);
                // $imagePointposition = strpos($value['name'],'.');

                // $imageName = substr($value['name'], 0,$imagePointposition);
                // //echo $imageName;
                // //$imaexit();
                // $imageName = $CurrentUserID.'jpg'

                $this->upload->initialize($config);
                if (!$this->upload->do_upload($key))
                {
                    $uploaded_files[$key]=array("status"=>false,"message"=>$value['name'].': '.$this->upload->display_errors());
                }
                else
                {
                    $uploaded_files[$key]=array("status"=>true,"info"=>$this->upload->data());
                }
            }
        }
        return $uploaded_files;
    }
}