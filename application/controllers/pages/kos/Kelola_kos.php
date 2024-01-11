<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_kos extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		// ini untuk membuat halaman admin harus login dulu baru bisa di buka
		if ($this->session->userdata('username') === NULL) {
			$this->session->set_flashdata('belum_login_user', 'Berhasil melakukan ');
			redirect('auth/login');
		}

		$this->load->model('model_kos');
		$this->load->library('form_validation');
	}


	public function index()
	{
		// ================ YANG BARU =====================
		// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
		$username = $this->session->userdata('username');
		$user_data = $this->model_user->getUserIDByUsername($username);

		// Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_data['id'];
		$data['jenis_kelamin'] = $user_data['jenis_kelamin'];
		$data['koss'] = $this->model_kos->get_kos_by_user_id_username($username);
		// $data['data_kelola_kos'] = $this->model_pemesanan->get_join_table_pesanan_kelola_kos($data['user_id']);
		$data['data_kelola_kos'] = $this->model_pemesanan->get_join_table_pesanan_kelola_kos($data['user_id']);

		
		// Menambahkan user_id ke dalam data yang akan dikirim ke view

		// $id_pemesanan = $this->uri->segment(5);
		// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id_konfirmasi($id_pemesanan);
		// Mengambil data pemesanan berdasarkan $id
		// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id($id);
		// ================ YANG BARU =====================


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
				$user_id = $this->model_user->getUserIDByUsernameOnly($username);

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
		$this->form_validation->set_rules('peraturan', 'Peraturan Kos', 'required', array('required' => 'Peraturan harus diisi.'));
		$this->form_validation->set_rules('alamat_kos', 'Alamat Kos', 'required', array('required' => 'Aalamat Kos harus diisi.'));

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
				'peraturan' => $this->input->post('peraturan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'alamat_kos' => $this->input->post('alamat_kos'),
				'bank' => $this->input->post('bank'),
				'nomor_rekening' => $this->input->post('nomor_rekening'),
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

			// Cek apakah ada gambar baru yang diunggah dan proses gambar-gambar ini
			$image_fields = ['foto_kos_1', 'foto_kos_2', 'foto_kos_3', 'foto_kos_4', 'foto_kos_5'];
			foreach ($image_fields as $image_field) {
				if (!empty($_FILES[$image_field]['name'])) {
					$upload_result = $this->upload_image($image_field);

					if ($upload_result['success']) {
						// Hapus gambar lama jika perlu
						$old_image_path = 'uploads/foto_kosan/' . $data[$image_field];
						if (!empty($data[$image_field]) && file_exists($old_image_path)) {
							unlink($old_image_path);
						}

						// Simpan nama gambar baru ke database
						$data[$image_field] = $upload_result['file_name'];
					} else {
						// Jika upload gambar gagal, tampilkan pesan error
						$this->session->set_flashdata('error_edit_kos', $upload_result['error']);
						redirect(base_url('kelola_kos'));
					}
				}
			}

			// Simpan data yang diperbarui ke database
			$this->model_kos->update_kos($id, $data);

			// Redirect ke halaman lain atau tampilkan pesan sukses
			$this->session->set_flashdata('success_edit_kos', 'Berhasil memperbarui kos');
			redirect(base_url('kelola_kos'));
		}
	}

	public function upload_image($field_name)
	{
		$username = $this->session->userdata('username');
		$result = ['success' => false, 'error' => ''];
		// Validasi gambar, pastikan itu gambar yang sah (misalnya: jpg, png)
		$config['upload_path'] = 'uploads/foto_kosan/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		// $config['max_size'] = 2048; // Ukuran maksimum gambar (dalam KB)

		// Perubahan di sini, nama file akan disesuaikan dengan username
		$config['file_name'] = $username . '.jpg';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload($field_name)) {
			// Gambar berhasil diunggah
			$upload_data = $this->upload->data();
			$result['success'] = true;
			$result['file_name'] = $upload_data['file_name'];
		} else {
			// Jika upload gambar gagal, catat pesan error
			$result['error'] = $this->upload->display_errors();
		}

		return $result;
	}

	public function ubah_status($id)
	{
		$data['kos_update_status'] = $this->model_kos->get_kos_by_id($id);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/konfirmasi_pemesanan', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}


	public function hapus_konfirmasi($id)
	{
		// Mengambil data kosan dari database berdasarkan $id
		$data_kos = $this->model_kos->get_kos_by_id_hapus_kos($id);
	
		// Menghapus gambar-gambar terkait
		$image_fields = ['foto_kos_1', 'foto_kos_2', 'foto_kos_3', 'foto_kos_4', 'foto_kos_5'];
		foreach ($image_fields as $image_field) {
			$image_path = 'uploads/foto_kosan/' . $data_kos->$image_field;
			if (!empty($data_kos->$image_field) && file_exists($image_path)) {
				unlink($image_path); // Hapus gambar dari folder
			}
		}
	
		// Hapus data kosan dari database
		$this->model_kos->hapus_kos($id);
	
		// Redirect ke halaman lain atau tampilkan pesan sukses
		$this->session->set_flashdata('success_hapus_kos', 'Kosan berhasil dihapus.');
		redirect(base_url('kelola_kos'));
	}
	


}
