<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->load->view('contact');
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
		$this->load->view('templates/sweetalert');
	}
	public function kirim_pesan()
	{
		// Memeriksa apakah sudah  
		// Memeriksa apakah data yang dikirimkan melalui form sudah valid
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Anda Wajib diisi!']);
		$this->form_validation->set_rules('subjek', 'Subjek', 'required', ['required' => 'Subjek Wajib diisi!']);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Email Wajib diisi!']);
		$this->form_validation->set_rules('isi_pesan', 'Isi_pesan', 'required', ['required' => 'Pesan Anda Wajib diisi!']);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_contact', 'Pesan Anda telah berhasil dikirim. Anda akan menerima balasan melalui email yang telah Anda masukkan.');
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('contact');
			$this->load->view('templates/footer');
			$this->load->view('templates/script');
			$this->load->view('templates/sweetalert');
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$subjek = $this->input->post('subjek');
			$isi_pesan = $this->input->post('isi_pesan');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'subjek' => $subjek,
				'isi_pesan' => $isi_pesan,
			);

			// Menyimpan pesan ke dalam tabel 'message' menggunakan model
			$this->model_pesan->tambah_pesan($data, 'message');

			$this->session->set_flashdata('success_contact', 'Pesan Anda telah berhasil dikirim. Anda akan menerima balasan melalui email yang telah Anda masukkan.');
			redirect('pages/contact');
		}
	}
}
