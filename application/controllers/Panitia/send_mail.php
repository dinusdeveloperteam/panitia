<?php
class Send_mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('user_model');
    }
    
    function index()
    {
         //insert the user registration details into database
         $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        // insert form data into database
        if ($this->user_model->insertUser($data))
        {
            // send email
            if ($this->user_model->sendEmail($this->input->post('email')))
            {
                // successfully sent mail
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                redirect('user/register');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('user/register');
            }
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
            redirect('user/register');
        }
    }
}


          
?>