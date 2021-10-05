<?php

//SEO HELPER - gets SEO for page based on passed value

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('filter_bad_words')) {

	function filter_bad_words($text)
	{
		$text = strtolower($text);

		$bad_words = array('pula', 'poola', 'p1zd4', 'p1zda', 'pizda', 'cur', 'coor', 'foot' ,'fut', 'pis', 'p1s', 'cacat', 'pisat', 'coaie', 'co413', 'co4ie', 'coa1e');

		$reg = '~\b' . implode('\b|\b', $bad_words) . '\b~';

		preg_match_all($reg, preg_replace('~[.,?!]~', '', $text), $matches);

		if(count($matches[0]) > 0) return 1;

		return 0;
	}
}
