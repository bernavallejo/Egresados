<?php

	class M_email extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library('email'); 		
		}
		
	public function send($to='', $subject = 'Subject', $body='body'){
									
        $config['protocol'] = 'send_mail';       
        $this->email->initialize($config);
		$this->email->set_newline( "\r\n");
		
		
		$this->email->from('sistema_seguimiento@gmail.com ', 'Sistema de Seguimiento'); 
		$this->email->to( $to ); 
		// $this->email->cc(' another@another-example.com '); 
		// $this->email->bcc(' them@their-example.com '); 
		$this->email->subject( $subject ); 
		$this->email->message( $body );
		
		if ($this->email->send() ){
			return true;
		}
		
		return false;
		//echo $this->email->print_debugger();
		}


	   
	}

?>