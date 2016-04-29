<?php

class Categories extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('admin/categories_model');
		  // $this->load->model('admin/admin_model');
		 $this->load->view('admin/header');
		$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
		if( ! $this->session->userdata('is_logged_in'))
		return	redirect('admin/login/index');
	}

	function index()
	{
		
     	$this->load->view('admin/dashboard');
	}

	function categories_list()
	{	
	//$this->load->model('admin/categories_model');		
		$data['categories']=$this->categories_model->get_categories();
     	$this->load->view('admin/category/list_of_category',$data);
	}

	function create_cat()
	{		
		$this->load->view('admin/category/create_cat');
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