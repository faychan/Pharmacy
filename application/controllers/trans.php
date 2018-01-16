<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('trans_model');
	}
	public function index()
	{
		$data['jabatan'] = $this->session->userdata('jabatan');
		  var_dump($jabatan);
		// if($this->session->userdata('status') == TRUE){

		// 	$this->load->view('template', $data);
		// } else{
		// 	redirect(base_url('index.php/'));
		// }
	}
	
	public function sell(){
		$data['obat'] = $this->trans_model->dropdownmeds();
		$data['transaksi'] = $this->trans_model->getTrans();

		$hasil = $this->session->flashdata('hasil');

		if($hasil == 'berhasil'){
			$data['announce'] ='Success!';
		}
		$this->load->view('template', $data);
	}

}

/* End of file trans.php */
/* Location: ./application/controllers/trans.php */