<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller {
    
    public $table       = 'fslideshow';
    public $judul       = 'Slideshow';
    public $aktifgrup   = 'master';
    public $aktifmenu   = 'slideshow';
    public $foldername  = 'slideshow';
    public $indexpage   = 'slideshow/v_slideshow';

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

    public function setView(){
        $result     = $this->Dbhelper->getdata($this->table);
        $list       = array();
        $no         = 1;

        foreach ($result as $r) {
            if ($r->imgpost == NULL ){
                $gambar = "(Noimage)";
            } else {
                $gambar = "<img style='width : 100px;' src='.".$r->imgpost."'>";
            }
            $row    = array(
                        "no"        => $no,
                        "judul"     => $r->judul,
                        "menu"      => $r->menu,
                        "judulpost" => $r->judulpost,
                        "gambar"    => $gambar,
                        "action"    => btnu($r->id)
                        
            );

            $list[] = $row;
            $no++;
        }   
        echo json_encode(array('data' => $list));
    }

    public function tambah()
    {
        $menu  = $this->input->post('judultopic');
        $where = array(
            'id' => $this->input->post('topic'), 
            );
        $getpost= $this->Dbhelper->getdatawall('f'.$menu, $where);
        foreach ($getpost as $t) {
            
        $data = array(
                'useri'     => $this->session->userdata('nama_user'),
                'menu'      => ien($menu),
                'idpost'    => ien($t->id),
                'imgpost'   => ien($t->gambar),
                'slugpost'  => ien($t->slug),
            );

        }

        $insert = $this->Dbhelper->save($this->table,$data);
        echo json_encode(array("sukses" => TRUE));
    }

    public function tambahfile()
    {   
        $nmfile = $this->input->post('judul');
        $config['upload_path'] = './uploads/'.$this->foldername;
        $config['allowed_types'] = '*';
        $config['file_name'] = slug($nmfile);
        $path = substr($config['upload_path'],1);
        $slug = slug($this->input->post('judul'));
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('gambar')){
            $data = array(
                    'useri'     => $this->session->userdata('nama_user'),
                    'judul'     => ien($this->input->post('judul')),
                    'subjudul'  => ien($this->input->post('subjudul')),
                    'artikel'   => ien($this->input->post('artikel')),
                    'ket'       => ien($this->input->post('ket')),
                    'slug'      => $slug,
                    
                    );

            $insert = $this->Dbhelper->save($this->table,$data);
        }else{
            $data = array(
                    'useri' => $this->session->userdata('nama_user'),
                    'judul'     => ien($this->input->post('judul')),
                    'subjudul'  => ien($this->input->post('subjudul')),
                    'artikel'   => ien($this->input->post('artikel')),
                    'ket'       => ien($this->input->post('ket')),
                    'slug'      => $slug,
                    'gambar'    => $path.'/'.$this->upload->data('file_name'),
                    );
           
            $insert = $this->Dbhelper->save($this->table,$data);
        }
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
        $menu  = $this->input->post('judultopic');
        $id    = array(
            'id' => $this->input->post('topic'), 
            );
        $getpost= $this->Dbhelper->getdatawall('f'.$menu, $id);
        foreach ($getpost as $t) {
            
        $data = array(
                'useri'     => $this->session->userdata('nama_user'),
                'menu'      => ien($menu),
                'idpost'    => ien($t->id),
                'judulpost' => ien($t->judul),
                'imgpost'   => ien($t->gambar),
                'slugpost'  => ien($t->slug),
            );

        }

        $where = array(
            'id' => $this->input->post('id')
            );

        $this->Dbhelper->update($this->table,$data,$where);
        echo json_encode(array("sukses" => TRUE));
    }

    function updatefile(){
        $nmfile = $this->input->post('judul');
        $config['upload_path'] = './uploads/'.$this->foldername;
        $config['allowed_types'] = '*';
        $config['file_name'] = slug($nmfile);
        $path =  substr($config['upload_path'],1);
        $this->upload->initialize($config);
        $pathfile   = $this->input->post('path');
        $ext        = substr($pathfile, -3);
        $slug = slug($this->input->post('judul'));

        if ( ! $this->upload->do_upload('gambar')){
        
                @rename("$pathfile",'.'.$path.'/'.$this->upload->data('file_name').'.'.$ext);
                $data = array(
                    'useru'     => $this->session->userdata('nama_user'),
                    'dateu'     => 'now()',
                    'judul'     => ien($this->input->post('judul')),
                    'subjudul'  => ien($this->input->post('subjudul')),
                    'artikel'   => ien($this->input->post('artikel')),
                    'ket'       => ien($this->input->post('ket')),
                    'slug'      => $slug,
                    'gambar'    => $path.'/'.$this->upload->data('file_name').'.'.$ext ,
                    );

                $where = array(
                    'id' => $this->input->post('id'),
            );
                $this->Dbhelper->update($this->table,$data,$where);
        }else{
                @unlink("$pathfile");
                $data = array(
                    'useru'     => $this->session->userdata('nama_user'),
                    'dateu'     => 'now()',
                    'judul'     => ien($this->input->post('judul')),
                    'subjudul'  => ien($this->input->post('subjudul')),
                    'artikel'   => ien($this->input->post('artikel')),
                    'ket'       => ien($this->input->post('ket')),
                    'slug'      => $slug,
                    'gambar'    => $path.'/'.$this->upload->data('file_name') ,
                    );

                $where = array(
                    'id' => $this->input->post('id')
            );
                $this->Dbhelper->update($this->table,$data,$where);
        }
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

    function loadtopic($kode)
    {

        $result = $this->Dbhelper->getdata('f'.$kode);
        $data = "<option value=''>--</option>";

        foreach ($result as $r) {
            $data .= "<option value='".$r->id."'>".$r->judul."</option>";
        }
        echo $data;
    }

    

}
