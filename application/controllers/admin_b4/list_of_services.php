<?php

class list_of_services extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('admin/list_of_services_model');
		 // $this->load->model('admin/admin_model');
		 $this->load->view('admin/header');
		$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
		$this->load->helper('base');
		if( ! $this->session->userdata('is_logged_in'))
		return	redirect('admin/login/index');
	}

	function index()
	{
     	$this->load->view('admin/dashboard');
	}

	function list_of_service()
	{	
		$data['list_of_services']=$this->list_of_services_model->get_list_of_services();
     	$this->load->view('admin/list_of_services/list_of_services',$data);
	}

	function view_list_of_services()
	{	
		$data['id'] = $this->uri->segment(4,0);
		$data['details'] = $this->list_of_services_model->get_details($data['id']);
		$this->load->view('admin/list_of_services/view_list_of_services',$data);
	}
   
	function edit_cat()
	{
		$data['id'] = $this->uri->segment(4,0);
		$data['details'] = $this->categories_model->get_details($data['id']);	
		$this->load->view('admin/category/create_cat',$data);
	}

	function update_cat()
	{
		$id = $this->input->post('id');		
		$name = $this->input->post('cat_name');
		if($id !='')
		{
		$this->categories_model->update_cat($name,$id);
		}
		else
		{
		$this->categories_model->save_cat($name);			
		}
		redirect("categories");
		
	}

	function delete_cat()
	{
		if($this->uri->segment(3, 0) != ""){
			
			$this->categories_model->delete_cat($this->uri->segment(4, 0));	
		}
		redirect("categories");
	}

	
}