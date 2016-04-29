<?php

class user_model extends CI_Controller
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

	 function get_userlist()
     { 

        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->join('users_table', 'users_table.user_id = user_detail.user_id', 'inner');
        $this->db->where(array('users_table.user_type_id' =>3));
        $result = $this->db->get();
        return $result->result_array();

     }
      function get_request_for_specific_sp($sp_user_id)
     { 
        $this->db->select('*');
        $this->db->from('service');
        $this->db->join('service_request','service_request.service_id = service.service_id', 'inner');
        $this->db->where(array('service.user_id' =>$sp_user_id));
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

	
}
?>