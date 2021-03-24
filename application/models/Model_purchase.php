<?php 

class Model_purchase extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
   
    public function deletePurchase($id)
	{
		$this->db->where('purchase_id', $id);
		$delete = $this->db->delete('purchase');
        // print_r($delete);
       	return ($delete == true) ? true : false;
	}

	public function getPurchaseData($purchaseId = null) 
	{
		if($purchaseId) {

			$this->db->where('purchase_id',$purchaseId);
			return $user=$this->db->get('purchase')->row_array();
		}

		$sql = "SELECT * FROM users WHERE user_id != ? ORDER BY user_id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}
	
	
}