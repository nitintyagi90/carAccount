<?php

class Manufacturer extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Manufacturer';
        $this->load->model('model_manufacturer');
    }
    public function index(){
        if(!in_array('updateSetting', $this->permission)) {
             redirect('dashboard', 'refresh');
         }
        $groups_data = $this->model_groups->getGroupData();

        $query_submodels = $this->db->get('submodel');
        $result_submodel = $query_submodels->result();
        $this->data['submodel'] = $result_submodel;

        $query = $this->db->get_where('brandmodels');
        $this->db->order_by('name', 'ASC');
        $result = $query->result();
        $query_brand = $this->db->get_where('brandmodels', array('type' =>'brand'));
        $this->db->order_by('name', 'ASC');
        $result_brand = $query_brand->result();

        $this->data['groups_data'] = $groups_data;
        $this->data['models'] = $result;
        $this->data['brand'] = $result_brand;

        $this->render_template('manufacturer/create', $this->data);
    }

    public function create(){
        if(!in_array('updateSetting', $this->permission)) {
             redirect('dashboard', 'refresh');
         }
        $name =  $this->input->post('makeModels');
        if(empty($name)){
            $this->session->set_flashdata('errors', 'Please Enter New Brand!');
            redirect('manufacturer', 'refresh');
        }
        $myArray = explode(',', $name);
        if(count($myArray) !== 0){
            foreach ($myArray as $k => $v){
                $data = array('name' => $v,'type'=>'brand','parent'=>0);
                $create = $this->db->insert('brandmodels', $data);
            }
            $this->session->set_flashdata('success', 'Date stored successfully!');
            redirect('manufacturer/', 'refresh');
        }else{
            $data = array('name' => $name,'type'=>'brand','parent'=>0);
            $create = $this->db->insert('brandmodels', $data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Date stored successfully!');
                redirect('manufacturer/', 'refresh');

            }else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('manufacturer/create', 'refresh');
            }
        }

    }

    public function modelcreate(){
        if(!in_array('updateSetting', $this->permission)) {
             redirect('dashboard', 'refresh');
         }
        $brand =  $this->input->post('brand');
        $models =  $this->input->post('makeModels');
        if($brand=='selectBrand'){
            $this->session->set_flashdata('errors', 'Please select brand');
            redirect('manufacturer', 'refresh');
        }
        $myArray = explode(',', $models);
        if(count($myArray) !== 0){
            foreach ($myArray as $k => $v){
                $data = array('name' => $v,'type'=>'model','parent'=>$brand);
                $create = $this->db->insert('brandmodels', $data);
            }
            $this->session->set_flashdata('success', 'Date stored successfully!');
            redirect('manufacturer', 'refresh');
        }else{
            $data = array('name' => $brand,'type'=>'model','parent'=>$brand);
            $create = $this->db->insert('brandmodels', $data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Date stored successfully!');
                redirect('manufacturer', 'refresh');

            }else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('manufacturer', 'refresh');
            }
        }

    }

    public function delete($id){
        if(!in_array('updateSetting', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        if($id) {
            if($this->input->post('confirm')) {
                $query_brand = $this->db->get_where('brandmodels', array('id' =>$id));
                $result_brand = $query_brand->row();

                if(!empty($result_brand)){
                    if($result_brand->type == 'brand'){
                        $this->db->where('parent', $id);
                        $this->db->delete('brandmodels');
                        $this->db->where('id', $id);
                        $delete = $this->db->delete('brandmodels');
                        $this->session->set_flashdata('success', 'Successfully removed');
                        redirect('manufacturer/', 'refresh');
                    }else{
                        $this->db->where('id', $id);
                        $delete = $this->db->delete('brandmodels');
                        $this->session->set_flashdata('success', 'Successfully removed');
                        redirect('manufacturer/', 'refresh');
                    }
                }
            }else {
                $this->data['id'] = $id;
                $this->render_template('manufacturer/delete', $this->data);
            }

        }
    }

    public function deletesubmodel($id){
        if(!in_array('updateSetting', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        if($id) {
            if($this->input->post('confirm')) {
                $this->db->where('id', ($this->atri->de($id)));
                $delete = $this->db->delete('submodel');
                if($delete == true) {
                    $this->session->set_flashdata('success', 'Successfully removed');
                    redirect('manufacturer/', 'refresh');
                }else {
                    $this->session->set_flashdata('error', 'Error occurred!!');
                    redirect('manufacturer/', 'refresh');
                }
            }else{
                $this->data['id'] = $id;
                $this->render_template('manufacturer/deletesubmodel', $this->data);
            }


        }
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

    public function submodelcreate(){
        if(!in_array('updateSetting', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $brand =  $this->input->post('brand');
        $modelId =  $this->input->post('modelId');
        $submodels =  $this->input->post('submodels');

        if($brand=='selectBrand'){
            $this->session->set_flashdata('errors', 'Please select brand');
            redirect('submodel/create', 'refresh');
        }
        $myArray = explode(',', $submodels);
        if(count($myArray) !== 0){
            foreach ($myArray as $k => $v){
                $data = array('submodel' => $v,'brand'=>$brand,'model'=>$modelId);
                $create = $this->db->insert('submodel', $data);
            }
            $this->session->set_flashdata('success', 'Date stored successfully!');
            redirect('manufacturer/create', 'refresh');
        }else{
            $data = array('submodel' => $submodels,'brand'=>$brand,'model'=>$modelId);
            $create = $this->db->insert('submodel', $data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Date stored successfully!');
                redirect('manufacturer/create', 'refresh');

            }else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('manufacturer/create', 'refresh');
            }
        }
    }

    public function car_utility(){
        if(!in_array('updateSetting', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $groups_data = $this->model_groups->getGroupData();

        $query_submodels = $this->db->get('submodel');
        $result_submodel = $query_submodels->result();
        $this->data['submodel'] = $result_submodel;

        $query = $this->db->get_where('brandmodels');
        $this->db->order_by('name', 'ASC');
        $result = $query->result();
        $query_brand = $this->db->get_where('brandmodels', array('type' =>'brand'));
        $this->db->order_by('name', 'ASC');
        $result_brand = $query_brand->result();

        $this->data['groups_data'] = $groups_data;
        $this->data['models'] = $result;
        $this->data['brand'] = $result_brand;

        $this->render_template('manufacturer/car_utility', $this->data);
    }

}