<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{


    public function tambah_pemesanan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function get_join_table_pesanan_kelola_kos()
    // {
    //     $this->db->select('*');
    //     $this->db->from('pemesanan');
    //     $this->db->join('kos', 'pemesanan.kos_id = kos.id');
    //     $this->db->join('user', 'kos.user_id = user.id');
    //     // $this->db->where('user.id', $user_id); // Mengganti klausa WHERE dengan $user_id yang diberikan
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function get_join_table_pesanan_kelola_kos($user_id)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('kos', 'pemesanan.kos_id = kos.id');
        $this->db->join('user as pemilik', 'kos.user_id = pemilik.id');
        $this->db->join('user as penyewa', 'pemesanan.penyewa_id = penyewa.id');
        $this->db->where('(pemesanan.pemilik_id = ' . $user_id . ' OR pemesanan.penyewa_id = ' . $user_id . ')');
        $this->db->where('kos.user_id', $user_id); // Menambahkan kondisi agar hanya kos yang sesuai dengan user yang login yang ditampilkan
    
        $query = $this->db->get();
        return $query->result();
    }
    



    public function get_join_table_pemesanan($user_id)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('user', 'user.id = pemesanan.penyewa_id');
        $this->db->join('kos', 'kos.id = pemesanan.kos_id');
        $this->db->where('user.id', $user_id); // Menambahkan klausa WHERE
        $query = $this->db->get();
        return $query->result();
    }


    public function get_pemesanan_by_id_konfirmasi($id_pemesanan)
    {
        $this->db->select('pemesanan.jumlah_kamar AS jumlah_kamar_pemesanan, pemesanan.status, pemesanan.pemesanan_id, pemesanan.nomor_rekening_penyewa, pemesanan.bank_penyewa, pemesanan.bukti_pembayaran, pemesanan.durasi_sewa, pemesanan.tanggal_pemesanan, pemesanan.tanggal_checkin, pemesanan.tanggal_checkout, pemesanan.biaya_layanan, user.nama_lengkap, kos.*');
        $this->db->from('pemesanan');
        $this->db->join('user', 'user.id = pemesanan.penyewa_id');
        $this->db->join('kos', 'kos.id = pemesanan.kos_id');
        $this->db->where('pemesanan.pemesanan_id', $id_pemesanan);
    
        $query = $this->db->get();
        return $query->row();
    }
    

    public function get_pemesanan_by_id($pemesanan_id)
    {
        // Sesuaikan dengan struktur tabel dan nama kolom di dalam tabel pemesanan
        $this->db->where('pemesanan_id', $pemesanan_id);
        $query = $this->db->get('pemesanan');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null; // Atau sesuaikan dengan kebijakan Anda jika data tidak ditemukan
        }
    }

    public function update_pemesanan($pemesanan_id, $data)
    {
        $this->db->where('pemesanan_id', $pemesanan_id);
        $this->db->update('pemesanan', $data);
    }
   
    public function getBiayaLayanan()
    {
        // Mengambil hanya field "biaya_layanan" dari tabel "pemesanan"
        $this->db->select('biaya_layanan');
        $query = $this->db->get('pemesanan');
        
        return $query->result(); // Mengembalikan hasil query
    }
    
}
