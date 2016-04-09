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

$route['default_controller'] = "register_cont";
$route['404_override'] = '';

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

$route['marketing_persons'] = "admin/marketing_persons/marketing_persons_list";
$route['create_marketing_persons'] = "admin/marketing_persons/create_marketing_persons";
$route['update_marketing_persons'] = "admin/marketing_persons/update_marketing_persons";

$route['userlist'] = "admin/userlist/list_of_user";
$route['service_provider'] = "admin/service_provider/list_of_sp";

$route['approved'] = "admin/service_provider/approved";























/* End of file routes.php */
/* Location: ./application/config/routes.php */