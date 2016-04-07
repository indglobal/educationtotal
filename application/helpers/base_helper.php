<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


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
