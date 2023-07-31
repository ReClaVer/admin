<?php

class M_costumer extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('id_user, name, email');
        $this->db->from('tb_user');
        return $this->db->get()->result();
    }

    public function data_admin()
    {
        $this->db->select('id, nama, username, password');
        $this->db->from('tb_admin');
        return $this->db->get()->result();
    }
}