 <?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pemenang_Model extends CI_Model{

	 //menampilkan data lelang pemenang
    public function getData(){
    	$this->db->select('lelang_pemenang.lelang_id,peserta.nama,lelang.produk,lelang_pemenang.tgl_diumumkan');
    	$this->db->from('lelang_pemenang');
    	$this->db->join('lelang','lelang_pemenang.lelang_id=lelang.lelang_id');
    	$this->db->join('peserta','lelang_pemenang.peserta_id=peserta.peserta_id');
    	$query=$this->db->get();
    	if($query->num_rows()>0){
    		return $query->result();
    	}else{
    		return array();
    	}
    }
}