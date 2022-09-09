 <?php
defined('BASEPATH') or exit('No direct script access allowed');


class Riwayat_Model extends CI_Model{
 
	 //menampilkan data lelang testimoni
    public function getData(){ 
    	$this->db->select('lelang_bid.bid_id,peserta.nama,lelang.produk,lelang.jumlah,lelang_bid.harga_tawar');
    	$this->db->from('lelang_bid');
    	$this->db->join('lelang','lelang_bid.lelang_id=lelang.lelang_id');
    	$this->db->join('peserta','lelang_bid.peserta_id=peserta.peserta_id');
    	$query=$this->db->get();
    	if($query->num_rows()>0){
    		return $query->result();
    	}else{
    		return array();
    	}
    }
}