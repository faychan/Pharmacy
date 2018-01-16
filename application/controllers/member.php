<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$data['main_view'] = 'addmember_view.php';
		$this->load->view('template',$data);
	}
	public function index()
	{
	}

	public function add(){
		
	}
}

/* End of file add.php */
/* Location: ./application/controllers/add.php */