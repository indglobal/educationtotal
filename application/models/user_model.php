<?php 

class user_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

function get_menu()
  {
    $query=$this->db->query('select * from master_categories');
    return $query->result();
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

     if(isset($aduser['cat_id']) && !empty($aduser['cat_id']) )
     {

      $data = array(
       'user_id' => $user_id,
       'cat_id'=> $this->input->post('cat_id'),
       'status' => "1",
       'created_date' => date('Y-m-d H:i:s'),
       'modified_date' => date('Y-m-d H:i:s')
        );
    $this->db->insert('user_service_cat', $data); 
     }
		
		$data_details = array(
		'user_id' => $user_id,
		'fname' => $aduser['fname'],
		'lname' => $aduser['lname'],
		'phone' => $aduser['phone'],
		'email' => $aduser['email'],
		'address' => '',
		'created_date' => date('Y-m-d H:i:s'),
		'modified_date' => date('Y-m-d H:i:s')
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


function getDetails_fromedu_user($user_id)
{
      $this->db->select('*');
      $this->db->from('edu_user');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
      $this->db->where(array('edu_user.user_id' =>$user_id));
      $result = $this->db->get();
      return $result->result_array();

  }
function getDetails_fromskill_user($user_id)
{
      $this->db->select('*');
      $this->db->from('skill_user');
        //$this->db->join('master_branch', 'pension_receipt_file_master.Branch_Code = master_branch.Branch_Code', 'inner');
      $this->db->where(array('skill_user.user_id' =>$user_id));
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

public function save_user_detail_my_profile($filepath,$user_id){

extract($_POST);
$edu_arr=array();
$count=$this->input->post('count_edu');
$edu=$this->input->post('edu');
//print_r(count($edu));
 if($count>0){
          for($i=0;$i<count($edu);$i++){
            $edu_arr[]=$edu[$i];
        }
        //  print_r($edu_arr);
        // exit();
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
}elseif($count==0){
    $this->db->delete('edu_user', array('user_id' => $user_id));

}
#########################################################
 $skill_arr=array();
 $count=$this->input->post('count_skill');
 $skill=$this->input->post('skill');

 if($count>0){
          for($i=0;$i<count($skill);$i++){
            $skill_arr[]=$skill[$i];
        }
    $chk_user_id=$this->getDetails_fromskill_user($user_id);

    if(empty($chk_user_id)){
     $data_skill_name= array(
            'user_id'=>$user_id,
            'skill_name'=>serialize($skill_arr),
           
        );
        $this->db->insert('skill_user', $data_skill_name);
    }else{
           $data_skill_name= array(
          'skill_name'=>serialize($skill_arr),
           
        );
       $this->db->where('user_id',$user_id);
       $this->db->update('skill_user', $data_skill_name);
    }
}elseif($count==0){
        $this->db->delete('skill_user', array('user_id' => $user_id));

  }
  ###############

        $data = array(
            'fname'=>$fname_of_user,
            'lname'=>$lname_of_user,
            //'street'=>$street,
            // 'user_name'=>$user_name,
            'email'=>$email,
            'dob'=>$dob,
            'phone'=>$phone,
            'address'=>$address,
            'interest'=>$interest,
            'city'=>$city,
            'country'=>$country,
            'image_url'=>$filepath,
            
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


  } 
  ?>
