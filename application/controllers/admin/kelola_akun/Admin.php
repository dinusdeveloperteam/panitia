<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_kelolaakun_admin');
        $this->user_access->cek_login();
        $this->user_access->cek_akses();
    }

    public function index()
    {
        $data['adminx'] = $this->M_kelolaakun_admin->getAllAdmin();
        $this->load->view('admin/kelolaakun/admin/index.php', $data);
    }

    public function deleteadmin($id)
    {
        $this->M_kelolaakun_admin->deleteAdmin($id);
        // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
        // Akses Controller dikembalikan ke index
        redirect(site_url('admin/kelola_akun/admin'));
    }

    function detail()
    {
        $id     = $this->uri->segment(5);
        $data['row']   = $this->db->get_where('admin', array('userid' => $id))->row_array();
        $this->load->view('admin/detail.php', $data);
    }


    function edit()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('telp', 'Nomor HP/Telepon', 'required');

        if (isset($_POST['submit'])) {
            $this->M_kelolaakun_admin->edit();
            redirect('admin/kelola_akun/admin/');
        } else {
            $id = $this->uri->segment(5);
            $data['row'] = $this->M_kelolaakun_admin->get($id)->row_array();
            $this->load->view('admin/kelolaakun/admin/edit.php', $data);
        }
    }
}
