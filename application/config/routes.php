<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Always finds routes from the controller level

$route['test'] = 'test/index';
$route['available'] = 'available/index';
$route['admin'] = 'admin/index';
$route['booking'] = 'booking/index'; //this routes to the Booking.php controller instead of the default
$route['default_controller'] = 'pages/view'; //sets Page.php as the default controller
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;