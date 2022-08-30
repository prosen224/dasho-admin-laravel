<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller {

	public function taskList()
	{
		$data=array();
		$data['index_view']=$this->load->view('FinancialManager/TransactionHistoryView',$data,true);
		$this->load->view('Master_view',$data);
	}

}
