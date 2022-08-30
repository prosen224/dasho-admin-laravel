<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller {

	//Here have to add constr5uctor to validate login operation

	public function taskList()
	{
		$data=array();
                $this->db->select('*');
                $this->db->from('task');
                $query_result=$this->db->get();
                $data['result']=$query_result->result_array();
                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';


                $data['index_view']=$this->load->view('Task/Tasklist',$data,true);
		// $this->load->view('Dashboard/UserLogin',$data);
                $this->load->view('Homepage',$data);


	}

	public function AddTask()
	{
		$data=array();
                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';

		$data['index_view']=$this->load->view('Task/AddTask',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function SaveTask()
	{
                $data=array();
                $data['name']=$this->input->post('name');
                $data['description']=$this->input->post('description');
                $data['ordering']=$this->input->post('ordering');
                $data['date_created']=date("Y-m-d").','.date("h:i:sa");
                $data['user_created']= $this->session->userdata('CurrentUserID'); //here will be user from login
                $this->db->insert('task',$data);
                $this->taskList();
	}

	public function edit_by_id($id)
	{
		$data=array();

		$this->db->select('*');
                $this->db->from('task');
                $this->db->where('id',$id);
                $query_result=$this->db->get();
                $data['result']=$query_result->row_array();
                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';


		$data['index_view']=$this->load->view('Task/EditTask',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function UpdateTask()
	{
                $data=array();
                $id=$this->input->post('id');
                $data['name']=$this->input->post('name');
                $data['description']=$this->input->post('description');
                $data['ordering']=$this->input->post('ordering');
                $data['date_created']=date("Y-m-d").','.date("h:i:sa");
                $data['user_created']=1;

                $this->db->where('id',$id);
                $this->db->update('task',$data);

                $this->taskList();
	}
	

}
