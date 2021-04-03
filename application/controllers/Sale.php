<?php

class Sale extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Sale';
        $this->load->model('model_groups');
        $this->load->model('model_sale');

    }
    public function sale_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;


        $this->render_template('sale/sale_entry',$this->data);

    }
}
?>