<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_pembayaran');
        $this->user_access->cek_login();
        $this->user_access->cek_akses();
    }

    public function index()
    {
        $data['pembayaran'] = $this->M_pembayaran->getAllBayar();
        $this->load->view('admin/pembayaran', $data);
    }

    public function deletepembayaran($id)
    {
        $this->M_pembayaran->deletePembayaran($id);
        // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
        redirect('admin/pembayaran');
    }
}
