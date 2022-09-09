<?php

class M_kelolaakun_admin extends CI_Model
{
    public function getAllAdmin()
    {
        //tampilkan data Admin
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteAdmin($id)
    {
        $this->db->delete('admin', ['userid' => $id]);
    }

    function get($id){
        $param = array('userid'=>$id);
        return $this->db->get_where('admin',$param);
    }

    // 18-8-22
    function edit(){
        $data=array( 
            'nama'     => $this->input->post('nama'),
            'telp'   => $this->input->post('telp')
        );
        $this->db->where('userid',$this->input->post('id'));
        $this->db->update('admin',$data);
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['userid' => $id])->row_array();
    }
    // 18-8-22

    

    

    
    /* old
    public function getAllBayar()
    {
        return $this->db->get('lelang_pembayaran')->result_array();
    }
    */

}