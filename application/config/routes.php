<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'webpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Webpage/login';
$route['logout'] = 'Webpage/logout';

//////// Controlpanels Controller //////////
$route['controlpanel'] = 'Controlpanels';
$route['controlpanel/search'] = 'Controlpanels/search';
$route['controlpanel/process'] = 'Controlpanels/process';
$route['controlpanel/process/user/(:any)'] = 'Controlpanels/user_process_view';
$route['controlpanel/download'] = 'Controlpanels/download_document';
$route['controlpanel/download/success'] = 'Controlpanels/download_document_success';
$route['controlpanel/process/detail/(:any)'] = 'Controlpanels/process_detail';
$route['controlpanel/process/detail/insert/(:any)'] = 'Controlpanels/process_detail_insert';

/////// Document Controller ///////////////
$route['controlpanel/document'] = 'Document';
$route['controlpanel/document/approved'] = 'Document/approved';
$route['controlpanel/document/approved/form/edit/(:any)'] = 'Document/approved_form_edit';
$route['controlpanel/document/approved/oper/edit/(:any)'] = 'Document/approved_oper_edit';
$route['controlpanel/document/approved/form/insert'] = 'Document/approved_form_insert';
$route['controlpanel/document/approved/form/update'] = 'Document/approved_form_update';
$route['controlpanel/document/form'] = 'Document/form';
$route['controlpanel/document/form/insert'] = 'Document/form_insert';

/////// Setting Controller ///////////////

$route['controlpanel/setting/admin'] = 'Controlpanels/setting_admin';
$route['controlpanel/setting/admin/insert'] = 'Controlpanels/setting_admin_insert';
$route['controlpanel/setting/user'] = 'Controlpanels/setting_user';
$route['controlpanel/setting/user/insert'] = 'Controlpanels/setting_user_insert';
$route['controlpanel/setting/account/delete/(:any)'] = 'Controlpanels/delete_account_user';
