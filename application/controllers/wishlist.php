<?php 

class Wishlist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_wishlist');
    }

    public function index()
    {
        $data['wishlist'] = $this->m_wishlist->tampil_data(); // Mengambil data laporan dari model
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan_wishlist', $data); // Menampilkan data laporan di view
        $this->load->view('templates/footer');
    }
}