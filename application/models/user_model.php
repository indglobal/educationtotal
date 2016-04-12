<?php

class user_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

  public function adduser ($aduser)
   {	
		$data = array(
		'user_name' =>$aduser['fname'],
		'password' => $aduser['password'],
		'user_type_id' => $aduser['user_type_id'],
		'email' => $aduser['email'],
		'status' => 1,
		'created_date' => date('Y-m-d H:i:s'),
		'modified_date' => date('Y-m-d H:i:s')
		);
		 $this->db->insert('users_table', $data); 
		 $user_id = $this->db->insert_id();
		
		$data_details = array(
		'user_id' => $user_id,
		'fname' => $aduser['fname'],
		'lname' => $aduser['lname'],
		'phone' => $aduser['phone'],
		'email' => $aduser['email'],
		'address' => '',
		'created_date' => date('Y-m-d H:i:s'),
		'modified_date' => date('Y-m-d H:i:s'),
		);
   $insert_details = $this->db->insert('user_detail',$data_details);
	if($insert_details)
		return 1;
	else
		return 0;
   }
   
  public function getloginus($t,$d)
    {		
	
       $log= $this->db->get_where($t,$d);	   
		return $log->result_array();   
    } 

 public function email_exists(){
    $email = $this->input->post('usemail');
    $query = $this->db->query("SELECT email FROM user_detail WHERE email='$email'");    
    if($row = $query->row()){
        return TRUE;
    }else{
        return FALSE;
    }
 }
public function temp_reset_password($temp_pass){
    $data =array(
                'email' =>$this->input->post('usemail'),
                'password'=>$temp_pass);
                $email = $data['email'];

    if($data){
        $this->db->where('email', $email);
        $this->db->update('users_table', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

}

    public function GetRow($keyword,$cat_id)
     {        
        $this->db->order_by('sub_cat_thired_id', 'DESC');
        $this->db->where("sub_cat_second_id", $cat_id);
        $this->db->like("subcat_thired_name", $keyword);
        return $this->db->get('master_subcategory_thired')->result_array();
     }

     public function fetch_category()
     {
        $this->db->select('*');
        $this->db->from('master_subcategory_second');
        $query = $this->db->get();
        return $query->result_array();
      }

public function is_temp_pass_valid($temp_pass){
    $this->db->where('password', $temp_pass);
    $query = $this->db->get('users_table');
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}
public function reset_pass($value)
{
    $data =array(
                'password' =>$this->input->post('uspasw'));
                $temp_pass = $value['temp_pass'];

    if($data)
    {
        $this->db->where('password', $temp_pass);
        $this->db->update('users_table', $data);  
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}	

public function ratingfunction_mod ($adrate)
   {
    $insert = $this->db->insert('tbl_rating',$adrate);
    return $insert;
   }

public function avrage_rate_mod()
{
  $this->db->select_avg('rate');
  $query = $this->db->get('tbl_rating');
  return $query->result_array();


}






  } 
  ?>
