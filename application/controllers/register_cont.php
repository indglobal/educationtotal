<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_cont extends CI_Controller
 {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
    $this->load->library('form_validation');
		$autoload['helper'] = array('url');
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('user/signin.php');
		$this->load->view('footer.php');
	}

  public function provider_signup()
  {
    $this->load->view('header.php');
    $this->load->view('user/provider_signup.php');
    $this->load->view('footer.php');
  }
  public function user_signup()
  {
    $this->load->view('header.php');
    $this->load->view('user/user_signup.php');
    $this->load->view('footer.php');
  }
  

   public function add_sp_user()
   {
    $this->form_validation->set_rules('pvdrNameF', 'User Name', 'required');
$this->form_validation->set_rules('pvdrNameL', 'User Last Name', 'required');
$this->form_validation->set_rules('paswrd','Password','required');
$this->form_validation->set_rules('Cpaswrd', 'Password Confirmation', 'required|matches[paswrd]');
$this->form_validation->set_rules('pvdremail', 'E-mail', 'required');
$this->form_validation->set_rules('pvdrMnumber', 'Mobile number', 'required|regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run())
    {
      
    }
    else
    {
    $this->load->view('header.php');
    $this->load->view('user/provider_signup.php');
    $this->load->view('footer.php');
    }


    /*$adsp = array( 

       'spfname' => $this->input->post('fc_name_sp'),
       'splname' => $this->input->post('fc_lname_sp'),
       'sppassword' => $this->input->post('fc_pass_sp'),
       'spcnpassword' => $this->input->post('fc_cnpass_sp'),
       'spemail' => $this->input->post('fc_mail_sp'),
       'spmobno' => $this->input->post('fc_mobn_sp')

                 );

        $this->user_model->add_sp_mod($adsp);
   }*/
}
    public function add_user()
   {
  
   $this->form_validation->set_rules('usnameF', 'User Name', 'required');
   $this->form_validation->set_rules('usnameL', 'User Last Name', 'required');
   $this->form_validation->set_rules('uspasw','Password','required');
   $this->form_validation->set_rules('uscnpasw', 'Password Confirmation', 'required|matches[uspasw]');
   $this->form_validation->set_rules('usemail', 'E-mail', 'required|valid_email|is_unique[user_detail.email]');
   $this->form_validation->set_rules('usmobnum', 'Mobile number', 
   'required|regex_match[/^[0-9]+$/]|xss_clean');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run())
    {
       $aduser = array( 

       'fname'      => $this->input->post('usnameF'),
       'lname'      => $this->input->post('usnameL'),
       'phone'      => $this->input->post('uspasw'),
       'email'      => $this->input->post('usemail'),
       'address'    => $this->input->post('usmobnum')
                   );
       $typeid = array ('user_type_id' => $this->input->post('idtype'));
       $this->user_model->adduser($aduser,$typeid);
       $this->load->view('header.php');
       $this->load->view('user/user_signup.php');
       $this->load->view('footer.php');
    }
    else
    {
    $this->load->view('header.php');
    $this->load->view('user/user_signup.php');
    $this->load->view('footer.php');
   }
  //redirect('user/user_signup.php');
    }




   public function login()
    {
            
    	$submitlog=$this->input->post('submit');
       
       if(isset($submitlog))
        {
 echo "user funtion is working";
      $usr=$this->input->post('uname');
      $pass=$this->input->post('pass');
      $ulogin=array('ufname'=>$usr,'upassword'=>$pass);
       if ($_POST['category'] == "user")
    {
      $rec= $this->user_model->getloginus('userreg',$ulogin);
        }
        else
        {
         $rec= $this->user_model->getloginsp('spreg',$ulogin); 
        }
           
           if(count($rec)>0)
           {
               foreach($rec as $valu)
               {
                   $iid=$valu['usid'];
               }
               $S_A=array('UN'=>$usr,'IID'=>$iid);
               $this->session->set_userdata($S_A);
               redirect('register_cont/user_signup');
           }
           else
           {
              // $data['dt']="WRONG PASSWORD";,$data
           //$this->load->view('register_cont/signin');
            //redirect('register_cont/signin');
            echo "<script>alert('WRONG PASSWORD'); </script>"; 
            redirect('register_cont/signin');
           }
    }

   
	     }
      


   
       public function signin()
  {
    $this->load->view('header');
    $this->load->view('user/signin');
    $this->load->view('footer');
  }


   





}
?>