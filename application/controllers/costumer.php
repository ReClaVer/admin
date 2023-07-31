<?php 

class Costumer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_costumer');
    }

    public function index()
    {
        $data['costumer'] = $this->m_costumer->tampil_data(); // Mengambil data laporan dari model
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('costumer', $data); // Menampilkan data laporan di view
        $this->load->view('templates/footer');
    }

}
