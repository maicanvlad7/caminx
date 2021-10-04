<?php

class Dorm_model extends CI_Model {

	private $table = 'dorm';

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

}
