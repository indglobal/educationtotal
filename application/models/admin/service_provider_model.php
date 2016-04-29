<?php

class service_provider_model extends CI_Controller
{

	function get_admin()
	{
		$sql = $this->db->query("SELECT email FROM credentials");
        $res = $sql->result();
        foreach ($res as $value) {
            $email = $value->email;
        }
        return $email;
	}

	function check_credentials($email,$password)
	{
		$query = $this->db->select('email, password')
							->where('email',$email)
				 			->where('password',$password)
				 			->get('credentials');

		if($query->num_rows() > 0){
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	 function get_service_provider()
     {
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->join('users_table', 'users_table.user_id = user_detail.user_id', 'inner');
        $this->db->where(array('users_table.user_type_id' =>2));
        $result = $this->db->get();
        return $result->result_array();
     }


	
	function get_details($id)
	{

		$this->db->select('*');
        $this->db->from('master_categories');
        $this->db->where(array('master_categories.cat_id' =>$id));
        $result = $this->db->get();
        return $result->result_array();
	}
	
	function save_cat($name)
	{ 

		$date = Date('Y-m-d H:i:s');
		$data = array('cat_name'=>$name , 'created_date'=>$date , 'modified_date'=>$date);
		return $sql = $this->db->insert('master_categories',$data);		
	}

	function update_cat($name,$id)
	{
		$date = Date('Y-m-d H:i:s');
		$data = array('cat_name'=>$name , 'modified_date'=>$date);

		return $sql = $this->db->where('cat_id', $id)
						->update('master_categories',$data);
		
	}

	function delete_cat($id)
	{
		$this->db->delete('master_categories', array('cat_id' => $id));
	}
    
    function check_status_sp($id)
{
  $CI =&get_instance();
  $CI->db->select('status');
  $CI->db->where('user_id',$id);
  $result = $CI->db->get('users_table');
  $row = $result->row();
  return $row->status;
  }
  function check_status_services($user_id,$service_id)
{
  $CI =&get_instance();
  $CI->db->select('status');
  // $CI->db->where('user_id',$id);
  $CI->db->where(array('service.user_id'=>$user_id,'service.service_id'=>$service_id));
  $result = $CI->db->get('service');
  $row = $result->row();
  return $row->status;
  }

  function check_approved_request($id)
{
  $CI =&get_instance();
  $CI->db->select('status');
  // $CI->db->where('user_id',$id);
  $CI->db->where(array('service_request.id'=>$id));
  $result = $CI->db->get('service_request');
  $row = $result->row();
  return $row->status;
  }
  
   function update_approved_request($id,$data)
  {
      //$data=array('status'=>0);
      $this->db->where('id', $id);
      $this->db->update('service_request', $data);
  }
  

   function update_status_sp($id,$data)
  {
      //$data=array('status'=>0);
      $this->db->where('user_id', $id);
      $this->db->update('users_table', $data);
  }

   function update_status_services($user_id,$service_id,$data)
  {
      //$data=array('status'=>0);
      $this->db->where(array('service.user_id'=>$user_id,'service.service_id'=>$service_id));
      $this->db->update('service', $data);
  }
	
}
?>