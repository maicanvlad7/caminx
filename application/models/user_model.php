<?php

class User_model extends CI_Model {

	private $table = 'user';

	public function get($id)
	{

	}

	public function create($user)
	{
		return $this->db->insert($this->table, $user);
	}

	public function checkDuplicateEmail($email)
	{
		return $this->db->where('email', $email)->get($this->table)->num_rows();
	}

	public function checkDuplicateUsername($username)
	{
		return $this->db->where('username', $username)->get($this->table)->num_rows();
	}

	public function checkLogin($email, $pass)
	{
		return $this->db->where('email', $email)->where('password', $pass)->get($this->table)->row();
	}
}
