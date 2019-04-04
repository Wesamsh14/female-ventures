<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users';
$route['feed'] = 'posts/index';
$route['welcome'] = 'users/index';
$route['signup'] = 'users/signup';
$route['Friends'] = 'users/female_friends';
$route['logout'] = 'users/log_out';
$route['profile/(:any)'] = 'users/profile/$1';
$route['thread/(:any)'] = 'comments/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
