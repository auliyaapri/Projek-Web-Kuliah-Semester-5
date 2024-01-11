<?php
class Model_auth extends CI_Model {
    public function cek_login($username, $password) {
        $result = $this->db->where('username', $username)
                          ->where('password', $password)
                          ->get('user');

        if ($result->num_rows() > 0) {
            // Jika ditemukan di tabel 'user', return data pengguna
            return $result->row();
        }

        $result = $this->db->where('username', $username)
                          ->where('password', $password)
                          ->get('admin');

        if ($result->num_rows() > 0) {
            // Jika ditemukan di tabel 'admin', return data admin
            return $result->row();
        }

        // Jika tidak ditemukan, return false
        return false;
    }
}
