<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	
	public function create($table, $data) {

		$this->db->insert($table, $data);
		if ($this->db->affected_rows() > 0)
			return true;
		else
			return false;
	}
	

	public function read($table, $select, $where, $order_by) {

		if ($select != '')
			$this->db->select($select);
		if ($where != '')
			$this->db->where($where);
		$this->db->from($table);
		$query = $this->db->get();

		return $query->result();
	}

	
	public function update($table, $data, $where) {
		
	}

	public function delete() {

	}


	

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */