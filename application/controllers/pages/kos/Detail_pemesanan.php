// application/controllers/pages/kos/Detail_pemesanan.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pemesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang dibutuhkan
        $this->load->model('Model_pemesanan'); // Ganti sesuai dengan model yang Anda gunakan
    }

    public function index() {
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
}
