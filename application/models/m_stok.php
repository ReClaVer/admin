<?php
class M_stok extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('c.id_apparel, c.stok, u.name as apparel_name');
        $this->db->from('tb_stok c');
        $this->db->join('tb_apparel u', 'u.id_apparel = c.id_apparel', 'left');
        return $this->db->get()->result();
    }

}