<?php
class Wisata extends CI_Controller
{

	public function index()
	{
		$this->load->model('m_wisata');
		$data['jenis'] = $this->m_wisata->get_jenis();
		$data['kecamatan'] = $this->m_wisata->get_kec();
		$data['wisata'] = $this->m_wisata->get_all();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('wisata/wisata', $data);
		$this->load->view('layouts/footer');
	}

	public function detail($id)
	{
		$this->load->model('m_wisata');
		$detail = $this->m_wisata->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('wisata/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function tambah_data()
	{
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$jenis_id = $this->input->post('jenis_wisata');
		$harga_tiket = $this->input->post('harga_tiket');
		$rating = $this->input->post('rating');
		$fasilitas = $this->input->post('fasilitas');
		$alamat = $this->input->post('alamat');
		$kecamatan_id = $this->input->post('kecamatan');
		$website = $this->input->post('website');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$foto1 = $_FILES['foto1'];
		$foto2 = $_FILES['foto2'];
		$foto3 = $_FILES['foto3'];
		if ($foto1 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto1')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto1 = $this->upload->data('file_name');
			}
		}

		if ($foto2 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto2')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto2 = $this->upload->data('file_name');
			}
		}

		if ($foto3 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto3')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto3 = $this->upload->data('file_name');
			}
		}



		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'jenis_id' => $jenis_id,
			'harga_tiket' => $harga_tiket,
			'skor_rating' => $rating,
			'fasilitas' => $fasilitas,
			'alamat' => $alamat,
			'kecamatan_id' => $kecamatan_id,
			'website' => $website,
			'lat'  =>  $lat,
			'long'  => $lng,
			'foto1' => $foto1,
			'foto2' => $foto2,
			'foto3' => $foto3
		);

		$this->m_wisata->save($data, 'tempat_wisata');
		redirect('wisata/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_wisata->hapus_data($where, 'tempat_wisata');
		redirect('wisata/index');
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['jenis'] = $this->m_wisata->get_jenis();
		$data['kecamatan'] = $this->m_wisata->get_kec();
		$data['wisata'] = $this->m_wisata->edit_data($where, 'tempat_wisata')->result();

		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('wisata/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$deskripsi = $this->input->post('deskripsi');
		$nama = $this->input->post('nama');
		$jenis_id = $this->input->post('jenis_wisata');
		$harga_tiket = $this->input->post('harga_tiket');
		$fasilitas = $this->input->post('fasilitas');
		$alamat = $this->input->post('alamat');
		$kecamatan_id = $this->input->post('kecamatan');
		$website = $this->input->post('website');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$foto1 = $_FILES['foto1'];
		$foto2 = $_FILES['foto2'];
		$foto3 = $_FILES['foto3'];
		if ($foto1 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto1')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto1 = $this->upload->data('file_name');
			}
		}

		if ($foto2 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto2')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto2 = $this->upload->data('file_name');
			}
		}

		if ($foto3 = '') {
		} else {
			$config['upload_path'] = './assets/dist/upload';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto3')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto3 = $this->upload->data('file_name');
			}
		}

		$data = array(

			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'jenis_id' => $jenis_id,
			'harga_tiket' => $harga_tiket,
			'fasilitas' => $fasilitas,
			'alamat' => $alamat,
			'kecamatan_id' => $kecamatan_id,
			'website' => $website,
			'lat'  =>  $lat,
			'long' => $lng,
			'foto1' => $foto1,
			'foto2' => $foto2,
			'foto3' => $foto3
		);

		$where = array(
			'id' => $id
		);

		$this->m_wisata->update_data($where, $data, 'tempat_wisata');
		redirect('wisata/detail/' . $id);
	}

	public function datawisata()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('wisata/data_wisata');
		$this->load->view('layouts/footer');
	}

	public function landingpage(){
		$this->load->view('landing');
	}
}
