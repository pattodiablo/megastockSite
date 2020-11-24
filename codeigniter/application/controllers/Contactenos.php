<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactenos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('apellido', 'apellido', 'required');
		$this->form_validation->set_rules('telefono', 'telefono', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('email', 'email', 'valid_email');
		$this->form_validation->set_rules('mensaje', 'mensaje', 'required');
		
		
			if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('pageHead');
			$this->load->view('navegacion');
			$this->load->view('menu');
			$this->load->view('contactenos');
			$this->load->view('footer');
			$this->load->view('finalScripts');
		}
		else
		{
		
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');
			$mensaje = $this->input->post('mensaje');


			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			$this->email->from($email , $nombre);
			$this->email->to('patricio.leon@weveana.com'); 
			//$this->email->cc('another@another-example.com'); 
			//$this->email->bcc('them@their-example.com'); 		
			$this->email->subject('contactenos Agrostock');
			$this->email->message(

				"<html>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>$nombre</title>
				</head>

				<body>
					<p>Nombre: $nombre</p>
					<p>Nombre: $apellido</p>
					<p>Telefono: $telefono</p>
					<p>$email</p>
					<p>Mensaje:</p>
					<p>$mensaje</p>
				</body>
				</html>"



			);		
			$this->email->send();		
	//	echo $this->email->print_debugger();
			
			
			$this->load->view('pageHead');
			$this->load->view('navegacion');
			$this->load->view('menu');
			$this->load->view('formsuccess');
			$this->load->view('footer');
			$this->load->view('finalScripts');
			
			
			
	
		}
		
		
	}
}
