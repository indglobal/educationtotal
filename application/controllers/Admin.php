<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller // Admin Controller
{ 
	
	public function Admin() // Constructor
	{
		parent::__construct(); 
		$this->load->library('session');
		$this->load->model('admin_model');
	}

	/**** Start Login ****/

	public function index()
	{
		if($this->session->userdata('is_logged_in'))
		{
			$email_address = $this->admin_model->get_admin();

			if($this->session->userdata['is_logged_in']['email_address'] == $email_address)
			{
				$this->load->view('admin/admin_home');
			}
			
		}
		else
		{
			$this->load->view('admin/admin_login');
		}
	}
	
	public function signin_form()
	{
	
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		$valid_check = $this->admin_model->check_credentials($email_address,$password);
		if($valid_check == true)
		{
			$data = array(
			'email_address' => $email_address,
			'is_logged_in' => true);
		    $this->session->set_userdata('is_logged_in', $data);
			echo 1;
		}
		else
		{
			echo 2;
		}
	}

	function logout()
	{
		$this->session->unset_userdata('is_logged_in');
		$this->load->view('admin/admin_login');	
	}	

	/**** End Login ****/

	public function table()
	{
		$this->load->view('admin/basic_table');	
	}
}
