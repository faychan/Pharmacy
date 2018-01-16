<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

	public function index()
	{
		 $this->load->helper('url');
		 if ($this->session->userdata('status') == TRUE) {
		 	$data['jabatan'] = $this->session->userdata('jabatan');
		 	$this->load->view('template', $data);
		 } else {
			$this->load->view('admin/login_view');
		 }
	}

	public function log(){
			if($this->input->post('submit')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
			 if ($this->form_validation->run() == TRUE) {
				if ($this->admin_model->usercheck() == TRUE) {
					redirect(base_url('index.php/meds/record'));
				} else {
					$data['announce'] = 'Login Failed :(';
					$this->load->view('admin/login_view',$data);
				}
			} else {
				$data['announce'] = validation_errors();
				$this->load->view('admin/login_view', $data);
			}
		}
		}


	public function logout(){
		$data = array(
			'username' => '', 
			'logged_in' => FALSE 
			);
		$this->session->sess_destroy();
		//$data['main_view'] = '';
		redirect(base_url('index.php/admin'));
	}

	public function ds(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'ds_view';
			$data['user_data'] = $this->admin_model->getregda();
			$this->load->view('template', $data);
		} else {
			redirect('admin');
		}
		
	}

}

//