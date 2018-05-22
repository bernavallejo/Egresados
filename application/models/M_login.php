<?php

class M_login extends CI_Model{
    function __construct(){
     	parent::__construct();
    }

    public function getUsers(){
        return $this->db->select("*")->from("usuario")->get()->result();
    }
    function getUser($usuario){
       $this->db->where('usuario',$usuario);
       $query = $this->db->get('usuario');
       return $query->result();
    }
   
}

?>