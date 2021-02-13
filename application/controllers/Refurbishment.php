<?php

class Refurbishment extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['page_title'] = 'Refurbishment';
        $this->load->model('model_groups');

    }

    public function refurbishment_entry(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('refurbishment/refurbishment_entry',$this->data);

    }

    public function refurbishment_list(){
        $group_data = $this->model_groups->getGroupData();
        $this->data['group_data'] = $group_data;
        $this->render_template('refurbishment/refurbishment_car',$this->data);

    }
}