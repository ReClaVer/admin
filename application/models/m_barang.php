<?php

class M_barang extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tb_apparel');
        return $this->db->get('tb_stok');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_barang_by_id($id_apparel)
    {
        $query = $this->db->get_where('tb_apparel', array('id_apparel' => $id_apparel));
        return $query->row();
    }

    public function update_barang($id_apparel, $data)
    {
        $this->db->where('id_apparel', $id_apparel);
        $this->db->update('tb_apparel', $data);
    }

    public function jumlah_barang()
    {
        $this->db->from('tb_apparel');
        return $this->db->count_all_results();
    }

}