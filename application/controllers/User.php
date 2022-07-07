<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('user');
        $this->load->view('layouts/footer');
    }
}
