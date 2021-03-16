<?php 

class Model_purchase extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function existInPurchase($id)
	{
		$sql = "SELECT * FROM purchase WHERE purchase_id=?";
		$query = $this->db->query($sql, array($id));
        
		//echo $this->db->last_query();
		return ($query->num_rows() == 1) ? true : false;

	}
    public function deletePurchase($id)
	{
		$this->db->where('purchase_id', $id);
		$delete = $this->db->delete('purchase');

        // print_r($delete);
        
		return ($delete == true) ? true : false;
	}
}