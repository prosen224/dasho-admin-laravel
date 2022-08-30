<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserRoleController extends CI_Controller {

        //Here have to add constr5uctor to validate login operation

        public function UserRoleList()
        {
                $data=array();
                $this->db->select('*');
                $this->db->from('user_role');
                $query_result=$this->db->get();
                $data['result']=$query_result->result_array();
               
                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';


                $data['index_view']=$this->load->view('UserRole/UserRoleList',$data,true);
                $this->load->view('Homepage',$data);

        }

        public function AddUserRole()
        {
                $data=array();

                $this->db->select('*');
                $this->db->from('menu');
                $query_result=$this->db->get();
                $data['menu_list']=$query_result->result_array();

                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';



                $data['index_view']=$this->load->view('UserRole/AddUserRole',$data,true);
                $this->load->view('Homepage',$data);
        }

        public function SaveUserRole()
        {
                $data=array();
                $data['name']=$this->input->post('name');
                $data['ordering']=$this->input->post('ordering');
                $data['date_created']=date("Y-m-d").','.date("h:i:sa");
                $data['user_created']=1; //here will be user from login
                $this->db->insert('user_role',$data);
                $user_role_id = $this->db->insert_id();

                $items=$this->input->post('items');

                $data=array();
                foreach($items as $row_item)
                {
                        $data['user_role_id'] = $user_role_id;
                        $data['menu_id'] = $row_item;

                        $this->db->insert('user_role_details',$data);
                }

                redirect('UserRole');
        }

        public function edit_by_id($id)
        {
                $data=array();

                $this->db->select('*');
                $this->db->from('user_role');
                $this->db->where('id',$id);
                $query_result=$this->db->get();
                $data['user_role_list']=$query_result->row_array();

                $this->db->select('*');
                $this->db->from('user_role_details');
                $this->db->where('user_role_id',$id);
                $query_result=$this->db->get();
                $user_role_details=$query_result->result_array();

                $user_role_details_id=array();
                foreach($user_role_details as $row_user_role_details)
                {
                     $user_role_details_id[$row_user_role_details['menu_id']]=$row_user_role_details;  
                }
                $data['user_role_details_id'] = $user_role_details_id;

                $this->db->select('*');
                $this->db->from('menu');
                $query_result=$this->db->get();
                $data['menu_list']=$query_result->result_array();

                $userData = $this->QueryBuilder_model->get_info('members','*',array('email ="' .$this->session->userdata('email').'"'),1);
                $data['user_info'] = $userData;
                $GetUserID = $userData->user_id;

                $security_question = $this->QueryBuilder_model->get_info('transaction_password','*',array('user_id ="' .$GetUserID.'"'),1);
                $data['profile_update_success_msg'] = '';
                $data['blood_info_update_success_msg'] = '';

                $data['index_view']=$this->load->view('UserRole/EditUserRole',$data,true);
                $this->load->view('Homepage',$data);
        }

        public function UpdateUserRole()
        {
                
                $id=$this->input->post('id');

                $data=array();
                $data['name']=$this->input->post('name');
                $data['ordering']=$this->input->post('ordering');
                $this->db->where('id',$id);
                $this->db->update('user_role',$data);

                $this->db-> where('user_role_id', $id);
                $this->db-> delete('user_role_details');

                $items=$this->input->post('items');

                $data=array();
                foreach($items as $row_item)
                {
                        $data['user_role_id'] = $id;
                        $data['menu_id'] = $row_item;
                        $this->db->insert('user_role_details',$data);
                }

                redirect('UserRole');
        }
}
