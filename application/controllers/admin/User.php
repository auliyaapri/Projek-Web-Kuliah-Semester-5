<?php
class User extends CI_Controller
{
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
    public function index()
    {
        $data['users'] = $this->model_user->get_users();
        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/sweetalert');
    }

    public function hapus($id)
    {
        $this->model_user->hapus_data($id);
        $this->session->set_flashdata('success_hapus_user', 'User Berhasil Dihapus! ');
        redirect('admin/user');
    }


    public function edit($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $data['user'] = $this->model_user->getUserByID($id);

        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user/edit', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/sweetalert');
    }


    public function update_user($id)
    {
        $this->form_validation->set_rules('nomor_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_telpon', 'No Telepon', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali formulir pengeditan
            $data['user'] = $this->model_user->getUserByID($id);
            $this->load->view('templates_admin/header_link');
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/user/edit', $data);
            $this->load->view('templates_admin/footer');
            $this->load->view('templates_admin/sweetalert');
        } else {
            // Validasi berhasil, simpan data ke dalam database
            $data = array(
                'nomor_ktp' => $this->input->post('nomor_ktp'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_telpon' => $this->input->post('no_telpon'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username')
            );
            $this->model_user->update_user($id, $data);

            // Setelah berhasil menyimpan, lakukan redirect atau tampilkan pesan sukses
            $this->session->set_flashdata('success_ubah_user', 'User Berhasil Dihapus! ');
            redirect('admin/user/edit/' . $id);

        }
    }
}





