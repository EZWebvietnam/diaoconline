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

$route['default_controller'] = "home/index";
$route['tin-tuc'] = "home/news/index";
$route['du-an'] = "home/project/index";
$route['du-an/page/(:any)'] = "home/project/index";
$route['du-an/tu-khoa-(:any)'] = "home/project/key/$1";
$route['du-an-c/(:any)-c(:any)'] = "home/project/list_project/$2";
$route['du-an-c/(:any)-c(:any)/page/(:any)'] = "home/project/list_project/$2";
$route['du-an/(:any)-c(:any)/(:any)-i(:any)'] = "home/project/detail/$4";
$route['du-an/tu-khoa-(:any)/page/(:any)'] = "home/project/key/$1";
$route['kham-pha'] = "home/discovery/index";
$route['kham-pha/(:any)/(:any)-i(:any)'] = "home/discovery/discovery_detail/$3";
$route['kham-pha-c/(:any)-c(:any)'] = "home/discovery/list_disc/$2";
$route['tin-tuc-c/(:any)-c(:any)'] = "home/news/list_new/$2";
$route['tin-tuc/(:any)/(:any)-i(:any)'] = "home/news/news_detail/$3";
$route['404_override'] = '';
$route['admin'] = "admin/index/login";
$route['admin/login.xxx'] = "admin/index/login";
$route['dang-ky'] = "welcome/register/regis";

/* End of file routes.php */
/* Location: ./application/config/routes.php */