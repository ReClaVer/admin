<?php 

class Dashboard extends CI_Controller
{
		
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang'); // Memuat model M_barang
        $this->load->model('m_laporan');
        $this->load->model('m_wishlist');
        $this->load->model('m_chart');
    }

    public function index()
    {
        // Panggil fungsi jumlah_barang() dari model M_barang
        $data['jumlah_barang'] = $this->m_barang->jumlah_barang();
        $data['jumlah_penjualan'] = $this->m_laporan->jumlah_penjualan();
        $data['jumlah_wishlist'] = $this->m_wishlist->jumlah_wishlist();
        $data['jumlah_chart'] = $this->m_chart->jumlah_chart();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
