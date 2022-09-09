<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kelolapeserta_model');
        $this->user_access->cek_login();
        $this->user_access->cek_akses();
    }

    public function index()
    {
        $data['peserta'] = $this->Kelolapeserta_model->getAllKelola();
        $this->load->view('admin/peserta/index.php', $data);
    }

    public function deletepeserta($id)
    {
        $this->Kelolapeserta_model->deletePeserta($id);
        // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
        // Akses Controller dikembalikan ke index
        redirect(site_url('admin/peserta'));
    }

    function detail()
    {
        $id     = $this->uri->segment(4);
        $data['row']   = $this->db->get_where('peserta', array('peserta_id' => $id))->row_array();
        $this->load->view('admin/peserta/detail.php', $data);
    }

    function edit()
    {

        if (isset($_POST['submit'])) {
            $this->Kelolapeserta_model->edit();
            redirect('admin/peserta/');
        } else {
            $id = $this->uri->segment(4);
            $data['row'] = $this->Kelolapeserta_model->get($id)->row_array();
            $this->load->view('admin/peserta/edit.php', $data);
        }
    }
}
