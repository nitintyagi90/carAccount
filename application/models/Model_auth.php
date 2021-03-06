<?php 

class Model_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
   
	public function check_email($email) 
	{
		if($email) {
			$sql = 'SELECT * FROM users WHERE user_mobile = ?';
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
		}
        return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
	public function login($email, $password) {
		if($email && $password) {
			$sql = "SELECT * FROM users WHERE user_mobile = ?";
			$query = $this->db->query($sql, array($email));
			$row = $query->row_array();
			if($query->num_rows() == 1) {
				$result = $query->row_array();
				$hash_password = password_verify($password, $result['user_password']);
				if($hash_password === true) {
					return $result;	
				}
				else {
					return false;
				}
			}else {
				return false;
			}
		}
	}
}