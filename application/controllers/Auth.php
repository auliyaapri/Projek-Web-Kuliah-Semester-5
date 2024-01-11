<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
            $this->load->view('templates/sweetalert');
            $this->load->view('templates/script');
        } else {
                $username = $this->input->post('username');
            $password = $this->input->post('password');

            $auth = $this->model_auth->cek_login($username, $password); // Menyediakan username dan password

            if ($auth == FALSE) {
                $this->session->set_flashdata('salah_login', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau Password!</strong> Anda Salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);

                // Tambahkan periksa rolenya di sini
                if ($auth->role == 'admin') {
                    $this->session->set_flashdata('success_login', 'Berhasil melakukan ');
                    
                    redirect('admin/dashboard');
                } else if ($auth->role == 'user') {
                    $this->session->set_flashdata('success_login', 'Berhasil melakukan ');
                    redirect('welcome');
                }
            }
        }
    }



    public function register()
    {
        $this->load->view('register');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
    
}


