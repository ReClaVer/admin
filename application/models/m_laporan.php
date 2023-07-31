<?php

class M_laporan extends CI_Model
{
    public function tampil_data($start_date = null, $end_date = null)
    {
        // Cek apakah ada filter tanggal
        if ($start_date && $end_date) {
            // Jika ada, lakukan query dengan filter tanggal
            $this->db->where('date_time >=', $start_date);
            $this->db->where('date_time <=', $end_date);
        }

        $this->db->select('o.id_order, o.id_user, o.list_shop, o.delivery, o.payment, o.note, o.total, o.image, o.date_time, o.arrived, u.name');
        $this->db->from('tb_order o');
        $this->db->join('tb_user u', 'u.id_user = o.id_user', 'left');
        return $this->db->get()->result();
    }

    public function jumlah_penjualan()
    {
       $this->db->from('tb_order');
        return $this->db->count_all_results();
    }
}

