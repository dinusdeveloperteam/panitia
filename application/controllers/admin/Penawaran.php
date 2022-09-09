<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penawaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_pelelang');
        $this->user_access->cek_login();
        $this->user_access->cek_akses();
    }

    public function index()
    {
        $data['lelang'] = $this->M_pelelang->TampilPembukaan();
        $this->load->view('admin/penawaran/index.php', $data);
    }

    public function edit($id)
    {
        // $data['order'] = $this->transaksi->getOrderById($id);
        $data['id'] = $id;
        $this->form_validation->set_rules('status_pemeriksaan', 'Status Order', 'required');
        // $this->form_validation->set_rules('bukti', 'Bukti Transfer Penarikan', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/penawaran/');
        } else {
            $this->db->set('status', $this->input->post('status_pemeriksaan', true));
            $this->db->where('lelang_id', $id);
            $this->db->update('lelang');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');
            redirect('admin/penawaran/');
        }
    }



    public function detail($id)
    {
        $data['detailtawar'] = $this->M_pelelang->Tawarjoin($id);
        $this->load->view('admin/penawaran/detail.php', $data);
    }

    public function deletebukalelang($id)
    {
        $this->M_pelelang->deleteBukaLelang($id);
        // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
        // Akses Controller dikembalikan ke index
        redirect(site_url('admin/penawaran'));
    }
}
