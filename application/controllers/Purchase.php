<?php

class Purchase extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Purchase';
        $this->load->model('model_groups');

    }
    public function index()
    {
        redirect('purchase/manage', 'refresh');
    }

    public function manage(){
        if(!in_array('viewPurchase', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $groups_data = $this->model_groups->getGroupData();
        $this->data['groups_data'] = $groups_data;
        $this->render_template('purchase/index',$this->data);
    }
    public function create(){
        if(!in_array('createPurchase', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $this->form_validation->set_rules('username', 'user_name', 'trim|required');
        $this->form_validation->set_rules('companyName', 'user_company', 'trim|required');
        $this->form_validation->set_rules('phone', 'user_mobile', 'trim|required|is_unique[users.user_mobile]');
        $this->form_validation->set_rules('password', 'user_password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == TRUE) {
            $password = $this->password_hash($this->input->post('password'));
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_password' => $password,
                'user_email' => $this->input->post('email'),
                'user_mobile' => $this->input->post('phone'),
                'user_company' => $this->input->post('companyName'),
            );

            $create = $this->model_users->create($data, $this->input->post('groups'));
            if($create == true) {
                $this->session->set_flashdata('success', 'Successfully created');
                redirect('users/', 'refresh');
            }
            else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('users/create', 'refresh');
            }
        }else {
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $this->session->set_flashdata('errors', 'Error occurred!!');
            }
            $group_data = $this->model_groups->getGroupData();
            $this->data['group_data'] = $group_data;


            $this->db->select('*');
            $query_user = $this->db->get(' users');
            $userData = $query_user->result();
            $this->data['user_list'] = $userData;

            $query_color = $this->db->get_where('car_utility', array('type' => 'color'));
            $color_data = $query_color->result();
            $this->data['color_list'] = $color_data;

            $query_fuel = $this->db->get_where('car_utility', array('type' => 'fuel'));
            $fuel_data = $query_fuel->result();
            $this->data['fuel_list'] = $fuel_data;

            $query_emission = $this->db->get_where('car_utility', array('type' => 'emission'));
            $emission_data = $query_emission->result();
            $this->data['emission_list'] = $emission_data;

            $query_transmission = $this->db->get_where('car_utility', array('type' => 'transmission'));
            $transmission_data = $query_transmission->result();
            $this->data['transmission_list'] = $transmission_data;


            $query_Bank = $this->db->get_where('car_utility', array('type' => 'Bank'));
            $Bank_data = $query_Bank->result();
            $this->data['bank_list'] = $Bank_data;


            $query_Insurance = $this->db->get_where('car_utility', array('type' => 'Insurance'));
            $Insurance_data = $query_Insurance->result();
            $this->data['Insurance_list'] = $Insurance_data;

            $query_Finance = $this->db->get_where('car_utility', array('type' => 'Finance'));
            $Finance_data = $query_Finance->result();
            $this->data['Finance_list'] = $Finance_data;


            $query_states = $this->db->get_where('states');
            $states_data = $query_states->result();
            $this->data['states'] = $states_data;

            $this->db->order_by('id', 'ASC');
            $query_brand = $this->db->get_where('brandmodels',array('type' => 'brand'));
            $result_brand = $query_brand->result();
            $this->data['models'] = $result_brand;

            $this->render_template('purchase/create', $this->data);
        }


    }

    public function user_detail (){
        if(!in_array('createPurchase', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
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

    public function getcity(){
        $categoryId = $this->input->post('id');
        $query = $this->db->get_where('cities', array('state_id' => $categoryId));
        $result = $query->result();
        $response = array(
            'status' => 200,
            'subcategory' => $result,
        );
        echo json_encode($response);
        exit();
    }

    public function getModel(){
        $categoryId = $this->input->post('id');

        $query = $this->db->get_where('brandmodels', array('parent' => $categoryId,'type'=>'model'));
        $result = $query->result();
        $response = array(
            'status' => 200,
            'subcategory' => $result,
        );
        echo json_encode($response);
        exit();
    }

    public function getSubModel(){
        $categoryId = $this->input->post('id');

        $query = $this->db->get_where('submodel', array('model' => $categoryId));
        $result = $query->result();
        $response = array(
            'status' => 200,
            'subcategory' => $result,
        );
        echo json_encode($response);
        exit();
    }



}