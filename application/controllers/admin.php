<?php

class Admin extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('admin_model');
		 $this->load->view('header');
		$this->load->view('leftbar');
		$this->load->view('footer');
		if( ! $this->session->userdata('is_logged_in'))
		return	redirect('login/index');
	}

	function index()
	{
		
     	$this->load->view('dashboard');
	}

	function specialities()
	{	
		
		$data['special']=$this->admin_model->get_specialities();
     	$this->load->view('specialities/specialities',$data);
	}

	function create_spe()
	{		
		$this->load->view('specialities/create_spe');
	}

	function edit_spe()
	{
		$data['id'] = $this->uri->segment(3, 0);
		$data['details'] = $this->admin_model->get_details($data['id']);		
		$this->load->view('specialities/create_spe',$data);
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
		
		
	}

	function delete_spe()
	{
		if($this->uri->segment(3, 0) != ""){
			
			$this->admin_model->delete_spe($this->uri->segment(3, 0));	
		}
		redirect("admin/specialities");
	}

	
}