<?php

class University_model extends CI_Model {

	private $table = 'university';

	public function getBest()
	{
		$preffered = array(1,9,7);

		$this->db->where_in('id',$preffered);
		return $this->db->get($this->table)->result();
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

}
