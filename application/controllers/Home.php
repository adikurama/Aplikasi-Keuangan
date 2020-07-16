<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('m_login');
 
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()

	{

		$this->load->view('login');
	}
	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)

		);
		
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		
		// $nama_admin = $cek['nama_admin'];

		if($cek>0){

			$data_session = array(
				'nama_admin' =>$username,
				'status' =>"login"

			);
			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "<script language='javascript'> window.alert('Username dan password anda salah'); window.location.href='".base_url('home')."'</script>";

		}
		
	}

		public function daftar()
		{
			$Nama = $this->input->post('Nama');
			$Username = $this->input->post('Username');
			$Password = $this->input->post('Password');

			$data = array(
				'username' => $Username, 
				'password' => md5($Password),
				'nama_admin' => $Nama
			);

			$insert=$this->m_login->database_input("admin",$data);
		}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));

	}

	public function cetak()
	{
		return $this->load->view('admin/print',$data);
	}
}
