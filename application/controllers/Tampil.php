<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	public function awal()
	{
		$this->load->view('tampil_awal');
	}

	public function lapor()
	{
		$this->load->view('buat_laporan');
	}

	public function detail(){
		$this->load->view('detail');
	}
}
