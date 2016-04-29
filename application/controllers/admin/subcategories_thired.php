<?php

class Subcategories_thired extends CI_Controller
{

	function __construct()
	{		
		parent::__construct();
		// $this->load->model('admin/admin_model');
		$this->load->model('admin/subcategories_model_thired');
		$this->load->view('admin/header');
		$this->load->view('admin/leftbar');
		$this->load->view('admin/footer');
	    $this->load->helper('base');

		if( ! $this->session->userdata('is_logged_in'))
		return	redirect('admin/login/index');
	}

	function index()
	{
     	$this->load->view('admin/dashboard');
	}

	function subcategories_list_thired()
	{	
		$data['subcategories']=$this->subcategories_model_thired->get_subcategories_thired();
     	$this->load->view('admin/subcategory_thired/list_of_subcategory_thired',$data);
	}

	function create_subcat_thired()
	{		
	    $data['cat_id']=1234;
	    $data['all_category']=$this->subcategories_model_thired->get_allcategory();
	    $data['all_subcategory']=$this->subcategories_model_thired->get_allsubcategory();
	    $data['all_subcategory2']=$this->subcategories_model_thired->get_allsubcategory2();
		$this->load->view('admin/subcategory_thired/create_subcat_thired',$data);
	}

	function edit_subcat_thired()
	{
		$data['id'] = $this->uri->segment(4, 0);
	    $data['all_category']=$this->subcategories_model_thired->get_allcategory();
	    $data['all_subcategory']=$this->subcategories_model_thired->get_allsubcategory();
	    $data['all_subcategory2']=$this->subcategories_model_thired->get_allsubcategory2();

		$data['details'] = $this->subcategories_model_thired->get_details($data['id']);
		$this->load->view('admin/subcategory_thired/create_subcat_thired',$data);
	}

	function getSubcategory(){
		//echo "okkkk";
		$cat_id = $this->input->post('cat_id');
		echo $cat_id;
		$this->db->select('subcat_id,subcat_name');
    	$this->db->from('master_subcategory');
    	$this->db->where(array('cat_id'=>$cat_id));
    	$result = $this->db->get();
    	echo '<option value="0">--Select--</option>';
    	foreach ($result->result_array() as $value) {
    		echo '<option value="'.$value['subcat_id'].'">'.$value['subcat_name'].'</option>';
    	}
	}
	function getSubcategory2(){
		//echo "okkkk";
		$subcat_id = $this->input->post('subcat_id');
		echo $subcat_id;
		$this->db->select('sub_cat_second_id,subcat_second_name');
    	$this->db->from('master_subcategory_second');
    	$this->db->where(array('subcat_id'=>$subcat_id));
    	$result = $this->db->get();
    	echo '<option value="0">--Select--</option>';
    	foreach ($result->result_array() as $value) {
    		echo '<option value="'.$value['sub_cat_second_id'].'">'.$value['subcat_second_name'].'</option>';
    	}
	}
   
	function update_subcat_thired()
	{
	    $id = $this->input->post('id');		
		$cat_id = $this->input->post('cat_id');	
		$subcat_id = $this->input->post('subcat_id');	
		$subcat_id2 = $this->input->post('subcat_id2');	
		$name = $this->input->post('subcat_name');
 		if($id !='')
		{
		$this->subcategories_model_thired->update_subcat_thired($id,$cat_id,$subcat_id,$subcat_id2,$name);
		}
		else
		{
		$this->subcategories_model_thired->save_subcat_thired($cat_id,$subcat_id,$subcat_id2,$name);			
		}
		redirect("subcategories_thired");
		
	}

	function delete_subcat_thired()
	{
		if($this->uri->segment(4, 0) != ""){
			
			$this->subcategories_model_thired->delete_subcat_thired($this->uri->segment(4, 0));	
		}
		redirect("subcategories_thired");
	}

	function check_subcategory2_name(){
	 $name=$this->input->post('name');
     $status = $this->subcategories_model_thired->check_subcategory2_name($name);
     if(!$status==0)
    {
      echo "success";
      exit;
        }else{
      echo "fail";
      exit;
    }

	}

	
}