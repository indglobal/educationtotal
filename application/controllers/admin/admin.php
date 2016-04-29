<?php

class Admin extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		$this->load->model('admin/categories_model');
		 $this->load->view('admin/header');
		$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
		if( ! $this->session->userdata('is_logged_in'))
		return	redirect('admin/login/index');
	}

	function index()
	{
		$data['categories']=$this->categories_model->get_categories();
     	$this->load->view('admin/category/list_of_category',$data);
	}

	function specialities()
	{	
		$data['special']=$this->admin_model->get_specialities();
     	$this->load->view('admin/specialities/specialities',$data);
	}

	function create_spe()
	{		
		$this->load->view('admin/specialities/create_spe');
	}

	function edit_spe()
	{
		$data['id'] = $this->uri->segment(3, 0);
		$data['details'] = $this->admin_model->get_details($data['id']);		
		$this->load->view('admin/specialities/create_spe',$data);
	}

	function update_spe()
	{
		$id = $this->input->post('id');		
		$name = $this->input->post('name');
		if($id !='')
		{
		$this->admin_model->update_spe($name,$id);
		}
		else
		{
		$this->admin_model->save_spe($name);			
		}
		redirect("specialities");
		
	}

	function delete_spe()
	{
		if($this->uri->segment(3, 0) != ""){
			
			$this->admin_model->delete_spe($this->uri->segment(3, 0));	
		}
		redirect("specialities");
	}

	function list_of_visitors()
	{
		
		$data['all_visitors']=$this->categories_model->get_All_visitors();
     	$this->load->view('admin/visitors/list_of_visitors',$data);
	}

	
}