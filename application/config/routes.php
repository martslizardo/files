<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["default_controller"] = "SiteController/index";

# project
$route['project/(:any)'] = "FileController/project/$1";

# api
# $route['api/get_contents'] = 'FileController/show_all_contents';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;