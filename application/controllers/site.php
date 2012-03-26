<?php

class Site extends CI_Controller
{
	function index()
	{
		$data = array();

		if($query = $this->bookmark_model->get_bookmarks())
		{
			$data['bookmarks'] = $query;
		}

		$this->load->view('options_view', $data);
	}

	function create()
	{
		$data = array (
			'Name' => $this->input->post('Name'),
			'URL' => $this->input->post('URL'),
			'Comments' => $this->input->post('Comments')
		);

		$this->bookmark_model->add_bookmark($data);
		$this->load->view('options_view');
	}

	function delete()
	{
		$this->bookmark_model->delete_bookmark();
		$this->load->view('list_view');
	}

	function view()
	{
		$data = array();

		if($query = $this->bookmark_model->get_bookmarks())
		{
			$data['bookmarks'] = $query;
		}

		$this->load->view('list_view', $data);
	}
} 