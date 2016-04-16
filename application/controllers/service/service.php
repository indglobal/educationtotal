<?php

class Service extends CI_Controller
{

	function __construct()
	{
		 parent::__construct();
     $this->load->model('user_model');
		 $this->load->model('service/service_model');
		// $this->load->view('admin/header');
		//$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
		
		//if( ! $this->session->userdata('is_logged_in'))
		//return	redirect('admin/login/index');
	}


  function search_result()
  {
    
    $level3_id  = $_POST['category'];
    $level4_id = $_POST['sub_cat'];

    //echo "<pre>";print_r($_POST);
   // echo "cat".$level3_id;
   // echo "sub_cat".$level4_id;

    $data['result'] = $this->service_model->get_search_result($level3_id,$level4_id);
	  $data['cat']=$this->user_model->fetch_category();
	  $this->load->view('header',$data);
      $this->load->view('service/search_result',$data);
	   $this->load->view('footer',$data);
  }

  function search_result_service($id)
  {
    //echo $id;
    $data['result'] = $this->service_model->get_service($id);

   // echo "<pre>";print_r($data['result']);die();
    $this->load->view('service/service',$data);

  }

  function list_service()
  {
      //$data['menu']=$this->service_model->get_menu();
      if(isset($this->session->userdata['is_userlogged_in']['IID']) ) 
      { 
         $user_id = $this->session->userdata['is_userlogged_in']['IID'];
         
         $data['result'] = $this->service_model->list_service($user_id);
         $this->load->view('service/list_service',$data);        
          $this->load->view('header',$data);
      }      

     
     // $data['cat']=$this->user_model->fetch_category();
    //  $this->load->view('header',$data);
  }

	function add_service()
	{
		  $data['menu']=$this->service_model->get_menu();
     	$this->load->view('service/add_service',$data);
     $data['cat']=$this->user_model->fetch_category();
    $this->load->view('header',$data);
	}

