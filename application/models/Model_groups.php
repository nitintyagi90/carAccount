<?php 

class Model_groups extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getGroupData($groupId = null) 
	{
		if($groupId) {
            $query = $this->db->get_where('groups', array('id' => $groupId));
            return $query->row_array();
		}
        $sql = "SELECT * FROM `groups` WHERE id !=? ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function create($data = '')
	{
		$create = $this->db->insert('groups', $data);
		return ($create == true) ? true : false;
	}

	public function edit($data, $id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('groups', $data);
		return ($update == true) ? true : false;	
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('groups');
		return ($delete == true) ? true : false;
	}

	public function existInUserGroup($id)
	{
		$sql = "SELECT * FROM user_group WHERE group_id = ?";
		$query = $this->db->query($sql, array($id));
		//echo $this->db->last_query();
		return ($query->num_rows() == 1) ? true : false;
	}

	public function getUserGroupByUserId($user_id) 
	{

        $this->db->select('*');
        $this->db->from('user_group');
        $this->db->join('groups', 'groups.id = user_group.group_id');
        $this->db->where('user_group.user_id', $user_id);
        $query = $this->db->get();
        $result = $query->row_array();


		return $result;

	}
}