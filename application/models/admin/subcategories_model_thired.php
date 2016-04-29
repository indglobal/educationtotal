<?php

class subcategories_model_thired extends CI_Controller
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

	  function get_subcategories_thired()
     {
        $this->db->select('*');
        $this->db->from('master_subcategory_thired');
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
     function get_allsubcategory2()
	 {
	    $this->db->select('*');
    	$this->db->from('master_subcategory_second');
    	$result = $this->db->get();
 		return $result->result_array();
	 }
	 
	
	function get_details($id)
	{
		//$query=$this->db->query("select * from tbl_specialities where specialities_id='$id'");
		//return $query->result();
		$this->db->select('*');
        $this->db->from('master_subcategory_thired');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
        $this->db->where(array('master_subcategory_thired.sub_cat_thired_id' =>$id));
        $result = $this->db->get();
        return $result->result_array();
	}
	
	function save_subcat_thired($cat_id,$subcat_id,$subcat_id2,$name)
	{ 

		$date = Date('Y-m-d H:i:s');
		$data = array('subcat_thired_name'=>$name ,'subcat_id'=>$subcat_id , 'cat_id'=>$cat_id ,'sub_cat_second_id'=>$subcat_id2 ,'created_date'=>$date , 'modified_date'=>$date);
		return $sql = $this->db->insert('master_subcategory_thired',$data);		
	}

	function update_subcat_thired($id,$cat_id,$subcat_id,$subcat_id2,$name)
	{

		$date = Date('Y-m-d H:i:s');
		$data = array('cat_id'=>$cat_id ,'subcat_id'=>$subcat_id ,'subcat_thired_name'=>$name , 'modified_date'=>$date);

		return $sql = $this->db->where('sub_cat_thired_id', $id)
						->update('master_subcategory_thired',$data);
		
	}

	function delete_subcat_thired($id)
	{
		$this->db->delete('master_subcategory_thired', array('sub_cat_thired_id' => $id));
	}

	
   function check_subcategory2_name($name)
  {
  $CI =&get_instance();
  $CI->db->select('sub_cat_thired_id');
  $CI->db->where('subcat_thired_name',$name);
  $result = $CI->db->get('master_subcategory_thired');
  $row = $result->row();
  if($row){
  return $row->sub_cat_thired_id;
  }else{
  return 0; 
  }
  }

	
}
?>