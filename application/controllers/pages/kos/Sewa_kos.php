<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa_kos extends CI_Controller
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
    

    public function tambah_kos()
    {
        $this->load->model('Model_pemesanan');
        $this->load->model('Model_kos');


        $this->form_validation->set_rules('durasi_sewa', 'Durasi_sewa', 'required', ['required' => 'Durasi Sewa Wajib diisi!']);
        // $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan kembali fo rmulir dengan pesan kesalahan
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('kos/sewa_kos');
            $this->load->view('templates/footer');
            $this->load->view('templates/script');
        } else {
            $kos_id = $this->input->post('kos_id');
            $jumlah_kamar_dipesan = $this->input->post('jumlah_kamar');

            // Validasi apakah masih ada kamar yang tersedia
            $jumlah_kamar_tersedia = $this->Model_kos->get_jumlah_kamar_by_id($kos_id);

            if ($jumlah_kamar_tersedia >= $jumlah_kamar_dipesan) {
                // Validasi berhasil, simpan data ke database
                $data = array(
                    'penyewa_id' => $this->input->post('penyewa_id'),
                    'pemilik_id' => $this->input->post('pemilik_id'),
                    'jumlah_kamar' => $jumlah_kamar_dipesan,
                    'kos_id' => $kos_id,
                    'tanggal_pemesanan' => date('Y-m-d'),
                    'tanggal_checkin' => $this->input->post('tanggal_checkin'),
                    'tanggal_checkout' => date('Y-m-d', strtotime('+' . $this->input->post('durasi_sewa') . ' days', strtotime($this->input->post('tanggal_checkin')))),
                    'status' => 'PENDING',
                    'durasi_sewa' => $this->input->post('durasi_sewa'),
                    'nomor_rekening_penyewa' => $this->input->post('nomor_rekening_penyewa'),
                    'bukti_pembayaran' => $this->input->post('bukti_pembayaran'),
                    'biaya_layanan' => $this->input->post('biaya_layanan'),
                );

                $this->Model_pemesanan->tambah_pemesanan($data, 'pemesanan');

                // Kurangi jumlah kamar di Model_kos
                $this->Model_kos->kurangi_jumlah_kamar($kos_id, $jumlah_kamar_dipesan);

                // Redirect ke halaman sukses atau yang lain        
        $this->session->set_flashdata('success_menyewa_kos', 'Berhasil melakukan ');
        redirect(base_url('welcome'));
            } else {
                // Jika tidak ada kamar yang tersedia, tampilkan pesan kesalahan
                $this->session->set_flashdata('pesan_error', 'Kamar tidak tersedia.');
                redirect(base_url('kos/sewa_kos'));
            }
        }




    }
}