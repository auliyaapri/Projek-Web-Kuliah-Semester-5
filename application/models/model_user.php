<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{

    public function get_users()
    {
        $query = $this->db->get('user');
        return $query->result(); // Mengembalikan semua hasil dalam bentuk array objek
    }


    public function getUserIDByUsername($username) {
        $this->db->select('id, jenis_kelamin');
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return $query->row_array(); // Mengembalikan hasil query dalam bentuk array
        } else {
            return false; // Return false jika username tidak ditemukan
        }
    }

    public function getUserIDByUsernameOnly($username) {
        $this->db->select('id');
        $this->db->where('username', $username);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return false; // Return false jika username tidak ditemukan
        }
    }

    // ====== USER ====
    public function getUserByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false; // Return false jika user dengan ID tertentu tidak ditemukan
        }
    }
    
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }

    public function update_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
    // ====== USER ====
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    // ========
 
}
