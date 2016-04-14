<?php

class Provider_panel extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
		 $this->load->model('user_model');
		//  $this->load->view('admin/header');
		// $this->load->view('admin/leftbar');
		// $this->load->view('admin/footer');
		if( ! $this->session->userdata('is_userlogged_in'))
		return	redirect('register_cont');
	}

	function index()
	{
		 $data['userid']=$this->session->userdata('is_userlogged_in');
		//print_r($data['userid']['UN']);
		//exit();
		$data['getDetails_fromsignup']=$this->user_model->getDetails_fromsignup($data['userid']['UN']);
		//print_r($data['getDetails_fromsignup'][0]['user_id']);
		$data['getDetails_fromedu_user']=$this->user_model->getDetails_fromedu_user($data['getDetails_fromsignup'][0]['user_id']);
		// print_r($data['getDetails_fromedu_user']);
		// exit();
		if(isset($data['getDetails_fromedu_user'][0]['edu_name']))
		{
        $data['edu_details']=unserialize($data['getDetails_fromedu_user'][0]['edu_name']);
		}
		else
		{
			$data['edu_details'] = 1;			
		}
     	$this->load->view('user/provider_profile',$data);
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
    

    function user_edit_myprofile_section(){
    		 if($_POST)
  	      {
  	      	 $user_id=$this->input->post('user_id');

  	     if($this->user_model->save_user_detail_my_profile($user_id))
	        	{ 
                    
	        		$this->session->set_flashdata('message',"<div class='alert alert-success'>Successfully Saved </div>");
			 	    redirect('user/user_panel');

	        	}

  	     
  	    	

          }
                                             }
	
}