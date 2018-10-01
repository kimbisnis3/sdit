<?php
class Dbhelper extends CI_Model{
   

    function getdata($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    function getdatawall($table,$where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->result();
    }

    function getdataw($table,$where)
    {
        $query = $this->db->get($table,$where);
        return $query->row();
    }

    function save($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function edit($table,$where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->row();
    }

    function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function loaddepartemen($kode)
    {
        $sql    = 
        "SELECT
            magen.*
        FROM
            magen
        LEFT OUTER JOIN mdivisi on magen.ref_div = mdivisi.kode
        WHERE 
            mdivisi.kode = '$kode'"; 

        $query = $this->db->query($sql);
        return $query->result(); 
    }


}
?>