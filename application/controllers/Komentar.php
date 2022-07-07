<?php
class Komentar extends CI_Controller
{

    public function index()
    {
        $this->load->model('m_komentar');
        $data['user'] = $this->m_komentar->get_data();
        $data['komentar'] = $this->m_komentar->get_all();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('komen/komentar', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id)
	{
		$this->load->model('m_komentar');
		$detail = $this->m_komentar->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('komen/detail', $data);
		$this->load->view('layouts/footer');
	}

    public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_wisata->hapus_data($where, 'komentar');
		redirect('komentar/index');
	}
    
	public function tambah_komen(){
		$this->load->model('M_komentar');
		$wisata_id = $this->input->post('wisata_id');
		$nilai_rating_id = $this->input->post('nilai_rating_id');
		$isi = $this->input->post('isi');
		
		$data = array(
			'wisata_id' => $wisata_id,
			'nilai_rating_id' => $nilai_rating_id,
			'isi' => $isi,
			'users_id' => $this->session->userdata('USER')->id
		);
		// var_dump($data);
		// die();
		$this->M_komentar->save($data, 'komentar');
		$this->skor_average($wisata_id);
		redirect("Home/detail?id=$wisata_id");
	}

	public function skor_average($wisata_id){
		$this->load->model('M_komentar');
		$komentar = $this->M_komentar->getByWisataId($wisata_id);
		
		$sum = 0;
		foreach($komentar as $komen){
			$sum += $komen->nilai_rating_id;
		}
		$count = count($komentar);
		$average = $sum / $count;
		$average = round($average, 1);

		$this->load->model('m_wisata');
		$this->m_wisata->update_skor($average, $wisata_id);


	}


}
