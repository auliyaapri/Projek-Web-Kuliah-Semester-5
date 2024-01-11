<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_kos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// ini untuk membuat halaman admin harus login dulu baru bisa di buka
		if ($this->session->userdata('username') === NULL) {
			$this->session->set_flashdata('belum_login_user', 'Berhasil melakukan ');
			redirect('auth/login');
		}
		$this->load->model('Model_pemesanan');
	}

	public function index()
	{

		// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
		$username = $this->session->userdata('username');
		$user_data = $this->model_user->getUserIDByUsername($username);

		// Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_data['id'];
		$data['jenis_kelamin'] = $user_data['jenis_kelamin'];
		$data['data_pemesanan'] = $this->model_pemesanan->get_join_table_pemesanan($data['user_id']);


		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/pemesanan', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}

	public function konfirmasi()
	{

		// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
		$username = $this->session->userdata('username');
		$user_data = $this->model_user->getUserIDByUsername($username);

		// Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_data['id'];
		$data['jenis_kelamin'] = $user_data['jenis_kelamin'];

		// Menambahkan user_id ke dalam data yang akan dikirim ke view

		$id_pemesanan = $this->uri->segment(5);
		$data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id_konfirmasi($id_pemesanan);
		// Mengambil data pemesanan berdasarkan $id
		// $data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id($id);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/user_sewa/pemesanan_konfirmasi', $data); // Gantilah dengan view yang sesuai
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}

	public function update_pemesanan()
	{
		$id_pemesanan 			= $this->input->post('pemesanan_id');
		$nomor_rekening_penyewa = $this->input->post('nomor_rekening_penyewa');
		$bank_penyewa 			= $this->input->post('bank_penyewa');
		$status 				= $this->input->post('status');
		$biaya_layanan 			= $this->input->post('biaya_layanan');

		// Mengelola unggah berkas bukti pembayaran
		$config['upload_path'] 		= './uploads/bukti_pembayaran/'; // Sesuaikan dengan direktori penyimpanan Anda
		$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
		// $config['max_size'] = 2048; // Ukuran maksimal berkas dalam kilobita (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('bukti_pembayaran')) {
			$upload_data = $this->upload->data();
			$bukti_pembayaran = $upload_data['file_name'];

			// Update data pemesanan dengan nomor rekening, status, dan nama berkas bukti pembayaran
			$data = array(
				'nomor_rekening_penyewa' => $nomor_rekening_penyewa, 
				'bank_penyewa' => $bank_penyewa,
				'status' => $status, 
				'bukti_pembayaran' => $bukti_pembayaran,
				'biaya_layanan' => $biaya_layanan
			);

			$this->model_pemesanan->update_pemesanan($id_pemesanan, $data);

			// Redirect atau tampilkan pesan sukses
			$this->session->set_flashdata('success_konfirmasi', 'Pemesanan berhasil diperbarui.');
			redirect('pages/kos/pemesanan_kos');
		} else {
			// Jika unggah gagal, tampilkan pesan error
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('error_message', $error);
			redirect('pages/kos/pemesanan_kos');
		}
	}

	public function detail()
	{
		// Ambil data pemesanan berdasarkan ID yang dikirim melalui URL
		$username = $this->session->userdata('username');
		$user_id = $this->model_user->getUserIDByUsername($username);

		// Menambahkan user_id ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_id;

		$id_pemesanan = $this->uri->segment(5);
		$data['pemesanan'] = $this->model_pemesanan->get_pemesanan_by_id_konfirmasi($id_pemesanan);

		// Mengambil data pemesanan berdasarkan $id

		// Tampilkan view untuk menampilkan detail pemesanan
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('kos/user_sewa/detail', $data); // Gantilah dengan view yang sesuai
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}

	public function konfirmasi_sewa_kos()
	{
		$id_pemesanan = $this->input->post('pemesanan_id');
		$status = $this->input->post('status');

		// Periksa apakah data telah diterima dengan benar sebelum melanjutkan
		if ($id_pemesanan !== null && $status !== null) {
			// Data diterima dengan benar
			$data = array(
				'status' => $status
			);

			// Panggil fungsi update_pemesanan pada model_pemesanan
			$this->model_pemesanan->update_pemesanan($id_pemesanan, $data);

			// Set pesan sukses
			$this->session->set_flashdata('success_konfirmasi_sewa_kos_pemilik', 'Pemesanan berhasil diperbarui.');
		}

		// Alihkan kembali ke halaman index
		redirect('pages/kos/Kelola_kos/index');
	}
	
	
	public function konfirmasi_selesai()
	{
		$id_pemesanan = $this->input->post('pemesanan_id');
		$status = $this->input->post('status');

		// Periksa apakah data telah diterima dengan benar sebelum melanjutkan
		if ($id_pemesanan !== null && $status !== null) {
			// Data diterima dengan benar
			$data = array(
				'status' => $status
			);

			// Panggil fungsi update_pemesanan pada model_pemesanan
			$this->model_pemesanan->update_pemesanan($id_pemesanan, $data);

			// Set pesan sukses
			$this->session->set_flashdata('success_konfirmasi_sewa_kos_pemilik', 'Pemesanan berhasil diperbarui.');
		}

		// Alihkan kembali ke halaman index
		redirect('pages/kos/Kelola_kos/index');
	}




	public function batalkan()
	{
	}
}
