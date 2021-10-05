<?php

class Dorm_model extends CI_Model {

	private $table = 'dorm';

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function get($id)
	{
		return $this->db->where('id', $id)->get($this->table)->row();
	}

	public function getByName($name)
	{
		$query = "SELECT
				  university.name AS university_name,
				  university.id   AS university_id,
				  university.city,
				  dorm.* FROM dorm
                  INNER JOIN university
                  ON dorm.university_id = university.id
                  WHERE dorm.name = '$name'";

		return $this->db->query($query)->row();
	}

	public function getAllByUnivId($id)
	{
		return $this->db->where('university_id', $id)->get($this->table)->result();
	}

}
