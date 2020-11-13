<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactos extends CI_Controller {

	
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('email', 'email', 'valid_email');
		$this->form_validation->set_rules('telefono', 'telefono', 'required');
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('header');
		$this->load->view('contactos');
		$this->load->view('footer');
		}
		else
		{
		
		
	
		
		$nombre = $this->input->post('nombre');
		$email = $this->input->post('email');
		$telefono = $this->input->post('telefono');
		$descripcion = $this->input->post('descripcion');
					
		
		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		
		$this->email->from($email , $nombre);
		$this->email->to('patricio.leon@weveana.com'); 
		//$this->email->cc('another@another-example.com'); 
		//$this->email->bcc('them@their-example.com'); 		
		$this->email->subject('contactenos Agrostock');
		$this->email->message(
		
			"<html xmlns='http://www.w3.org/1999/xhtml'>
			<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title>$nombre</title>
			</head>
			
			<body>
			<p>Nombre: $nombre</p>
			<p>$email</p>
			<p>Telefono: $telefono</p>
			<p>Mensaje:</p>
			<p>$descripcion</p>
			</body>
			</html>"

	
		
		);		
		$this->email->send();		
	//	echo $this->email->print_debugger();
			
			$this->load->view('header');
			$this->load->view('formsuccess');
			$this->load->view('footer');
	
		}
		
		
	}
}

