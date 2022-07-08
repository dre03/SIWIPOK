<?php
class Home extends CI_Controller{
    function __construct()
    {
        // parent::__construct();
        // $this->load->model('m_wisata','wisata');
    }
    public function index(){
        echo "HAIII";
		// $data['jenis'] = $this->wisata->get_jenis();
		// $data['kecamatan'] = $this->wisata->get_kec();
		// $data['wisata'] = $this->wisata->get_all();
        // $this->load->view('Home/index', $data);
    }

    public function home(){
		$data['jenis'] = $this->wisata->get_jenis();
		$data['kecamatan'] = $this->wisata->get_kec();
		$data['wisata'] = $this->wisata->get_all();
        $this->load->view('Home/header');
        $this->load->view('Home/home', $data);
    }
    
    public function detail(){
        $id = $this->input->get('id');
		$detail = $this->wisata->detail_data($id);
		$data['detail'] = $detail;
        $this->load->model('M_komentar');
		$data['komentar'] = $this->M_komentar->getByWisataId($id);
		$this->load->view('Home/detail', $data);
	}
}