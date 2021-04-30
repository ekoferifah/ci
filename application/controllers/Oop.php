<?php

defined('BASEPATH') or exit('No direct script acces allowed');

class Oop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
		$data = array(
			'konten' => $this->mahasiswa_model->get_data()
		);
		$this->load->view('cetak_model', $data);
	}
}