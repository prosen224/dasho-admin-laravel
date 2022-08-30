<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MessagingController extends CI_Controller {

	public function index()
	{

	}
	public function MessagingList()
	{
		$data=array();

		$from_user=$this->session->userdata('CurrentUserID');
        $this->db->select('messaging.*,from_u.user_name from_user_name,to_u.user_name to_user_name');
        $this->db->from('messaging');
        $this->db->join('members from_u', 'from_u.user_id = messaging.from_user','left');
        $this->db->join('members to_u', 'to_u.user_id = messaging.to_user','left');
        $this->db->group_start();
        $this->db->where('messaging.from_user',$from_user);
        $this->db->or_where('messaging.to_user',$from_user);
        $this->db->group_end();
        $this->db->group_by('messaging.route_id');
        $this->db->order_by("messaging.id", "desc"); 
        $query_result=$this->db->get();
        $data['result']=$query_result->result_array();

        // echo '<pre>';
        // print_r($data['result']);
        // exit;
        $data['from_user']=$from_user;


		$data['index_view']=$this->load->view('Messaging/list',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function SearchUser()
	{
		$data=array();

		$user_name=$this->input->post('user_id');
		
        $UserData = $this->QueryBuilder_model->get_info('members','*',array('user_name ="' .$user_name.'"'),1);
       
       	$data['UserData']=$UserData;
		$data['index_view']=$this->load->view('Messaging/MemberList',$data,true);
		$this->load->view('Homepage',$data);
	}

	public function saveMessage()
	{
		$files = $_FILES;
        $image_name=$files['image_name']['name'];
        $path='images/message_images/';
        $dir=(FCPATH).$path;
        if(!is_dir($dir))
        {
            mkdir($dir, 0777);
        }
        $uploaded_images = $this->upload_file($path);
  
        if(array_key_exists('image_name',$uploaded_images))
        {
            if($uploaded_images['image_name']['status'])
            {
                $data['image_name']=$path.'/'.$uploaded_images['image_name']['info']['file_name'];
            }
        }
        else
        {
            $data['image_name']='';
        }

        $fromUser=$this->session->userdata('CurrentUserID');
        $toUser=$this->input->post('member_user_id');
        $text=$this->input->post('text');
        
        $data['from_user']=$fromUser;
        $data['to_user']=$toUser;
        $data['text']=$text;
        $data['time']=date("Y-m-d h:i:sa");
        $data['first_time']='yes';
        $this->db->insert('messaging',$data);
        $route_id = $this->db->insert_id();

        // echo $route_id;
        // exit;
        $data=array();
        $data['route_id']=$route_id;
        $this->db->where('id',$route_id);
        $this->db->update('messaging',$data);

        redirect('Messaging');
	}

	public function saveMessageNext()
	{
		$files = $_FILES;
        $image_name=$files['image_name']['name'];
        $path='images/message_images/';
        $dir=(FCPATH).$path;
        if(!is_dir($dir))
        {
            mkdir($dir, 0777);
        }
        $uploaded_images = $this->upload_file($path);
  
        if(array_key_exists('image_name',$uploaded_images))
        {
            if($uploaded_images['image_name']['status'])
            {
                $data['image_name']=$path.'/'.$uploaded_images['image_name']['info']['file_name'];
            }
        }
        else
        {
            $data['image_name']='';
        }

        $text=$this->input->post('text');
        $from_user=$this->session->userdata('CurrentUserID');
        $to_user=$this->input->post('user_id');
        $route_id=$this->input->post('route_id');

        $data['from_user']=$from_user;
        $data['to_user']=$to_user;
        $data['text']=$text;
        $data['time']=date("Y-m-d h:i:sa");
        $data['first_time']='no';
        $data['route_id']=$route_id;
        $this->db->insert('messaging',$data);
        

        redirect('Messaging/MessagingController/view_chat_history/'.$to_user.'/'.$route_id);
	}

	public function view_chat_history($user_id,$route_id)
    {
    	// echo 'done';
    	// exit;
        $data=array();
        $this->db->select('messaging.*,from_u.user_name from_user_name,to_u.user_name to_user_name');
        $this->db->from('messaging');
        $this->db->join('members from_u', 'from_u.user_id = messaging.from_user','left');
        $this->db->join('members to_u', 'to_u.user_id = messaging.to_user','left');
        $this->db->where('messaging.route_id',$route_id);
        $query_result=$this->db->get();
        $data['result']=$query_result->result_array();
        $data['user_id']=$user_id;
        $data['route_id']=$route_id;

        $data['index_view']=$this->load->view('Messaging/chat_history',$data,true);
		$this->load->view('Homepage',$data);
    }


	private function upload_file($save_dir='images',$allowed_types='gif|jpg|png|jpeg|txt|pdf|zip|doc|docx|xls|xlsx|ppt|pptx|pptm',$max_size=10240000)
    {
        $this->load->library('upload');
        $config=array();
        $config['upload_path']=FCPATH.$save_dir;
        $config['allowed_types']=$allowed_types;
        $config['max_size']=$max_size;
        $config['overwrite']=false;
        $config['remove_spaces']=true;

        $uploaded_files=array();
        foreach ($_FILES as $key=>$value)
        {
            if(strlen($value['name'])>0)
            {
                $this->upload->initialize($config);
                if($this->upload->do_upload($key))
                {
                    $uploaded_files[$key]=array('status'=>true,'info'=>$this->upload->data());
                }
            }
        }
        return $uploaded_files;
    }
}
