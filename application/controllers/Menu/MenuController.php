<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {

	//Here have to add constr5uctor to validate login operation

	public function MenuList()
	{
        	$data=array();
                $this->db->select('*');
                $this->db->from('menu');
                $query_result=$this->db->get();
                $data['result']=$query_result->result_array();

                $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $GetUserID = $result->user_id;

                 $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';
                $data['user_info'] = $result;
                $data['security_question'] = $security_question;


                $data['index_view']=$this->load->view('Menu/Menulist',$data,true);
        	$this->load->view('Homepage',$data);

	}

	public function AddMenu()
	{
        	$data=array();

                $this->db->select('*');
                $this->db->from('task');
                $query_result=$this->db->get();
                $data['task_list']=$query_result->result_array();

                $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $GetUserID = $result->user_id;

                 $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';
                $data['user_info'] = $result;
                $data['security_question'] = $security_question;


        	$data['index_view']=$this->load->view('Menu/AddMenu',$data,true);
        	$this->load->view('Homepage',$data);
	}

	public function SaveMenu()
	{
                $data=array();
                $data['name']=$this->input->post('name');
                $data['ordering']=$this->input->post('ordering');
                $data['date_created']=date("Y-m-d").','.date("h:i:sa");
                $data['user_created']=1; //here will be user from login
                $this->db->insert('menu',$data);
                $menu_id = $this->db->insert_id();

                $items=$this->input->post('items');

                $data=array();

                $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $GetUserID = $result->user_id;

                 $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';
                $data['user_info'] = $result;
                $data['security_question'] = $security_question;


                foreach($items as $row_item)
                {
                	$data['menu_id'] = $menu_id;
                	$data['task_id'] = $row_item;

                	$this->db->insert('menu_details',$data);
                }

                redirect('Menu');
	}

        public function edit_by_id($id)
        {
                $data=array();

                $this->db->select('*');
                $this->db->from('menu');
                $this->db->where('id',$id);
                $query_result=$this->db->get();
                $data['menu_list']=$query_result->row_array();

                $this->db->select('*');
                $this->db->from('menu_details');
                $this->db->where('menu_id',$id);
                $query_result=$this->db->get();
                $menu_details=$query_result->result_array();

                $menu_details_id=array();
                foreach($menu_details as $row_menu_details)
                {
                     $menu_details_id[$row_menu_details['task_id']]=$row_menu_details;  
                }
                $data['menu_details_id'] = $menu_details_id;

                $this->db->select('*');
                $this->db->from('task');
                $query_result=$this->db->get();
                $data['task_list']=$query_result->result_array();
                
                $result = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $GetUserID = $result->user_id;

                 $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';
                $data['user_info'] = $result;
                $data['security_question'] = $security_question;


                $data['index_view']=$this->load->view('Menu/EditMenu',$data,true);
                $this->load->view('Homepage',$data);
        }

        public function UpdateMenu()
        {
                
                $id=$this->input->post('id');

                $data=array();
                $data['name']=$this->input->post('name');
                $data['ordering']=$this->input->post('ordering');
                $this->db->where('id',$id);
                $this->db->update('menu',$data);

                $this->db-> where('menu_id', $id);
                $this->db-> delete('menu_details');

                $items=$this->input->post('items');

                $data=array();
                foreach($items as $row_item)
                {
                        $data['menu_id'] = $id;
                        $data['task_id'] = $row_item;
                        $this->db->insert('menu_details',$data);
                }

                redirect('Menu');
        }
}
