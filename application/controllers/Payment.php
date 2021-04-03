<?php

class Payment extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Payment';
        $this->load->model('model_pymententry');
        $this->load->model('model_groups');

    }

    public function payment_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;


        $this->render_template('payment/purchase_payment_entry',$this->data);

    }

    public function rc_security(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;

        $this->render_template('payment/rc_security',$this->data);

    }

    public function refurbishment_payment(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('payment/refurbishment_payment_car',$this->data);

    }

    public function refurbishment_payment_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();
        $this->data['registration_no'] = $result_purchase;
        $this->render_template('payment/refurbishment_payment_entry',$this->data);

    }
    public function rto(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;

        $this->render_template('payment/rto',$this->data);

    }
    public function insurance(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;

        $this->render_template('payment/insurance',$this->data);

    }
    public function warranty(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

       
        $this->data['registration_no'] = $result_purchase;

        $this->render_template('payment/warranty',$this->data);

    }
     public function on_hole(){
         $group_data = $this->model_groups->getGroupData();
         $this->data['group_data'] = $group_data;
         $userData = $this->model_groups->userInfo();
         $this->data['user_list'] = $userData;
     
         $this->db->select('registration_no,purchase_id');
         $query_purchase = $this->db->get('purchase');
         $result_purchase = $query_purchase->result();
 
        
         $this->data['registration_no'] = $result_purchase;
 

            $this->render_template('payment/on_hole',$this->data);

        }


}