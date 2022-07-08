<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->model('m_wisata');
		$data['jenis'] = $this->m_wisata->get_jenis();
		$data['kecamatan'] = $this->m_wisata->get_kec();
		$data['wisata'] = $this->m_wisata->get_all();
        $this->load->view('Home/index', $data);
    }

    public function home(){
        $this->load->model('m_wisata');
		$data['jenis'] = $this->m_wisata->get_jenis();
		$data['kecamatan'] = $this->m_wisata->get_kec();
		$data['wisata'] = $this->m_wisata->get_all();
        $this->load->view('Home/header');
        $this->load->view('Home/home', $data);
    }
    
    public function detail(){
		$this->load->model('m_wisata');
        $id = $this->input->get('id');
		$detail = $this->m_wisata->detail_data($id);
		$data['detail'] = $detail;
        $this->load->model('M_komentar');
		$data['komentar'] = $this->M_komentar->getByWisataId($id);
		$this->load->view('Home/detail', $data);
	}
}