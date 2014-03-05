<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	 
	//Default controller sends user to loginpage
	public function index()
	{
		$this->load->view('signin');
	}

	//Validate method for checking if a user is allowed to log in
	public function validate()
	{
		$this->load->model('user_model');
		$query = $this->user_model->validate();

		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true 
				);
			$this->session->set_userdata($data);
			$this->load->view('start', $posted = "");
		}

		else
		{
			$this->index();
		}

	}

	//Logout controller method
	public function logout()
	{
        $this->session->sess_destroy();
        redirect('admin/index', 'location');
	}

	//Loads unfinished method..
	public function signup()
	{
		$this->load->view('signup');
	}
	
}