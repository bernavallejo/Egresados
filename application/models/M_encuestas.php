<?php

	class M_encuestas extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getEncuesta($id){
			$id = (int) $id;
			return $this->db->select("*")->from("encuestas2preguntas")->join("encuesta","encuesta.id = encuestas2preguntas.id_encuesta")->join("preguntas","preguntas.id = encuestas2preguntas.id_pregunta") ->where("encuesta.id=$id")->get()->result();
			// print_r($this->db->select("*")->from("encuestas2preguntas")->join("encuesta","encuesta.id = encuestas2preguntas.id_encuesta")->join("preguntas","preguntas.id = encuestas2preguntas.id_pregunta") ->where("encuesta.id=$id")->get()->result());
			// die();
		}
	   
	}

?>