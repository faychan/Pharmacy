<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getBook(){
		return array(
			array(
				'title'=>'Learning Framework',
				'author'=>'Budi Raharjo',
				'publisher' => 'Informatic'
				),
			array(
				'title'=>'Mastering OOP One Night',
				'author'=>'Muh. Arifin',
				'publisher' => 'Andi Offset'
			)
		);
	}

}

/* Author : Faychan \>w</ */
/* End of file buku_model.php */
/* Location: ./application/models/buku_model.php */