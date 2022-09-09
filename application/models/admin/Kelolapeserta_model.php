<?php

class Kelolapeserta_model extends CI_Model
{
    public function getAllKelola()
    {
        //tampilkan data peserta
        $this->db->order_by('peserta_id', 'DESC');
        $this->db->select('*');
        $this->db->from('peserta');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get($id)
    {
        $param = array('peserta_id' => $id);
        return $this->db->get_where('peserta', $param);
    }

    // 18-8-22
    function edit()
    {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'jeniskel'   => $this->input->post('jeniskelamin'),
            'provinsi'     => $this->input->post('provinsi'),
            'kota'   => $this->input->post('kota'),
            'kecamatan'   => $this->input->post('kecamatan'),
            'kelurahan'     => $this->input->post('kelurahan'),
            'alamat'   => $this->input->post('alamat'),
            'telp'   => $this->input->post('notelp'),
            'email'     => $this->input->post('email'),
            'nik'   => $this->input->post('nik'),
            'npwp'   => $this->input->post('npwp'),
            'deposit'     => $this->input->post('deposit'),
            'status'   => $this->input->post('status')
        );
        $this->db->where('peserta_id', $this->input->post('id'));
        $this->db->update('peserta', $data);
    }

    public function getPesertaById($id)
    {
        return $this->db->get_where('peserta', ['peserta_id' => $id])->row_array();
    }
    // 18-8-22

    public function deletePeserta($id)
    {
        $this->db->delete('peserta', ['peserta_id' => $id]);
    }
}
