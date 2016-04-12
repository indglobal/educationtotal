<?php

class marketing_persons_model extends CI_Controller
{


	 function get_categories()
     {
        $this->db->select('*');
        $this->db->from('master_categories');
        $result = $this->db->get();
        return $result->result_array();
     }


	
	function get_marketing_persons()
	{
		$this->db->select('*');
        $this->db->from('user_detail');
        $this->db->join('users_table', 'users_table.user_id = user_detail.user_id', 'inner');
        $this->db->where('users_table.user_type_id',4);
        $result = $this->db->get();
        return $result->result_array();


        // $sql="SELECT * FROM `users_table`,user_detail where user_detail.user_id=users_table.user_id and user_type_id=4"; 
        // $q=$this->db->query($sql);
        // $result = $q->result();
        // return $result;

        // SELECT * FROM `users_table`,user_detail where user_detail.user_id=users_table.user_id and user_type_id=4

	}
	function get_details($id)
	{
		$this->db->select('*');
        $this->db->from('user_detail');
        $this->db->join('users_table', 'users_table.user_id = user_detail.user_id', 'inner');
        $this->db->where(array('users_table.user_id' =>$id));
        $result = $this->db->get();
        return $result->result_array();
	}
	function save_marketing_persons()
	{ 
	extract($_POST);
	$date = Date('Y-m-d H:i:s');
    $data_users_table=array('email'=>$email_marketing,'user_name'=>$userid_marketing,'password'=>$password_marketing ,'user_type_id'=>4,'status'=>1,'created_date'=>$date , 'modified_date'=>$date);
	$this->db->trans_begin();
    $this->db->insert('users_table',$data_users_table);
    $user_id = $this->db->insert_id();
    $data_user_detail= array('user_id'=>$user_id,'fname'=>$fname_marketing ,'lname'=>$lname_marketing , 'phone'=>$phone_marketing ,'email'=>$email_marketing ,'address'=>$address_marketing,'created_date'=>$date , 'modified_date'=>$date);
    $this->db->insert('user_detail', $data_user_detail);
    $this->db->trans_complete();

if ($this->db->trans_status() === FALSE) {
            return 'false';
        } else {
            return 'true';
        }		
	}
   
// 	public function getMax_id(){
//      $this->db->select_max('user_id');
//         $result=$this->db->get('user_detail');
//         $row = $result->result();
//         if($row[0]->user_id == ''){
//             return "1";
//         } else {
//             return $row[0]->user_id+1;
//         }
// }

	function update_marketing_persons($id)
	{

    extract($_POST);
	$date = Date('Y-m-d H:i:s');
   // $data_user_detail= array('fname'=>$fname_marketing ,'lname'=>$lname_marketing , 'phone'=>$phone_marketing ,'email'=>$email_marketing ,'address'=>$address_marketing);
    //$data_users_table=array('userid'=>$userid_marketing ,'password'=>$password_marketing ,'user_type_id'=>4,'status'=>0,'created_date'=>$date , 'modified_date'=>$date);
    $data_user_detail= array('fname'=>$fname_marketing ,'lname'=>$lname_marketing , 'phone'=>$phone_marketing ,'email'=>$email_marketing ,'address'=>$address_marketing,'created_date'=>$date , 'modified_date'=>$date);
    $data_users_table=array('email'=>$email_marketing,'user_name'=>$userid_marketing,'password'=>$password_marketing ,'user_type_id'=>4,'status'=>1,'created_date'=>$date , 'modified_date'=>$date);
	$this->db->trans_begin();
    $this->db->where('user_id', $id)
                           ->update('user_detail',$data_user_detail);
    $this->db->where('user_id', $id)
                           ->update('users_table',$data_users_table);
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
            return 'false';
        } else {
            return 'true';
        }	
		
	}

	function delete_marketing_persons($id)
	{
		$this->db->delete('marketing_persons', array('id' => $id));
	    $this->db->delete('marketing_persons_id', array('id' => $id));

	}

	
}
?>