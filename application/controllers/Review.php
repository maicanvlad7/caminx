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

		$text_has_bad_words = filter_bad_words($text);

		if($text_has_bad_words) {
			$this->session->set_flashdata('error','Te rugam sa nu folosesti cuvinte urate chiar daca experienta la camin nu a fost una plcauta.');
			redirect($_SERVER['HTTP_REFERER']);
		}

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
