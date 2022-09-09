<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratpengiriman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('panitia/Panitia');
        $this->load->helper('url');
    }
    public function index()
    {

        $TampilData = $this->Panitia->suratperintah();
        $page = 'Surat Perintah Pengiriman';
        $data = [
            'suratperintah' => $TampilData,
            'title' => $page,
            'breadcrumb' => $page
        ];
       
        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/surat', $data);
        $this->load->view('panitia/partials/end');
    }

    public function delete($pengiriman_id)
    {
        $this->Panitia->deletePengiriman($pengiriman_id);
        redirect('panitia/suratpengiriman');
    }
    
    public function edit($id)
    {
        $this->form_validation->set_rules('status_transaksi', 'Status Order', 'required');
        if ($this->form_validation->run() == false) {
            redirect('panitia/suratpengiriman/');
        } else {
            $this->db->set('status_transaksi', $this->input->post('status_transaksi', true));
            $this->db->where('lelang_id', $id);
            $this->db->update('lelang_pengiriman');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');
            redirect('panitia/suratpengiriman/');
        }

    }
}