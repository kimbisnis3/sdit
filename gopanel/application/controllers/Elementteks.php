<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elementteks extends CI_Controller {
    
    public $table       = 'felementweb';
    public $judul       = 'Element Teks';
    public $aktifgrup   = 'master';
    public $aktifmenu   = 'elementteks';
    public $foldername  = 'elementteks';
    public $indexpage   = 'elementteks/v_elementteks';

    function __construct() {
        parent::__construct();
        include(APPPATH.'libraries/sessionakses.php');
        $title      = $this->judul;
    }

    public function index(){
        $data['title']      = $this->judul;
        $data['aktifgrup']  = $this->aktifgrup;
        $data['aktifmenu']  = $this->aktifmenu;
        $title      = $this->judul;
        $this->load->view($this->indexpage, $data);  
    }

    public function setView()
    {
        $where = array(
            //'isgambar' => TRUE,
            'jenis' => 't',
            'aktif' => 't',
            );

        $result     = $this->Dbhelper->getdatawall($this->table,$where);
        $list       = array();
        $no         = 1;

        foreach ($result as $r) {
            if ($r->gambar == NULL ){
                $gambar = "(Noimage)";
            } else {
                $gambar = "<img style='width : 100px;' src='.".$r->gambar."'>";
            }
            $row    = array(
                        "no"        => $no,
                        "kode"      => $r->kode,
                        "judul"     => $r->judul,
                        "ket"       => $r->ket,
                        "teks"      => $r->teks,
                        "action"    => btnu($r->id)
                        
            );

            $list[] = $row;
            $no++;
        }   
        echo json_encode(array('data' => $list));
    }

    public function tambah()
    {
        $data = array(
                'useri'     => $this->session->userdata('nama_user'),
                'judul'     => ien($this->input->post('judul')),
                'teks'  => ien($this->input->post('teks')),
            );
        $insert = $this->Dbhelper->save($this->table,$data);
        echo json_encode(array("sukses" => TRUE));
    }

    public function edit()
    {
        $where = array(
            'id' => $this->input->post('id'),
            );

        $data = $this->Dbhelper->edit($this->table,$where);
        echo json_encode($data);
    }

    public function update()
    {
        $data = array(
                'dateu'     =>'now()',
                'useru'     => $this->session->userdata('nama_user'),
                'judul'     => ien($this->input->post('judul')),
                'teks'  => ien($this->input->post('teks')),
            );
        $where = array(
            'id' => $this->input->post('id')
            );
        $this->Dbhelper->update($this->table,$data,$where);
        echo json_encode(array("sukses" => TRUE));
    }

    public function hapus()
    {
        $getpath = array(
            'id' => $this->input->post('id'),
            ); 
        $path = '.'.$this->Dbhelper->getdataw($this->table,$getpath)->gambar;
        
        @unlink($path);
        
        $where = array(
            'id' => $this->input->post('id'),
            );

        $this->Dbhelper->delete($this->table,$where);
        echo json_encode(array("sukses" => TRUE));
    }

    

}
