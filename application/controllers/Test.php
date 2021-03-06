<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('firstpage');
	// }
	public function login()
	{
		$this->load->view('login');
	}
}
