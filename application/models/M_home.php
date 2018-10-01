<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{

    function __construct() {
        parent::__construct();
        
    }

    function getSemua(){
        $sql    = 
        "SELECT
            ffasilitas.*
        FROM
            ffasilitas";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getarmada(){
        $sql    = 
        "SELECT
            farmada.*
        FROM
            farmada";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getlogo(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'logo'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

	function getlogofooter(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'logofooter'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getgambarheader(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'gambarheader'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getartikelfooter(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'artikelfooter'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function getteksfooter(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'teksfooter'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getjuduldeskripsi(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'juduldeskripsi'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getteksdeskripsi(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'teksdeskripsi'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getgambarkontakkami(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'gambarkontakkami'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

	function getgambarob(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'gambarob'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getbgfootertop(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'bgfootertop'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getbgfootertbottom(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
         WHERE 
            felementweb.kode = 'bgfootertbottom'
         ";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getsyarat(){
        $sql    = 
        "SELECT
            fsyarat.*
        FROM
            fsyarat";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getsosmed(){
        $sql    = 
        "SELECT
            felementweb.*
        FROM
            felementweb
        WHERE 
            felementweb.jenis = 'i'
        AND 
            felementweb.aktif IS TRUE";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getcompany(){
        $sql    = 
        "SELECT
            tcompany.*
        FROM
            tcompany";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function getslideshow(){
        $sql    = 
        "SELECT
            fslideshow.*
        FROM
            fslideshow";

        $query = $this->db->query($sql);
        return $query->result();
    }

}