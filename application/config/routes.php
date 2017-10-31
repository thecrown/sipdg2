<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "login";
$route['verif']='login/verifLogin';
$route['logout']='login/logoutSession';
$route['admin']='admin';
$route['operator']='operator';
$route['404_override'] = '';
