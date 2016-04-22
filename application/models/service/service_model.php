<?php

class Service_model extends CI_Controller
{
	/********** demo *********/

	function get_menu_cat($id)
	{
        $this->db->select('*');
		$this->db->from('master_categories');
		$this->db->join('user_service_cat', 'master_categories.cat_id = user_service_cat.cat_id');
		$this->db->where('user_service_cat.user_id', $id);
		$this->db->where('user_service_cat.status', "1");
        $query = $this->db->get();
		return $query->result();
		//$query=$this->db->query('select * from master_categories');
		//return $query->result();
	}

   function get_menu()
	{
		$query=$this->db->query('select * from master_categories');
		return $query->result();
	}

    function get_sub_menu($id)
	{
		$query=$this->db->query("select * from master_subcategory where cat_id='$id'");
		return $query->result();
	}

    function get_category($id)
	{
		$query=$this->db->query("select * from master_subcategory_second where subcat_id='$id'");
		return $query->result();
	}

	function get_sub_category($id)
	{
		$query=$this->db->query("select * from master_subcategory_thired where sub_cat_second_id='$id'");
		return $query->result();
	}

	/********** end demo ********/

	/********  Add  Service **********/

	public function save_service_data($data)
	{
		$insert = $this->db->insert('service', $data);
		// return $insert;
        return $this->db->insert_id();		
	}

	public function save_basic_data($data)
	{
		$insert = $this->db->insert('basic_details', $data);
		 return $insert;
       // return $this->db->insert_id();		
	}

	public function save_contact_data($data)
	{
		$insert = $this->db->insert('contact_details', $data);
		 return $insert;		
	}

	
	public function save_facilities_data($data)
	{
		$insert = $this->db->insert('facilities_available_details', $data);
		 return $insert;		
	}

	public function save_classes_data($data)
	{
		$insert = $this->db->insert('classes_details', $data);
		 return $insert;		
	}

	public function save_events_data($data)
	{
		$insert = $this->db->insert('events_calender_details', $data);
		 return $insert;		
	}

	public function save_cocurricular_data($data)
	{
		$insert = $this->db->insert('co_curricular_details', $data);
		 return $insert;		
	}
	
    public function save_review_data($data)
	{
		$insert = $this->db->insert('reviews_details', $data);
		 return $insert;		
	}

	public function save_placement_data($data)
	{
		$insert = $this->db->insert('placement_details', $data);
		 return $insert;		
	}

	/********* End Add service ********/

	/*******   **********/

		public function get_search_result($level3_id,$level4_id)
	{
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('basic_details', 'service.service_id = basic_details.service_id');
		$this->db->where('sub_cat_thired_id', $level4_id);
		$this->db->where('service.status', "1");
		$query = $this->db->get();
		return $query->result();
		//$result = $this->db->query("SELECT * FROM service WHERE sub_cat_second_id ='$level3_id' AND sub_cat_thired_id='$level4_id'  ");
		//return $result->result();
	}

    public function get_service($id)
	{
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('basic_details', 'service.service_id = basic_details.service_id');
		$this->db->join('facilities_available_details', 'service.service_id = facilities_available_details.service_id');
		$this->db->join('contact_details', 'service.service_id = contact_details.service_id');	
		$this->db->join('classes_details', 'service.service_id = classes_details.service_id');		
		$this->db->join('placement_details', 'service.service_id = placement_details.service_id');	
		$this->db->where('service.service_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function list_service($id)
	{
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('master_categories', 'service.cat_id = master_categories.cat_id');
		$this->db->join('master_subcategory', 'service.subcat_id = master_subcategory.subcat_id');
		$this->db->join('master_subcategory_second', 'service.sub_cat_second_id = master_subcategory_second.sub_cat_second_id');	
		$this->db->join('master_subcategory_thired', 'service.sub_cat_thired_id = master_subcategory_thired.sub_cat_thired_id');
		
		$this->db->where('service.user_id', $id);
		$this->db->where('service.status', "1");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_course_details($id)
	{
		$this->db->select('class_type,degree_name,total_admission_intake');
		$this->db->from('service');
        $this->db->join('classes_details', 'service.service_id = classes_details.service_id');	
	
		$this->db->where('service.service_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function check_ip($ip)
	{
		$this->db->where('visitor_ip', $ip);
		$query = $this->db->get('visitors_count');
		return $query->result();
		//if($query->num_rows == 1)
		//{
		//}
	}
  
    public function save_visitors_data($data)
	{
		$insert = $this->db->insert('visitors_count', $data);
		 return $insert;		
	}

	public function update_visitors_data($data,$ip)
	{	
		$this->db->where('visitor_ip', $ip);
		$this->db->update('visitors_count', $data);		
	}


     /*******   **********/

     /******* search filter   **********/

    public function filter_location($data)
           {
          $this->db->select('*');
          $this->db->from('service');
		  $this->db->join('basic_details', 'service.service_id = basic_details.service_id');

          $this->db->where_in('basic_details.district', $data);
          $this->db->where('service.status', "1");
          $query = $this->db->get();
         $a= $query->result();
          //  print_r($a);exit;
          return $a;
           } 


    public function show_location()
   {
        $this->db->select('*');
        $this->db->from('citylist');
        $query = $this->db->get();
        return $query->result_array();
   }       



     /******* End  search filter     **********/






	}
	?>
