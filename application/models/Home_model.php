<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    // private $_table = "lelang";

    // public $lelang_id;

    // public $pelelang_id;

    // public $produk;

    // public $deskripsi_produk;

    // public $image1 = "default.jpg";

    // public $image2;

    // public $image3;

    // public $image4;

    // public $harga_awal;

    // public $harga_minimal_diterima;

    // public $incremental_value;

    // public $tgl_mulai;

    // public $tgl_selesai;

    // public $harga_beli_sekarang;

    // public $metode_bayar;

    // public $status;

    // public $panitia_id;

    // public $keterangan;


    public function getAll()
    {

        //return $this->db->get($this->_table)->result();
        return $this->db->get('lelang')->result();
    }

    public function getAllData($limit, $start)
    {
        //return $this->db->get($this->_table, $limit, $start)->result();
        return $this->db->get('lelang', $limit, $start)->result();
    }

    public function countAllData()
    {
        //return $this->db->get($this->_table)->num_rows();
        return $this->db->get('lelang')->num_rows();
    }

    public function getById($id)
    {

        //return $this->db->get_where($this->_table, ["lelang_id" => $id])->row();
        return $this->db->get_where('lelang', ["lelang_id" => $id])->row();
        // $this->db->where('lelang_id', $id);
        // $query=$this->db->get('lelang');
        // return $query->row();
    }

    public function getLelangById($id)
    {
        return $this->db->get_where('lelang', ['lelang_id' => $id])->row_array();
    }
    //menampilkan data lelang pemenang
    public function getDataTawar($id){
        
    	$query = "SELECT peserta.nama, lelang_bid.harga_tawar FROM peserta JOIN lelang_bid ON peserta.peserta_id=lelang_bid.peserta_id  AND lelang_id='".$id."' ORDER BY lelang_bid.harga_tawar DESC";
        // $this->db->order_by('lelang_bid.harga_tawar','desc');
        return $this->db->query($query)->result_array();

    }

    //menampilkan data peserta
    public function getAllPeserta(){
        return $this->db->get('peserta')->result();
    }

    public function getUserPassPeserta($username, $password)
    {
        //cek user penjual
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get();
    }

    public function register_peserta($enc_password){
   
        // User data array
        $this->db->select('MAX(RIGHT(peserta_id,5)) as peserta_id',FALSE);
        $this->db->from('peserta');
        $this->db->where('peserta_id !=','NULL');
        $query=$this->db->get();
        $kode=$query->row(); 
        $num=substr($kode->peserta_id,1,5);
        $add=(int)$num +1;
        if(strlen($add)==1){
            $kodebaru="0000".$add;
        }else if(strlen($add)==2){
            $kodebaru="000".$add;
        }else if(strlen($add)==3){
            $kodebaru="00".$add;
        }else if(strlen($add)==4){
            $kodebaru="0".$add;
        }else{
            $kodebaru="".$add; 
        }
        $data = array(
            'peserta_id' => 'PSY-' .date('Y').'-'.$kodebaru,
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'status'    => 0
        );
        
   
        // Insert user
        return $this->db->insert('peserta', $data);
       }

    // public function dataLelangBid(){
    //     return $this->db-get('lelang_bid')->result_array();
    // }

    // public function delete($id)
    // {

    //     $this->_deleteImage($id);

    //     return $this->db->delete($this->_table, array('kd_barang' => $id));
    // }



    // private function _uploadImage()
    // {

    //     $config['upload_path']          = './assets/img/upload';

    //     $config['allowed_types']        = 'gif|jpg|png';

    //     $config['file_name']            = 'foto-' . $this->nm_barang;

    //     $config['overwrite']            = true;

    //     $config['max_size']             = 5000; // 1MB

    //     // $config['max_width']            = 1024;

    //     // $config['max_height']           = 768;



    //     $this->load->library('upload', $config);



    //     if ($this->upload->do_upload('image')) {

    //         return $this->upload->data("file_name");
    //     }

    //     return "default.jpg";
    // }



    // private function _deleteImage($id)
    // {

    //     $product = $this->getById($id);

    //     if ($product->gambar != "default.jpg") {

    //         $filename = explode(".", $product->gambar)[0];

    //         return array_map('unlink', glob(FCPATH . "/assets/img/upload/$filename.*"));
    //     }
    // }
}
