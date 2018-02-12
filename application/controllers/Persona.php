<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('plantillas/header');
		$this->load->view('persona/detalle_view');
		$this->load->view('plantillas/footer');
		
	}

	public function turnar()
	{
		# code...

	}

}

/* End of file Persona.php */
/* Location: ./application/controllers/Persona.php */