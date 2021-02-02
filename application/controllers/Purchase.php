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
            $this->render_template('purchase/create', $this->data);
        }


    }

}