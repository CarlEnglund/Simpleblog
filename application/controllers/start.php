<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {


	//This runs to check if the user is logged in
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	//Load the indexpage when logged in, this is the post a blog page.
	public function index($posted = "")
	{	
		$posted = array('posted' => $posted);
		$this->load->view('start', $posted);
	}

	//Load all the blog posts and sends them to the view
	public function blog()
	{
		$this->load->library('gravatar');
        $this->load->model('blog_model');
        $this->load->model('user_model');
        $username = $this->session->userdata('username');
		$data['news'] = $this->blog_model->load_posts(); 
		$data['userinfo'] = $this->user_model->get_user($username);

		//Check if user is logged in or not.
		$is_logged_in = $this->session->userdata('is_logged_in');
		

		$data['logged_in'] = ($is_logged_in == true) ? true : false;
		$data['picture'] = $this->gravatar->get_gravatar('englund92@gmail.com');
		$this->load->view('blog', $data);
		
	}

	//Controller method for adding posts to the database
	public function form()
	{
		$posted = "Your message was posted";
		$this->load->model('blog_model');    
		$this->blog_model->add_post();
		$this->index($posted);
	}

	//Retrieving a single post from the database this is used when editing
	public function retrieve_post($pid)
	{
		$this->load->model('blog_model');
		$edit['id'] = $pid;
		$edit['return'] = $this->blog_model->load_single_post($pid);
		$this->load->view('edit', $edit);

	}
 
 	//Load all posts for the edit view
 	public function edit_posts($updated = '')
 	{
 		$this->load->model('blog_model');
 		$edit['return'] = $this->blog_model->load_posts();
 		$edit['message'] = $updated;
 		$this->load->view('edit_all', $edit);
 	}

 	//Updates a post in the database
	public function update_post($pid)
	{
		
		$this->load->model('blog_model');
		$this->blog_model->edit_post($pid);
		$updated = 'true';
		$this->edit_posts($updated);
	}

	//Deletes a post from the database
	public function delete_post($pid)
	{
		$this->load->model('blog_model');
		$this->blog_model->delete_post($pid);
		redirect('start/edit_posts', 'location');
	}

	public function update_page()
	{
		$this->load->model('user_model');
		$username = $this->session->userdata('username');
		$data['userinfo'] = $this->user_model->get_user($username);
		$this->load->view('edit_user', $data);
	}

	//Check if a user is logged in. also allows certain methods to be loaded anyways, such as the blogmethod.
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		$allowed = array(
            'blog',
            '',
        );

		if(!isset($is_logged_in) || $is_logged_in != true && (!in_array($this->router->method, $allowed)))
		{
			echo 'Please login';
			redirect('admin/index', 'location');
		}
	}
} 