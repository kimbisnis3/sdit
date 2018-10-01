<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_home');  
	$this->load->model('M_kategori'); 
	$this->load->model('M_footer');  
} 

	public function index()
	{	
		$isLogin= $this->session->userdata('masuk');
		if (isset($isLogin)==true)
        {
        	redirect('');
        }
        else
        {
        	
        }
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);

		$this->load->view('register/v_register');
		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	public function add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'), 
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
        	'guest' => 'f'
			);
		$this->db->insert('mcustomer', $data);
		redirect('login');
	}
}
	
