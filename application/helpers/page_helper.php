<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_page')) {

	/**
	 * @param $pageName
	 * @param null $additionalData - so we can call the load_page function from pages that don't load dynamic data
	 */

	function load_page($pageName, $additionalData = null)
	{
		$ci = & get_instance();

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


		$ci->load->view('modules/head', $data);
		$ci->load->view('pages/'.$pageName, $data);
		$ci->load->view('modules/footer');
	}
}
