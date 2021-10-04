<?php

//SEO HELPER - gets SEO for page based on passed value

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getPageSeo')) {

	function getPageSeo($pageName)
	{
		$ci = & get_instance();

		$ci->db->where('page', $pageName);
		return $ci->db->get('seo')->row();
	}
}
