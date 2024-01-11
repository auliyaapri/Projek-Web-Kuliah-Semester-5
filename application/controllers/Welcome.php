<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// ============= YANG LAMA =============
	// public function index()
	// {
	// 	$data['kos_home'] = $this->model_kos->get_kos_home();
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/navbar');
	// 	$this->load->view('home',$data);
	// 	$this->load->view('templates/footer');
	// 	$this->load->view('templates/script');
	// 	$this->load->view('templates/sweetalert');
	// }
	// ============= YANG LAMA =============

	public function index()
	{
		// Mengambil data kos dari model
		$data['kos_home'] = $this->model_kos->get_kos_home();
	
		// Menambahkan kode untuk mengambil user_id dan jenis_kelamin berdasarkan username
		$username = $this->session->userdata('username');
		$user_data = $this->model_user->getUserIDByUsername($username);
	
		// Menambahkan user_id dan jenis_kelamin ke dalam data yang akan dikirim ke view
		$data['user_id'] = $user_data['id'];
		$data['jenis_kelamin'] = $user_data['jenis_kelamin'];
	
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
	
		// Mengirim data ke view 'home'
		$this->load->view('home', $data);
	
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}
	
}
