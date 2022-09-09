<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{



    function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->load->model('Home_model','home');
    }

    public function index()
    {
        $this->page();

        $data['nama'] = $this->session->userdata('nama');
        //$data['result'] = $this->Home_model->getAllPeserta();
        //$data['kategori'] = $this->Home_model->countAllData();
        //jika sudah login
        if ($this->session->userdata('logged_in') == 'true') {
            $this->load->view('_partials/user/head', $data);
           
        } else {
            $this->load->view('_partials/head', $data);
        }
    }

    public function page(){

        //$data['result'] = $this->home->getAll();
        //load library
        $this->load->library('pagination');

        //Config
        $config['base_url'] = 'http://localhost/lelang-ikan/barang/page';
        $config['total_rows'] = $this->home->countAllData();
        $config['per_page'] = 9;
        $config['use_page_numbers'] = true;

        //Styling
        $config['full_tag_open'] = '<div class="col-12"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';

        $config['first_link'] = '<i class="fas fa-angle-double-left"></i>';
        $config['first_tag_open'] = '<li class="page-item font-weight-bold p-1 rounded">';
        $config['first_tag_close'] = '</span></li>';

        $config['last_link'] = '<i class="fas fa-angle-double-right"></i>';
        $config['last_tag_open'] = '<li class="page-item font-weight-bold p-1 rounded">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fas fa-angle-right"></i>';
        $config['next_tag_open'] = '<li class="page-item font-weight-bold p-1 rounded">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fas fa-angle-left"></i>';
        $config['prev_tag_open'] = '<li class="page-item font-weight-bold p-1 rounded">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active font-weight-bold p-1 rounded"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item p-1 font-weight-bold rounded">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3, 1);
        $offset = ($data['start'] - 1) * $config['per_page'];
        $data['result'] = $this->home->getAllData($config['per_page'], $offset);

        //
        //$this->home->getID();


        $data['nama'] = $this->session->userdata('nama');
        //$data['result'] = $this->Home_model->getAllPeserta();
        //$data['kategori'] = $this->Home_model->countAllData();
        //jika sudah login
        if ($this->session->userdata('logged_in') == 'true') {
            $this->load->view('_partials/user/head', $data);
           
        } else {
            $this->load->view('_partials/head', $data);
        }
        $this->load->view('barang',$data);
    } 
    function ps ($lelang_id){
        $l;
    }

    public function Detail($id)
    {
        $id = $this->uri->segment(3);
        // $data['result']=$this->home->getById($id);
        // $lelang_id=array('lelang_id'=>$id);
        $data['result'] = $this->db->get_where('lelang',array('lelang_id'=>$id))->row();
        $data['nama']=$this->session->userdata('');
        $data['result_tawar']=$this->home->getDataTawar($id);
        $query = "select max(harga_tawar) as harga_tawar from lelang_bid";
        $data['maxtawar']= $this->db->query($query)->row_array();
        // $data['result']=$this->db->get_where('lelang',['lelang_id' => $id])->row_array();
        
        //$data['result']=$this->home->getAll();
        //$this->load->view('_partials/navbar',$data);  

        //$data['result'] = $this->Home_model->getAllPeserta();
        //$data['kategori'] = $this->Home_model->countAllData();
        //jika sudah login
        if ($this->session->userdata('logged_in') == 'true') {
            $this->load->view('_partials/user/head', $data);
           
        } else {
            $this->load->view('_partials/head', $data);
        }
        
        $this->load->view('detail',$data);
    }

}