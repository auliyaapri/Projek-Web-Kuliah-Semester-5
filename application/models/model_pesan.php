

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pesan extends CI_Model {

    public function tambah_pesan($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_pesan()
    {
        $query = $this->db->get('message');
        return $query->result(); // Mengembalikan semua hasil dalam bentuk array objek
    }

    public function hapus_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('message');
    }

}
