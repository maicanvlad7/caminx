<?php

class Review_model extends CI_Model {

	private $table = 'review';

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function get($id)
	{
		return $this->db->where('id', $id)->get($this->table)->row();
	}

	public function getForDorm($dormId)
	{
		$sql = "SELECT * FROM review 
                INNER JOIN user
                ON review.user_id = user.id
                WHERE review.dorm_id = $dormId";

		return $this->db->query($sql)->result();

	}

	public function userHasReview($dormId, $userId)
	{
		return $this->db->where('user_id', $userId)->where('dorm_id', $dormId)->get($this->table)->num_rows();
	}

}
