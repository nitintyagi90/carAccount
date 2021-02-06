<?php

class Model_manufacturer extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
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