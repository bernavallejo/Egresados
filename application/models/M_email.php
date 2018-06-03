<?php

	class M_email extends CI_Model{
		
		protected $email_smtp_from;
		function __construct(){
			parent::__construct();
			$this->load->library('email'); 
			
			$this->email_smtp_from= 'btvg-gmme@hotmail.com';
					
			
		}
		
		public function active_smtp ( $active = true){
			$config = [];
			
			if ( $active ){
											
				//Indicamos el protocolo a utilizar
				$config['protocol'] = 'smtp';
				 
			   //El servidor de correo que utilizaremos
				$config["smtp_host"] = 'smtp.live.com';
				 
			   //Nuestro usuario
				$config["smtp_user"] = $this->email_smtp_from;
				 
			   //Nuestra contraseña
				$config["smtp_pass"] = 's0yunfr3g0n&';    
				 
			   //El puerto que utilizará el servidor smtp
				$config["smtp_port"] = '587';
				
				$config['mailtype'] = 'html';
								
			   //El juego de caracteres a utilizar
				$config['charset'] = 'utf-8';
	
			   //El email debe ser valido  
			   $config['validate'] = true;
			}else{
				$config['protocol'] = 'send_mail';
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
			}
			return $config;
			
		}
		
	public function send($to='', $subject = 'Subject', $body='body'){
		
		$config = $this->active_smtp(false);								               
        $this->email->initialize($config);
		$this->email->set_newline( "\r\n");
		$debug = false;
		
		
		$this->email->from( $this->email_smtp_from , 'Sistema de Seguimiento'); 
		$this->email->to( $to ); 
		// $this->email->cc(' another@another-example.com '); 
		// $this->email->bcc(' them@their-example.com '); 
		$this->email->subject( $subject ); 
		$this->email->message( $body );
		
		if ($this->email->send() ){
			return true;
		}
		
		if( $debug )echo $this->email->print_debugger(); exit;
		return false;
		
		}


	   
	}

?>