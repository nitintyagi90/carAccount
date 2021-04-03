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
    public function sale_car(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('sale/sale_car',$this->data);

    }
    public function sale_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $userData = $this->model_groups->userInfo();
        $this->data['user_list'] = $userData;
    
        $this->db->select('registration_no,purchase_id');
        $query_purchase = $this->db->get('purchase');
        $result_purchase = $query_purchase->result();


        $query_states = $this->db->get_where('states');
        $states_data = $query_states->result();
        $this->data['states'] = $states_data;

       
        $this->data['registration_no'] = $result_purchase;


        $this->render_template('sale/sale_entry',$this->data);

    }
    public function create(){
        if(!in_array('createsale', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $this->form_validation->set_rules('c_name', 'c_name', 'trim|required');
        $this->form_validation->set_rules('c_mobile', 'c_mobile', 'trim|required');
        $this->form_validation->set_rules('c_email', 'c_email', 'trim|required');
        $this->form_validation->set_rules('c_pan', 'c_pan', 'trim|required');
        $this->form_validation->set_rules('c_relation', 'c_relation', 'trim|required');
        $this->form_validation->set_rules('c_aadhar', 'c_aadhar', 'trim|required');
        $this->form_validation->set_rules('c_nominee', 'c_nominee', 'trim|required');
        $this->form_validation->set_rules('c_address', 'c_address', 'trim|required');
        $this->form_validation->set_rules('c_pincode', 'c_pincode', 'trim|required');
        $this->form_validation->set_rules('c_landmark', 'c_landmark', 'trim|required');
        $this->form_validation->set_rules('c_gst', 'c_gst', 'trim|required');
        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'c_name' => $this->input->post('c_name'),
                'c_mobile' => $this->input->post('c_mobile'),
                'c_email' => $this->input->post('c_email'),
                'c_relation'=>$this->input->post('c_relation'),
                'c_pan' => $this->input->post('c_pan'),
                'c_address' => $this->input->post('c_address'),
                'rc_state' => $this->input->post('rc_state'),
                'rc_city' => $this->input->post('rc_city'),
                'c_landmark' => $this->input->post('c_ladmark'),
                'c_pincode' => $this->input->post('c_pincode'),
                'c_aadhar' => $this->input->post('c_aadhar'),
                'c_gst' => $this->input->post('c_gst'),
                'c_nominee' => $this->input->post('c_nominee'),
            );
            
            if (!empty($_FILES['kyc_pan_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kyc_pan_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('sale/sale_entry', 'refresh');
                } else {
                    $kyc_pan_img = $this->upload->data('file_name');
                    $Pathkyc_pan_img = base_url() . 'upload/purchase/' . $kyc_pan_img;
                    $data['kyc_pan_img'] = $Pathkyc_pan_img;
                }
            }

            if (!empty($_FILES['kyc_Address1_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kyc_Address1_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('sale/sale_entry', 'refresh');
                } else {
                    $kyc_Address1_img = $this->upload->data('file_name');
                    $Pathkyc_Address1_img = base_url() . 'upload/purchase/' . $kyc_Address1_img;
                    $data['kyc_Address1_img'] = $Pathkyc_Address1_img;
                }
            }

            if (!empty($_FILES['kyc_Address2_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kyc_Address2_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('sale/sale_entry', 'refresh');
                } else {
                    $kyc_Address2_img = $this->upload->data('file_name');
                    $Pathkyc_Address2_img = base_url() . 'upload/purchase/' . $kyc_Address2_img;
                    $data['kyc_Address2_img'] = $Pathkyc_Address2_img;
                }
            }
            $create = $this->db->insert('sale', $data);  
            if($create == true) {
                $this->session->set_flashdata('success', 'Successfully created');
                redirect('purchase/manage', 'refresh');
            }else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('purchase/create', 'refresh');
            }         
        }

    }




}
?>