<?php 

class Chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chart');
    }

    public function index()
    {
        $data['chart'] = $this->m_chart->tampil_data(); // Mengambil data laporan dari model
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan_chart', $data); // Menampilkan data laporan di view
        $this->load->view('templates/footer');
    }
}
