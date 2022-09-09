<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deposit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_deposit');
        $this->user_access->cek_login();
        $this->user_access->cek_akses();
    }

    public function index()
    {
        $data['deposit'] = $this->M_deposit->getAllDeposit();
        $this->load->view('admin/deposit/index.php', $data);
    }




    public function edit($id)
    {
        // $data['order'] = $this->transaksi->getOrderById($id);
        $data['id'] = $id;
        $this->form_validation->set_rules('status_deposit', 'Status Order', 'required');
        // $this->form_validation->set_rules('bukti', 'Bukti Transfer Penarikan', 'required');
        if ($this->form_validation->run() == false) {
            redirect('admin/deposit/');
        } else {
            $this->db->set('status', $this->input->post('status_deposit', true));
            $this->db->where('deposit_id', $id);
            $this->db->update('peserta_deposit');
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Order Berhasil Terupdate!</div>');
            redirect('admin/deposit/');
        }
    }
}
