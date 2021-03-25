<?php

class Purchase extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Purchase';
        $this->load->model('model_groups');
        $this->load->model('model_purchase');

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

        $query_pur = $this->db->get_where('purchase');
        $purchase_data = $query_pur->result();
        $this->data['purchase_list'] = $purchase_data;

        $this->render_template('purchase/index',$this->data);
    }
    public function create(){
        if(!in_array('createPurchase', $this->permission)) {
            redirect('dashboard', 'refresh');
        
        }
        $this->form_validation->set_rules('registration_no', 'registration_no', 'trim|required|is_unique[purchase.registration_no]');
        $this->form_validation->set_rules('rc_name', 'rc_name', 'trim|required');
        $this->form_validation->set_rules('rc_mobile', 'rc_mobile', 'trim|required');
        $this->form_validation->set_rules('rc_address', 'rc_address', 'trim|required');
        $this->form_validation->set_rules('rc_pincode', 'rc_pincode', 'trim|required');
        $this->form_validation->set_rules('make', 'make', 'trim|required');
        $this->form_validation->set_rules('model', 'model', 'trim|required');
        $this->form_validation->set_rules('submodel', 'submodel', 'trim|required');
        $this->form_validation->set_rules('color', 'color', 'trim|required');
        $this->form_validation->set_rules('chassis_no', 'chassis_no', 'trim|required');
        $this->form_validation->set_rules('engine_no', 'engine_no', 'trim|required');
        $this->form_validation->set_rules('manuf_year', 'manuf_year', 'trim|required');
        $this->form_validation->set_rules('mileage', 'mileage', 'trim|required');
        $this->form_validation->set_rules('Fuel_type', 'Fuel_type', 'trim|required');
        $this->form_validation->set_rules('serial_number', 'serial_number', 'trim|required');
        $this->form_validation->set_rules('Transmission', 'Transmission', 'trim|required');
        $this->form_validation->set_rules('emission', 'emission', 'trim|required');
        $this->form_validation->set_rules('registration_date', 'registration_date', 'trim|required');
        $this->form_validation->set_rules('rc_expiry_date', 'rc_expiry_date', 'trim|required');
        $this->form_validation->set_rules('cubic_capicity', 'cubic_capicity', 'trim|required');
        $this->form_validation->set_rules('purchase_date', 'purchase_date', 'trim|required');
       // $this->form_validation->set_rules('purchase_time', 'purchase_time', 'trim|required');
        $this->form_validation->set_rules('purchase_price', 'purchase_price', 'trim|required');
        //$this->form_validation->set_rules('total_purchase_price', 'total_purchase_price', 'trim|required');
        $this->form_validation->set_rules('purchase_rc', 'purchase_rc', 'trim|required');
        $this->form_validation->set_rules('purchase_mobile', 'purchase_mobile', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'registration_no' => $this->input->post('registration_no'),
                'dealer_id' => $this->input->post('dealer_id'),
                'rc_name' => $this->input->post('rc_name'),
                'rc_mobile' => $this->input->post('rc_mobile'),
                'rc_email' => $this->input->post('rc_email'),
                
                'rc_pan' => $this->input->post('rc_pan'),
                'rc_address' => $this->input->post('rc_address'),
                'rc_state' => $this->input->post('rc_state'),
                'rc_city' => $this->input->post('rc_city'),
                'rc_ladmark' => $this->input->post('rc_ladmark'),
                'rc_pincode' => $this->input->post('rc_pincode'),
                'car_brand' => $this->input->post('make'),
                'car_model' => $this->input->post('model'),
                'car_submodel' => $this->input->post('submodel'),
                'car_color' => $this->input->post('color'),
                'car_chassis_no' => $this->input->post('chassis_no'),
                'car_engine_no' => $this->input->post('engine_no'),
                'car_manuf_year' => $this->input->post('manuf_year'),
                'car_mileage' => $this->input->post('mileage'),
                'car_fuel_type' => $this->input->post('Fuel_type'),
                'car_serial_number' => $this->input->post('serial_number'),
                'car_transmission' => $this->input->post('Transmission'),
                'car_emission' => $this->input->post('emission'),
                'registration_date' => $this->input->post('registration_date'),
                'rc_expiry_date' => $this->input->post('rc_expiry_date'),
                'cubic_capicity' => $this->input->post('cubic_capicity'),
                'purchase_date' => $this->input->post('purchase_date'),
                'purchase_time' => $this->input->post('purchase_time'),
                'purchase_price' => $this->input->post('purchase_price'),
                'commission' => $this->input->post('commission'),
                'total_purchase_price' => $this->input->post('total_purchase_price'),
                'finance_comp' => $this->input->post('finance_comp'),
                'loan_amount' => $this->input->post('loan_amount'),
                'bank_noc' => $this->input->post('bank_noc'),
                'insurance_type' => $this->input->post('insurance_type'),
                'insurance_comp' => $this->input->post('insurance_comp'),
                'insurance_expiry_date' => $this->input->post('insurance_expiry_date'),
                'Warranty' => $this->input->post('Warranty'),
                'Warranty_exp_date' => $this->input->post('Warranty_exp_date'),
                'category' => $this->input->post('category'),
                'purchase_rc' => $this->input->post('purchase_rc'),
                'purchase_mobile' => $this->input->post('purchase_mobile'),
                'purchase_email' => $this->input->post('purchase_email'),
                'purchase_pan' => $this->input->post('purchase_pan'),
                'purchase_address' => $this->input->post('purchase_address'),
                'purchase_state' => $this->input->post('purchase_state'),
                'purchase_city' => $this->input->post('purchase_city'),
                'purchase_landmark' => $this->input->post('purchase_landmark'),
                'purchase_pincode' => $this->input->post('purchase_pincode'),
                'gst' => $this->input->post('gst'),
                'in_the_name_of' => $this->input->post('in_the_name_of'),
                'bank_name' => $this->input->post('bank_name'),
                'account_number' => $this->input->post('account_number'),
                'ifsc_code' => $this->input->post('ifsc_code'),
            );

            if (!empty($_FILES['rc_image']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('rc_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $fileName = $this->upload->data('file_name');
                    $filePath = base_url() . 'upload/purchase/' . $fileName;
                    $data['rc_image'] = $filePath;
                }
            }

            if (!empty($_FILES['insurance_image']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('insurance_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $insurance_image = $this->upload->data('file_name');
                    $in_path = base_url() . 'upload/purchase/' . $insurance_image;
                    $data['insurance_image'] = $in_path;
                }
            }

            if (!empty($_FILES['bank_noc_image']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bank_noc_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $noc_image = $this->upload->data('file_name');
                    $noc_path = base_url() . 'upload/purchase/' . $noc_image;
                    $data['bank_noc_image'] = $noc_path;
                }
            }

            if (!empty($_FILES['pan_card_image']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pan_card_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $pan_image = $this->upload->data('file_name');
                    $pan_path = base_url() . 'upload/purchase/' . $pan_image;
                    $data['pan_card_image'] = $pan_path;
                }
            }

            if (!empty($_FILES['car_image']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('car_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $car_image = $this->upload->data('file_name');
                    $car_path = base_url() . 'upload/purchase/' . $car_image;
                    $data['car_image'] = $car_path;
                }
            }

            if (!empty($_FILES['add_proof_img1']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('add_proof_img1')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $add_proof_img1 = $this->upload->data('file_name');
                    $add_proof_img1Path = base_url() . 'upload/purchase/' . $add_proof_img1;
                    $data['add_proof_img'] = $add_proof_img1Path;
                }
            }

            if (!empty($_FILES['add_proof_img2']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('add_proof_img2')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $add_proof_img2 = $this->upload->data('file_name');
                    $add_proof_img2Path = base_url() . 'upload/purchase/' . $add_proof_img2;
                    $data['add_proof_img2'] = $add_proof_img2Path;
                }
            }

            if (!empty($_FILES['sell_ltr_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('sell_ltr_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $addsell_ltr_img = $this->upload->data('file_name');
                    $addsell_ltr_imgPath = base_url() . 'upload/purchase/' . $addsell_ltr_img;
                    $data['sell_ltr_img'] = $addsell_ltr_imgPath;
                }
            }

            if (!empty($_FILES['delivery_note_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('delivery_note_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
                } else {
                    $delivery_note_img = $this->upload->data('file_name');
                    $Pathdelivery_note_img = base_url() . 'upload/purchase/' . $delivery_note_img;
                    $data['delivery_note_img'] = $Pathdelivery_note_img;
                }
            }

            if (!empty($_FILES['kyc_pan_img']['name'])) {

                $config['upload_path'] = './upload/purchase';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kyc_pan_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errors', $error['error']);
                    redirect('purchase/create', 'refresh');
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
                    redirect('purchase/create', 'refresh');
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
                    redirect('purchase/create', 'refresh');
                } else {
                    $kyc_Address2_img = $this->upload->data('file_name');
                    $Pathkyc_Address2_img = base_url() . 'upload/purchase/' . $kyc_Address2_img;
                    $data['kyc_Address2_img'] = $Pathkyc_Address2_img;
                }
            }

            
     
            $create = $this->db->insert('purchase', $data);

            if($create == true) {
                $this->session->set_flashdata('success', 'Successfully created');
                redirect('purchase/manage', 'refresh');
            }else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('purchase/create', 'refresh');
            }
        }else {
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $this->session->set_flashdata('errors', 'Error occurred!!');
            }
            $group_data = $this->model_groups->getGroupData();
            
            $this->data['group_data'] = $group_data;


            $query_user = $this->db->get_where('users', array('user_role' => 2));
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

    public function detail($id){
        $PurchaseId = $this->atri->de($id);
        if(!empty($PurchaseId)){
            $query = $this->db->get_where('purchase', array('purchase_id' => $PurchaseId));
            $data_purchase = $query->row();
            if(!empty($data_purchase)){
                $query_dealer = $this->db->get_where('users', array('user_id' => $data_purchase->dealer_id));
                $data_dealer = $query_dealer->row();
                $groups_data = $this->model_groups->getGroupData();
                $this->data['groups_data'] = $groups_data;
                $this->data['purchase'] = $data_purchase;
                $this->data['dealer'] = $data_dealer;
                $this->render_template('purchase/detail',$this->data);
            }

        }
    }
    

    public function sale(){
        $groups_data = $this->model_groups->getGroupData();
        $this->data['groups_data'] = $groups_data;
        $this->render_template('sale/sale-entry',$this->data);


    }
    
    public function edit($id = null)
    {
        // if(!in_array('updatePurhase', $this->permission)) {
        //     redirect('dashboard', 'refresh');
        // }
        if($id) {

            $this->load->model('model_users');

            $purchase=$this->model_purchase->getPurchaseData($id);
            
            $this->data['purchase_data'] = $purchase;
            // print_r($purchase);

            $query_user = $this->db->get_where('users', array('user_id' =>$purchase['dealer_id']));
            $userData = $query_user->result();
            $this->data['user_list'] = $userData;

            $query_states = $this->db->get_where('states');
            $states_data = $query_states->result();
            $this->data['states'] = $states_data;
            
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

            $this->db->order_by('id', 'ASC');
            $query_brand = $this->db->get_where('brandmodels',array('type' => 'brand'));
            $result_brand = $query_brand->result();
            $this->data['models'] = $result_brand;

           

         
            
           $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->render_template('purchase/edit',$this->data);
        //   $this->load->view('edit',$data);

        }
            
        }
    }





  
    public function delete($id)
	{
		// if(!in_array('deleteGroup', $this->permission)) {
        //     redirect('dashboard', 'refresh');
        // }
        
		if($id) {
			if($this->input->post('confirm')) {
				$id = $this->atri->de($id);
				 	$delete = $this->model_purchase->deletePurchase($id);
					if($delete == true) {
		        		$this->session->set_flashdata('success', 'Successfully removed');
		        		redirect('purchase/manage', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('error', 'Error occurred!!');
		        		redirect('purchase/delete/'.$id, 'refresh');
		        	}
		
			}	
			else {
				$this->data['id'] = $id;
				$this->render_template('purchase/delete', $this->data);
			}	
		}
	}


}