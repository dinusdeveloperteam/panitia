<?php
defined('BASEPATH') or exit('No direct script access allowed');
  
class Transaksi extends CI_Controller{

	//memangggil models untuk ambil data dari database
	public function __construct()
	{   
		parent::__construct(); 
		$this->load->model('pelelang/Transaksi_Model');
		// $this->load->library('form_validation');
		// $this->load->helper('url','form');
	} 

	public function index(){
		$data['title']  = 'Pesanan';
		$data['Transaksi']=$this->Transaksi_Model->getAll();
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();
		// $data['status']=$this->Transaksi_Model->getStatus(); 
		// $this->session->userdata('BelumDibayar',$belumdibayar);
		// $this->session->userdata('Dibayar',$dibayar);
		// $this->session->userdata('diTolak',$ditolak);

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/index',$data);
		$this->load->view('theme_pelelang/footer', $data);
	}
 
	public function detail($id){
		$data['detail']=$this->Transaksi_Model->getDetailById($id);
		$data['adm']=$this->Transaksi_Model->getBiayaAdm();
		$data['bukti']=$this->Transaksi_Model->buktiBayar();
		$this->load->view('pelelang/transaksi/detail');
	}

	public function dibatalkan(){
		$data['title']  = 'Dibatalkan';
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/dibatalkan', $data);
		$this->load->view('theme_pelelang/footer', $data);
	}

	public function dikirim(){
		$data['title']  = 'Dikirim';
		$data['Transaksi']=$this->Transaksi_Model->getAll();
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/dikirim',$data);
		$this->load->view('theme_pelelang/footer', $data);
	}

	public function perludicek(){
		$data['title']  = 'Perlu dicek';
		$data['Transaksi']=$this->Transaksi_Model->getAll();
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/perludicek',$data);
		$this->load->view('theme_pelelang/footer', $data);
	}

	public function perludikirim(){
		$data['title']  = 'Perlu dikirim';
		$data['Transaksi']=$this->Transaksi_Model->getAll();
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/perludikirim',$data);
		$this->load->view('theme_pelelang/footer', $data);
	}

	public function selesai(){
		$data['title']  = 'Perlu dikirim';
		$data['Transaksi']=$this->Transaksi_Model->getAll();
		// get data nama user (untuk tampil di sidebar dan navbar)
		$data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

		$this->load->view('theme_pelelang/header', $data);
		$this->load->view('pelelang/transaksi/selesai',$data);
		$this->load->view('theme_pelelang/footer', $data);
	}
}