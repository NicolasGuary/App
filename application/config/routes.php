<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/logout'] = 'users/logout';
$route['users/follow'] = 'users/follow';
$route['users/following/(:any)'] = 'users/following/$1';
$route['users/followers/(:any)'] = 'users/followers/$1';
$route['users/register'] = 'users/register';
$route['users/login'] = 'users/login';
$route['users/(:any)'] = 'users/profile/$1';

$route['posts/timeline'] = 'posts/timeline';
$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