	function save_service()
	{
		//echo "<pre>";print_r($_POST);die();
		if(isset($_POST['user_id']))
	   {
	   	$user_id = $_POST['user_id'];
	   }
	   if(isset($_POST['title']))
	   {
	   	$title = $_POST['title'];
	   }
	   if(isset($_POST['cat_id']))
	   {
	   	$cat_id = $_POST['cat_id'];
	   }
	   if(isset($_POST['subcat_id']))
	   {
	   	$subcat_id = $_POST['subcat_id'];
	   }
	   if(isset($_POST['sub_cat_second_id']))
	   {
	   	$sub_cat_second_id = $_POST['sub_cat_second_id'];
	   }
	   if(isset($_POST['sub_cat_thired_id']))
	   {
	   	$sub_cat_thired_id = $_POST['sub_cat_thired_id'];
	   }
	   if(isset($_POST['about']))
	   {
	   	$about = $_POST['about'];
	   }else{
	   	$about = "";
	   }

       $service_data = array(
				'user_id' => $user_id,
				'title' =>$title,
				'cat_id' => $cat_id,
				'subcat_id' => $subcat_id,
				'sub_cat_second_id' => $sub_cat_second_id,
				'sub_cat_thired_id' => $sub_cat_thired_id,
				'about' => $about,
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);
      $last_insert_id =$this->service_model->save_service_data($service_data);

      if(isset($last_insert_id) && $last_insert_id > 0)
	    {
        if(!empty($_POST['school_name'])){
       		$school_name = $_POST['school_name'];
        }
        if(!empty($_POST['other_name'])){
       		$other_name = $_POST['other_name'];
        }
        if(!empty($_POST['address'])){
       		$address = $_POST['address'];
        }
        if(!empty($_POST['location'])){
       		$location = $_POST['location'];
        }
        if(!empty($_POST['zip_code'])){
       		$zip_code = $_POST['zip_code'];
        }
        if(!empty($_POST['district'])){
       		$district = $_POST['district'];
        }
        if(!empty($_POST['state'])){
       		$state = $_POST['state'];
        }
        if(!empty($_POST['year_established'])){
       		$year_established = $_POST['year_established'];
        }
        if(!empty($_POST['days_open'])){
       		$days_open = $_POST['days_open'];
        }
        if(!empty($_POST['board'])){
       		$board = $_POST['board'];
        }
        if(!empty($_FILES['logo'])){
          $logo_name  = strtotime(Date('Y-m-d h:i:s')).$_FILES['logo']['name'];
          $logo_image   = "dist/service_images/".$logo_name;
          copy($_FILES['logo']['tmp_name'],$logo_image );
          //chmod(base_url(). $logo_image , 0777);     
        }
        if(!empty($_FILES['profile_image'])){
       		 $profile_name	=  strtotime(Date('Y-m-d h:i:s')).$_FILES['profile_image']['name'];
			     $profile_image 	=	"dist/service_images/".$profile_name;
			     copy($_FILES['profile_image']['tmp_name'],$profile_image );
          // chmod(base_url(). $profile_image, 0777);
        }
        if(!empty($_POST['website'])){
       		$website = $_POST['website'];
        }
        if(!empty($_POST['about_school'])){
       		$about_school = $_POST['about_school'];
        }
        if(!empty($_POST['ownership_type'])){
       		$ownership_type = $_POST['ownership_type'];
        }
        if(!empty($_POST['organization_type'])){
       		$organization_type = $_POST['organization_type'];
        }
        if(!empty($_POST['facebook_link'])){
       		$facebook_link = $_POST['facebook_link'];
        }
        if(!empty($_POST['twitter_link'])){
       		$twitter_link = $_POST['twitter_link'];
        }
        if(!empty($_POST['google_plus_link'])){
       		$google_plus_link = $_POST['google_plus_link'];
        }
        $basic_data = array(
				'service_id' => $last_insert_id,
				'school_name' =>$school_name,
				'other_name' => $other_name,
				'address' => $address,
				'location' => $location,
				'zip_code' => $zip_code,
				'district' => $district,
				'state' => $state,
				'year_established' => $year_established,
				'days_open'=> $days_open,
				'board' => $board,
				'logo' =>  $logo_image ,
				'profile_image' => $profile_image,
				'website' => $website,
				'about_school' => $about_school,
				'ownership_type' => $ownership_type,
				'organization_type' =>  $organization_type,
				'facebook_link' =>  $facebook_link,
				'twitter_link' =>  $twitter_link,
				'google_plus_link' =>  $google_plus_link,
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);

        $this->service_model->save_basic_data($basic_data);
        
        if(!empty($_POST['contact_number'])){
       		$contact_number = $_POST['contact_number'];
        }
        if(!empty($_POST['contact_mail_id'])){
       		$contact_mail_id = $_POST['contact_mail_id'];
        }
        if(!empty($_POST['director_name'])){
       		$director_name = $_POST['director_name'];
        }
        if(!empty($_POST['director_number'])){
       		$director_number = $_POST['director_number'];
        }
        if(!empty($_POST['director_mail_id'])){
       		$director_mail_id = $_POST['director_mail_id'];
        }
        if(!empty($_POST['coordinator_name'])){
       		$coordinator_name = $_POST['coordinator_name'];
        }
        if(!empty($_POST['coordinator_number'])){
       		$coordinator_number = $_POST['coordinator_number'];
        }
        if(!empty($_POST['coordinator_mail_id'])){
       		$coordinator_mail_id = $_POST['coordinator_mail_id'];
        }
       

        $contact_data = array(
        	    'service_id' => $last_insert_id,
				'contact_number' => $contact_number,
				'contact_mail_id' =>$contact_mail_id,
				'director_name' => $director_name,
				'director_number' => $director_number,
				'director_mail_id' => $director_mail_id,
				'coordinator_name' => $coordinator_name,
				'coordinator_number' => $coordinator_number,
				'coordinator_mail_id' => $coordinator_mail_id,
				
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);
     		$this->service_model->save_contact_data($contact_data);

       if(!empty($_POST['facilities_available'])){
          $facilities_available = $_POST['facilities_available'];
        }

        $facilities_data = array(
              'service_id' => $last_insert_id,
              'facilities_available' => $facilities_available,
              'created_date' => Date('Y-m-d h:i:s'),
              'modified_date' => Date('Y-m-d h:i:s')
          );
        $this->service_model->save_facilities_data($facilities_data);


     	if(!empty($_POST['class_type'])){
       		$class_type = $_POST['class_type'];
        }
        if(!empty($_POST['fees'])){
       		$fees = $_POST['fees'];
        }
        if(!empty($_POST['admission_open'])){
       		$admission_open = $_POST['admission_open'];
        }
        if(!empty($_POST['admission_closed'])){
       		$admission_closed = $_POST['admission_closed'];
        }
        if(!empty($_POST['faculty_name'])){
       		$faculty_name = $_POST['faculty_name'];
        }
        if(!empty($_POST['qualification'])){
       		$qualification = $_POST['qualification'];
        }
        if(!empty($_POST['experience'])){
       		$experience = $_POST['experience'];
        }
        if(!empty($_POST['subjects_taken'])){
       		$subjects_taken = $_POST['subjects_taken'];
        }
        if(!empty($_POST['brif_info'])){
       		$brif_info = $_POST['brif_info'];
        }
           	$classes_data = array(
        	    'service_id' => $last_insert_id,
				'class_type' => $class_type,
				'fees' =>$fees,
				'admission_open' => $admission_open,
				'admission_closed' => $admission_closed,
				'faculty_name' => $faculty_name,
				'qualification' => $qualification,
				'experience' => $experience,
				'subjects_taken' => $subjects_taken,
				'brif_info' => $brif_info,
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);
     		$this->service_model->save_classes_data($classes_data);
    	
    	if(!empty($_POST['past_name'])){
       		$past_name = $_POST['past_name'];
        }
        if(!empty($_POST['past_gallery'])){
       		//$past_name = $_POST['past_name'];
        }
        if(!empty($_POST['past_date'])){
       		$past_date = $_POST['past_date'];
        }
        if(!empty($_POST['upcoming_name'])){
       		$upcoming_name = $_POST['upcoming_name'];
        }
        if(!empty($_POST['upcoming_date'])){
       		$upcoming_date = $_POST['upcoming_date'];
        }
           	$events_data = array(
        	    'service_id' => $last_insert_id,
				'past_name' => $past_name,
				//'past_gallery' =>$past_gallery,
				'past_date' => $past_date,
				'upcoming_name' => $upcoming_name,
				'upcoming_date' => $upcoming_date,
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);
     		$this->service_model->save_events_data($events_data);
        
        if(!empty($_POST['activities_list'])){
          $activities_list = $_POST['activities_list'];
        }

          $cocurricular_data = array(
              'service_id' => $last_insert_id,
              'activities_list' => $activities_list,
              'created_date' => Date('Y-m-d h:i:s'),
              'modified_date' => Date('Y-m-d h:i:s')
          );
        $this->service_model->save_cocurricular_data($cocurricular_data);

        if(!empty($_POST['name'])){
          $name = $_POST['name'];
        } 
        if(!empty($_POST['course'])){
          $course = $_POST['course'];
        }
        if(!empty($_POST['batch'])){
          $batch = $_POST['batch'];
        }
        if(!empty($_POST['review_title'])){
          $review_title = $_POST['review_title'];
        }
        if(!empty($_POST['review_content'])){
          $review_content = $_POST['review_content'];
        }
        if(!empty($_POST['date'])){
          $date = $_POST['date'];
        } 
        $review_data = array(
              'service_id' => $last_insert_id,
              'name' => $name,
              'course' => $course,
              'batch' => $batch,
              'review_title' => $review_title,
              'review_content' => $review_content,
              'date' => $date,
              'created_date' => Date('Y-m-d h:i:s'),
              'modified_date' => Date('Y-m-d h:i:s')
          );
        $this->service_model->save_review_data($review_data);

        echo "1";die();


      
	   }else
     {
      echo "0";die();
     }
      
	   


	}


	 public function sub_menu($id)
   	{
   		$options = $this->service_model->get_sub_menu($id);
		$result = '<option value="" selected="selected">Select sub menu</option>';
		foreach ($options as $key => $value) {
			$result.='<option value="'.$value->subcat_id.'">'.$value->subcat_name.'</option>';
		}
		echo $result;
   	}

   	public function get_category($id)
   	{
   		$options = $this->service_model->get_category($id);
		$result = '<option value="" selected="selected">Select categories</option>';
		foreach ($options as $key => $value) {
			$result.='<option value="'.$value->sub_cat_second_id.'">'.$value->subcat_second_name.'</option>';
		}
		echo $result;
   	}

   		public function get_sub_category($id)
   	{
   		$options = $this->service_model->get_sub_category($id);
		$result = '<option value="" selected="selected">Select sub categories</option>';
		foreach ($options as $key => $value) {
			$result.='<option value="'.$value->sub_cat_thired_id.'">'.$value->subcat_thired_name.'</option>';
		}
		echo $result;
   	}


   	public function regular_playschool()
   	{

   		$this->load->view('service/regular_playschool');
   	}




}
