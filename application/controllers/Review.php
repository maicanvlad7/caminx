<?php

class Review extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('review_model');
	}

	public function add($dormId)
	{
		$text = $this->input->post('text');

		$review = new stdClass();

		$review->dorm_id = $dormId;
		$review->user_id = $this->session->userdata('id');
		$review->text    = $text;

		if($this->db->insert('review', $review)) {
			$this->session->set_flashdata('success','Comentariu adaugat cu scuces. Iti multumim!');
		}else{
			$this->session->set_flashdata('error','Eroare la adaugare comentariu');
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
}
