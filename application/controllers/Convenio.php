<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convenio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('convenio/convenio');
		
	}

}

/* End of file Convenio.php */
/* Location: ./application/controllers/Convenio.php */