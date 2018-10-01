<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public $table       = 'fhome';
	public $aktifmenu	= 'home';
	public $menu       	= 'home';
	public $mainpage	= 'home/v_home';
	public $inpage		= 'home/v_home_read';

function __construct(){
	parent::__construct();

	$this->load->helper('text');
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['berita'] 	= $this->Dbhelper->getdataorderlimit('fberita','9');
		$data['artikel'] 	= $this->Dbhelper->getdataorderlimit('fartikel','1');
		$data['fasilitas'] 	= $this->Dbhelper->getdata('ffasilitas');

		$ss1 				= array('kode' => 'ss1', );
		$ss2 				= array('kode' => 'ss2', );
		$ss3 				= array('kode' => 'ss3', );
		$ss4 				= array('kode' => 'ss4', );
		$ss5 				= array('kode' => 'ss5', );
		$ss6 				= array('kode' => 'ss6', );

		$data['ss1']		= $this->Dbhelper->getdatawall('fslideshow',$ss1);
		$data['ss2']		= $this->Dbhelper->getdatawall('fslideshow',$ss2);
		$data['ss3']		= $this->Dbhelper->getdatawall('fslideshow',$ss3);
		$data['ss4']		= $this->Dbhelper->getdatawall('fslideshow',$ss4);
		$data['ss5']		= $this->Dbhelper->getdatawall('fslideshow',$ss5);
		$data['ss6']		= $this->Dbhelper->getdatawall('fslideshow',$ss6);

		$data['slideshow'] 	= $this->Dbhelper->getdata('fslideshow');

		$data['sekolah'] 	= $this->Dbhelper->getdata('tcompany');

		$descsatu 			= array('kode' => 'descsatu', );
		$descdua 			= array('kode' => 'descdua', );
		$desctiga 			= array('kode' => 'desctiga', );
		$descempat 			= array('kode' => 'descempat', );
		$deskripsi 			= array('kode' => 'teksdeskripsi', );
		$data['descsatu']	= $this->Dbhelper->getdatawall('felementweb',$descsatu);
		$data['descdua']	= $this->Dbhelper->getdatawall('felementweb',$descdua);
		$data['desctiga']	= $this->Dbhelper->getdatawall('felementweb',$desctiga);
		$data['descempat']	= $this->Dbhelper->getdatawall('felementweb',$descempat);
		$data['deskripsi']	= $this->Dbhelper->getdatawall('felementweb',$deskripsi);

		$wbgweb	= array('kode' => 'bgweb', );
		$data['bgweb']	= $this->Dbhelper->getdatawall('felementweb',$wbgweb);

		$this->load->view($this->mainpage,$data);
    }
    
    public function read($slug=null)
	{
		if ($slug === null) 
        redirect(error);
		$where = array('slug' => $slug);
		$data['menu'] 		= $this->menu;
		$data['maindata'] 	= $this->Dbhelper->getdatawall($this->table,$where);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->inpage,$data);
	}

	function test()
	{
		$data['berita'] 	= $this->Dbhelper->getdataorder('fberita');
		$this->load->view('home/tes',$data);

	}


}
