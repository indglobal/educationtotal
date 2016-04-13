<?php

class Service_model extends CI_Controller
{
	/********** demo *********/

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


	/******** Service **********/

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


	}
	?>
