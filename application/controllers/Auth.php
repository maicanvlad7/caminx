<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

	}

	public function register()
	{
		$user = new User_model();
		$validator = new stdClass();

		$errorExists = '';

		foreach($this->input->post() as $key=>$val) {
			$validator->$key = $val;
		}

		//checking to see if the email exists
		if($user->checkDuplicateEmail($validator->email)) {
			$errorExists .= '<br>Acest email este utilizat deja';
		}

		//checking to see if the username exists
		if($user->checkDuplicateUsername($validator->username)) {
			$errorExists .= '<br>Acest username este utilizat deja';
		}

		//if email/username exists we redirect the user
		if(!empty($errorExists)) {
			$this->session->set_flashdata('error', $errorExists);
			redirect('');
		}

		//hashing the password
		$validator->password = md5($validator->password);

		//creating the user
		if( $user->create($validator)) {
			$this->session->set_flashdata('success', 'Cont creat cu succes. Va puteti loga.');
		}else{
			$this->session->set_flashdata('error', 'Eroare la creare cont. Va rugam incercati din nou!');
		}

		redirect('');

	}

	public function login()
	{
		$user = new User_model();
		$validator = new stdClass();

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$checker = $user->checkLogin($email, $password);

		if(isset($checker->id)) {
			$this->session->set_flashdata('success', 'Te-ai autentificat cu succes. Acum poti lasa un review.');

			//helper function here please
			foreach($checker as $key=>$val) {
				$this->session->set_userdata($key, $val);
			}

		}else{
			$this->session->set_flashdata('error', 'Email sau parola gresite. Incearca din nou!');
		}

		redirect('');





	}




}
