<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
  //Validates if a user is actually in the database and returns true if this is the case (and the password is correct)
	public function validate()
	{	
    $this->db->where('username', $this->input->post('username'));
    $this->db->where('password', md5($this->input->post('password')));
    $query = $this->db->get('users');

    if($query->num_rows == 1)
    {
      return true;
    }
	}

  //Unfinished user_model method for creating a user
  public function create_user()
  {

    $new_user = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password'))
        );
    
    var_dump($new_user);
    $insert = $this->db->insert('users', $new_user);
    return $insert;
  }

  public function get_user($username)
  {
    $this->db->where('username', $username);
    return $this->db->get('users')->result_array();
  }
}

?>