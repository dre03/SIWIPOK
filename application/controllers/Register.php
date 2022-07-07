<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index(){
        $this->load->model('register_model','register');
        $this->load->view('register');
    }

    public function save(){
        $this->load->model('register_model','register');

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');

        $data_usr[]=$_username;
        $data_usr[]=$_password;
        $data_usr[]=$_email;
        $data_usr[]=$_role;
        $this->register->save($data_usr);

        redirect(base_url(). 'index.php/login', 'refresh');
    }
        
}

?>