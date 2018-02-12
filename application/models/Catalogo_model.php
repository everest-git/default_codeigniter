<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all($catalogo)
	{
		switch ($catalogo) {
			case 'AREA':
				# code...
				$query = $this->db->get('area');
				break;
			case 'cargo_nominal':
				$query = $this->db->get('cargo_nominal');
				break;
			case 'cargo_funcional':
				$query = $this->db->get('cargo_funcional');
				break;
			default:
				# code...
				break;
		}

		if ($query->num_rows() > 0) {
			# code...
			return $query->result();
		}else{
			return null;
		}

		
	}

	public function get_by_id($catalogo, $id)
	{
		
		switch ($catalogo) {
			case 'AREA':
				# code...
				$this->db->where('id_area', $id);
				$query = $this->db->get('area');
				break;
			case 'cargo_nominal':
				break;
			case 'cargo_funcional':
			
			default:
				# code...
				break;
		}

		if ($query->num_rows() > 0) 
		{
			# code...
			return $query->row();
		}
		else 
		{
			return FALSE;
		}

		
	}

	public function save($catalogo, $data, $id = 0)
	{
		$catalogo = '';
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

	public function delete($catalogo, $id)
	{
		$catalogo = '';
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

}

/* End of file Catalogo_model.php */
/* Location: ./application/models/Catalogo_model.php */