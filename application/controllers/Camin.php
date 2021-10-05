<?php

class Camin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dorm_model');
		$this->load->model('review_model');
		$this->load->model('university_model');
	}

	public function search()
	{
		$id = $this->input->post('camin');
		$id = trim($id,'>');

		$dorm = new Dorm_model();
		$currentDorm = $dorm->get($id);
		$currentDorm->name = str_replace(' ', '-', $currentDorm->name);

		redirect ('camin/view/'.$currentDorm->name);

		//daca exista dam redirect pe view
		//daca nu exista dam redirect 404 page not found
	}

	public function view($dormName)
	{
		$name = str_replace('-', ' ', $dormName);

		$dorm = new Dorm_model();
		$review = new Review_model();

		$currentDorm = $dorm->getByName($name);
		$reviews     = $review->getForDorm($currentDorm->id);
		$userHasReview = 0;

		if($this->session->userdata('id')) {
			$userHasReview = $review->userHasReview($currentDorm->id, $this->session->userdata('id'));
		}


		$data = array(
			'currentDorm' => $currentDorm,
			'reviews'     => $reviews,
			'userHasReview' => $userHasReview,
		);


		load_page('review', $data);

	}

	public function listaCamine($numeFacultate)
	{
		$numeFacultate = urldecode($numeFacultate);

		$dorm = new Dorm_model();
		$univ = new University_model();

		$currentUniv = $univ->getByName($numeFacultate);
		$dorms = $dorm->getAllByUnivId($currentUniv->id);

		$data = array(
			'univ'  => $currentUniv,
			'dorms' => $dorms,
		);

		load_page('lista-camine', $data);

	}
}
