<?php

class M_wishlist extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('c.id_wishlist, u.name as user_name, a.name as apparel_name');
        $this->db->from('tb_wishlist c');
        $this->db->join('tb_user u', 'u.id_user = c.id_user', 'left');
        $this->db->join('tb_apparel a', 'a.id_apparel = c.id_apparel', 'left');
        return $this->db->get()->result();
    }

    public function jumlah_wishlist()
    {
       $this->db->from('tb_wishlist');
        return $this->db->count_all_results();
    }
}

