<?php

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('university_model');
		$this->load->model('dorm_model');
	}

	public function home()
	{
		$university = new University_model();
		$dorm       = new Dorm_model();

		$topUniversities = $university->getBest();
		$allDorms        = $dorm->getAll();

		$data = array(
			'topUniversities' => $topUniversities,
			'allDorms'         => $allDorms,
		);

		load_page('index', $data);

	}


}
