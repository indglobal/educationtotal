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
       $data['cat']=$this->user_model->fetch_category();
       $this->load->view('header',$data);
		$this->load->view('user/signin.php');
		$this->load->view('footer.php');
	}

  public function provider_signup()
  {
    $data['cat']=$this->user_model->fetch_category();
    $this->load->view('header.php',$data);
    
    $this->load->view('user/provider_signup.php');
    $this->load->view('footer.php');
  }
  public function user_signup()
  {
    $data['cat']=$this->user_model->fetch_category();
    $this->load->view('header.php',$data);
   
    $this->load->view('user/user_signup.php');
    $this->load->view('footer.php');
  }
 
    public function add_user()
   {
  
   $this->form_validation->set_rules('usnameF', 'User Name', 'required|max_length[30]');
   $this->form_validation->set_rules('usnameL', 'User Last Name', 'required|max_length[30]');
   $this->form_validation->set_rules('uspasw','Password','required|max_length[20]|min_length[6]|alpha_numeric');
   $this->form_validation->set_rules('uscnpasw', 'Password Confirmation', 'required|matches[uspasw]');
   $this->form_validation->set_rules('usemail', 'E-mail', 'required|valid_email|is_unique[user_detail.email]');
  // $this->form_validation->set_rules('usmobnum', 'Mobile number', 'required');
  $this->form_validation->set_rules('usmobnum', 'Mobile number', 
  'required|regex_match[/^[0-9]+$/]|xss_clean');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run())
    {
       $aduser = array( 
       'fname'      => $this->input->post('usnameF'),
       'lname'      => $this->input->post('usnameL'),
       'phone'      => $this->input->post('usmobnum'),
       'email'      => $this->input->post('usemail'),
	     'password'      => $this->input->post('uspasw'),
       'address'    => $this->input->post('usmobnum'),
	    'user_type_id'    => $this->input->post('idtype')
                   );
      
       $data['result'] = $this->user_model->adduser($aduser);
	     $catesecond['cat']=$this->user_model->fetch_category();
       $this->load->view('header.php');
       $catesecond['cat']=$this->user_model->fetch_category();
	  
     redirect('register_cont');
	   exit;
    }
    else
    {
      
      $this->load->view('header.php');
      $catesecond['cat']=$this->user_model->fetch_category();
        if ($this->input->post('idtype')==3) 
			
          $this->load->view('user/user_signup.php');
       else 
          $this->load->view('user/provider_signup.php');
          $this->load->view('footer.php');
     }
    }

   public function login()
    {            
    	$submitlog=$this->input->post('submit');
       
       if(isset($submitlog))
        {
//checking validation

   $this->form_validation->set_rules('uname', 'User Name', 'required');
   $this->form_validation->set_rules('pass', 'Password', 'required');
   // $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run())
    {
      $usr=$this->input->post('uname');
      $pass=$this->input->post('pass');

    $category=$this->input->post('category');
      $ulogin=array('user_name'=>$usr,'password'=>$pass,'user_type_id'=>$category);   

    $rec= $this->user_model->getloginus('users_table',$ulogin);     
           if(count($rec)>0)
           {
               foreach($rec as $valu)
               {
                   $iid=$valu['user_id'];
               }
               $S_A=array('UN'=>$usr,'IID'=>$iid);
			  
               // $this->session->set_userdata($S_A);
               //redirect('register_cont/user_signup');
               $this->session->set_userdata('is_userlogged_in', $S_A);
			 
			   if($category == 2)
			   {
                 redirect('user/provider_panel');
			   }
			   else
			   {			   
				redirect('user/user_panel');   
			   }
           }
           else
           {       
           $this->session->set_flashdata('message', '<div class="alert alert-danger">Invalid Username or Password..</div>');
           redirect(site_url('register_cont/signin'));      
            // echo "<script>alert('WRONG PASSWORD'); </script>"; 
            // redirect('register_cont/signin');
           }

    }else{
    $data['cat']=$this->user_model->fetch_category();
    $this->load->view('header',$data);
    $this->load->view('user/signin');
    $this->load->view('footer');
   }
  }
 }

 public function logout()
  {
    $this->session->sess_destroy();
    $this->index();
  }
       
       public function signin()
  {
    $data['cat']=$this->user_model->fetch_category();
    $this->load->view('header',$data);
    $this->load->view('user/signin');
    $this->load->view('footer');
  }
  
  public function recover(){
    //Loads the view for the recover password process.
	$catesecond['cat']=$this->user_model->fetch_category();
  $this->load->view('header');
  $this->load->view('user/recover');
	$this->load->view('footer');
	}
	
	public function recover_password(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('usemail', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
		//check if email is in the database
        if($this->user_model->email_exists())
        {
            //$them_pass is the varible to be sent to the user's email 
            $temp_pass = md5(uniqid());
            //send email with #temp_pass as a link
            $this->load->library('email', array('mailtype'=>'html'));
            $this->email->from('user@yahoo.com', "Site");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Reset your Password");

            $message = "<p>This email has been sent as a request to reset our password</p>";
            $message .= "<p><a href='".base_url()."register_cont/reset_password/$temp_pass'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
						
           // $this->email->message($message);
		   echo $message;
			$this->user_model->temp_reset_password($temp_pass);
            if($this->email->send()){
                if($this->user_model->temp_reset_password($temp_pass)){
                    echo "check your email for instructions, thank you";
                }
            }
            else{
                echo "email was not sent, please contact your administrator";
            }

        }else{
            echo "your email is not in our database";
        }
}


public function reset_password($temp_pass){

    if($this->user_model->is_temp_pass_valid($temp_pass)){
		$data['temp'] = $temp_pass;
    $catesecond['cat']=$this->user_model->fetch_category();
		$this->load->view('header');
   
        $this->load->view('user/reset_password',$data);
		$this->load->view('footer');

    }else{
        echo "The key is not valid";    
    }

}
public function update_password(){
    $this->load->library('form_validation');
        $this->form_validation->set_rules('uspasw', 'Password', 'required|trim');
        $this->form_validation->set_rules('uscnpasw', 'Confirm Password', 'required|trim|matches[uspasw]');
            if($this->form_validation->run()){
            $update = array( 
       'uspasw'      => $this->input->post('uspasw'),
       'temp_pass'      => $this->input->post('temp_pass')
                   );      
       $data['result'] = $this->user_model->reset_pass($update);
	   redirect('user/index');
            }else{
            echo "passwords do not match"; 
			redirect('user/index');
            }
}
public function test()
{
  //$this->load->view('header');
  $catesecond['cat']=$this->user_model->avrage_rate_mod();
    $this->load->view('test',$catesecond);
        

    //$this->load->view('footer');
}
public function resulttest()
{

  $catesecond['cat']=$this->user_model->avrage_rate_mod();
  $this->load->view('resulttest',$catesecond);

}
public function GetCatename()
   {
        $keyword=$this->input->post('keyword');
        $cat_id=$this->input->post('cat_id');
        $data=$this->user_model->GetRow($keyword,$cat_id);        
        echo json_encode($data);
    }

public function ratingfunction()
{
      //print_r($_POST);
    $adrate= array( 

       'rate' => $this->input->post('fc_rating'));

        $this->user_model->ratingfunction_mod($adrate);
       
   }

  

}
?>



