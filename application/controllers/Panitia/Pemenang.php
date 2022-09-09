<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemenang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('panitia/Panitia');
        $this->load->helper('url');
    }
    public function index()
    {

        $TampilData = $this->Panitia->pemenang();
        $page = 'Pemenang Lelang';
        $data = [
            'PemenangLelang' => $TampilData,
            'title' => $page,
            'breadcrumb' => $page
        ];
       
        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/pemenang', $data);
        $this->load->view('panitia/partials/end');
    }
    public function deletepemenang($id)
    {
        $this->panitia->deletepemenang($id);
        // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
        redirect('panitia/kelola_lelang/pemenang');
    }
    public function edit($id)
    {
        // $data['order'] = $this->transaksi->getOrderById($id);
        // $data['id'] = $id;
        $this->form_validation->set_rules('status', 'Status Order', 'required');
        $this->form_validation->set_rules('konfirmasi_terimaproduk', 'Status Order', 'required');
        // $this->form_validation->set_rules('bukti', 'Bukti Transfer Penarikan', 'required');
        if ($this->form_validation->run() == false) {
            redirect('panitia/kelola_lelang/pemenang/');
        } else {
            $this->db->set('status', $this->input->post('status', true));
            $this->db->set('konfirmasi_terimaproduk', $this->input->post('konfirmasi_terimaproduk', true));
            $this->db->where('lelang_id', $id);
            $this->db->update('lelang_pemenang');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');
            redirect('panitia/pemenang/');
        }

    }
}