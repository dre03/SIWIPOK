<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->model('M_wisata');
		$data['jenis'] = $this->M_wisata->get_jenis();
		$data['kecamatan'] = $this->M_wisata->get_kec();
		$data['wisata'] = $this->M_wisata->get_all();
        $this->load->view('Home/index', $data);
    }

    public function homes(){
        $this->load->model('M_wisata');
		$data['jenis'] = $this->M_wisata->get_jenis();
		$data['kecamatan'] = $this->M_wisata->get_kec();
		$data['wisata'] = $this->M_wisata->get_all();
        $this->load->view('Home/header');
        $this->load->view('Home/home', $data);
    }
    
    public function detail(){
		$this->load->model('M_wisata');
        $id = $this->input->get('id');
		$detail = $this->M_wisata->detail_data($id);
		$data['detail'] = $detail;
        $this->load->model('M_komentar');
		$data['komentar'] = $this->M_komentar->getByWisataId($id);
		$this->load->view('Home/detail', $data);
	}
}
?>