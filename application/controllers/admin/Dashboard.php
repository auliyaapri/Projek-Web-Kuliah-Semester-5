<?php
class Dashboard extends CI_Controller {
   
    public function __construct()
    {
        parent::__construct();
        // ini untuk membuat halaman admin harus login dulu baru bisa di buka
        if ($this->session->userdata('username') === NULL) {
            $this->session->set_flashdata('belum_login_user', 'Berhasil melakukan ');                    
            redirect('auth/login');
        } elseif ($this->session->userdata('username') !== "admin") {
            $this->session->set_flashdata('bukan_admin', 'Berhasil melakukan ');                    
            redirect('auth/login');
        } 
    }
    
    public function index() {
        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/sweetalert');

    }
}
