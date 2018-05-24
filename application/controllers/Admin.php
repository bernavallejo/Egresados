<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
	public function _example_output($output = null){
		$this->load->view('admin_view',(array)$output);
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
					->display_as('domicilio_estado','Estado')
					->display_as('id_carrera','Carrera')
					->display_as('id_empresa','Empresa');		
			$crud->set_relation_n_n('Empresa', 'egresado2empresa', 'empresa', 'id_egresado', 'id_empresa', 'nombre');
			$crud->set_relation_n_n('Avisos', 'egresados2avisos', 'avisos', 'id_egresado', 'id_aviso', 'descripcion');			
			$crud->columns('nombre','id_carrera','estatus','correo','facebook');
			$crud->required_fields('nombre','carrera','domicilio_calle','domicilio_cp','domicilio_municipio','domicilio_estado','correo');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_usuarios (){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('usuario');
			$crud->unset_columns('contraseña');
			// $crud->unset_fields('id_tipo');
			$crud->display_as('nombre','Nombre')
					->display_as('usuario','Usuario')
					->display_as('contraseña','Contraseña')
					->display_as('id_depa','Departamento')
					->display_as('id_tipo','Tipo de usuario');
			$crud->set_relation('id_depa','departamento','nombre');		
			$crud->set_relation('id_tipo','tipo_usuario','descripcion');
			$crud->set_subject('Usuario');
			$crud->change_field_type('contraseña','password');
			$crud->required_fields('nombre','usuario','contraseña');
			$crud->callback_before_insert(array($this,'encrypt_password_callback'));
			$crud->callback_before_update(array($this,'encrypt_password_callback'));
			
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_preguntas(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('preguntas');
			$crud->display_as('id_departamento','Departamento');
			$crud->set_relation('id_departamento','departamento','nombre')
					->set_relation('tipo','tipo_pregunta','descripcion')
					->set_relation('privilegio','privilegios','descripcion');
			$crud->columns('pregunta','tipo','privilegio','id_departamento');
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_respuestas(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('encuestas2preguntas');	
			$crud->unset_columns('id');
			$crud->unset_edit();
			$crud->set_relation('id_pregunta','preguntas','pregunta')
				->set_relation('id_encuesta','encuesta','titulo');
			

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function ver_carreras(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('carrera');
			$crud->set_subject('Carrera');
			$crud->display_as('departamento_id','Departamento');
			$crud->set_relation('departamento_id','departamento','nombre');
			$crud->unset_read();
			

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function crear_encuestas(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('encuesta');
			$crud->display_as('id_usu','Usuario')
					->display_as('id_departamento','Departamento');
			$crud->set_relation('id_departamento','departamento','nombre')
					->set_relation('id_usu','usuario','nombre');
			$crud->set_relation_n_n('Preguntas', 'encuestas2preguntas', 'preguntas', 'id_encuesta', 'id_pregunta', 'pregunta','priority');
			$crud->set_subject('Encuesta');
			$crud->fields('id_usu','id_departamento','titulo','Preguntas');
			$crud->columns('titulo','Preguntas');
			$crud->unset_read();
			$crud->add_action('ver', '', '/Admin/ver_encuestas', 'read-icon');
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
			$this->load->model('M_encuestas');
			$datos['encuestas']=$this->M_encuestas->getEncuesta($id);
			// print_r($datos);
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
	
	public function correos(){
		try{
			$this->load->view('correo');


		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	
	function callback_test1($post_array){
		//die(var_dump($post_array));
		$usuario = $this->session->userdata('usuario');
		$departamento = $this->session->userdata('depa');
		$post_array['id_usu'] = $usuario;
		$post_array['id_departamento'] = $departamento;
		
		return $post_array;
	}
	function encrypt_password_callback($post_array, $primary_key) {
			 
		//Encrypt password only if is not empty. Else don't change the password to an empty field
		if(!empty($post_array['contraseña'])){
			$key = 'tecnologico-de-colima'; //Frase usada para la encriptación y desencriptación de la contraseña
			$post_array['contraseña'] = $this->encrypt->encode($post_array['contraseña'], $key);
		}
		else{
			unset($post_array['contraseña']);
		}		 
		return $post_array;
	}
}
