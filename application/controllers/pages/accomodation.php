<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accomodation extends CI_Controller
{


	public function index()
	{
		// Mengambil data kos dari model
		$data['kos_home'] = $this->model_kos->get_kos_home();

		// Menambahkan kode untuk mengambil user_id berdasarkan username
		$username = $this->session->userdata('username');
		$user_id = $this->model_user->getUserIDByUsername($username);

		// Menambahkan user_id ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_id;

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('accomodation', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
	}
}
