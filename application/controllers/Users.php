<?php 

class Users extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Users';
		$this->load->model('model_users');
		$this->load->model('model_groups');
	}
	public function index(){
        
		redirect('users/manage', 'refresh');
	}
	public function manage()
	{
        
		if(!in_array('viewUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
		$user_data = $this->model_users->getUserData();
       
		$result = array();
        
        foreach ($user_data as $k => $v) {

			$result[$k]['user_info'] = $v;
		    $group = $this->model_users->getUserGroup($v['user_id']);
         	$result[$k]['user_group'] = $group; 

		}

       $this->data['user_data'] = $result;
       $this->render_template('users/index', $this->data);
	}

    public function create()
    {
       
        if(!in_array('createUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        $this->form_validation->set_rules('username', 'user_name', 'trim|required');
        $this->form_validation->set_rules('user_location', 'user_location', 'trim|required');
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
                'user_location' => $this->input->post('user_location'),
                'user_role' => 2,
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
            $query_city = $this->db->get_where('cities');
            $city_data = $query_city->result();
            $this->data['city'] = $city_data;

            $this->render_template('users/create', $this->data);
        }


    }

	public function password_hash($pass = '')
	{
		if($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}

    public function edit($id = null)
    {
        
        if(!in_array('updateUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        if($id) {
            $this->form_validation->set_rules('username', 'user_name', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
                    $data = array(
                        'user_name' => $this->input->post('username'),
                        'user_company' => $this->input->post('companyName'),
                        'user_email' => $this->input->post('email'),
                        'user_mobile' => $this->input->post('phone'),
                    );
                    $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                    if($update == true) {
                        $this->session->set_flashdata('success', 'Successfully Update');
                        redirect('users/', 'refresh');
                    }else {
                        $this->session->set_flashdata('errors', 'Error occurred!!');
                        redirect('users/edit/'.$id, 'refresh');
                    }
                }else {
                    if($this->form_validation->run() == TRUE) {
                        $password = $this->password_hash($this->input->post('password'));
                        $data = array(
                            'user_name' => $this->input->post('username'),
                            'user_company' => $this->input->post('companyName'),
                            'user_password' => $password,
                            'user_email' => $this->input->post('email'),
                            'user_mobile' => $this->input->post('phone'),
                        );

                        $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                        if($update == true) {
                            $this->session->set_flashdata('success', 'Successfully updated');
                            redirect('users/', 'refresh');
                        }else {
                            $this->session->set_flashdata('errors', 'Error occurred!!');
                            redirect('users/edit/'.$id, 'refresh');
                        }
                    }else {
                        $user_data = $this->model_users->getUserData($id);
                        $groups = $this->model_users->getUserGroup($id);
                        $this->data['user_data'] = $user_data;
                        $this->data['user_group'] = $groups;
                        $group_data = $this->model_groups->getGroupData();
                        $this->data['group_data'] = $group_data;
                        $this->render_template('users/edit', $this->data);
                    }

                }
            }else {
                $user_data = $this->model_users->getUserData($id);
                $groups = $this->model_users->getUserGroup($id);
                $this->data['user_data'] = $user_data;
                $this->data['user_group'] = $groups;
                $group_data = $this->model_groups->getGroupData();
                $this->data['group_data'] = $group_data;
                $this->render_template('users/edit', $this->data);
            }
        }
    }

	public function delete($id)
	{

		if(!in_array('deleteUser', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		if($id) {
			if($this->input->post('confirm')) {

				
					$delete = $this->model_users->delete($this->atri->de($id));
					if($delete == true) {
		        		$this->session->set_flashdata('success', 'Successfully removed');
		        		redirect('users/', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('error', 'Error occurred!!');
		        		redirect('users/delete/'.$id, 'refresh');
		        	}

			}	
			else {
				$this->data['id'] = $id;
				$this->render_template('users/delete', $this->data);
			}	
		}
	}

	public function profile()
	{

		if(!in_array('viewProfile', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$user_id = $this->session->userdata('id');

		$user_data = $this->model_users->getUserData($user_id);
		$this->data['user_data'] = $user_data;

		$user_group = $this->model_users->getUserGroup($user_id);
		$this->data['user_group'] = $user_group;

        $this->render_template('users/profile', $this->data);
	}

	public function setting(){
		$id = $this->session->userdata('id');
		if($id) {
            $this->form_validation->set_rules('username', 'user_name', 'trim|required');
            $this->form_validation->set_rules('phone', 'user_mobile', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
		        if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {

                    if (!empty($_FILES['user_profile']['name'])) {
                        $config['upload_path']          = './upload/user_profile';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('user_profile')) {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('message_name', $error['error']);
                            redirect('users/setting/', 'refresh');
                        }else{
                            $fileName = $this->upload->data('file_name');
                            $filePath = base_url().'upload/user_profile/'.$fileName;
                            $data = array(
                                'user_name' => $this->input->post('username'),
                                'user_email' => $this->input->post('email'),
                                'user_mobile' => $this->input->post('phone'),
                                'user_profile'=>$filePath
                            );
                            $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                            if($update == true) {
                                $this->session->set_flashdata('success', 'Successfully updated');
                                redirect('users/setting/', 'refresh');
                            }else {
                                $this->session->set_flashdata('errors', 'Error occurred!!');
                                redirect('users/setting/', 'refresh');
                            }

                        }
                    }else{
                        $data = array(
                            'user_name' => $this->input->post('username'),
                            'user_email' => $this->input->post('email'),
                            'user_mobile' => $this->input->post('phone'),
                        );
                        $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                        if($update == true) {
                            $this->session->set_flashdata('success', 'Successfully updated');
                            redirect('users/setting/', 'refresh');
                        }else {
                            $this->session->set_flashdata('errors', 'Error occurred!!');
                            redirect('users/setting/', 'refresh');
                        }
                    }
		        }else {
                    $this->form_validation->set_rules('password', 'user_password', 'trim|required');
                    $this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');
                    if($this->form_validation->run() == TRUE) {
                        if (!empty($_FILES['user_profile']['name'])) {
                            $config['upload_path']          = './upload/user_profile';
                            $config['allowed_types']        = 'gif|jpg|png';
                            $this->load->library('upload', $config);
                            if (!$this->upload->do_upload('user_profile')) {
                                $error = array('error' => $this->upload->display_errors());
                                $this->session->set_flashdata('message_name', $error['error']);
                                redirect('users/setting/', 'refresh');
                            }else{
                                $fileName = $this->upload->data('file_name');
                                $filePath = base_url().'upload/user_profile/'.$fileName;
                                $password = $this->password_hash($this->input->post('password'));
                                $data = array(
                                    'user_name' => $this->input->post('username'),
                                    'user_password' => $password,
                                    'user_email' => $this->input->post('email'),
                                    'user_mobile' => $this->input->post('phone'),
                                    'user_profile'=>$filePath
                                );

                                $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                                if($update == true) {
                                    $this->session->set_flashdata('success', 'Successfully updated');
                                    redirect('users/setting/', 'refresh');
                                }else {
                                    $this->session->set_flashdata('errors', 'Error occurred!!');
                                    redirect('users/setting/', 'refresh');
                                }

                            }
                        }else{
                            $password = $this->password_hash($this->input->post('password'));
                            $data = array(
                                'user_name' => $this->input->post('username'),
                                'user_password' => $password,
                                'user_email' => $this->input->post('email'),
                                'user_mobile' => $this->input->post('phone'),
                            );

                            $update = $this->model_users->edit($data, $id, $this->input->post('groups'));
                            if($update == true) {
                                $this->session->set_flashdata('success', 'Successfully updated');
                                redirect('users/setting/', 'refresh');
                            }else {
                                $this->session->set_flashdata('errors', 'Error occurred!!');
                                redirect('users/setting/', 'refresh');
                            }
                        }
					}else {
			        	$user_data = $this->model_users->getUserData($id);
			        	$groups = $this->model_users->getUserGroup($id);
			        	$this->data['user_data'] = $user_data;
			        	$this->data['user_group'] = $groups;
			            $group_data = $this->model_groups->getGroupData();
			        	$this->data['group_data'] = $group_data;
						$this->render_template('users/setting', $this->data);	
			        }	

		        }
	        }else {
	        	$user_data = $this->model_users->getUserData($id);
	        	$groups = $this->model_users->getUserGroup($id);
	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;
	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;
				$this->render_template('users/setting', $this->data);	
	        }	
		}
	}


}