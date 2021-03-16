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
}