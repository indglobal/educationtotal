<?php

class Admin_model extends CI_Controller
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

	function get_specialities()
	{
		$query=$this->db->query('select * from tbl_specialities');
		return $query->result();
	}
	
	function get_details($id)
	{
		$query=$this->db->query("select * from tbl_specialities where specialities_id='$id'");
		return $query->result();
	}
	
	function save_spe($name)
	{ 

		$date = Date('Y-m-d H:i:s');
		$data = array('name'=>$name , 'created_date'=>$date , 'modified_date'=>$date);
		$sql = $this->db->insert('tbl_specialities',$data);
		if($sql){
			redirect('admin/specialities'); 
		}
		else
		{
			echo 'could not insert';
		}
	}

	function update_spe($name,$id)
	{
		
		$date = Date('Y-m-d H:i:s');
		$data = array('name'=>$name , 'modified_date'=>$date);

		$sql = $this->db->where('specialities_id', $id)
						->update('tbl_specialities',$data);
		if($sql){
			redirect('admin/specialities'); 
		}
		else
		{
			echo 'could not insert';
		}
	}

	function delete_spe($id)
	{
		$this->db->delete('tbl_specialities', array('specialities_id' => $id));
	}

	
}
?>