<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// $route['default_controller'] = 'MainLinks_Control/admin_login';
$route['default_controller'] = 'Login_Control/admin_login';
$route['admin_login'] = 'Login_Control/admin_login';
$route['check_login'] = 'Login_Control/check_login';

$route['admin_logout'] = 'MainLinks_Control/admin_logout';


$route['admin_home'] = 'MainLinks_Control/admin_home';
$route['Add_Mark_Sheet'] = 'MainLinks_Control/Add_Mark_Sheet';
$route['save_marksheet'] = 'Add_marksheet/save_marksheet';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
