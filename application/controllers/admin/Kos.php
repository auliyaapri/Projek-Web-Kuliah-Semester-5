<?php
class Kos extends CI_Controller
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
        $data['koss'] = $this->model_kos->get_kos();

        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/kos/index', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/sweetalert');
    }
    // ===== YANG BARU =====
    public function data_kos($id)
    {
        $data['koss'] = $this->model_kos->get_kos_by_user_id($id);
    
        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/kos/pemilik_kos', $data);
        $this->load->view('templates_admin/footer');
    }
    
    // ===== YANG BARU =====

    public function detail($id)
    {
        $data['kos_detail'] = $this->model_kos->get_kos_by_id($id);
        $this->load->view('templates_admin/header_link');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/kos/detail_kos', $data);
        $this->load->view('templates_admin/footer');
    }
  
    public function hapus_konfirmasi($id)
	{
		// Mengambil data kosan dari database berdasarkan $id
		$data_kos = $this->model_kos->get_kos_by_id_hapus_kos($id);
	
		// Menghapus gambar-gambar terkait
		$image_fields = ['foto_kos_1', 'foto_kos_2', 'foto_kos_3', 'foto_kos_4', 'foto_kos_5'];
		foreach ($image_fields as $image_field) {
			$image_path = 'uploads/foto_kosan/' . $data_kos->$image_field;
			if (!empty($data_kos->$image_field) && file_exists($image_path)) {
				unlink($image_path); // Hapus gambar dari folder
			}
		}
	
		// Hapus data kosan dari database
		$this->model_kos->hapus_kos($id);
	
		// Redirect ke halaman lain atau tampilkan pesan sukses
		$this->session->set_flashdata('success_hapus_kos', 'Kosan berhasil dihapus.');
		redirect(base_url('admin/kos'));
	}

}
