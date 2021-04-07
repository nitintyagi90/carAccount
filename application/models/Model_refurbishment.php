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


	//sss

	public function saveCaraccesDetailsDocument($data){
		$save = $this->db->insert('refurbishment_car_accessories_details',$data);
		if($save){
			return TRUE;  
		 }else{
		   return FALSE;  
		 }
	}



	
	public function saveCarAccOtherExp($data){
		$save = $this->db->insert('refurbishment_accessories_other_exp',$data);
		if($save){
			return TRUE;  
		 }else{
		   return FALSE;  
		 }
	}

	public function saveTotalVehicleCost($data){
		$save = $this->db->insert('refurbishment_total_vehicle_cost',$data);
		if($save){
			return TRUE;  
		 }else{
		   return FALSE;  
		 }
	}
	 /**
     * Featch Refurbishment Car Data.
     * @return array
     * @method Get
     * @author Sandeep Sharma 
     * @Mob 9958168472
     * @date 07-04-2021
    */
	public function getRefCarData(){
		$query = $this->db
				->select('*')
				->from('refurbishment')
				->join('refurbishment_details', 'refurbishment.id=tblsavesection.refurbishment_id', 'inner')
				->join('tblmastersecmolecular', 'tblsavesection.test_id = tblmastersecmolecular.test_id', 'inner')
				->join('tblmastersecparasitology', 'tblsavesection.test_id = tblmastersecparasitology.test_id', 'inner')
				->join('tblmastersecpathology', 'tblsavesection.test_id = tblmastersecpathology.test_id', 'inner')
				->get();

return $query->result();
	}


}