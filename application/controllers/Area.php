<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('plantillas/header');
		$this->load->view('catalogos/area/detalle');
		$this->load->view('plantillas/footer');
	}

	public function nuevo()
	{
		# code...
	}

}

/* End of file Area.php */
/* Location: ./application/controllers/Area.php */