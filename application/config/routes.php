<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'administrator';

// Admin Routes
$route['admin_login'] = 'administrator/login';
$route['admin_logout'] = 'administrator/admin_logout';
$route['mainpage'] = 'administrator';
$route['check_login'] = 'administrator/check_login';
$route['fcheck_login'] = 'administrator/fcheck_login';
$route['dashboard'] = 'administrator/admin_dashboard';

$route['market'] = 'administrator/market';
$route['fisherman'] = 'administrator/fisherman';
$route['vessel'] = 'administrator/vessel';
$route['users'] = 'administrator/users';
$route['catch'] = 'administrator/catch';
$route['monthly_report'] = 'administrator/monthly_report';
$route['catch_report'] = 'administrator/catch_report';

$route['addmarket'] = 'administrator/addmarket';

$route['addfisherman'] = 'administrator/addfisherman';
$route['addvessel'] = 'administrator/addvessel';
$route['addcatch'] = 'administrator/addcatch';


//Fisherman Routes
$route['fisherman_login'] = 'administrator/fisherman_login';
$route['fdashboard'] = 'administrator/fdashboard';
$route['flogout'] = 'administrator/fisherman_logout';

//Other Routes



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
