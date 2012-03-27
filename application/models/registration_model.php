<?php

class Registration_model extends CI_Model {

	function get_user()
	{
	$query = $this->db->get('users');
	return $query->result();
	}

	function add_user($data) 
	{
		$this->db->insert('users', $data);
		return;
	}
}