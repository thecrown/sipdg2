<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "login";
$route['verif']='login/verifLogin';
$route['logout']='login/logoutSession';
$route['admin']='admin';
$route['operator']='operator';
$route['Dashboard']='admin';
$route['daftar-admin']='admin/ViewAdmin';
$route['daftar-operator']='admin/ViewOperator';
$route['Barang-Masuk']='admin/BarangMasuk';
$route['TambahBarangMasuk']='Validasi/TambahBarangMasuk';
$route['Catatan-Masuk']='admin/CatatanBarangMasuk';
$route['HapusPencatatanBarang/(:num)']='Admin/HapusPencatatanBarang/$1';
$route['HapusBarang/(:num)']='Admin/HapusBarang/$1';
$route['UpdateDataBarang/(:num)']='Admin/UpdateDataBarang/$1';

$route['Catatan-Keluar']='admin/CatatanBarangKeluar';
$route['Barang-Keluar']='admin/BarangKeluar';

$route['HapusAdmin/(:num)']='admin/HapusAdmin/$1';
$route['EditAdmin/(:num)']='admin/EditAdmin/$1';
$route['UpdateAdmin']='Validasi/UpdateAdmin';
$route['HapusOperator/(:num)']='admin/HapusOperator/$1';
$route['UpdateOperator']='Validasi/UpdateOperator';
$route['AddOperator']='Validasi/AddOperator';
$route['AddAdmin']='Validasi/AddAdmin';
$route['Daftar-Barang']='Admin/DaftarBarang';
$route['Barang-Keluar-Operator']='Operator/BarangKeluarOperator';


$route['UpdateCatatBarangMasuk/(:num)']='Validasi/UpdateCatatBarangMasuk/$1';
$route['TambahBarangKeluar']='Validasi/TambahBarangKeluar';
$route['HapusPencatatanBarangKeluar/(:num)']='Admin/HapusPencatatanBarangKeluar/$1';
$route['UpdateCatatBarangKeluar/(:num)']='Validasi/UpdateCatatBarangKeluar/$1';
$route['profile/View_profile']='Admin/View_profile';
$route['Data-Saldo-Bulanan']='Admin/ViewSaldoBulanan';
$route['CariDataBulan']='Admin/CariDataBulan';
$route['CariDataBulanLPJ']='Admin/CariDataBulanLPJ';
$route['LaporanPertanggungJawaban']='Admin/LaporanPertanggungJawaban';
$route['AmbilBarang']='operator/BarangKeluar';
$route['TambahBarangKeluarOperator']='operator/tambahambilbarang';
$route['Catatan-Keluar-operator']='operator/BarangKeluarOperator';
$route['Dashboard-Operator']='operator';
$route['profile/View_profileOperator']='Operator/View_profile';
$route['Print'] = 'Admin/CetakPDF';
$route['cetakkeluar']='Admin/cetakkeluar';
$route['cetakmasuk']='Admin/cetakmasuk';
$route['GantiPassAdmin/(:num)']='Admin/GantiPassAdmin/$1';
$route['GantiPassOperator/(:num)']='Operator/GantiPassOperator/$1';


$route['404_override'] = '';
