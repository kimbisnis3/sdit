<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

	public $table       = '';
	public $aktifmenu	= 'search';
	public $menu       	= 'search';
	public $mainpage	= 'search/v_search';
	public $inpage		= 'search/v_search_read';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
        $data['aktifmenu'] 	= $this->aktifmenu;

        $key = $this->input->post('key');
		$data['maindata'] 	= $this->Dbhelper->search($key);
		//$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->mainpage,$data);
    }
    
    public function keyword()
	{
		$data['menu'] 		= $this->menu;
        $data['aktifmenu'] 	= $this->aktifmenu;
        
		$key = $this->input->post('key');
		$data['maindata'] 	= $this->Dbhelper->search($key);
		$this->load->view($this->mainpage,$data);
	}


}
