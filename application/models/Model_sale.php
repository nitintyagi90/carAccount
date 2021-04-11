<?php 

class Model_sale extends CI_Model
{
    public function userInfo() 
	{
       
		$query_user = $this->db->get_where('users', array('user_role' => 2));
		$userData = $query_user->result();
		return $userData;
	}
	/**
     * Get Sale Car entry.
     * @return true
     * @method POST
     * @Mob 9958168472
     * @author Sandeep Sharma 
     * @date 05-04-2021
    */

	public function getSaleCarData(){
		$sale_car = $this->db->get('car_sale');
		$carSaleData = $sale_car->result();
		return $carSaleData;
	}

	public function getRegNo($id){
		
		$query_reg = $this->db->select('registration_no')->get_where('purchase', array('purchase_id' => $id));
		$regNo = $query_reg->result();
		return $regNo;
	}

	public function deleteSaleCar($id){
			//$query = $this->db->delete_where($table,array('refurbishment_id' => $id));
			$query = $this->db->delete('car_sale', array('id' => $id));
		
			if($query){
				return true;
			}else{
				return false;
			}
	}


}