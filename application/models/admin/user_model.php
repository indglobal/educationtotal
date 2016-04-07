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
        $this->db->join('users_table', 'users_table.id = user_detail.id', 'inner');
        $this->db->where(array('users_table.user_type_id' =>3));
        $result = $this->db->get();
        return $result->result_array();
     }


	
	function get_details($id)
	{
		//$query=$this->db->query("select * from tbl_specialities where specialities_id='$id'");
		//return $query->result();
		$this->db->select('*');
        $this->db->from('master_categories');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
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