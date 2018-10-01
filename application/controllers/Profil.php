<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {

	public $table       = 'fprofil';
	public $aktifmenu	= 'profil';
	public $menu       	= 'profil';
	public $mainpage	= 'profil/v_profil';
	public $inpage		= 'profil/v_profil_read';

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
