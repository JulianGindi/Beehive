<?php

class Registration extends CI_Controller {


	function index()
	{
		if ( isset($_SESSION['username'])) {
			redirect('site');
		}

		$data = array();

		if($query = $this->registration_model->get_user())
		{
			$data['users'] = $query;
		}

		$this->load->view('templates/header', $data);
		$this->load->view('registration_view', $data);
	}

	function create()
	{
		$hash = sha1($this->input->post('password'));
		$data = array (
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'password' => $hash
		);

		$this->registration_model->add_user($data);
		redirect('admin');
	}
}