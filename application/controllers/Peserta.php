<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller{

    // public function index(){
    //     //$this->load->view('peserta');

    //     $data['nama'] = $this->session->userdata('nama');
    //     //jika sudah login
    //     if ($this->session->userdata('logged_in') == 'true') {
    //         $this->load->view('templates/user/header', $data);
    //         $this->load->view('index-login', $data);
    //         $this->load->view('templates/user/footer');
    //     } else {
    //         $this->load->view('templates/header');
    //         $this->load->view('index-nologin', $data);
    //         $this->load->view('templates/footer');
    //     }
    // }



    public function index()
    {
        $this->load->view('peserta');

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

}