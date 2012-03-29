<?php

class Registration extends CI_Controller {


	function index()
	{
		if ( isset($_SESSION['username'])) {
			redirect('site');
		}
		
		$data = array();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		
		if ( $this->form_validation->run() !== false ) {
		
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
			
			$this->load->view('templates/header', $data);
			$this->load->view('registration_view', $data);
		}
	}

/*
	function create()
	{
	
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		
		if ( $this->form_validation->run() !== false ) {
		
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

}

*/