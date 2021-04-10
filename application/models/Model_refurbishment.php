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
				->join('purchase', 'refurbishment.registration_no=purchase.purchase_id', 'inner')
				//->join('refurbishment_other_expense', 'refurbishment.id = refurbishment_other_expense.refurbishment_id', 'inner')
				//->join('refurbishment_car_accessories_details', 'refurbishment.id = refurbishment_car_accessories_details.refurbishment_id', 'inner')
				//->join('refurbishment_accessories_other_exp', 'refurbishment.id = refurbishment_accessories_other_exp.refurbishment_id', 'inner')
				//->join('refurbishment_total_vehicle_cost', 'refurbishment.id = refurbishment_total_vehicle_cost.refurbishment_id', 'inner')
				->get();
		// echo $this->db->last_query();
		// die();
		return $query->result();
		
	}

	public function deleteRefurbishment($id){

	// 	  $sql="DELETE refurbishment,refurbishment_accessories_other_exp, refurbishment_car_accessories_details, refurbishment_details,refurbishment_other_expense,refurbishment_total_vehicle_cost 
	// 	  FROM refurbishment INNER JOIN refurbishment_accessories_other_exp ON refurbishment.id = refurbishment_accessories_other_exp.refurbishment_id INNER JOIN refurbishment_car_accessories_details ON refurbishment.id = refurbishment_car_accessories_details.refurbishment_id
	// 	   INNER JOIN refurbishment_details ON refurbishment.id = refurbishment_details.refurbishment_id INNER JOIN refurbishment_other_expense ON refurbishment.id = refurbishment_other_expense.refurbishment_id INNER JOIN refurbishment_total_vehicle_cost ON refurbishment.id = refurbishment_total_vehicle_cost.refurbishment_id WHERE refurbishment.id=$id;";
	//   $query=$this->db->query($sql);
	//   echo $this->db->last_query();
	//   die();
	//   if($query){
	// 	  return true;
	//   }else{
	// 	  return false;
	//   }
		$this->db->where(array("id"=>$id));
		$this->db->delete("refurbishment");
		if($this->db->affected_rows()>0)
		return $id;
		else
		return false;
	}

	//get refurbishment_details table data

	public function gettableData($table,$id){

		$query = $this->db->get_where($table, array('refurbishment_id' => $id));
		$result = $query->result();
		return $result;
	}

	public function deletetableData($table,$id){
	
		//$query = $this->db->delete_where($table,array('refurbishment_id' => $id));
		$query = $this->db->delete($table, array('refurbishment_id' => $id));
		
		if($query){
			return true;
		}else{
			return false;
		}
	}


}