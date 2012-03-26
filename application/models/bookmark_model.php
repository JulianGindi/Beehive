<?php

class Bookmark_model extends CI_Model {
	
	function get_bookmarks()
	{
	$query = $this->db->get('Bookmarks');
	return $query->result();
	}

	function add_bookmark($data) 
	{
		$this->db->insert('Bookmarks', $data);
		return;
	}

	function update_bookmark($data) 
	{
		$this->db->where('id', 1);
		$this->db->update('Bookmarks', $data);
	}

	function delete_bookmark()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('Bookmarks');
	}



}