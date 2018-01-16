<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Reg extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('uda_model');
		}

		public function index(){
		//deciding view's name that shows
			$data['main_view'] = 'registration_view';
	
			if($this->input->post('submit')){
				$this->form_validation->set_rules('nama', 'Name', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Address', 'trim|required');
				$this->form_validation->set_rules('telp', 'Phone Number', 'trim|required|numeric');
				$this->form_validation->set_rules('asal_smp', 'School Prior', 'trim|required');
			} 
			if ($this->form_validation->run() == TRUE) {
				if($this->uda_model->insert()==TRUE){
					$data['notif'] = 'Registration Success!';
					$this->load->view('template', $data);
					$data['main_view'] = 'registration_view';
				} else {
					$data['notif'] = 'Registration Failed!';
					$this->load->view('template', $data);
					$data['main_view'] = 'registration_view';
				}
					$data['notif'] = 'Validation Success!';
					// $data['main_view'] = 'registration_view';
					//$this->load->view('template', $data);

			} else { //failed
				$data['notif'] = validation_errors();
				$data['main_view'] = 'registration_view';
				$this->load->view('template', $data);
			}
		} 
	}
/* End of file reg.php */
/* Location: ./application/controllers/reg.php */