<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Catalogo_model');
	}

	public function index()
	{
		# code...
		$catalogo = 'area';
		$this->load->view('plantillas/header');

		switch ($catalogo) {
			case 'area':
				# code...			
				$data = array(
						'areas' => $this->Catalogo_model->get_all('AREA')
				);
				$this->load->view('catalogos/area/lista', $data);
				break;
			case 'cargo_nominal':
				break;
			case 'cargo_funcional':
				break;
			default:
				# code...
				break;
		}

		$this->load->view('plantillas/footer');
	}

	public function GetAreas(){
		$data = array(
					'areas' => $this->Catalogo_model->get_all('AREA')
				);
		
		$this->load->view('catalogos/area/lista', $data);
	}

	private function listar_catalogo($catalogo, $data)
	{
		# code...
		$this->load->view('plantillas/header', $data);

		switch ($catalogo) {
			case 'area':
				# code...
				$this->load->view('catalogos/area/lista', $data);
				break;
			case 'cargo_nominal':
				break;
			case 'cargo_funcional':
			
			default:
				# code...
				break;
		}

		$this->load->view('plantillas/footer', $data);
	}

	public function detalle($catalogo, $id = 0)
	{
		$this->load->view('plantillas/header');

		switch ($catalogo) {
			case 'area':
				# code...
				$row = $this->Catalogo_model->get_by_id('AREA', $id);
				/*$data = array(
					'area' => $this->Catalogo_model->get_by_id('AREA', $id)
				);*/
				$data = array(
					'id_area' => $row->id_area,
					'area' => $row->area,
					'siglas' => $row->siglas
				);
				if ($row === FALSE) {
				 	# code...
				 	echo 'No encontró nada';
				 } 
				 
				$this->load->view('catalogos/area/detalle', $data);
				break;
			case 'cargo_nominal':
				break;
			case 'cargo_funcional':
			
			default:
				# code...
				break;
		}

		$this->load->view('plantillas/footer');
	}

	public function ejecuta_accion($catalogo, $accion, $id)
	{
		switch ($catalogo) {
			case 'area':
				# code...
				break;
			case 'cargo_nominal':
				break;
			case 'cargo_funcional':
			
			default:
				# code...
				break;
		}
	}

	private function do_crud($accion)
	{
		switch ($accion) {
			case 'create':
				# code...
				break;
			case 'read':
				break;
			case 'update':
				break;
			case 'delete':
				break;
			
			default:
				# code...
				break;
		}
	}

	private function set_area()
	{

		$data['id'] = $this->input->post('txt_id_area');
		$data['area'] = $this->input->post('txt_area');
		$data['vigente'] = $this->input->post('txt_vigente');

		return ($data);
	}

	private function set_cargo_nominal($id = 0)
	{
		$data['id'] = $id;
		$data['cargo_nominal'] = $this->input->post('cargo_nominal');
		$data['vigente'] = $this->input->post('vigente');

		return $data;		
	}

	private function set_cargo_funcional($id = 0)
	{
		$data['id'] = $id;
		$data['cargo_funcional'] = $this->input->post('cargo_funcional');
		$data['vigente'] = $this->input->post('vigente');

		return $data;
 	}

}

/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */