<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_kos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kos');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$username = $this->session->userdata('username'); // Gantilah dengan id pengguna yang sesuai
		$data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
		// Mendapatkan data dari table pemasanan
		$user_id = $this->model_user->getUserIDByUsername($username);
		// Menambahkan user_id ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_id;
		$data['data_pemesanan'] = $this->model_pemesanan->get_join_table_pesanan_kelola_kos($user_id);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/kelola_kos', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}

	public function detail($id)
	{
		// ===== Menapatkan ID dari Setiap USER  =====
		$username = $this->session->userdata('username'); // Gantilah dengan id pengguna yang sesuai
		$data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
		$user_id = $this->model_user->getUserIDByUsername($username);
		$data['user_id'] = $user_id;
		// ===== END Menapatkan ID dari Setiap USER =====

		$data['kos_detail'] = $this->model_kos->get_kos_by_id($id);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/detail_kos', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}
	public function edit($id)
	{
		// ===== Menapatkan ID dari Setiap USER  =====
		$username = $this->session->userdata('username'); // Gantilah dengan id pengguna yang sesuai
		$data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
		$user_id = $this->model_user->getUserIDByUsername($username);
		$data['user_id'] = $user_id;
		// ===== END Menapatkan ID dari Setiap USER =====
		$data['kos_edit_detail'] = $this->model_kos->get_kos_by_id($id);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/edit_kos', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}


	public function update($id)
	{
		// Ambil data kos berdasarkan $id dari database
		$data['kos_edit_detail'] = $this->model_kos->get_kos_by_id($id);

		// Validasi formulir pengeditan, sesuaikan dengan kebutuhan Anda
		$this->form_validation->set_rules('nama_kos', 'Nama Kos', 'required', array('required' => 'Kolom %s harus diisi.'));
		$this->form_validation->set_rules('kategori', 'Kategori Kos', 'required', array('required' => 'Kategori harus diisi.'));
		$this->form_validation->set_rules('jumlah_kamar', 'Jumlah_kamar Kos', 'required', array('required' => 'Jumlah Kamar harus diisi.'));
		// Tambahkan validasi lainnya sesuai kebutuhan Anda

		if ($this->form_validation->run() == FALSE) {
			// Jika validasi gagal, tampilkan kembali formulir pengeditan
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('kos/edit_kos', $data);
			$this->load->view('templates/footer');
			$this->load->view('templates/script');
			$this->load->view('templates/sweetalert');
		} else {
			// Jika validasi berhasil, simpan data yang diperbarui ke database
			$data = array(
				'nama_kos' => $this->input->post('nama_kos'),
				'kategori' => $this->input->post('kategori'),
				'kategori' => $this->input->post('kategori'),
				// Isi kolom lain sesuai kebutuhan
			);

			// Fasilitas Kamar
			if ($this->input->post('fasilitas_kamar')) {
				$data['fasilitas_kamar'] = implode(', ', $this->input->post('fasilitas_kamar'));
			} else {
				$data['fasilitas_kamar'] = ''; // Atau set null jika tidak ada yang dipilih
			}

			// Fasilitas Kamar Mandi
			if ($this->input->post('fasilitas_kamar_mandi')) {
				$data['fasilitas_kamar_mandi'] = implode(', ', $this->input->post('fasilitas_kamar_mandi'));
			} else {
				$data['fasilitas_kamar_mandi'] = ''; // Atau set null jika tidak ada yang dipilih
			}

			// Sekarang, $data telah disiapkan sesuai dengan input form Anda dan siap untuk diperbarui ke database

			// Simpan data yang diperbarui ke database
			$this->model_kos->update_kos($id, $data);

			// Redirect ke halaman lain atau tampilkan pesan sukses
			$this->session->set_flashdata('success_edit_kos', 'Berhasil memperbarui kos');
			redirect(base_url('kelola_kos'));
		}
	}
}
