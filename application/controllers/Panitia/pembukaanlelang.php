<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembukaanlelang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('panitia/Panitia');
        $this->load->helper('url');
    }

    // menampilkan data pembukaan lelang
    public function index()
    {
        $page = 'Pembukaan Lelang';
        $showAllData = $this->Panitia->pembukaanLelang();
        $data = [
            'pembukaanLelang' => $showAllData,
            'title' => $page,
            'breadcrumb' => $page
        ];
        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/pembukaanlelang', $data);
        $this->load->view('panitia/partials/end');
    
    }

    // menampilkan detail data pembukaan lelang

    public function edit($id)
    {
        // $data['order'] = $this->transaksi->getOrderById($id);
        // $data['id'] = $id;
        $this->form_validation->set_rules('status', 'Status Order', 'required');
        // $this->form_validation->set_rules('konfirmasi_terimaproduk', 'Status Order', 'required');
        // $this->form_validation->set_rules('bukti', 'Bukti Transfer Penarikan', 'required');
        if ($this->form_validation->run() == false) {
            redirect('panitia/pembukaanlelang/');
        } else {
            $this->db->set('status', $this->input->post('status', true));
            // $this->db->set('konfirmasi_terimaproduk', $this->input->post('konfirmasi_terimaproduk', true));
            $this->db->where('lelang_id', $id);
            $this->db->update('lelang');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');  
            redirect('panitia/pembukaanlelang/');
        }

    }

    // verifikasi pembukaan lelang

    public function verifikasi($id)
    {
        $id = $this->uri->segment(4);
        $data = [
            'status' => $this->input->post('status')
        ];
        $this->db->where('lelang_id', $id);
        $this->db->update('lelang', $data);
        redirect('panitia/pembukaanlelang');
    }

    public function hapus($id)
    {
        $this->Panitia->hapusDataPembukaanLelang($id);
        redirect('panitia/pembukaanlelang');
    }
}