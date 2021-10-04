<?php

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('university_model');
	}


	/**
	 * @param $pageName
	 * @param null $additionalData - so we can call the load_page function from pages that don't load dynamic data
	 */

	public function load_page($pageName, $additionalData = null)
	{
		//getting the SEO attirbutes for the page using a helper function
		$seo = getPageSeo($pageName);

		//setting the values that will be used in the loaded view
		$data = array(
			'seo' => $seo,
		);

		//if additional data for view was sent, we merge it in the original data array that is used for the data in the view
		if(!empty($additionalData)) {
			$data = array_merge($data, $additionalData);
		}


		$this->load->view('modules/head', $data);
		$this->load->view('pages/'.$pageName, $data);
		$this->load->view('modules/footer');
	}

	public function home()
	{
		$university = new University_model();

		$topUniversities = $university->getBestUniversities();
		$data = array('topUniversities' => $topUniversities);

		$this->load_page('index', $data);

	}

	public function jsonCompiler()
	{
		$file_path = base_url('csvjson.json');

		$json = file_get_contents($file_path);

		$json_parsed = json_decode($json);

		$tick = 0;

		$final_array = array();

		$orase_dorite = array('Cluj-Napoca','Bucuresti');

		foreach($json_parsed as $js) {
			if($tick < 2400) {
				if(in_array($js->oras,$orase_dorite)) {
					array_push($final_array, $js->email);
					$tick += 1;
				}
			}else{
				break;
			}
		}

		echo json_encode($final_array);
		die();
	}

}
