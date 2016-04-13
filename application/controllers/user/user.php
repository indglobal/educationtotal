<?php

class User extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('user_model');
		 $this->load->model('service/service_model');
		// $this->load->view('header');
		//$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
		//if( ! $this->session->userdata('is_logged_in'))
		//return	redirect('admin/login/index');
	}

	 function index()
	 {
	 	 $data['cat']=$this->user_model->fetch_category();
     	$this->load->view('header',$data);
	}

}


  