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
        //echo"working";
        //die();
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

    /**
     * Save refurbishment entry.
     * @return Json
     * @method POST
     * @author Sandeep Sharma 
     * @date 05-04-2021
    */

    public function save_refurbishment(){
      
        if(isset($_POST['submit'])){
         
            if(!empty($_POST['ref_details_bill_no'][0])){
                //echo"<pre>";
                //print_r($_FILES['files']['name'][0]);
                //die();
                 /**
                 * Upload Multiple File of Refurbishment Details
                 */

            if(!empty($_FILES['files']['name'])){

                $error=array();
                $extension=array("jpeg","jpg","png","gif");
                foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
                    $file_name=$_FILES["files"]["name"][$key];
                    $file_tmp=$_FILES["files"]["tmp_name"][$key];
                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                
                    if(in_array($ext,$extension)) {
                        
                        if(!file_exists("photo_gallery/".$file_name)) {
                           
                            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$file_name);
                          
                        }
                        else {
                          
                            $filename=basename($file_name,$ext);
                            $file_name=$filename.time().".".$ext;
                            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$file_name);
                        }
                    }
                    else {
                        array_push($error,"$file_name, ");
                    }
                }


            }else{

            }   
            
         
               //prepair data

          
            $data=array(
                'dealer_id'=>$this->input->post('dealer_id'),
                'dealer_name'=>$this->input->post('dealer_name'),
                'dealer_comp'=>$this->input->post('dealer_company'),
                'dealer_location'=>$this->input->post('location_dealer'),
                'registration_no'=>$this->input->post('registration_no'),
                'make'=>$this->input->post('make'),
                'model'=>$this->input->post('model'),
                'sub_model'=>$this->input->post('submodel'),
                'color'=>$this->input->post('color'),
                'purchase_date'=>$this->input->post('purchase_date'),
                'total_Purchase_price'=>$this->input->post('total_purchase_price'),
            );
        $save= $this->model_refurbishment->saveRefurbishment($data);
        if($save){
         $number = count($_POST["Refurbishment_details_registration_no"]);
         
            if($number>0){
                    for($i=0; $i<$number; $i++){
                        if(trim($_POST["Refurbishment_details_registration_no"][$i] != '')){
                            $Refurbishment_details_registration_no=$_POST["Refurbishment_details_registration_no"][$i];

                            $ref_details_job_date=$_POST["ref_details_job_date"][$i];
                            $ref_details_bill_no=$_POST["ref_details_bill_no"][$i];
                            $ref_details_amount=$_POST["ref_details_amount"][$i];
                            $ref_details_document=$_FILES['files']['name'][$i];
                            $data=array(
                                    'refurbishment_id'=>$save,
                                    'repairing_details'=>$Refurbishment_details_registration_no,
                                    'job_date'=>$ref_details_job_date,
                                    'bill_no'=>$ref_details_bill_no,
                                    'amount'=>$ref_details_amount,
                                    'document'=>$ref_details_document
                                    );
                           $Refurbishment_details=$this->model_refurbishment->saveRefurbishmentDetais($data);
                          
                        }
                    }
              
            }
        
            /**
            * Upload Multiple File of Refurbishment Details Other Expense
            */
            if($Refurbishment_details == true){
                if(!empty($_FILES['ref_other_exp_files']['name'])){

                    $error=array();
                    $extension=array("jpeg","jpg","png","gif");
                    foreach($_FILES["ref_other_exp_files"]["tmp_name"] as $key=>$tmp_name) {
                        $file_name=$_FILES["ref_other_exp_files"]["name"][$key];
                        $file_tmp=$_FILES["ref_other_exp_files"]["tmp_name"][$key];
                        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                    
                        if(in_array($ext,$extension)) {
                            
                            if(!file_exists("refurbishment_other_exp/".$file_name)) {
                            
                                move_uploaded_file($file_tmp=$_FILES["ref_other_exp_files"]["tmp_name"][$key],"refurbishment_other_exp/".$file_name);
                            
                            }
                            else {
                            
                                $filename=basename($file_name,$ext);
                                $file_name=$filename.time().".".$ext;
                                move_uploaded_file($file_tmp=$_FILES["ref_other_exp_files"]["tmp_name"][$key],"refurbishment_other_exp/".$file_name);
                            }
                        }
                        else {
                            array_push($error,"$file_name, ");
                        }
                    }
                    
                }else{

                }
            //prepair data to save of Other Expense of refurbisment
                if(!empty($this->input->post('ref_other_exp_details')) && !empty($this->input->post('ref_other_exp_jobDate')) && !empty($this->input->post('ref_other_exp_bill_no')) && !empty($this->input->post('ref_other_exp_amount'))){
                    $number = count($_POST["ref_other_exp_details"]);
                    if($number>0){
                        for($i=0; $i<$number; $i++){
                            if(trim($_POST["ref_other_exp_details"][$i] != '')){
                                $ref_other_exp_details=$_POST["ref_other_exp_details"][$i];
    
                                $ref_other_exp_jobDate=$_POST["ref_other_exp_jobDate"][$i];
                                $ref_other_exp_bill_no=$_POST["ref_other_exp_bill_no"][$i];
                                $ref_other_exp_amount=$_POST["ref_other_exp_amount"][$i];
                                $ref_other_exp_document=$_FILES['ref_other_exp_files']['name'][$i];
                                $data=array(
                                        'refurbishment_id'=>$save,
                                        'details'=>$ref_other_exp_details,
                                        'job_date'=>$ref_other_exp_jobDate,
                                        'bill_no'=>$ref_other_exp_bill_no,
                                        'amount'=>$ref_other_exp_amount,
                                        'document'=>$ref_other_exp_document,
                                        'document'=>$this->input->post('ref_other_exp_totalRefur_cost')
                                        );
                               $ref_other_exp_details=$this->model_refurbishment->saverefOtherExpDetails($data);
                              
                            }
                        }
                  
                }
                }

            }
            
            
              
                   
            
            
        }









            }else{
                echo"working2";
                die();
              //prepair data to save in database
                $data= array(
                    'dealer_id'=>$this->input->post('dealer_id'),
                    'dealer_name'=>$this->input->post('dealer_name'),
                    'dealer_comp'=>$this->input->post('dealer_company'),
                    'dealer_location'=>$this->input->post('location_dealer'),
                    'registration_no'=>$this->input->post('registration_no'),
                    'make'=>$this->input->post('make'),
                    'model'=>$this->input->post('model'),
                    'sub_model'=>$this->input->post('submodel'),
                    'color'=>$this->input->post('color'),
                    'purchase_date'=>$this->input->post('purchase_date'),
                    'total_Purchase_price'=>$this->input->post('total_purchase_price'),
                        
                        );
               $result = $this->model_refurbishment->saveRefurbishment($data);
              if($result){
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('refurbishment/refurbishment_list');
              }
            }
        }       
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
