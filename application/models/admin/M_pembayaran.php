<?php

class M_pembayaran extends CI_Model
{
    public function getAllUserPembayaran()
    {
        //tampilkan data penjual
        $this->db->select('*');
        $this->db->from('lelang_pembayaran');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function getDataPembayaran()
    {
        $this->db->select('*');
        $this->db->from('lelang_pembayaran');
        $this->db->join('lelang_pemenang', 'lelang_pemenang.lelang_id=lelang_pembayaran.lelang_id');
        $this->db->join('peserta', 'lelang_pemenang.peserta_id=peserta.peserta_id');
        $this->db->join('lelang', 'lelang.lelang_id=lelang_pembayaran.lelang_id');
        $this->db->order_by('lelang_pembayaran.lelang_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllBayar()
    {
        $query = "SELECT lb.*,lm.*,l.produk,p.nama as nama_peserta FROM `lelang_pembayaran` lb,lelang_pemenang lm,lelang l,peserta p where lb.lelang_id=lm.lelang_id and lm.peserta_id=p.peserta_id and l.lelang_id=lb.lelang_id;";
        return $this->db->query($query)->result_array();
    }
    // public function deletepelelang($id)
    // {
    //     $this->M_kelolaakun_admin->deleteAdmin($id);
    //     // ayra $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran dengan kode ' . $id . ' berhasil dihapus!</div>');
    //     // Akses Controller dikembalikan ke index
    //     redirect(site_url('admin/kelola_akun/admin'));
    // }
}
