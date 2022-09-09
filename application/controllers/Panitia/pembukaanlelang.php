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

    public function detail($lelang_id)
    {
        $detailData = $this->Panitia->detailPembukaanLelang($lelang_id);
        $page = 'Detail Data Pembukaan Lelang';
        $data = [
            'detailPembukaanLelang' => $detailData,
            'title' => $page,
            'breadcrumb' => $page
        ];
        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/detailPembukaanLelang', $data);
        $this->load->view('panitia/partials/end');
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