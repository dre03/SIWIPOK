<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapengguna extends CI_Controller {

    public function index(){
        $this->load->model('users_model','users');

        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('datapengguna/index',$data);
        $this->load->view('layouts/footer');
        
    }
    public function view(){
        $_username = $this->input->get('id');
        $this->load->model('users_model','users');
        $data['usr']=$this->users->findById($_username);

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('datapengguna/view',$data);
        $this->load->view('layouts/footer');


    }
    public function delete(){
        $_id = $this->input->get('id'); 
        $this->load->model('users_model','users');
        $this->users->delete($_id);
        redirect(base_url(). 'index.php/datapengguna/');
    }

    public function edit(){
        $_id = $this->input->get('id'); 
        $this->load->model('users_model','users');
        $usredit = $this->users->findById($_id);
        $data['judul']='Form Update User Data Pengguna';
        $data['usredit']=$usredit;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('datapengguna/edit',$data);
        $this->load->view('layouts/footer');
    }

    public function save(){
        $this->load->model('users_model','users');

        
        // $_id = $this->input->get('id');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
        $_idedit  = $this->input->post('idedit'); //hidden field

        $data_usr[]=$_username;
        $data_usr[]=$_password;
        $data_usr[]=$_email;
        $data_usr[]=$_status;
        $data_usr[]=$_role;

        if(isset($_idedit)){
            //update 
            $data_usr[]=$_idedit;
            $this->users->update($data_usr);
        }else{
            //save
            $this->users->save($data_usr);
        }
        // redirect(base_url(). 'index.php/datapengguna/view?id='.$_id,'refresh');
        redirect(base_url(). 'index.php/datapengguna/');
    }
}

?>