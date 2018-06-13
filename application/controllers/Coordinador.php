<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_email');
		$this->load->model('m_encuestas');
		
		//existe la sesion ? veo lo que seg :  me voy al login;	

	}
	public function _example_output($output = null){
		$this->load->view('coordi_view',(array)$output);
	}
	
	public function index(){
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	public function ver_egresados(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('egresados');
			$crud->set_subject('Egresado');
			$crud->set_relation('id_carrera','carrera','nombre');
			$crud->display_as('domicilio_calle','Calle y numero')
					->display_as('domicilio_colonia','Colonia')
					->display_as('domicilio_cp','Codigo Postal')
					->display_as('domicilio_municipio','Municipio')
					->display_as('id_carrera','Carrera')
					->display_as('fecha_egreso','Fecha de egreso')
					->display_as('domicilio_estado','Estado');
			$crud->set_relation_n_n('Empresa', 'egresado2empresa', 'empresa', 'id_egresado', 'id_empresa', 'nombre');
			$crud->set_relation_n_n('Avisos', 'egresados2avisos', 'avisos', 'id_egresado', 'id_aviso', 'descripcion');
			$crud->columns('nombre','id_carrera','estatus','fecha_egreso','correo','facebook');		
			$crud->required_fields('nombre','carrera','domicilio_calle','domicilio_cp','domicilio_municipio','domicilio_estado','correo');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_preguntas(){
		try{
			$depa = $this->session->userdata('depa');
			$where = "privilegio='1' OR privilegio='2' AND id_departamento=$depa"; //Clausula del where para la visualizacion de preguntas
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('preguntas');	
			$crud->where($where);
			$crud->set_subject('Pregunta');
			$crud->set_relation('id_departamento','departamento','nombre')
					->set_relation('tipo','tipo_pregunta','descripcion')
					->set_relation('privilegio','privilegios','descripcion');
			$crud->columns('pregunta','tipo','privilegio','id_departamento');
			$crud->display_as('id_departamento','Departamento');
			$crud->callback_before_insert(array($this,'callback_test2'));
			$crud->unset_add();
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	// public function ver_respuestas(){
		// try{
			// $crud = new grocery_CRUD();

			// $crud->set_theme('flexigrid');
			// $crud->set_table('encuestas2preguntas');	
			// $crud->columns('id_encuesta','id_pregunta');
			// $crud->unset_operations();
			// $crud->set_relation('id_pregunta','preguntas','pregunta')
				// ->set_relation('id_encuesta','encuesta','titulo');
			// $crud->set_relation_n_n('Preguntas', 'encuestas2preguntas', 'preguntas', 'id_encuesta', 'id_pregunta', 'pregunta','priority');
			// $crud->display_as('id_pregunta','Pregunta')
					// ->display_as('id_encuesta','Encuesta');
			// $crud->order_by('id_encuesta','desc');
			// $output = $crud->render();

			// $this->_example_output($output);

		// }catch(Exception $e){
			// show_error($e->getMessage().' --- '.$e->getTraceAsString());
		// }
	// }
	
	public function crear_encuestas(){
		try{
			// var_dump($this->session->userdata());exit();
			$usuario = $this->session->userdata('usuario');
			$depa = $this->session->userdata('depa');
			$where = "id_usu=$usuario AND id_departamentO=$depa";
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('encuesta');
			$crud->set_subject('Encuesta');
			$crud->where($where);
			$crud->display_as('id_usu','Usuario')
					->display_as('id_departamento','Departamento');
			$crud->set_relation('id_departamento','departamento','nombre')
					->set_relation('id_usu','usuario','nombre');
			$crud->set_relation_n_n('Preguntas', 'encuestas2preguntas', 'preguntas', 'id_encuesta', 'id_pregunta', 'pregunta','priority');
			$crud->columns('titulo','Preguntas');
			$crud->unset_read();
			$crud->add_action('Ver Encuesta', '', '/Coordinador/ver_encuestas', 'read-icon');
			$crud->add_action('Enviar', '', '/Coordinador/correos','glyphicon glyphicon-send');
			$crud->callback_before_insert(array($this,'callback_test1'));
			$crud->required_fields('titulo');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_encuestas($id){
		try{
			$datos['encuestas']=$this->m_encuestas->getEncuesta($id);
			$this->load->view('encuesta',$datos);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_empresas(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('empresa');	
			$crud->set_subject('Empresa');
			$crud->display_as('domicilio','Domicilio (calle y número)')
					->display_as('codigopostal','Codigo Postal');
			$crud->columns('nombre','representante','correo','telefono');				
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function correos($id){
		try{
			$datos['encuestas']=$this->m_encuestas->getEncuesta($id);
			$this->load->view('encuesta2',$datos);
			$body =   'Contesta la encuesta global ingresando a la siguiente liga: http://egresados.local.com/encuesta/' . $id;
			//obtenr la lista d elos correos a manara y pasar al array
			// $list_to_Array =  array('berna_10_66@hotmail.com');

			$param= array(
				'to' => $this->input->post('to'),
				'subject' => $this->input->post('subject'),
				'body' => $this->input->post('body')
			);
			// var_dump($param); exit;
			$is_sended = $this->m_email->send( $param['to'], $param['subject'], $param['body'] );
			
			if ( $is_sended ){
				// echo "Succes sended email";
				// $this->load->view('correo');
			}
			else{
				echo "failed sended email";
			}
			// $this->load->view('correo');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function send_mail(){
		
		//validar con post
		//para que obtengas el mensaje
		
		// var_dump($this->input->post()); exit;
		if ( $this->input->post() ){
			// $body =   'Estes es el cuerpo del correo';
			//obtenr la lista d elos correos a manara y pasar al array
			// $list_to_Array =  array('berna_10_66@hotmail.com');

			$param= array(
				'to' => $this->input->post('to'),
				'subject' => $this->input->post('subject'),
				'body' => $this->input->post('body')
			);
			// var_dump($param); exit;
			$is_sended = $this->m_email->send( $param['to'], $param['subject'], $param['body'] );
			
			if ( $is_sended ){
				// echo "Succes sended email";
				$this->load->view('correo');
			}
			else{
				echo "failed sended email";
			}
			// var_dump( $this->input->post()  );exit;
		}else{
			echo "no hago algo"; exit;
		}
		
	}
	
	function callback_test1($post_array){
		$usuario = $this->session->userdata('usuario');
		$departamento = $this->session->userdata('depa');
		$post_array['id_usu'] = $usuario;
		$post_array['id_departamento'] = $departamento;
		
		return $post_array;
	}
	function callback_test2($post_array){
		$departamento = $this->session->userdata('depa');
		// $post_array['id_usu'] = $usuario;
		$post_array['id_departamento'] = $departamento;
		
		return $post_array;
	}

}

