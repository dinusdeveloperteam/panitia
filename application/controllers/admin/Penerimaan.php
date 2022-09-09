<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin/penerimaan');
		$this->user_access->cek_login();
		$this->user_access->cek_akses();
	}
}
