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
    if(isset($_POST['category']))
    {
    $level3_id  = $_POST['category'];
    $level4_id = $_POST['sub_cat'];

    $data['result'] = $this->service_model->get_search_result($level3_id,$level4_id);
	  $data['cat']=$this->user_model->fetch_category();
	  $this->load->view('header',$data);
    $this->load->view('service/search_result',$data);
	  $this->load->view('footer',$data);
  }else{
      $data['result'] ="";
    $this->load->view('service/search_result',$data);
  }
  }

  function search_result_service($id)
  {
  
    $data['result'] = $this->service_model->get_service($id);

   // echo "<pre>";print_r($data['result']);die();
    $this->load->view('service/services',$data);

  }

  function ug()
  {
       $id = $_POST['service_id'];

       $result = $this->service_model->get_course_details($id);

       foreach($result as $res)
    {
             $c_t = explode(",",$res->class_type);
             $d_n = explode(",",$res->degree_name);
             $t_i = explode(",",$res->total_admission_intake);

             $ug_array = array();
             for($i=0;$i< sizeof($c_t);$i++){
                if($c_t[$i] == "UG"){
               // $ug_array[$i]['class_type'] = $c_t[$i];
                $ug_array[$i]['degree_name'] = $d_n[$i];
                $ug_array[$i]['total_intake'] = $t_i[$i];
               }
            }
           $ug_json =  json_encode($ug_array);
          echo $ug_json;die();
        }
  }
  function pg()
  {
       $id = $_POST['service_id'];
       $result = $this->service_model->get_course_details($id);

       foreach($result as $res)
        {
             $c_t = explode(",",$res->class_type);
             $d_n = explode(",",$res->degree_name);
             $t_i = explode(",",$res->total_admission_intake);

             $pg_array = array();
             $k=0;
             for($j=0;$j< sizeof($c_t);$j++){
                if($c_t[$j] == "PG"){
                //$pg_array[$k]['class_type'] = $c_t[$j];
                $pg_array[$k]['degree_name'] = $d_n[$j];
                $pg_array[$k]['total_intake'] = $t_i[$j];
                $k++;
               }
            }

           $c_json =  json_encode($pg_array);
          echo $c_json;die();
        }
  }

  function visitors_count(){
    $ip = $_POST['ip'];
   // print_r($_POST);
    $data['result'] = $this->service_model->check_ip($ip);

    if(empty($data['result']) )
    {
      $visitors_data = array(
        'visitor_ip' => $ip,
        'visitor_count' => 1,
        'created_date' => Date('Y-m-d h:i:s'),
        'modified_date' => Date('Y-m-d h:i:s')      
      );
      $this->service_model->save_visitors_data($visitors_data);

    }else{
       foreach ($data['result'] as $res) {
           $ip = $res->visitor_ip;
           $count = $res->visitor_count;
         }
        $visitors_data = array(
        'visitor_count' => $count+1,
        'modified_date' => Date('Y-m-d h:i:s')
        ); 
         $this->service_model->update_visitors_data($visitors_data,$ip);
    }
  }

  function review_save(){
echo "<pre>";
print_r($_POST);die();


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

  /*  $p = $_POST['class_type'];
    $ct=count($p);
    $class_type = "";
    for ($i=0; $i<$ct; $i++) {
        $class_type.=("'$p[$i]',"); //Now it is string...
    } */
    //echo $class_type;die();
		echo "<pre>";print_r($_POST);die();
    /****** Service details   ******/
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
       /****** End Service details   ******/
      $last_insert_id =$this->service_model->save_service_data($service_data);
       /****** Basic details   ******/
      if(isset($last_insert_id) && $last_insert_id > 0)
	    {
        if(!empty($_POST['school_name'])){
       		$school_name = $_POST['school_name'];
        }
        if(!empty($_POST['college_name'])){
          $school_name = $_POST['college_name'];
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
        if(!empty($_POST['university_affialiated'])){
          $university_affialiated = $_POST['university_affialiated'];
        }else{
          $university_affialiated ="";
        }
        if(!empty($_POST['board'])){
       		$board = $_POST['board'];
        }
        if(!empty($_FILES['logo'])){
          $logo_name  = strtotime(Date('Y-m-d h:i:s')).$_FILES['logo']['name'];
          $logo_image   = "dist/service_images/".$logo_name;
          copy($_FILES['logo']['tmp_name'],$logo_image );
          //chmod(base_url(). $logo_image , 0777);     
        }else{
           $logo_image   ="";
        }
        if(!empty($_FILES['profile_image'])){
       		 $profile_name	=  strtotime(Date('Y-m-d h:i:s')).$_FILES['profile_image']['name'];
			     $profile_image 	=	"dist/service_images/".$profile_name;
			     copy($_FILES['profile_image']['tmp_name'],$profile_image );
          // chmod(base_url(). $profile_image, 0777);
        }else{
           $profile_image = ""; 
        }
        if(!empty($_FILES['prospectus'])){
           $prospectus_name  =  strtotime(Date('Y-m-d h:i:s')).$_FILES['prospectus']['name'];
           $prospectus_image   = "dist/service_images/".$prospectus_name;
           copy($_FILES['prospectus']['tmp_name'],$prospectus_image );
          // chmod(base_url(). $profile_image, 0777);
        }else{
         $prospectus_image = ""; 
        }
        if(!empty($_POST['website'])){
       		$website = $_POST['website'];
        }
        if(!empty($_POST['about_school'])){
       		$about_school = $_POST['about_school'];
        }
        if(!empty($_POST['about_college'])){
          $about_school = $_POST['about_college'];
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
        'university_affialiated' => $university_affialiated,
				'board' => $board,
				'logo' =>  $logo_image ,
				'profile_image' => $profile_image,
        'prospectus' => $prospectus_image,
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
        /****** End Basic details   ******/
        $this->service_model->save_basic_data($basic_data);
        /****** Contact details   ******/
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
        if(!empty($_POST['plsupport_name'])){
          $plsupport_name = $_POST['plsupport_name'];
        }else{
          $plsupport_name ="";
        }
        if(!empty($_POST['plsupport_number'])){
          $plsupport_number = $_POST['plsupport_number'];
        }else{
          $plsupport_number = "";
        }
        if(!empty($_POST['plsupport_mail_id'])){
          $plsupport_mail_id = $_POST['plsupport_mail_id'];
        }else{
          $plsupport_mail_id = "";
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
				'plsupport_name' => $plsupport_name,
        'plsupport_number' => $plsupport_number,
        'plsupport_mail_id' => $plsupport_mail_id,
				'created_date' => Date('Y-m-d h:i:s'),
				'modified_date' => Date('Y-m-d h:i:s')
			);
        /****** End Contact details   ******/
     		$this->service_model->save_contact_data($contact_data);
        /******  Facilities details   ******/

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
 /****** End Facilities details   ******/

 /****** Class details   ******/
     	if(!empty($_POST['class_type'])){
         $c_t = $_POST['class_type'];
         $ct=count($c_t);
         $class_type = "";
         for ($i=0; $i<$ct; $i++) {
              $class_type.=("'$c_t[$i]',"); //Now it is string...
          }
       	//	$class_type = $_POST['class_type'];
        }

        if(!empty($_POST['degree_name'])){
        $d_n = $_POST['degree_name'];
         $dn=count($d_n);
         $degree_name = "";
         for ($i=0; $i<$dn; $i++) {
              $degree_name.=("'$d_n[$i]',"); //Now it is string...
          }
        //  $degree_name = $_POST['degree_name'];       
        }else{
           $degree_name ="";
        }

        if(!empty($_POST['total_admission_intake'])){
           $t_i = $_POST['total_admission_intake'];
         $ti=count($t_i);
         $total_admission_intake = "";
         for ($i=0; $i<$ti; $i++) {
              $total_admission_intake.=("'$t_i[$i]',"); //Now it is string...
          }
          //$total_admission_intake = $_POST['total_admission_intake'];
        }else{
           $total_admission_intake ="";
        }

        if(!empty($_POST['specialization'])){
          $specialization = $_POST['specialization'];
        }else{
           $specialization ="";
        }
        if(!empty($_POST['mode_of_teaching'])){
          $mode_of_teaching = $_POST['mode_of_teaching'];
        }else{
           $mode_of_teaching ="";
        }
        if(!empty($_POST['course_duration'])){
          $course_duration = $_POST['course_duration'];
        }else{
           $course_duration ="";
        }
         if(!empty($_POST['medium_of_teaching'])){
          $medium_of_teaching = $_POST['medium_of_teaching'];
        }else{
           $medium_of_teaching ="";
        }
        if(!empty($_POST['approval'])){
          $approval = $_POST['approval'];
        }else{
           $approval ="";
        }
        if(!empty($_POST['accriditation'])){
          $accriditation = $_POST['accriditation'];
        }else{
           $accriditation ="";
        }
         
         if(!empty($_POST['eligibility'])){
          $eligibility = $_POST['eligibility'];
        }else{
           $eligibility ="";
        }
        if(!empty($_POST['entrance_exam'])){
          $entrance_exam = $_POST['entrance_exam'];
        }else{
           $entrance_exam ="";
        }
        if(!empty($_POST['exam_fees'])){
          $exam_fees = $_POST['exam_fees'];
        }else{
           $exam_fees ="";
        }
        if(!empty($_POST['last_ad_cut_off'])){
          $last_ad_cut_off = $_POST['last_ad_cut_off'];
        }else{
           $last_ad_cut_off ="";
        }
        if(!empty($_POST['reservation'])){
          $reservation = $_POST['reservation'];
        }else{
           $reservation ="";
        }
        if(!empty($_POST['fees'])){
       		$fees = $_POST['fees'];
        }else{
          $fees = "";
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
        'degree_name' =>$degree_name,
        'specialization' =>$specialization,
        'mode_of_teaching' =>$mode_of_teaching,
        'course_duration' =>$course_duration,
        'medium_of_teaching' =>$medium_of_teaching,
        'approval' =>$approval,
        'accriditation' =>$accriditation,
        'total_admission_intake' =>$total_admission_intake,
        'eligibility' =>$eligibility,
        'entrance_exam' =>$entrance_exam,
        'exam_fees' =>$exam_fees,
        'last_ad_cut_off' =>$last_ad_cut_off,
        'reservation' =>$reservation,
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

       /****** End Class details   ******/
     		$this->service_model->save_classes_data($classes_data);
    	 /****** Event details   ******/
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
            /******End  Event details   ******/
     		$this->service_model->save_events_data($events_data);
        
        /****** Cocurricular details   ******/
        if(!empty($_POST['activities_list'])){
          $activities_list = $_POST['activities_list'];
        }
        if(!empty($_POST['achivers'])){
          $achivers = $_POST['achivers'];
        }else{
          $achivers = "";
        }
        if(!empty($_POST['curricular_category'])){
          $curricular_category = $_POST['curricular_category'];
        }else{
          $curricular_category = "";
        }
        if(!empty($_POST['participants_type'])){
          $participants_type = $_POST['participants_type'];
        }else{
          $participants_type = "";
        }
        if(!empty($_POST['competition_name'])){
          $competition_name = $_POST['competition_name'];
        }else{
          $competition_name = "";
        }
        if(!empty($_POST['student_name'])){
          $student_name = $_POST['student_name'];
        }else{
          $student_name = "";
        }
        if(!empty($_POST['level'])){
          $level = $_POST['level'];
        }else{
          $level = "";
        }

        $cocurricular_data = array(
              'service_id' => $last_insert_id,
              'activities_list' => $activities_list,
              'achivers' => $achivers,
              'curricular_category' => $curricular_category,
              'participants_type' => $participants_type,
              'competition_name' => $competition_name,
              'student_name' => $student_name,
              'level' => $level,
              'created_date' => Date('Y-m-d h:i:s'),
              'modified_date' => Date('Y-m-d h:i:s')
        );
          /******End Cocurricular details   ******/
        $this->service_model->save_cocurricular_data($cocurricular_data);

        /****** Placement details   ******/
        if(isset($_POST['company_name']) || isset($_POST['total_student_placed']) || isset($_POST['avg_package']))
       {
          if(!empty($_POST['company_name'])){
             $company_name = $_POST['company_name'];
          } 
          if(!empty($_POST['total_student'])){
             $total_student = $_POST['total_student'];
          }
          if(!empty($_POST['average_package'])){
             $average_package = $_POST['average_package'];
          }

          $placement_data = array(
              'service_id' => $last_insert_id,
              'company_name' => $company_name,
              'total_student' => $total_student,
              'average_package' => $average_package,
              'created_date' => Date('Y-m-d h:i:s'),
              'modified_date' => Date('Y-m-d h:i:s')
          );
        $this->service_model->save_placement_data($placement_data);
              /****** Placement details   ******/
       }
        
/****** Review details   ******/
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
/****** End Review details   ******/
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
    public function regular_school()
    {
      $this->load->view('service/regular_school');
    }
    public function regular_college()
    {
      $this->load->view('service/regular_college');
    }
    public function abroad_consultants()
    {
      $this->load->view('service/abroad_consultants');
    }  
    public function distance_edu_consult()
    {
      $this->load->view('service/distance_edu_consult');
    }

}
