<?php
class Dbux extends CI_Model{
   
   
    function getlogo()
    {
    $sql    = 
        "SELECT
            ftampilan.*
        FROM
            ftampilan
        WHERE 
            ftampilan.kode = 'logo'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getteksfooter()
    {
    $sql    = 
        "SELECT
            ftampilan.*
        FROM
            ftampilan
        WHERE 
            ftampilan.kode = 'teksfooter'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getlink()
    {
    $sql    = 
        "SELECT
            ftampilan.*
        FROM
            ftampilan
        WHERE 
            ftampilan.kode = 'link'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getcompany()
    {
    $sql    = 
        "SELECT
            tcompany.*
        FROM
            tcompany
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getcompanyrow()
    {
    $sql    = 
        "SELECT
            tcompany.*
        FROM
            tcompany
         ";

        $query = $this->db->query($sql);
        return $query->row();
    }


}
?>