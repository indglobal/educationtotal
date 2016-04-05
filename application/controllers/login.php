<?php 

class Login extends CI_Controller
{
	function index()
	{ 
		if($this->session->userdata('is_logged_in'))
		{
			$this->load->model('admin_model');
			$email_address = $this->admin_model->get_admin();

			if($this->session->userdata['is_logged_in']['email_address'] == $email_address)
			{
				
				$this->load->view('header');
				$this->load->view('leftbar');
				$this->load->view('dashboard');
				$this->load->view('footer');
			}
			
		}

		else
		{
		$this->load->view('index_admin');  
		}
	}
	
	function signin_form()
	{
			$email = $this->input->post('email_address');
			$password = $this->input->post('password');
			$this->load->model('admin_model');
			if($this->admin_model->check_credentials($email,$password))
			{
				$data = array(
						'email_address' => $email,
						'is_logged_in' => true);
		   		 $this->session->set_userdata('is_logged_in', $data);
				echo '1';
			}
			else
			{
				echo '2';
			}
	}	

	function logout()
	{
		$this->session->unset_userdata('is_logged_in');
		$this->load->view('index_admin');	
	}	

}

?>