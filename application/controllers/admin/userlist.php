<?php

class Userlist extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('admin/user_model');
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

	function list_of_user()
	{	
	
		$data['alluser']=$this->user_model->get_userlist();
<<<<<<< HEAD
=======
		print_r($data['alluser']);
		exit();
>>>>>>> 3bbc494bfecd0b6f34a902e4bdce4249d6406eaa
     	$this->load->view('admin/user/list_of_user',$data);
	}

	function create_marketing_persons()
	{		
		$this->load->view('admin/marketing_persons/create_marketing_persons');
	}
   
	function edit_marketing_persons()
	{
		$data['id'] = $this->uri->segment(4,0);
		$data['details'] = $this->marketing_persons_model->get_details($data['id']);
		$this->load->view('admin/marketing_persons/create_marketing_persons',$data);
	}

	function update_marketing_persons()
	{
		$id = $this->input->post('id');	
		if($_POST){
		if($id !='')
		{
		$this->marketing_persons_model->update_marketing_persons($id);
		}
		else
		{
		$this->marketing_persons_model->save_marketing_persons($id);			
		}

}
		redirect("marketing_persons");
		
	}

	function delete_marketing_persons()
	{
		if($this->uri->segment(4, 0) != ""){
			
			$this->marketing_persons_model->delete_marketing_persons($this->uri->segment(4, 0));	
		}
		redirect("marketing_persons");
	}

	
}