<?php

class Subcategories extends CI_Controller
{

	function __construct()
	{		
		parent::__construct();
		// $this->load->model('admin/admin_model');
		  $this->load->model('admin/subcategories_model');
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

	function subcategories_list()
	{	
		$data['subcategories']=$this->subcategories_model->get_subcategories();
     	$this->load->view('admin/subcategory/list_of_subcategory',$data);
	}

	function create_subcat()
	{		
	    $data['cat_id']=1234;
	    $data['all_category']=$this->subcategories_model->get_allcategory();
		$this->load->view('admin/subcategory/create_subcat',$data);
	}

	function edit_subcat()
	{
		$data['id'] = $this->uri->segment(4, 0);
	    $data['all_category']=$this->subcategories_model->get_allcategory();
		$data['details'] = $this->subcategories_model->get_details($data['id']);
		$this->load->view('admin/subcategory/create_subcat',$data);
	}

	function update_subcat()
	{
	    $id = $this->input->post('id');		
		$cat_id = $this->input->post('cat_id');		
		$name = $this->input->post('subcat_name');
		if($id !='')
		{
		$this->subcategories_model->update_subcat($id,$cat_id,$name);
		}
		else
		{
		$this->subcategories_model->save_subcat($cat_id,$name);			
		}
		redirect("subcategories");
		
	}

	function delete_subcat()
	{
		if($this->uri->segment(4, 0) != ""){
			
			$this->subcategories_model->delete_subcat($this->uri->segment(4, 0));	
		}
		redirect("subcategories");
	}

	
}