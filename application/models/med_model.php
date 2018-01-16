<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Med_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		//Do your magic here
	}

	public function insert($image){
		$data = array(
			'id_obat'			=> $this->input->post('code'),
			'nama_obat'			=> $this->input->post('title'),
			'harga_obat'		    => $this->input->post('price'),
			'indikasi'	=> $this->input->post('indication'),
			'stok'		=> $this->input->post('amount'),
			'image'		=> $image['file_name']
		);
		$this->db->insert('obat', $data);
		if($this->db->affected_rows()>0){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	public function update($id_obat){
		$data = array(
			//nama kolom	//nama form input
			'id_obat'	  => $this->input->post('code'),
			'nama_obat'	  => $this->input->post('title'),
			'harga_obat'  => $this->input->post('price'),
			'indikasi'    => $this->input->post('indication'),
			'stok'		  => $this->input->post('amount'),
		  );

		//proses input data
		$this->db->where('id_obat',$id_obat)
				->update('obat', $data);

		//cek apakah berhasil
		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function getmeds(){
		return $this->db->order_by('id_obat','ASC')
						->get('obat')
						->result();
	}
	public function getmeds_byid($id_obat){
		return $this->db->where('id_obat',$id_obat)
						->get('obat')
						->row();
	}
	public function delete($id_obat){
		$this->db->where('id_obat',$id_obat)
				->delete('obat');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function join(){
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->join('obat', 'obat.id_obat = transaksi.id_obat');
		$query = $this->db->get();

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file med_model.php */
/* Location: ./application/models/med_model.php */