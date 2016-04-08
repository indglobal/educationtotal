<?php

class user_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

  public function adduser ($aduser,$typeid)
   {
    
    
    $insert = $this->db->insert('user_detail',$aduser);
var_dump($this->db->insert_id());die;
    $inserttype = $this->db->insert('user_roles1',$typeid);
    //return $insert;
    //return $inserttype;
   }
   
  public function getloginus($t,$d)
    {
       $log= $this->db->get_where($t,$d);
       return $log->result_array();
       
    }

    public function getloginsp($t,$d)
    {
       $log= $this->db->get_where($t,$d);
       return $log->result_array();
       
    }



  } 
  ?>
