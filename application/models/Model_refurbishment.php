<?php 

class Model_refurbishment extends CI_Model
{
    public function userInfo() 
	{
       
		$query_user = $this->db->get_where('users', array('user_role' => 2));
		$userData = $query_user->result();
		return $userData;
	}
	  /**
     * save data of ready to selll.
	 * function Name #saveRefurbishment
     * @return Json
     * @method POST
     * @author Sandeep Sharma 
     * @date 05-04-2021
    */

	public function saveRefurbishment($data){
		
		$this->db->insert('refurbishment',$data);
		$q=$this->db->insert_id();
		 return $q;

	}

	public function saveRefurbishmentDetais($data){
		$save = $this->db->insert('refurbishment_details',$data);
		if($save){
			return TRUE;  
		 }else{
		   return FALSE;  
		 }
	}


	public function saverefOtherExpDetails($data){
		$save = $this->db->insert('refurbishment_other_expense',$data);
		if($save){
			return TRUE;  
		 }else{
		   return FALSE;  
		 }
	}


}