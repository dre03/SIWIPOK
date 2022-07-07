<?php
class Kelompok extends CI_Controller{
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Kelompok');
        $this->load->view('layouts/footer');

    }
}