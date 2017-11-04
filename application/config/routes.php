<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "login";
$route['verif']='login/verifLogin';
$route['logout']='login/logoutSession';
$route['admin']='admin';
$route['operator']='operator';
$route['Barang-Keluar']='admin/BarangKeluar';
$route['Barang-Masuk']='admin/BarangMasuk';
$route['daftar-admin']='admin/ViewAdmin';
$route['daftar-operator']='admin/ViewOperator';
$route['Dashboard']='admin';
$route['Catatan-Keluar']='admin/CatatanBarangKeluar';
$route['Catatan-Masuk']='admin/CatatanBarangMasuk';
$route['HapusAdmin/(:num)']='admin/HapusAdmin/$1';
$route['EditAdmin/(:num)']='admin/EditAdmin/$1';
$route['UpdateAdmin']='Validasi/UpdateAdmin';
$route['HapusOperator/(:num)']='admin/HapusOperator/$1';
$route['UpdateOperator']='Validasi/UpdateOperator';


$route['404_override'] = '';
