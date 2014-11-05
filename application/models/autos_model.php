<?php
class Autos_Model extends CI_Model 
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function  insert($data)
    {
        //print_r($data);
       // $this->db->trans_begin();
        $sql=$data;
        $this->db->query($sql);
    //echo $this->db->affected_rows();
       // if($this->db->trans_status() === FALSE)
       //     {
        //    $this->db->trans_rollback();
        //    }else{
                
        //        $this->db->trans_commit();    
          //      }
        return $this->db->affected_rows();
    }
    
    function select_meses()
    {
        $sql="SELECT * FROM meses ORDER BY id_mes ASC";
        
        return $this->db->query($sql);
    }
    function select_estados()
    {
        $sql="SELECT clave,nombre FROM estados";
        return $this->db->query($sql);
    }
}

