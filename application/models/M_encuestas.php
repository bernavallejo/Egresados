<?php

	class M_encuestas extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getEncuesta($id){
			$id = (int) $id;
			return $this->db->select("encuestas2preguntas.id, encuestas2preguntas.id_pregunta,preguntas.privilegio, preguntas.tipo, preguntas.pregunta, preguntas.respuesta1, preguntas.respuesta2, preguntas.respuesta3, preguntas.respuesta4, preguntas.respuesta5, preguntas.respuesta6, preguntas.respuesta7, preguntas.respuesta8, preguntas.respuesta9, preguntas.respuesta10, preguntas.respuesta11, preguntas.respuesta12,")->from("encuestas2preguntas")->join("encuesta","encuesta.id = encuestas2preguntas.id_encuesta")->join("preguntas","preguntas.id = encuestas2preguntas.id_pregunta") ->where("encuesta.id=$id")->get()->result();
			// print_r($this->db->select("*")->from("encuestas2preguntas")->join("encuesta","encuesta.id = encuestas2preguntas.id_encuesta")->join("preguntas","preguntas.id = encuestas2preguntas.id_pregunta") ->where("encuesta.id=$id")->get()->result());
			// die();
		}
		function almacenar($valor1, $valor2){
			$data = array(
				'id_encu2pre' => $valor1,
				'respuesta' => $valor2
			);
			$this->db->insert('respuestas',$data);
		   
	   }
	}

?>