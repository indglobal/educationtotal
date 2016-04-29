<?php

class subcategories_model_second extends CI_Controller
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

	  function get_subcategories_second()
     {
        $this->db->select('*');
        $this->db->from('master_subcategory_second');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
        //$this->db->where(array('pension_receipt_file_master.Branch_Code' =>1004));
        $result = $this->db->get();
        return $result->result_array();
     }

     function get_allsubcategory()
	 {
	    $this->db->select('*');
    	$this->db->from('master_subcategory');
    	$result = $this->db->get();
 		return $result->result_array();
	 }
	 function get_allcategory()
	 {
	    $this->db->select('*');
    	$this->db->from('master_categories');
    	$result = $this->db->get();
 		return $result->result_array();
	 }
	
	function get_details($id)
	{
		//$query=$this->db->query("select * from tbl_specialities where specialities_id='$id'");
		//return $query->result();
		$this->db->select('*');
        $this->db->from('master_subcategory_second');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
        $this->db->where(array('master_subcategory_second.sub_cat_second_id' =>$id));
        $result = $this->db->get();
        return $result->result_array();
	}
	
	function save_subcat_second($cat_id,$subcat_id,$name)
	{ 

		$date = Date('Y-m-d H:i:s');
		$data = array('subcat_second_name'=>$name ,'subcat_id'=>$subcat_id , 'cat_id'=>$cat_id ,'created_date'=>$date , 'modified_date'=>$date);
		return $sql = $this->db->insert('master_subcategory_second',$data);		
	}

	function update_subcat_second($id,$cat_id,$subcat_id,$name)
	{

		$date = Date('Y-m-d H:i:s');
		$data = array('cat_id'=>$cat_id ,'subcat_id'=>$subcat_id ,'subcat_second_name'=>$name , 'modified_date'=>$date);

		return $sql = $this->db->where('sub_cat_second_id', $id)
						->update('master_subcategory_second',$data);
		
	}

	function delete_subcat_second($id)
	{
		$this->db->delete('master_subcategory_second', array('sub_cat_second_id' => $id));
	}

	
}
?>