<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    function __construct() {
        parent::__construct();
        include(APPPATH.'libraries/sessionakses.php');

        $this->load->model('M_company');
    }

    public function index(){
        $data['title']      = 'Company';
        $data['aktifgrup']  = '';
        $data['aktifmenu']  = 'company';

        $this->load->view('company/v_company', $data);  
    }

    public function setView(){
        $result     = $this->M_company->getSemua();
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
                        "owner"     => $r->owner,
                        "ket"       => $r->ket,
                        "action"    => "
                        <a href='javascript:void(0)' class='btn btn-sm btn-warning' data-toggle='tooltip' data-placement='top' title='Edit' onclick='edit_data(".$r->id.")'><i class='glyphicon glyphicon-pencil'></i></a>"
                        
            );

            $list[] = $row;
            $no++;
        }   
        echo json_encode(array('data' => $list));
    }

    public function tambah()
    {
        $data = array(
                'useri' => $this->session->userdata('nama_user'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'phone' => $this->input->post('phone'),
                'wa'    => $this->input->post('wa'),
                'email' => $this->input->post('email'),
                'web'   => $this->input->post('web'),
                'owner' => $this->input->post('owner'),
                'ket'   => $this->input->post('ket')
            );
        $insert = $this->M_company->save($data);
        echo json_encode(array("sukses" => TRUE));
    }

    public function edit($id)
    {
        $data = $this->M_company->edit($id);
        echo json_encode($data);
    }

    public function update()
    {
         $data = array(
                'dateu' =>'now()',
                'useru' => $this->session->userdata('nama_user'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'phone' => $this->input->post('phone'),
                'wa' => $this->input->post('wa'),
                'email' => $this->input->post('email'),
                'web' => $this->input->post('web'),
                'owner' => $this->input->post('owner'),
                'ket' => $this->input->post('ket')
            );
        $where = array(
            'id' => $this->input->post('id')
            );
        $this->M_company->update($where,$data);
        echo json_encode(array("sukses" => TRUE));
    }

    public function hapus($id)
    {
        $this->M_company->delete($id);
        echo json_encode(array("sukses" => TRUE));
    }

    

}
