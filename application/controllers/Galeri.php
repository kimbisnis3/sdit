<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galeri extends CI_Controller {

	public $table       = 'fgaleri';
	public $aktifmenu	= 'galeri';
	public $menu       	= 'galeri';
	public $mainpage	= 'galeri/v_galeri';
	public $inpage		= 'galeri/v_galeri_read';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['maindata'] 	= $this->Dbhelper->getdata($this->table);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->mainpage,$data);
    }
    
    public function read($slug=null)
	{
		if ($slug === null) 
        redirect(error);
		$where = array('slug' => $slug);
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['maindata'] 	= $this->Dbhelper->getdatawall($this->table,$where);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->inpage,$data);
	}


}
