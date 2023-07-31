<?php
class Stok extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_stok');
    }

    public function index()
    {
        $data['stok'] = $this->m_stok->tampil_data(); // Mengambil data laporan dari model
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('stok', $data); // Menampilkan data laporan di view
        $this->load->view('templates/footer');
    }
}