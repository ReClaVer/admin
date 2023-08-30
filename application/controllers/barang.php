<?php

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->library('form_validation'); // Load library form_validation
    }

    public function index()
    {
        $data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('barang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        // Ambil data dari form input
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        // $colors = $this->input->post('colors');
        // $tags = $this->input->post('tags');
        $sizes = $this->input->post('sizes');
        $price = $this->input->post('price');
        $rating = $this->input->post('rating');
        $image = $this->input->post('image');

        // Masukkan data ke dalam array
        $data = array(
            'name' => $name,
            'description' => $description,
            // 'colors' => $colors,
            // 'tags' => $tags,
            'sizes' => $sizes,
            'price' => $price,
            'rating' => $rating,
            'image' => $image,
        );

        // Panggil fungsi input_data dari model m_barang untuk menyimpan data ke database
        $this->m_barang->input_data($data, 'tb_apparel');

        // Redirect ke halaman barang/index setelah berhasil tambah data
        redirect('barang/index');
    }

    public function hapus($id_apparel)
    {
        $where = array('id_apparel' => $id_apparel);
        $this->m_barang->hapus_data($where, 'tb_apparel');
        redirect('barang/index');
    }

    public function edit($id_apparel)
    {
        $data['barang'] = $this->m_barang->get_barang_by_id($id_apparel);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_barang', $data);
        $this->load->view('templates/footer');
    }

    public function update($id_apparel)
    {
        // Lakukan validasi seperti pada contoh sebelumnya (sesuaikan dengan kebutuhan)
        $this->form_validation->set_rules('name', 'Nama Barang', 'required');
        $this->form_validation->set_rules('rating', 'Rating', 'required|numeric');
        // $this->form_validation->set_rules('tags', 'Tags', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        $this->form_validation->set_rules('sizes', 'Sizes', 'required');
        // $this->form_validation->set_rules('colors', 'Colors', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman edit_barang dengan pesan error
            $data['barang'] = $this->m_barang->get_barang_by_id($id_apparel);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('edit_barang', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika validasi berhasil, ambil data dari form dan update ke database
            $name = $this->input->post('name');
            $rating = $this->input->post('rating');
            // $tags = $this->input->post('tags');
            $price = $this->input->post('price');
            $sizes = $this->input->post('sizes');
            // $colors = $this->input->post('colors');
            $description = $this->input->post('description');
            $image = $this->input->post('image');

            $data = array(
                'name' => $name,
                'rating' => $rating,
                // 'tags' => $tags,
                'price' => $price,
                'sizes' => $sizes,
                // 'colors' => $colors,
                'description' => $description,
                'image' => $image
            );

            $this->m_barang->update_barang($id_apparel, $data);

            // Setelah update berhasil, kembali ke halaman barang/index
            redirect('barang/index');
        }
    }
}

