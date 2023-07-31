<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); // Load library form_validation
        $this->load->library('session');
    }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login Page';
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}else{
			$this->_login();
		}
		
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_admin',['username' => $username])->row_array();

		if ($user) {
			redirect('dashboard');
		} else {
			redirect('auth');
		}

		

	}
}
