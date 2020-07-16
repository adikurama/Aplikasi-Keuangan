<?php

class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');

        if($this->session->userdata('status') !="login"){
            redirect(base_url("login"));
        }
    }

    function index(){
         $data['transaksi'] = $this->m_admin->tampil_transaksi('transaksi')->result_array();
        $this->load->view('admin/dashboard',$data);
    }

    function transaksi(){

        $data['transaksi'] = $this->m_admin->show_transaksi();
   		$this->load->view('admin/transaksi',$data);
    }

    // function dashboard(){
    	
    //     $data['transaksi'] = $this->m_admin->tampil_transaksi('transaksi')->result_array();
    // 	$this->load->view('admin/dashboard',$data);
    // }

    function pengeluaran(){
    	
    	$this->load->view('admin/pengeluaran');
    }

    function profile(){
    	
    	$this->load->view('admin/profile');
    }

    function input_transaksi(){
	$data['detail_kategori'] = $this->m_admin->get_detail("detail_kategori")->result_array();
	$this->load->view('admin/input_transaksi',$data);    
    }

    function luar_kategori(){
    
    $data['jenis_kategori'] = $this->m_admin->get_kategori('jenis_kategori')->result_array();
    $this->load->view('admin/luar_kategori',$data);
    }

    function kategori(){
    
    $this->load->view('admin/kategori');
    }  
    function tambah_kategori(){
    
	    $nama_kategori = $this->input->post('nama_kategori');
	    $data= array(
	    	'nama_jenis' => $nama_kategori
	    );
	    $cek= $this->m_admin->insert_kategori("jenis_kategori",$data);
	    redirect(base_url('admin/luar_kategori'));
    }

    function detail(){
    $data['jenis_kategori'] = $this->m_admin->get_kategori('jenis_kategori')->result_array();
    $this->load->view('admin/detail',$data);
    }  

    function tambah_detail(){
        $nama_detail_kategori = $this->input->post('nama_detail_kategori');
        $id_jenis_kategori = $this->input->post('id_jenis_kategori');
        $data = array('id_jenis_kategori' => $id_jenis_kategori ,
            'nama_detail' => $nama_detail_kategori
         );
        $cek= $this->m_admin->insert_detail("detail_kategori",$data);
        redirect(base_url('admin/detail'));
    }

    function edit_data($id_jenis_kategori)
    {
        $where = array('id_jenis_kategori' => $id_jenis_kategori);
        $data['jenis_kategori'] = $this->m_admin->edit_data($where,'jenis_kategori')->result();
        $this->load->view('admin/edit_data',$data);
    }

    function update_data()
    {
        $id_jenis_kategori = $this->input->post('id_jenis_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_jenis' => $nama_kategori);

        $where = array(
            'id_jenis_kategori' => $id_jenis_kategori);

        $this->m_admin->update_data($where,$data,'jenis_kategori');
        redirect(base_url('admin/luar_kategori'));
    }

    function hapus_data($id_jenis_kategori)
    {
        $where = array('id_jenis_kategori' => $id_jenis_kategori);
        $this->m_admin->hapus_data($where,'jenis_kategori');
        redirect(base_url('admin/luar_kategori'));
    }

    function input_data_transaksi()
    {
        $nama_transaksi = $this->input->post('nama_transaksi');
        $status = $this->input->post('status');
        $detail_kategori = $this->input->post('id_detail_kategori');
        $jumlah_transaksi = $this->input->post('jumlah_transaksi');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $data  = array
    (   'nama_transaksi' => $nama_transaksi,
        'status' => $status , 'id_detail_kategori' => $detail_kategori, 'jumlah_transaksi' => $jumlah_transaksi,
        'tgl_transaksi' => $tgl_transaksi 
     );
        $cek= $this->m_admin->insert_transaksi("transaksi",$data);
        redirect(base_url('admin/input_transaksi'));
    }

    function edit_transaksi($id_transaksi)
    {
        $where = array('id_transaksi' => $id_transaksi);
        $data['transaksi'] = $this->m_admin->edit_transaksi($where);
        $data['detail_kategori'] = $this->m_admin->get_detail('detail_kategori')->result();
        $this->load->view('admin/edit_transaksi',$data);
    }
    function update_transaksi()
    {
        $nama_transaksi = $this->input->post('nama_transaksi');
        $status = $this->input->post('status');
        $id_detail_kategori = $this->input->post('id_detail_kategori');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $jumlah_transaksi = $this->input->post('jumlah_transaksi');
        $id_transaksi = $this->input->post('id_transaksi');

        $data = array('jumlah_transaksi' => $jumlah_transaksi, 'tgl_transaksi' => $tgl_transaksi, 'id_detail_kategori' => $id_detail_kategori, 'nama_transaksi' => $nama_transaksi, 'status' => $status);
        $where = array('id_transaksi' => $id_transaksi);

        $this->m_admin->update_transaksi($where,$data,'transaksi');
        redirect(base_url('admin/transaksi'));
    }

    function hapus_transaksi($id_transaksi)
    {
        $where = array('id_transaksi' => $id_transaksi);
        $this->m_admin->hapus_data($where,'transaksi');
        redirect(base_url('admin/transaksi'));
    }
    function cetak(){
        
        $data['transaksi'] = $this->m_admin->show_transaksi('transaksi');
        $this->load->view('admin/cetak',$data);
    }
    
}	

