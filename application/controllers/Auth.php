<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_auth');
	}
	public function login(){
		$this->form_validation->set_rules('phone', 'user_mobile', 'required');
        $this->form_validation->set_rules('password', 'user_password', 'required');
        if ($this->form_validation->run() == TRUE) {
           	$email_exists = $this->model_auth->check_email($this->input->post('phone'));
           	if($email_exists == TRUE) {
           		$login = $this->model_auth->login($this->input->post('phone'), $this->input->post('password'));
           		if($login) {
           			$logged_in_sess = array(
           				'id' => $login['user_id'],
				        'username'  => $login['user_name'],
				        'mobile'     => $login['user_mobile'],
				        'logged_in' => TRUE,
					);
					$this->session->set_userdata($logged_in_sess);
                    redirect(base_url('dashboard'), 'refresh');
           		}else {
           			$this->data['errors'] = '<div class="alert alert-danger" role="alert">Incorrect username/password </div>';
           			$this->load->view('login', $this->data);
           		}
           	}else {
           		$this->data['errors'] = '<div class="alert alert-danger" role="alert">Phone Number does not exists</div>';
           		$this->load->view('login', $this->data);
           	}	
        }
        else {
            $this->load->view('login');
        }	
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/login'), 'refresh');
	}
}
