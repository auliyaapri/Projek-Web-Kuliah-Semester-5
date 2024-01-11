<?php
class Register extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nomor_ktp', 'Nomor KTP', 'required|exact_length[16]|is_unique[User.nomor_ktp]', [
            'required' => 'Nomor KTP Wajib diisi!',
            'exact_length' => 'Nomor KTP harus terdiri dari 16 digit.',
            'is_unique' => 'Nomor KTP ini sudah terdaftar.'
        ]);
    
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[User.username]|regex_match[/^[^\s]+$/]', [
            'required' => 'Username Wajib diisi!',
            'is_unique' => 'Username ini sudah digunakan.',
            'regex_match' => 'Username tidak boleh mengandung spasi!'
        ]);
    
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', ['required' => 'Nama Lengkap Wajib diisi!']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis kelamin Wajib diisi!']);
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required', ['required' => 'Alamat Wajib diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[User.email]', [
            'required' => 'Email Wajib diisi!',
            'valid_email' => 'Format Email tidak valid.',
            'is_unique' => 'Email ini sudah terdaftar.'
        ]);
        $this->form_validation->set_rules('no_telpon', 'No Telpon', 'required', ['required' => 'Nomor hp Wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[password2]', [
            'required' => 'Password Wajib diisi!',
            'min_length' => 'Password minimal harus terdiri dari 6 karakter.',
            'matches' => 'Password Tidak Cocok!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]', [
            'required' => 'Password Wajib diisi!',
            'matches' => 'Password Tidak Cocok!'
        ]);
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = array(
                'nomor_ktp' => $this->input->post('nomor_ktp'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'no_telpon' => $this->input->post('no_telpon'),
                'password' => $this->input->post('password'),
                'role' => "user",
            );
    
            $this->db->insert('user', $data);
            $this->session->set_flashdata('success_daftar', 'Berhasil melakukan registrasi.');
            redirect('auth/login');
        }
    }
    
    
}
