<?php
class Dbhelper extends CI_Model{
   

    function getdata($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    function getdataorder($table)
    {
        $query = $this->db->get($table);
        $this->db->order_by('datei','desc');
        return $query->result();
    }

    function getdataorderlimit($table,$limit)
    {
        $this->db->limit($limit);
        $query = $this->db->get($table);
        $this->db->order_by('datei','desc');
        return $query->result();
    }

    function getdatalimit($table,$limit)
    {
        $this->db->limit($limit);
        $query = $this->db->get($table);
        return $query->result();
    }

    function getdatarow($table)
    {
        $query = $this->db->get($table);
        return $query->row();
    }

    function getdatawall($table,$where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->result();
    }

    function getdataw($table,$where)
    {
        $this->db->where($where);
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

	function search($key)
    {
        $sql = "SELECT qr.* FROM (
        SELECT 'berita' as ktg,judul,artikel,slug,gambar FROM fberita 
        UNION ALL 
        SELECT 'artikel' as ktg,judul,artikel,slug,gambar FROM fberita 
        UNION ALL 
        SELECT 'kurikulum' as ktg,judul,artikel,slug,gambar FROM fkurikulum
        UNION ALL 
        SELECT 'ppdb' as ktg,judul,artikel,slug,gambar FROM fppdb
        UNION ALL 
        SELECT 'kesiswaan' as ktg,judul,artikel,slug,gambar FROM fkesiswaan
        UNION ALL 
        SELECT 'profil' as ktg,judul,artikel,slug,gambar FROM fprofil
        ) qr
        WHERE qr.judul ILIKE '%$key%'";

        $query = $this->db->query($sql);
        return $query->result();
    }


}
?>