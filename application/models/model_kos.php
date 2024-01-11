<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kos extends CI_Model
{


    public function insert_kos($data)
    {
        // Simpan data ke tabel 'kos'
        $this->db->insert('kos', $data);
    }


    public function get_kos()
    {
        $this->db->select('kos.*, user.username');
        $this->db->from('kos');
        $this->db->join('user', 'user.id = kos.user_id', 'inner'); // Melakukan INNER JOIN berdasarkan user_id
        $query = $this->db->get();
        return $query->result();
    }




    // public function get_kos_by_user_id($id)
    // {
    //     $this->db->select('User.id AS user_id, User.username, Kos.id AS kos_id, Kos.nama_kos, Kos.kategori, Kos.id');
    //     $this->db->from('User');
    //     $this->db->join('Kos', 'User.id = Kos.user_id');
    //     $this->db->where('User.id', $id);
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function get_kos_by_user_id($id)
{
    // $this->db->select('User.id AS user_id, User.username, Kos.id AS kos_id, Kos.nama_kos, Kos.kategori');
    $this->db->select('User.id AS user_id, User.username, User.nama_lengkap, Kos.id AS kos_id, Kos.nama_kos, Kos.kategori, Kos.id, Kos.tanggal_buka');
    $this->db->from('Kos');
    $this->db->join('User', 'User.id = Kos.user_id');
    $this->db->where('User.id', $id);
    $query = $this->db->get();
    return $query->result();
}


    public function get_kos_by_user_id_awal($user_id)
    {
        $this->db->select('User.id AS user_id, User.username, Kos.id AS kos_id, Kos.nama_kos, Kos.kategori, Kos.id');
        $this->db->distinct(); // Menambahkan distinct() untuk data unik
        $this->db->from('User');
        $this->db->join('Kos', 'User.id = Kos.user_id');
        $this->db->where('Kos.id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    // ===== UNTUK USER PEMILIK KOS =====
    // public function get_kos_by_user_id_pemilik_kos($user_id)
    // {
    //     $this->db->select('User.id AS user_id, User.username, User.nama_lengkap, Kos.id AS kos_id, Kos.nama_kos, Kos.kategori, Kos.id, Kos.tanggal_buka');
    //     $this->db->distinct(); // Menambahkan distinct() untuk data unik
    //     $this->db->from('User');
    //     $this->db->join('Kos', 'User.id = Kos.user_id');
    //     $this->db->where('Kos.id', $user_id);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    public function user_pemilik_kos()
    {
        $this->db->select('kos.*, user.username, user.nama_lengkap');
        $this->db->from('kos');
        $this->db->join('user', 'user.id = kos.user_id', 'inner'); // Melakukan INNER JOIN berdasarkan user_id
        $query = $this->db->get();
        return $query->result();
    }

    // ======= UNTUK PENGELOLA KOS ======
    // === Untuk Halaman Utama Pada Kelola Kos ===
    public function get_kos_by_user_id_username($username)
    {
        $this->db->select('User.id AS user_id, User.username, Kos.id AS kos_id, Kos.nama_kos, Kos.alamat_kos, Kos.kategori, Kos.id');
        $this->db->distinct(); // Menambahkan distinct() untuk data unik
        $this->db->from('User');
        $this->db->join('Kos', 'User.id = Kos.user_id');
        $this->db->where('User.username', $username);
        $query = $this->db->get();
        return $query->result();
    }
    // === Untuk Update Yang Punya Kos ===
    public function update_kos($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kos', $data);
    }


    // ===== UNTUK HALAMAN DETAIL KOS, EDIT KOS DAN KELOLA KOS =====
    public function get_kos_by_id($id)
    {
        $this->db->select('User.id AS user_id, User.username, User.nama_lengkap, User.no_telpon, Kos.id AS kos_id, Kos.nama_kos, Kos.nomor_rekening, Kos.bank, Kos.alamat_kos, Kos.kategori, Kos.fasilitas_kamar, Kos.fasilitas_kamar_mandi, Kos.jumlah_kamar, Kos.harga, Kos.peraturan, Kos.deskripsi, Kos.foto_kos_1, Kos.foto_kos_2, Kos.foto_kos_3, Kos.foto_kos_4, Kos.foto_kos_5, kos.id');
        $this->db->from('User');
        $this->db->join('Kos', 'User.id = Kos.user_id');
        $this->db->where('Kos.id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_jumlah_kamar($kos_id, $jumlah_kamar_baru)
    {
        $data = array('jumlah_kamar' => $jumlah_kamar_baru);
        $this->db->where('id', $kos_id);
        $this->db->update('Kos', $data);
    }

    // Model_kos.php
    public function kurangi_jumlah_kamar($kos_id, $jumlah_kamar_dipesan)
    {
        $this->db->where('id', $kos_id);
        $this->db->set('jumlah_kamar', 'jumlah_kamar - ' . $jumlah_kamar_dipesan, FALSE);
        $this->db->update('kos');
    }
    // Model_kos.php
    public function get_jumlah_kamar_by_id($kos_id)
    {
        $this->db->select('jumlah_kamar');
        $this->db->where('id', $kos_id);
        $query = $this->db->get('kos');
        return $query->row()->jumlah_kamar;
    }


    // ===== END UNTUK HALAMAN DETAIL KOS, EDIT KOS DAN KELOLA KOS =====



    // =================== home get kos 
    public function get_kos_home()
    {

        $this->db->select('User.id AS user_id, User.username, Kos.id AS kos_id, Kos.nama_kos, Kos.alamat_kos, Kos.kategori, Kos.fasilitas_kamar, Kos.fasilitas_kamar_mandi, Kos.jumlah_kamar, Kos.harga, Kos.peraturan, Kos.deskripsi, Kos.alamat_kos, Kos.foto_kos_1, Kos.foto_kos_2, Kos.foto_kos_3, Kos.foto_kos_4, Kos.foto_kos_5, Kos.id AS kos_id');

        $this->db->from('User');
        $this->db->join('Kos', 'User.id = Kos.user_id');

        $query = $this->db->get();
        return $query->result();
    }
    // ===== ADMIN DETAIL KOS =====
    public function get_kos_by_i_hapus_kosd_detail($kos_id)
    {
        return $this->db->get_where('kos', array('id' => $kos_id))->row();
    }

    // ====================
    public function getKosWhere()
    {
        return $this->db->get('kos');
    }

    // ==== PAGES DETAIL KOS =====


    // Hapus kos
    // Dalam model Model_kos


    // Dalam model Model_kos

    // ===== YANG LAMA HAPUS KOS =====
    // public function hapus_kos($id)
    // {
    //     // Lakukan query DELETE pada database untuk menghapus kosan berdasarkan ID
    //     $this->db->where('id', $id);
    //     $this->db->delete('kosan'); // Gantilah 'kosan' dengan nama tabel yang sesuai di database Anda

    //     // Selain itu, Anda juga bisa menghapus gambar-gambar yang terkait dengan kosan
    //     // Misalnya, jika Anda menyimpan nama file gambar di database, Anda bisa menghapus gambar-gambar tersebut di sini.

    //     // Contoh menghapus gambar jika gambar disimpan dalam folder 'uploads/foto_kosan':
    //     // $gambar_kos = $this->get_gambar_kos_by_id($id); // Fungsi untuk mendapatkan nama gambar
    //     // if ($gambar_kos) {
    //     //     $gambar_path = 'uploads/foto_kosan/' . $gambar_kos;
    //     //     if (file_exists($gambar_path)) {
    //     //         unlink($gambar_path); // Hapus gambar dari folder
    //     //     }
    //     // }

    //     // Anda juga dapat menambahkan validasi dan penanganan kesalahan di sini jika diperlukan.

    //     return true; // Atau Anda dapat mengembalikan nilai lain sesuai dengan kebutuhan Anda
    // }
    // ===== YANG LAMA HAPUS KOS =====
    

    public function get_kos_by_id_hapus_kos($id)
    {
        return $this->db->get_where('kos', array('id' => $id))->row();
    }
    
    public function hapus_kos($id)
    {
        // Hapus data kosan dari database berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('kos'); // Sesuaikan nama tabel dengan yang sesuai di database Anda
    
        return true; // Atau sesuaikan dengan kebutuhan Anda
    }
    


    // Hapus kos

}


// id, user_id, nama_kos, kategori, fasilitas_kamar, fasilitas_kamar_mandi, jumlah_kamar, harga, peraturan, deskripsi, alamat_kos, nomor_rekening, bank, foto_kos_1, foto_kos_2, foto_kos_3, foto_kos_4, foto_kos_5, tanggal_buka