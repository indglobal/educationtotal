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

   public function  getDetails_fromsignup($user_name){
        $this->db->select('*');
        $this->db->from('users_table');
        $this->db->join('user_detail', 'user_detail.user_id = users_table.user_id', 'inner');
        $this->db->where(array('users_table.user_name' =>$user_name));
        $result = $this->db->get();
        return $result->result_array();

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

public function save_user_detail_my_profile($user_id){

extract($_POST);
$edu_arr=array();
 $count=$this->input->post('count_edu');

          for($i=1;$i<=$count;$i++){
            $edu = $this->input->post('edu_'.$i);
            $edu_arr[]=$edu;
            //print_r($i.'---'.$edu.'--');
        }
    //print_r($edu_arr);
     //exit();
    $chk_user_id=$this->getDetails_fromedu_user($user_id);

    if(empty($chk_user_id)){
     $data_edu_name= array(
            'user_id'=>$user_id,
            'edu_name'=>serialize($edu_arr),
           
        );
        $this->db->insert('edu_user', $data_edu_name);
    }else{
           $data_edu_name= array(
          'edu_name'=>serialize($edu_arr),
           
        );
       $this->db->where('user_id',$user_id);
       $this->db->update('edu_user', $data_edu_name);
    }


    
        $data = array(
            'fname'=>$fname_of_user,
            'lname'=>$lname_of_user,
            //'street'=>$street,
            // 'user_name'=>$user_name,
            'email'=>$email,
            'phone'=>$phone,
            'interest'=>$interest,
            //'locality_dev'=>$locality_dev,
            'city'=>$city,
            'country'=>$country,
            
        );
        // print_r($data);
        // exit();
            $this->db->where('user_id',$user_id);
            $q=$this->db->update('user_detail', $data);
            // unlink($pathToUpload.$filePath);
        //exit();
        
      
        if($q){
            return true;
        } else {
            return false;
        }

}

function getDetails_fromedu_user($user_id)
{
      $this->db->select('*');
      $this->db->from('edu_user');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
      $this->db->where(array('edu_user.user_id' =>$user_id));
      $result = $this->db->get();
      return $result->result_array();

  }
public function is_temp_pass_valid($temp_pass){
    $this->db->where('password', $temp_pass);
    $query = $this->db->get('users_table');
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}
public function reset_pass($value){
    $data =array(
                'password' =>$this->input->post('uspasw'));
                $temp_pass = $value['temp_pass'];

    if($data){
        $this->db->where('password', $temp_pass);
        $this->db->update('users_table', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

}	

public function fetch_category()
{
$this->db->select('*');
$this->db->from('master_subcategory_second');
$query = $this->db->get();
return $query->result_array();
}

public function GetRow($keyword,$cat_id)
{
$this->db->order_by('sub_cat_thired_id', 'DESC');
$this->db->where("sub_cat_second_id", $cat_id);
$this->db->like("subcat_thired_name", $keyword);
return $this->db->get('master_subcategory_thired')->result_array();
}

  } 
  ?>
