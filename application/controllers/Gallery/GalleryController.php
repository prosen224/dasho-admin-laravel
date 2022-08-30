<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryController extends CI_Controller {

	public function View()
	{
	    
        $data=array();
        $data['error_data'] = '';
        $data['index_view'] = $this->load->view('Gallery/GalleryView',$data,true);     
        $this->load->view('Homepage',$data);
	}
}
