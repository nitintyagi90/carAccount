<?php 

class Model_users extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUserData($userId = null) 
	{
		if($userId) {
		$sql = "SELECT * FROM users WHERE user_id = ?";
		
			$query = $this->db->query($sql, array($userId));
			
			return $query->row_array();
		}

		$sql = "SELECT * FROM users WHERE user_id != ? ORDER BY user_id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

    public function getUserGroup($userId = null)
         {
			// print_r($userId);
        if($userId) {
             $sql = "SELECT * FROM user_group WHERE user_id = $userId";
            $query = $this->db->query($sql, array($userId));
		
            $result = $query->row_array();
			 $group_id = $result['group_id'];
		  $g_sql = "SELECT * FROM groups WHERE id = $group_id";

			 $g_query = $this->db->query($g_sql, array($group_id));
			
            $q_result = $g_query->row_array();
			// print_r($q_result);
			
            return $q_result;
        }
    }

	public function create($data = '', $group_id = null)
	{

		if($data && $group_id) {
			$create = $this->db->insert('users', $data);

			$user_id = $this->db->insert_id();

			$group_data = array(
				'user_id' => $user_id,
				'group_id' => $group_id
			);


			$group_data = $this->db->insert('user_group', $group_data);

			return ($create == true && $group_data) ? true : false;
		}
	}

	public function edit($data = array(), $id = null, $group_id = null)
	{
		$this->db->where('user_id', $id);
		$update = $this->db->update('users', $data);
		if($group_id) {
			$update_user_group = array('group_id' => $group_id);
			$this->db->where('user_id', $id);
			$user_group = $this->db->update('user_group', $update_user_group);
			return ($update == true && $user_group == true) ? true : false;	
		}
			
		return ($update == true) ? true : false;	
	}

	public function delete($id)
	{
		$this->db->where('user_id', $id);
		$delete = $this->db->delete('users');
        $this->db->where('user_id', $id);
        $this->db->delete('user_group');
		return ($delete == true) ? true : false;
	}

	public function countTotalUsers()
	{
		$sql = "SELECT * FROM users WHERE id != ?";
		$query = $this->db->query($sql, array(1));
		return $query->num_rows();
	}
    public function deletebrand($id)
    {
        $query_brand = $this->db->get_where('brandmodels', array('id' =>$id));
        $result_brand = $query_brand->row();
        if(!empty($result_brand)){
            if($result_brand->type == 'brand'){
                $this->db->where('parent', $id);
                $this->db->delete('brandmodels');

                $this->db->where('id', $id);
                $delete = $this->db->delete('brandmodels');
                return ($delete == true) ? true : false;
            }else{
                $this->db->where('id', $id);
                $delete = $this->db->delete('brandmodels');
                return ($delete == true) ? true : false;
            }
        }
    }
	
}