<?php

class Invoice extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Sale';
        $this->load->model('model_groups');
        $this->load->model('model_invoice');

    }
     
    public function invoice_entry()
    {
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();
        $this->data['registration_no'] = $result_purchase;

        $query_states = $this->db->get_where('states');
        $states_data = $query_states->result();
        $this->data['states'] = $states_data;


        $this->render_template('invoice/invoice_entry',$this->data);
    }
}
?>