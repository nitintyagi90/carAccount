<?php 

class Model_sale extends CI_Model
{
    public function userInfo() 
	{
       
		$query_user = $this->db->get_where('users', array('user_role' => 2));
		$userData = $query_user->result();
		return $userData;
	}


}