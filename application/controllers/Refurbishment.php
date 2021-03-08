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
        $user= $this->model_refurbishment->userInfo();

        $this->data['user'] = $user;
        $this->render_template('refurbishment/refurbishment_entry',$this->data);

    }

    public function refurbishment_list(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('refurbishment/refurbishment_car',$this->data);

    }
    public function refurbishment_info(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
       
        $this->render_template('refurbishment/refurbishment_car',$this->data);
        
    }
   
   
     

	
	
	
}
?>
