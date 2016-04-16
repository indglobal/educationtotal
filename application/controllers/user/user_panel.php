<?php

class User_panel extends CI_Controller
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
		// print_r($data['getDetails_fromsignup']);
		$data['getDetails_fromedu_user']=$this->user_model->getDetails_fromedu_user($data['getDetails_fromsignup'][0]['user_id']);
		//print_r($data['getDetails_fromedu_user']);
		//exit();
		if(!empty($data['getDetails_fromedu_user'])){
        $data['edu_details']=unserialize($data['getDetails_fromedu_user'][0]['edu_name']);
        }else{
    	$data['edu_details']="1";
        }
        //print_r($data['edu_details']);
        //exit();
        // if($data['edu_details']){

        // }
        // exit();
        // print_r($data['edu_details']);
        // exit();
		//}

	$data['getDetails_fromskill_user']=$this->user_model->getDetails_fromskill_user($data['getDetails_fromsignup'][0]['user_id']);
    if(!empty($data['getDetails_fromskill_user'])){
  $data['skill_details']=unserialize($data['getDetails_fromskill_user'][0]['skill_name']);
  // print_r(count($data['skill_details']));
        }else{
        	$data['skill_details']=1;
        }
        $data['cat']=$this->user_model->fetch_category();
               $this->load->view('header.php',$data);
     	$this->load->view('user/userprofile',$data);
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
          $pre_image_url=$this->input->post('pre_image_url');
  	      $user_id=$this->input->post('user_id');
  	      $folderName=$user_id;

  	    	$pathToUpload ='uploads/user_image/'.$folderName."/";

  	    	if ( ! file_exists($pathToUpload) ) {
			       $create = mkdir($pathToUpload, 0777, TRUE);
			  }
             
			    $this->load->library('upload');
			    if($_FILES['photograph']['name']){
               $fileName=$_FILES['photograph']['name'];

                $config['upload_path'] = $pathToUpload;
	            $config['allowed_types'] ='gif|jpg|png|pdf';
	            $config['max_size'] = '0';
	            $config['max_width']  = '5120';
	            $config['max_height']  = '3840';
	            $config['file_name'] = $fileName;
	            $this->upload->initialize($config);

	            if ($this->upload->do_upload('photograph')) {
                    $data = $this->upload->data();
                    $filePath =$data['file_name'];
                    $filepath=$pathToUpload.$filePath;
                    print_r("upload");
                    //exit();
                  
                } else {
                  $errors='';
                }
              }else{  ///no pic selected
               $fileName=$pre_image_url;
               $filepath=$fileName;
              }

            	
                //print_r($config);
                // exit();
                 

	             // $this->upload->initialize($config);
              //   if ($this->upload->do_upload('photograph')) {
              //       $data = $this->upload->data();
              //       $filePath =$data['file_name'];
              //        $filepath=$pathToUpload.$filePath;
              //       print_r("upload");
              //       //exit();
                  
              //   } else {
         
               // print_r("noupload");
               // exit();
                    //$errors = $this->upload->display_errors();
               // }
                  
              //       if(!empty($errors)) {

	            	// $this->session->set_flashdata('message', '<div class="alert alert-danger">'.$errors.'</div>');
	            	// redirect(site_url('user/user_panel'));
	             //    } else {
	            	//$filePath =$data['file_name'];
	              
	               ###################
  	            if($this->user_model->save_user_detail_my_profile($filepath,$user_id))
	        	{ 
                    
	        		$this->session->set_flashdata('message',"<div class='alert alert-success'>Successfully Saved </div>");
			 	    redirect('user/user_panel');

	        	}
	        // }

  	     
  	    	

          }
      }
	
}