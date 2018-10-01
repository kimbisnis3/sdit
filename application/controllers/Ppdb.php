<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ppdb extends CI_Controller {

	public $table       = 'fppdb';
	public $aktifmenu	= 'ppdb';
	public $menu       	= 'ppdb';
	public $mainpage	= 'ppdb/v_ppdb';
	public $inpage		= 'ppdb/v_ppdb_read';

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
