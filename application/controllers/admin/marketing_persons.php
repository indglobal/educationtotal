<?php

class marketing_persons extends CI_Controller
{

  function __construct()
	{
		 parent::__construct();
		//$this->load->model('admin/Marketing_persons_model');
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

	function marketing_persons_list()
	{			
		$this->load->model('admin/Marketing_persons_model');
		$data['allmarketing_persons']=$this->Marketing_persons_model->get_marketing_persons();
     	$this->load->view('admin/marketing_persons/list_of_marketing_persons',$data);
	}

	function create_marketing_persons()
	{	
		$this->load->view('admin/marketing_persons/create_marketing_persons');
	}
   
	function edit_marketing_persons()
	{
	   $this->load->model('admin/Marketing_persons_model');

		$data['id'] = $this->uri->segment(4,0);
		$data['details'] = $this->Marketing_persons_model->get_details($data['id']);
		$this->load->view('admin/marketing_persons/create_marketing_persons',$data);
	}

	function update_marketing_persons()
	{
		if($_POST){
        $this->form_validation->set_rules('fname_marketing','First Name','required|alpha');
        $this->form_validation->set_rules('lname_marketing','Last Name','required|alpha');
        if($this->form_validation->run() == FALSE){ 
        $data['fname_marketing'] = $this->input->post('fname_marketing');
        $this->load->view('admin/marketing_persons/create_marketing_persons',$data,true);
        }else{
		$id = $this->input->post('id');	
		if($id !='')
		{
		$this->load->model('Marketing_persons_model');
		$this->Marketing_persons_model->update_marketing_persons($id);
	    redirect("marketing_persons");
		}
		else
		{

			$this->load->model('Marketing_persons_model');
		    $this->Marketing_persons_model->save_marketing_persons();	
		    redirect("marketing_persons");
		}
}//form validation 

        }else{//not post
           $this->load->view('admin/marketing_persons/create_marketing_persons');
             }
		
	}

	function delete_marketing_persons()
	{
		if($this->uri->segment(4, 0) != ""){
		$this->load->model('Marketing_persons_model');
			$this->Marketing_persons_model->delete_marketing_persons($this->uri->segment(4, 0));	
		}
		redirect("marketing_persons");
	}

function check_email_marketing(){
	 $this->load->model('admin/Marketing_persons_model');
	 $email=$this->input->post('email');

     $status=$this->Marketing_persons_model->check_email_marketing($email);
     if(!$status==0)
    {
      echo "success";
      exit;
        }else{
      echo "fail";
      exit;
    }

	}


function check_phone_marketing(){
	 $this->load->model('admin/Marketing_persons_model');
	 $phone=$this->input->post('phone');

     $status=$this->Marketing_persons_model->check_phone_marketing($phone);

     if(!$status==0)
    {
      echo "success";
      exit;
        }else{
      echo "fail";
      exit;
    }

	}


function check_username_marketing(){
	 $this->load->model('admin/Marketing_persons_model');
	 $username=$this->input->post('username');

     $status=$this->Marketing_persons_model->check_username_marketing($username);

     if(!$status==0)
    {
      echo "success";
      exit;
        }else{
      echo "fail";
      exit;
    }

	}
	

	
}