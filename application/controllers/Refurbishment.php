<?php

class Refurbishment extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Refurbishment';
        $this->load->model('model_groups');
        $this->load->model('model_refurbishment');

    }
    
    

    public function refurbishment_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;

        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();

        $query_access = $this->db->get_where('car_utility', array('type' => 'Accessories'));
        $query_reparing = $this->db->get_where('car_utility', array('type' => 'Repairing'));
        $result_assoseries = $query_access->result();
        $result_repair = $query_reparing->result();


        $this->data['registration_no'] = $result_purchase;
        $this->data['accessories'] = $result_assoseries;
        $this->data['repaier'] = $result_repair;

        $this->render_template('refurbishment/refurbishment_entry',$this->data);

    }

    public function purchaseDetails (){
        $purchase_id = $this->input->post('purchase_id');
        if(!empty($purchase_id)){
            $query = $this->db->get_where('purchase', array('purchase_id' => $purchase_id));
            $data = $query->row();
            $response = array(
                'status' => 200,
                'data' => $data,
            );
            echo json_encode($response);
            exit();
        }else{
            $response = array(
                'status' => 201,
            );
            echo json_encode($response);
            exit();
        }

    }


    public function refurbishment_list(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('refurbishment/refurbishment_car',$this->data);

    }


    public function user_detail (){
        // if(!in_array('createPurchase', $this->permission)) {
        //     redirect('dashboard', 'refresh');
        // }
        $user_id = $this->input->post('user_id');
        if(!empty($user_id)){
            $query = $this->db->get_where('users', array('user_id' => $user_id));
            $data_user = $query->row();
            $response = array(
                'status' => 200,
                'data' => $data_user,
            );
            echo json_encode($response);
            exit();
        }else{
            $response = array(
                'status' => 201,
            );
            echo json_encode($response);
            exit();
        }

    }
}
