<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        $this->load->view('User/login_peserta');

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


function __construct()
{
    parent::__construct();
    $this->load->library('form_validation');
    $this->CI = &get_instance();
    $this->load->model('Home_model','home');
}
  
public function peserta()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('User/login_peserta');
		} else {
			//cek user customer
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->home->getUserPassPeserta($username, $password);
			if ($query->num_rows() > 0) {
				$data = $query->row();
				//cek status customer
				if ($data->status == 1) {
					// if ($data->is_active == 1) {
						$this->CI->session->set_userdata('peserta_id', $data->peserta_id);
						$this->CI->session->set_userdata('nama', $data->nama);
						$this->CI->session->set_userdata('username', $data->username);
						//$this->CI->session->set_userdata('password', $data->password);
						$this->CI->session->set_userdata('email', $data->email);
						//$this->CI->session->set_userdata('no_telp', $data->no_telp);
						$this->CI->session->set_userdata('role', 4);
						$this->CI->session->set_userdata('logged_in', true);
						redirect('peserta');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . 'Akun anda belum diverifikasi. Silahkan cek email anda atau hubungi panitia!' . '</div>');
						redirect('user/login_peserta');
					}
				// } else {
				// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . 'Akun anda terkena blokir. Silahkan hubungi Admin!' . '</div>');
				// 	redirect('login');
				// }
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . 'Username dan Password tidak cocok atau akun belum terdaftar. Silahkan lakukan registrasi!' . '</div>');
				redirect('User/login_peserta');
			}
		}
	}
}


// if ($this->session->userdata('logged_in') == 'true') {
//     $this->load->view('templates/user/header', $data);
//     $this->load->view('edit_profil');
//     $this->load->view('templates/user/footer');
// } else {
//     $this->load->view('templates/header');
//     $this->load->view('edit_profil');
//     $this->load->view('templates/footer');
// 
