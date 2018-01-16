<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index(){

	}

	// public function dropdownmeds(){
	// 	return $this->db->select('id_obat, nama_obat')->get('obat')->result();

	// }

	// public function getTrans(){
	// 	$this->db->select('*');
	// 	->from('penjualan')->join('obat','penjualan.id = obat.id')->order_by('id_jual','ASC');

	// 	$hasil = $this->db->get();

	// 	if($hasil->num_rows()> 0){
	// 		$data=$hasil->result();
	// 	}

	// 	$hasil->free_result();
	// 	return $data;
	// }



}

/* End of file trans_model.php */
/* Location: ./application/models/trans_model.php */