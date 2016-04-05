<?php
class admin_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	 /*** Check Login Credentials ***/

    function get_admin()
    {
        $sql = $this->db->query("SELECT email_address FROM admin_registrations");
        $res = $sql->result();
        foreach ($res as $value) {
            $email = $value->email_address;
        }
        return $email;
    }

    function check_credentials($email,$password)
    {
        $sql = $this->db->query("SELECT email_address,password FROM admin_registrations 
        WHERE email_address = '$email' AND password = '$password' ");
        $result = $sql->result();
        if(!empty($result))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /*** End Login Check ***/
	
}
?>