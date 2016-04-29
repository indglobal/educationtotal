<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_view_path($view_name)
{
    $target_file=APPPATH.'views/'.$view_name.'.php';
    if(file_exists($target_file)) return $target_file;
}

function cetegory_name_by_id($id)
{
	$CI =& get_instance();
	$CI->db->select('cat_name');
	$CI->db->where('cat_id',$id);
	$result = $CI->db->get('master_categories');
	$row = $result->row();
	return $row->cat_name;
}

function subcategory_name_by_id($id)
{
	$CI =& get_instance();
	$CI->db->select('subcat_name');
	$CI->db->where('subcat_id',$id);
	$result = $CI->db->get('master_subcategory');
	$row = $result->row();
	return $row->subcat_name;
}

function subcategory2_name_by_id($id)
{
	$CI =& get_instance();
	$CI->db->select('subcat_second_name');
	$CI->db->where('sub_cat_second_id',$id);
	$result = $CI->db->get('master_subcategory_second');
	$row = $result->row();
	return $row->subcat_second_name;
}
function subcategory3_name_by_id($id)
{
	$CI =& get_instance();
	$CI->db->select('subcat_thired_name');
	$CI->db->where('sub_cat_thired_id',$id);
	$result = $CI->db->get('master_subcategory_thired');
	$row = $result->row();
	return $row->subcat_thired_name;
}