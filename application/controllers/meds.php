<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meds extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('med_model');
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

	public function add(){
		if($this->input->post('submit')){
				$this->form_validation->set_rules('code', 'The Code of Medicine', 'trim|required|min_length[5]|max_length[20]');
				$this->form_validation->set_rules('title', 'Medicine Name', 'trim|required|min_length[5]|max_length[30]');
				$this->form_validation->set_rules('price', 'Price', 'trim|required|max_length[11]');
				$this->form_validation->set_rules('indication', 'Indication', 'trim|required|max_length[50]');
				$this->form_validation->set_rules('amount', 'Amount', 'trim|required|max_length[11]');
				$rand = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),5,5); 
				$config['file_name'] = 'img_'.$rand;
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 2000;

				$this->load->library('upload', $config);
		} if ($this->form_validation->run() == TRUE && $this->upload->do_upload('image')) {
			if($this->med_model->insert() == TRUE){
				$data['announce'] = 'Add Medicine Success!';
				$data['main_view'] = 'apotek/addmed_view.php';
				$this->load->view('template',$data);
			}
		} else { //failed
			$data['announce'] = validation_errors();
			$data['main_view'] = 'apotek/addmed_view.php';
			$this->load->view('template',$data);
		}
	}

	public function log($id_obat){
		$id_obat = $this->uri->segment(3);
		$data['main_view'] = 'apotek/detmed_view';
		$data['dreg'] = $this->med_model->getmeds_byid($id_obat);
		$this->load->view('template', $data);
	}
	public function edit(){
		if($this->input->post('submit')){
				$this->form_validation->set_rules('code', 'The Code of Medicine', 'trim|required|min_length[5]|max_length[20]');
				$this->form_validation->set_rules('title', 'Medicine Name', 'trim|required|min_length[5]|max_length[30]');
				$this->form_validation->set_rules('price', 'Price', 'trim|required|max_length[11]');
				$this->form_validation->set_rules('indication', 'Indication', 'trim|required|max_length[50]');
				$this->form_validation->set_rules('amount', 'Amount', 'trim|required|max_length[11]');
		} if ($this->form_validation->run() == TRUE) {
			$id_obat = $this->uri->segment(3);
			if($this->med_model->update($id_obat)==TRUE){
				$data['announce'] = 'Update Medicine Success!';
				redirect(base_url('index.php/meds/record'));//redirect bro
			}
		} else { //failed
			$data['announce'] = validation_errors();
			$data['main_view'] = 'apotek/detmed_view.php';
			$this->load->view('template',$data);
		}
	}	

	public function record(){
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['main_view'] = 'apotek/medrep_view';
		$data['obat'] = $this->med_model->getmeds();
		$this->load->view('template', $data);
	}

	public function boom(){
		$data['main_view'] = 'apotek/addmed_view';
			$this->load->view('template', $data);
	}

	// public function trans(){
	// 	$data['jabatan'] = $this->session->userdata('jabatan');
	// 	$data['main_view'] = 'trans/sellrep_view';
	// 	$data['obat'] = $this->med_model->join();
	// 	$this->load->view('template', $data);
	// }
}

/* End of file meds.php */
/* Location: ./application/controllers/meds.php */