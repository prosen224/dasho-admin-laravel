<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller 
{
    public function __construct()
    {   
        parent::__construct();
    }

    public function index()
    {
        $data=[];
        $data["navigations"] = $this->db->select('*')->from('navigations')->get()->result_array();
        $data["nav2"] = $this->db->select('*')->from('navigation2s')->where('status',"1")->get()->result_array();
        $data["sliders"] = $this->db->select('*')->from('slider')->where('featured',"1")->get()->result_array();
        $data["about_us"] = $this->db->select('*')->from('aboutus')->get()->result_array();
        $data["testimonials"] = $this->db->select('*')->from('testimonials')->get()->result_array();
        $data["missions"] = $this->db->select('*')->from('missions')->get()->result_array();
        $data["globals"] = $this->db->select('*')->from('globals')->get()->result_array();
        $data["bigwigs"] = $this->db->select('*')->from('bigwigs')->get()->result_array();
        $data["opportunity"] = $this->db->select('*')->from('opportunities')->get()->result_array();
        $data["rank"] = $this->db->select('*')->from('ranks')->get()->result_array();
        $data["reward"] = $this->db->select('*')->from('rewards')->get()->result_array();
        $data["why"] = $this->db->select('*')->from('whypathshalas')->get()->result_array();
        $data["richtext"] = $this->db->select('*')->from('richtexts')->get()->result_array();
        $data["power"] = $this->db->select('*')->from('powers')->get()->result_array();
        $data["general"] = $this->db->select('*')->from('settings')->get()->result_array();
          
        



        $this->load->view('website_view',$data);


      }
      
}
