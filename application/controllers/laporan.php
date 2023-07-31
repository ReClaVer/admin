<?php
class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
    }

    public function index()
    {
        // Ambil nilai filter tanggal dari input form
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');

        // Jika tanggal tidak dipilih, atur nilai default untuk filter tanggal
        if (empty($start_date)) {
            $start_date = null;
        }
        if (empty($end_date)) {
            $end_date = null;
        }

        // Panggil model untuk mengambil data laporan sesuai filter tanggal
        $data['laporan'] = $this->m_laporan->tampil_data($start_date, $end_date);

        // Simpan nilai filter tanggal ke dalam data untuk digunakan pada form
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan_penjualan', $data);
        $this->load->view('templates/footer');
    }
}
