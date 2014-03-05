<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{

	//Load all posts and returns the array to the controller
	public function load_posts()
	{
		$this->db->select('pid, rubrik, text, time');
		
		return $this->db->get('posts')->result_array();
	}	

	//Adds a post to the database
	public function add_post()
	{
       $data = array(
	           'rubrik' => strip_tags($this->input->post('Rubrik')),
	           'text' => strip_tags($this->input->post('Text')));  

       $this->db->insert('posts', $data);
	}

	//Load single posts
	public function load_single_post($pid)
	{
		$this->db->select('rubrik, text');
		$this->db->where('pid', $pid);

		return $this->db->get('posts')->result_array();
	}

	//Updating the database when editing a post
	public function edit_post($pid)
	{
		$data = array(
			'rubrik' => strip_tags($this->input->post('Rubrik')),
			'text' => strip_tags($this->input->post('Text')));

		$this->db->where('pid', $pid);
		$this->db->update('posts', $data);
	}	

	//Deleting a post from the database
	public function delete_post($pid)
	{
		$this->db->where('pid', $pid);
		$this->db->delete('posts');
	}
}