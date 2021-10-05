<?php

//SEO HELPER - gets SEO for page based on passed value

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('send_contact_email')) {

	function send_contact_email($subject = null, $message)
	{
		$ci = & get_instance();

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.caminx.ro',
			'smtp_port' => 465,
			'smtp_user' => 'contact@caminx.ro',
			'smtp_pass' => 'maicanvladX3',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);
		$ci->load->library('email', $config);
		$ci->email->set_newline("\r\n");


		$ci->email->from('noreply@caminx.ro');
		$ci->email->to('contact@caminx.ro');
		$ci->email->subject($subject);
		$ci->email->message($message);

		if(!$ci->email->send()) {
			show_error($ci->email->print_debugger());
		}

		return 1;
	}
}
