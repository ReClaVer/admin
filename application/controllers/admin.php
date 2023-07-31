<?php 

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_costumer');
    }

    public function index()
    {
        
        $data['admin'] = $this->m_costumer->data_admin(); // Mengambil data laporan dari model
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin', $data); // Menampilkan data laporan di view
        $this->load->view('templates/footer');
    }
}
