<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
    
    public $table       = 'tcompany';
    public $judul       = 'Profil Sekolah';
    public $aktifgrup   = 'master';
    public $aktifmenu   = 'sekolah';
    public $foldername  = 'company';
    public $indexpage   = 'sekolah/v_sekolah';

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
        $result     = $this->Dbhelper->getdata($this->table);
        $list       = array();
        $no         = 1;

        foreach ($result as $r) {
            
            $row    = array(
                        "no"        => $no,
                        "nama"      => $r->nama,
                        "alamat"    => $r->alamat,
                        "phone"     => $r->phone,
                        "wa"        => $r->wa,
                        "email"     => $r->email,
                        "web"       => $r->web,
                        "ket"       => $r->ket,
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
                'nama'      => ien($this->input->post('nama')),
                'alamat'    => ien($this->input->post('alamat')),
                'phone'     => ien($this->input->post('phone')),
                'wa'        => ien($this->input->post('wa')),
                'email'     => ien($this->input->post('email')),
                'web'       => ien($this->input->post('web')),
                'ket'       => ien($this->input->post('ket')),
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
                'nama'      => ien($this->input->post('nama')),
                'alamat'    => ien($this->input->post('alamat')),
                'phone'     => ien($this->input->post('phone')),
                'wa'        => ien($this->input->post('wa')),
                'email'     => ien($this->input->post('email')),
                'web'       => ien($this->input->post('web')),
                'ket'       => ien($this->input->post('ket')),
            );
        $where = array(
            'id' => $this->input->post('id')
            );
        $this->Dbhelper->update($this->table,$data,$where);
        echo json_encode(array("sukses" => TRUE));
    }

    public function hapus()
    {
        
        $where = array(
            'id' => $this->input->post('id'),
            );

        $this->Dbhelper->delete($this->table,$where);
        echo json_encode(array("sukses" => TRUE));
    }

    

}
