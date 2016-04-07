<?php

class Subcategories_second extends CI_Controller
{

	function __construct()
	{		
		parent::__construct();
		// $this->load->model('admin/admin_model');
		  $this->load->model('admin/subcategories_model_second');
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

	function subcategories_list_second()
	{	
		$data['subcategories']=$this->subcategories_model_second->get_subcategories_second();
     	$this->load->view('admin/subcategory_second/list_of_subcategory_second',$data);
	}

	function create_subcat_second()
	{		
	    $data['cat_id']=1234;
	    $data['all_category']=$this->subcategories_model_second->get_allcategory();
	    $data['all_subcategory']=$this->subcategories_model_second->get_allsubcategory();
		$this->load->view('admin/subcategory_second/create_subcat_second',$data);
	}

	function edit_subcat_second()
	{
		$data['id'] = $this->uri->segment(4, 0);
	    $data['all_category']=$this->subcategories_model_second->get_allcategory();
	    $data['all_subcategory']=$this->subcategories_model_second->get_allsubcategory();
		$data['details'] = $this->subcategories_model_second->get_details($data['id']);
		$this->load->view('admin/subcategory_second/create_subcat_second',$data);
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

	function update_subcat_second()
	{
	    $id = $this->input->post('id');		
		$cat_id = $this->input->post('cat_id');	
		$subcat_id = $this->input->post('subcat_id');	
		$name = $this->input->post('subcat_name');

		if($id !='')
		{
		$this->subcategories_model_second->update_subcat_second($id,$cat_id,$subcat_id,$name);
		}
		else
		{
		$this->subcategories_model_second->save_subcat_second($cat_id,$subcat_id,$name);			
		}
		redirect("subcategories_second");
		
	}

	function delete_subcat_second()
	{
		if($this->uri->segment(4, 0) != ""){
			
			$this->subcategories_model_second->delete_subcat_second($this->uri->segment(4, 0));	
		}
		redirect("subcategories_second");
	}

	
}