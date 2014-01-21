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
$route['dang-ky'] = "home/auth/register";
$route['thanh-vien/tai-san-dang-moi'] = "home/member/tai_san_dang_moi";
$route['thanh-vien/tai-san-luu'] = "home/member/du_property_luu";
$route['thanh-vien/tin-tuc-da-luu'] = "home/member/tin_tuc_luu";
$route['thanh-vien/du-an-da-luu'] = "home/member/project_save";
$route['thanh-vien/du-an-da-luu/page/(:any)'] = "home/member/project_save";
$route['thanh-vien/tai-san-luu/page/(:any)'] = "home/member/du_property_luu";
$route['thanh-vien/tin-tuc-da-luu/page/(:any)'] = "home/member/tin_tuc_luu";
$route['xoa-proper-luu/k/(:any)'] = "home/property/delete_save/$1";
$route['xoa-new-luu/k/(:any)'] = "home/news/delete_save/$1";
$route['xoa-project-luu/k/(:any)'] = "home/project/delete_save/$1";
$route['luu-tin/k/(:any)'] = "home/news/save_new/$1";
$route['luu-prj/k/(:any)'] = "home/project/save_project/$1";
$route['luu-dis/k/(:any)'] = "home/discovery/save_disco/$1";
$route['luu-proper/k/(:any)'] = "home/property/save_property/$1";
$route['thanh-vien/cap-nhap-tai-khoan'] = "home/member/change_email";
$route['active-mailchange/(:any)/(:any)'] = "home/member/reset_email/$1/$2";
$route['kich-hoat/(:any)/(:any)'] = "home/auth/activate";
$route['quen-mk'] = "home/auth/forgot_password";
$route['dang-nhap'] = "home/auth/login";
$route['logout'] = "home/auth/logout";
$route['active-pass/(:any)/(:any)'] = "home/auth/reset_password";
$route['nha/(:any)-c(:any)/(:any)-h(:any)'] = "home/property/detail/$4";
$route['sieu-thi/(:any)-c(:any)'] = "home/property/list_property/$2";
$route['q-sieu-thi/(:any)-c(:any)/quan/(:any)-q(:any)'] = "home/property/get_theo_quan/$2/$4";
$route['tp-sieu-thi/(:any)-c(:any)/city/(:any)-ct(:any)'] = "home/property/get_theo_thanh_pho/$2/$4";
$route['sieu-thi/gia/gianho-(:any)-gialon-(:any)'] = "home/property/gia_nho/$1/$2";
$route['sieu-thi'] = "home/property/sieu_thi";
$route['sieu-thi/chinh-chu'] = "home/property/list_cc";
$route['sieu-thi/nha-tro'] = "home/property/nha_tro";
$route['sieu-thi/du-an.(:any).duan'] = "home/property/du_an/$1";
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


/* End of file routes.php */
/* Location: ./application/config/routes.php */