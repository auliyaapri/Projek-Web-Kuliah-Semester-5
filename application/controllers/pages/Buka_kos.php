<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buka_kos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kos');
		$this->load->library('form_validation');
	}


	public function index()
	{

			
		// // ================ YANG BARU =====================
		// 	// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
		// 	$username = $this->session->userdata('username');
		// 	$user_data = $this->model_user->getUserIDByUsername($username);

		// 	// Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
		// 	$data['user_id'] = $user_data['id'];
		// 	$data['jenis_kelamin'] = $user_data['jenis_kelamin'];
		// 	$data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
		// 	$data['data_kelola_kos'] = $this->model_pemesanan->get_join_table_pesanan_kelola_kos($data['user_id']);
		// 	// Menambahkan user_id ke dalam data yang akan dikirim ke view

		// 	$id_pemesanan = $this->uri->segment(5);
		// 	$data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id_konfirmasi($id_pemesanan);
		// 	// Mengambil data pemesanan berdasarkan $id
		// 	// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id($id);
		// // ================ YANG BARU =====================

		// ================ YANG LAMA =====================
			// Mengambil data kos dari model
			// $data['kos_home'] = $this->model_kos->get_kos_home();

			// Menambahkan kode untuk mengambil user_id berdasarkan username
			$username = $this->session->userdata('username');
			$user_id = $this->model_user->getUserIDByUsernameOnly($username);
	
			// Menambahkan user_id ke dalam data yang akan dikirim ke view
			$data['user_id'] = $user_id;
		// ================ YANG LAMA =====================

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('buka_kos', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}

	public function tambah_kos()
	{
		// Mengambil data kos dari model
		// ================ YANG BARU =====================
			// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
			// $username = $this->session->userdata('username');
			// $user_data = $this->model_user->getUserIDByUsername($username);

			// // Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
			// $data['user_id'] = $user_data['id'];
			// $data['jenis_kelamin'] = $user_data['jenis_kelamin'];
			// $data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
			// $data['data_kelola_kos'] = $this->model_pemesanan->get_join_table_pesanan_kelola_kos($data['user_id']);
			// // Menambahkan user_id ke dalam data yang akan dikirim ke view

			// $id_pemesanan = $this->uri->segment(5);
			// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id_konfirmasi($id_pemesanan);
			// // Mengambil data pemesanan berdasarkan $id
			// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id($id_pemesanan);
		// ================ YANG BARU =====================
		
		
		// ================ YANG Lama =====================
		$data['kos_home'] = $this->model_kos->get_kos_home();

		// Menambahkan kode untuk mengambil user_id berdasarkan username
		$username = $this->session->userdata('username');
		$user_id = $this->model_user->getUserIDByUsernameOnly($username);

		// Menambahkan user_id ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_id;
		// ================ YANG Lama =====================





		// $this->form_validation->set_rules('nama_kos', 'Nama Kos', 'required', array('required' => 'Kolom %s harus diisi.'));
		// $this->form_validation->set_rules('kategori', 'Kategori', 'required', array('required' => 'Kolom %s harus diisi.'));
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => 'Kolom %s harus diisi.'));
		// $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required', array('required' => 'Kolom %s harus diisi.'));
		// $this->form_validation->set_rules('jumlah_kamar', 'jumlahkamar', 'required', array('required' => 'Kolom %s harus diisi.'));
		// Validasi lainnya sesuai kebutuhan Anda
		$this->form_validation->set_rules('nama_kos', 'Nama Kos', 'required', array('required' => 'Kolom %s harus diisi.'));

		if ($this->form_validation->run() == FALSE) {
			// Jika validasi gagal, tampilkan kembali formulir
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('buka_kos',$data);

			$this->load->view('templates/footer');
			$this->load->view('templates/script');
		} else {
			// Jika validasi berhasil, simpan data ke database
			$data = array(
				'nama_kos' => $this->input->post('nama_kos'),
				'kategori' => $this->input->post('kategori'),
				'alamat_kos' => $this->input->post('alamat_kos'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'harga' => $this->input->post('harga'),
				'nomor_rekening' => $this->input->post('nomor_rekening'),
				'bank' => $this->input->post('bank'),
				'peraturan' => $this->input->post('peraturan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'fasilitas_kamar' => $this->input->post('fasilitas_kamar') ? implode(', ', $this->input->post('fasilitas_kamar')) : '',
'fasilitas_kamar_mandi' => $this->input->post('fasilitas_kamar_mandi') ? implode(', ', $this->input->post('fasilitas_kamar_mandi')) : '',

				'user_id' => $this->input->post('user_id'),

				// Tambahkan kolom lain sesuai kebutuhan
			);

			$nama_kos = 'foto kosan';
			$nama_kos = preg_replace("/[^a-zA-Z0-9]+/", "_", $nama_kos); // Mengganti karakter tidak valid
			$config['upload_path'] = './uploads/' . $nama_kos . '/';

			if (!is_dir($config['upload_path'])) {
				mkdir($config['upload_path'], 0777, true); // Membuat direktori jika belum ada
			}

			// Fasilitas Kamar dan Fasilitas Kamar Mandi

			// Lanjutkan dengan kode upload gambar seperti yang sudah Anda lakukan

			$photo_data = array();
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$this->load->library('upload', $config);

			for ($i = 1; $i <= 5; $i++) {
				$photo_field = 'foto_kos_' . $i;

				if ($this->upload->do_upload($photo_field)) {
					$photo_data[$i] = $this->upload->data('file_name');
				} else {
					// Handle kesalahan upload gambar
					$error = $this->upload->display_errors();
					// Tindakan yang sesuai untuk kesalahan upload
					// Anda bisa menampilkan pesan kesalahan atau menghentikan proses penyimpanan
				}
			}

			// Simpan nama-nama foto dalam database
			$data['foto_kos_1'] = $photo_data[1];
			$data['foto_kos_2'] = $photo_data[2];
			$data['foto_kos_3'] = $photo_data[3];
			$data['foto_kos_4'] = $photo_data[4];
			$data['foto_kos_5'] = $photo_data[5];

			// Sekarang, $data telah disiapkan dengan nama-nama foto yang diunggah

			// Lanjutkan dengan menyimpan data ke database
			$this->model_kos->insert_kos($data);

			// Redirect ke halaman lain atau tampilkan pesan sukses
			$this->session->set_flashdata('success_buka_kos', 'Berhasil melakukan ');
			redirect(base_url('buka_kos'));
		}
	}
}
