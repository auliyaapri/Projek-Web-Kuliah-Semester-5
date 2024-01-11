<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_kos extends CI_Controller
{


    public function index($id)
    {
        // Mengambil data kos berdasarkan ID
        $data['kos_detail'] = $this->model_kos->get_kos_by_id($id);

        // Menambahkan kode untuk mengambil user_id berdasarkan username
        $username = $this->session->userdata('username');
        $user_data = $this->model_user->getUserIDByUsername($username);


        // Menambahkan user_id ke dalam data yang akan dikirim ke view
        $data['user_id'] = $user_data['id'];
		$data['jenis_kelamin'] = $user_data['jenis_kelamin'];

        // Mengambil data kos untuk tujuan lain (misalnya, di bagian lain dari halaman)
        $dataa['kos_home'] = $this->model_kos->get_kos_home();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('detail_kos', $data, $dataa); // Perhatikan penggabungan data dalam satu parameter
        $this->load->view('templates/footer');
        $this->load->view('templates/script');
    }
}
