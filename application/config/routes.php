<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['home'] = "register_cont";
//$route['default_controller'] = "admin/admin/index";
//$route['404_override'] = '';
//$route['home'] = "register_cont/index";

//Admin
$route['admin'] = "admin/admin/index";
$route['specialities'] = "admin/admin/specialities";
$route['create_spe'] = "admin/admin/create_spe";
$route['update_spe'] = "admin/admin/update_spe";

$route['categories'] = "admin/categories/categories_list";
$route['create_cat'] = "admin/categories/create_cat";
$route['update_cat'] = "admin/categories/update_cat";

$route['subcategories'] = "admin/subcategories/subcategories_list";
$route['create_subcat'] = "admin/subcategories/create_subcat";
$route['update_subcat'] = "admin/subcategories/update_subcat";

$route['subcategories_second'] = "admin/subcategories_second/subcategories_list_second";
$route['create_subcat_second'] = "admin/subcategories_second/create_subcat_second";
$route['update_subcat_second'] = "admin/subcategories_second/update_subcat_second";
$route['getsubcat'] = "admin/subcategories_second/getSubcategory";


$route['subcategories_thired'] = "admin/subcategories_thired/subcategories_list_thired";
$route['create_subcat_thired'] = "admin/subcategories_thired/create_subcat_thired";
$route['update_subcat_thired'] = "admin/subcategories_thired/update_subcat_thired";
$route['getsubcat2'] = "admin/subcategories_thired/getSubcategory2";

$route['marketing_persons'] ="admin/marketing_persons/marketing_persons_list";
$route['create_marketing_persons'] ="admin/marketing_persons/create_marketing_persons";
$route['update_marketing_persons'] ="admin/marketing_persons/update_marketing_persons";

$route['userlist'] = "admin/userlist/list_of_user";
$route['service_provider'] = "admin/service_provider/list_of_sp";

$route['approved'] = "admin/service_provider/approved";

$route['check_category_name'] = "admin/categories/check_category_name";
$route['check_subcategory_name'] = "admin/subcategories/check_subcategory_name";
$route['check_second_subcategory_name'] = "admin/subcategories_second/check_subcategory1_name";
$route['check_third_subcategory_name'] = "admin/subcategories_thired/check_subcategory2_name";

$route['check_email_marketing'] = "admin/marketing_persons/check_email_marketing";
$route['check_phone_marketing'] = "admin/marketing_persons/check_phone_marketing";
$route['check_username_marketing'] = "admin/marketing_persons/check_username_marketing";

/**** bharath      ********/
$route['service/add_service'] = "service/service/add_service";
$route['sub_menu/(:num)'] = "service/service/sub_menu/$1";
$route['get_category/(:num)'] = "service/service/get_category/$1";
$route['get_sub_category/(:num)'] = "service/service/get_sub_category/$1";
$route['regular_playschool'] = "service/service/regular_playschool";
$route['regular_school'] = "service/service/regular_school";
$route['regular_college'] = "service/service/regular_college";
$route['abroad_consultants'] = "service/service/abroad_consultants";

$route['distance_edu_consult'] = "service/service/distance_edu_consult";

$route['save_service'] = "service/service/save_service";


$route['list_of_services'] = "admin/list_of_services/list_of_service";

$route['list_of_visitors'] = "admin/admin/list_of_visitors";


$route['service/search_result'] = "service/service/search_result";
$route['service/area_filter'] = "service/service/area_filter";

$route['service/search_result_service/(:num)'] = "service/service/search_result_service/$1";
//$route['user'] = "user/user";
$route['service/list_service'] = "service/service/list_service";
$route['ug'] = "service/service/ug";
$route['pg'] = "service/service/pg";
$route['visitors_count'] = "service/service/visitors_count";
$route['review_save'] = "service/service/review_save";

$route['logout'] = "register_cont/logout";

/*** bharath end *******/





















/* End of file routes.php */
/* Location: ./application/config/routes.php */