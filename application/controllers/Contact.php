<?php

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}

	public function send()
	{
		$message =  'Nume : '. $this->input->post('name') .
					'<br>Email: ' . $this->input->post('email') .
					'<br>Telefon: ' . $this->input->post('phone') .
					'<br>Mesaj: <br>' . $this->input->post('message');

		if(send_contact_email('Mesaj nou din site', $message)) {
			$this->session->set_flashdata('success','Mesaj transmis cu succes. Vei fi contactat in curand!');
			redirect($_SERVER['HTTP_REFERER']);
		};
	}


}
