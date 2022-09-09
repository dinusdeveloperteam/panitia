<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    { 
        parent::__construct();
        if(!$this->session->userdata('admin') == true){
            redirect('User');
        }
    }
 
    public function index()
    { 
        $data['title']  = 'Dashboard';
        // get data nama user (untuk tampil di sidebar dan navbar)
        $data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

        $this->load->view('theme_pelelang/header', $data);
        $this->load->view('pelelang/dashboard', $data);
        $this->load->view('theme_pelelang/footer', $data);
    }
    public function pemenang()
    {
        $data['title']  = 'Pemenang Lelang';
        // get data nama user (untuk tampil di sidebar dan navbar)
        $data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

        $this->load->view('theme_pelelang/header', $data);
        $this->load->view('pelelang/pemenang', $data);
        $this->load->view('theme_pelelang/footer', $data);
    }
    public function transaksi()
    {
        $data['title']  = 'Transaksi';
        // get data nama user (untuk tampil di sidebar dan navbar)
        $data['user']   = $this->db->query('select * from pelelang where nama = "'.$_SESSION['nama'].'"')->row();

        $this->load->view('theme_pelelang/header', $data);
        $this->load->view('pelelang/transaksi/selesai', $data);
        $this->load->view('theme_pelelang/footer', $data);
    }
    public function feedback(){
        $this->load->view('pelelang/feedback');
    }

}
