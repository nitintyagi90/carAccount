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
        $this->load->library('form_validation');

    }
    /**
     * List Sale Car entry.
     * @return true
     * @method POST
     * @Mob 9958168472
     * @author Sandeep Sharma 
     * @date 05-04-2021
    */
    public function sale_car(){

        $group_data = $this->model_groups->getGroupData();
        $saleCar_data = $this->model_sale->getSaleCarData();
      
        $this->data['group_data'] = $group_data;
        $this->data['carSale_data'] = $saleCar_data;
        $this->render_template('sale/sale_car',$this->data);

    }
      /**
     * Save Sale Car entry.
     * @return true
     * @method POST
     * @Mob 9958168472
     * @author Sandeep Sharma 
     * @date 05-04-2021
    */
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

        if(($this->input->server('REQUEST_METHOD') === 'POST')){
            if(! in_array('createSale', $this->permission)) {
                redirect('dashboard', 'refresh');
                
            }

            $this->form_validation->set_rules('dealer_id', 'Delaler Mobile', 'trim|required');
            $this->form_validation->set_rules('registration_no', 'Registration No', 'trim|required');
            $this->form_validation->set_rules('total_vehicle_cost', 'Total Vehicle', 'trim|required');
            $this->form_validation->set_rules('sale_comission', 'Sale Comission', 'trim|required');
            $this->form_validation->set_rules('sale_price', 'Sale Price', 'trim|required');
            $this->form_validation->set_rules('rto_cost', 'R.T.O Cost', 'trim|required');
            $this->form_validation->set_rules('insurance_cost', 'Insurance Cost', 'trim|required');
            $this->form_validation->set_rules('warranty_cost', 'Warranty Cost', 'trim|required');
            $this->form_validation->set_rules('invoice_price', 'Invoice Price', 'trim|required');
            $this->form_validation->set_rules('customer_type', 'Customer Type', 'trim|required');
            $this->form_validation->set_rules('c_name', 'c_name', 'trim|required');
            $this->form_validation->set_rules('c_mobile', 'c_mobile', 'trim|required');
            $this->form_validation->set_rules('email_id', 'email_id', 'trim|required');
            $this->form_validation->set_rules('c_pan', 'c_pan', 'trim|required');
            $this->form_validation->set_rules('c_relation', 'c_relation', 'trim|required');
            $this->form_validation->set_rules('date_of_brith', 'Date Of Brith', 'trim|required');
            $this->form_validation->set_rules('c_aadhar', 'c_aadhar', 'trim|required');
            $this->form_validation->set_rules('c_nominee', 'c_nominee', 'trim|required');
            $this->form_validation->set_rules('c_address', 'c_address', 'trim|required');
            $this->form_validation->set_rules('rc_state', 'rc_state', 'trim|required');
            $this->form_validation->set_rules('rc_city', 'rc_city', 'trim|required');
            $this->form_validation->set_rules('landmark', 'landmark', 'trim|required');
            $this->form_validation->set_rules('c_pincode', 'c_pincode', 'trim|required');
            $this->form_validation->set_rules('gst_no', 'gst_no', 'trim|required');
            //$this->form_validation->set_rules('pan_proof', 'pan_proof', 'trim|required');
            // $this->form_validation->set_rules('add_proof', 'add_proof', 'trim|required');
            // $this->form_validation->set_rules('add_proof2', 'add_proof2', 'trim|required');
            
            if ($this->form_validation->run() == TRUE) {
            
                
             //Pan Upload 
             if(!empty($_FILES['pan_proof']['name'])){
				
				$config['upload_path'] = 'sale_proof/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['pan_proof']['name'];
               
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('pan_proof')){
                    $uploadData = $this->upload->data();
                    $pan_proof = $uploadData['file_name'];
                }else{
                    $pan_proof = '';
                }
            }else{
				
                $pan_proof = '';   
            }

            //Address prof upload 
            if(!empty($_FILES['add_proof']['name'])){
				
				$config['upload_path'] = 'sale_proof/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['add_proof']['name'];
               
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('add_proof')){
                    $uploadData = $this->upload->data();
                    $add_proof = $uploadData['file_name'];
                }else{
                    $add_proof = '';
                }
            }else{
				
                $add_proof = '';   
            }

            //add proff 2 upload 
            if(!empty($_FILES['add_proof2']['name'])){
				
				$config['upload_path'] = 'sale_proof/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['add_proof2']['name'];
               
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('add_proof2')){
                    $uploadData = $this->upload->data();
                    $add_proof2 = $uploadData['file_name'];
                }else{
                    $add_proof2 = '';
                }
            }else{
				
                $add_proof2 = '';   
            }
    
    
            

                //prepair data for save in database
                $data = array(
                    'dealer_id' => $this->input->post('dealer_id'),
                    'dealer_name' => $this->input->post('dealer_name'),
                    'dealer_comp' => $this->input->post('dealer_company'),
                    'dealer_location'=>$this->input->post('location_dealer'),
                    'registration_no' => $this->input->post('registration_no'),
                    'purchase_date' => $this->input->post('purchase_date'),
                    'make' => $this->input->post('make'),
                    'model' => $this->input->post('model'),
                    'sub_model' => $this->input->post('submodel'),
                    'color' => $this->input->post('color'),
                    'total_Purchase_price' => $this->input->post('purchase_price'),
                    'total_vehicle_cost' => $this->input->post('total_vehicle_cost'),
                    'sale_comission' => $this->input->post('sale_comission'),
                    'total_cost' => $this->input->post('total_cost'),
                    'sale_price' => $this->input->post('sale_price'),
                    'rto_cost' => $this->input->post('rto_cost'),
                    'insurance_cost' => $this->input->post('insurance_cost'),
                    'warranty_cost' => $this->input->post('warranty_cost'),
                    'invice_price' => $this->input->post('invoice_price'),
                    'customer_type' => $this->input->post('customer_type'),
                    'customer_name' => $this->input->post('c_name'),
                    'customer_mob' => $this->input->post('c_mobile'),
                    'customer_email' => $this->input->post('email_id'),
                    'customer_pan' => $this->input->post('c_pan'),
                    'customer_relation' => $this->input->post('c_relation'),
                    'customer_dob' => $this->input->post('date_of_brith'),
                    'customer_adharNo' => $this->input->post('c_aadhar'),
                    'nominee' => $this->input->post('c_nominee'),
                    'customer_add' => $this->input->post('c_address'),
                    'state' => $this->input->post('rc_state'),
                    'city' => $this->input->post('rc_city'),
                    'landmark' => $this->input->post('landmark'),
                    'pincode' => $this->input->post('c_pincode'),
                    'gst_no' => $this->input->post('gst_no'),
                    'pan_doc' => $pan_proof,
                    'add_proof_doc1' => $add_proof,
                    'add_proof_doc2' => $add_proof2,
                    'created_date'=>NOW(),
                   
                );
                $create = $this->db->insert('car_sale', $data);  
                if($create == true) {
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('sale/sale_car', 'refresh');
                }else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('sale/sale_car', 'refresh');
                }         
            }
        }
        $this->render_template('sale/sale_entry',$this->data);

    }

    public function delete_saleCar($id){
        if(!empty($id)){
            $delete = $this->model_sale->deleteSaleCar($id);
            if($delete == true){
                $this->session->set_flashdata('success', 'Delete Sucssesfully..');
                redirect('sale/sale_car');
            }
            
        }
    }
 

}
?>