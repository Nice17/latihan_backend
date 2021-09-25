<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{
    // ambil dan tampilkan data (read)
    public function tampil()
    {
        return $this->db->get('tbl_user');
    }

    // tambah data (create)
    public function tambah($data)
    {
        return $this->db->insert('tbl_user', $data);
    }

    // ubah data (update)
    public function update($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('tbl_user', $data);
    }

    // hapus data (delete)
    public function hapus($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('tbl_user');
    }
}


/* End of file M_model.php and path /application/models/M_model.php */
