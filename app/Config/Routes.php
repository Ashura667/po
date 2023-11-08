<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/perusahaan', 'Perusahaan::index');

$routes->group('barang', function($routes){
    $routes->get('/', 'Barang::index');
    $routes->add('tambah', 'Barang::tambah');
    $routes->add('ubah/(:any)', 'Barang::ubah/$1');
    $routes->get('hapus/(:any)', 'Barang::hapus/$1');
});
$routes->group('customer', function($routes){
    $routes->get('/', 'Customer::index');
    $routes->add('tambah', 'Customer::tambah');
    $routes->add('ubah/(:any)', 'Customer::ubah/$1');
    $routes->get('hapus/(:any)', 'Customer::hapus/$1');
});
$routes->group('vendor', function($routes){
    $routes->get('/', 'Vendor::index');
    $routes->add('tambah', 'Vendor::tambah');
    $routes->add('ubah/(:any)', 'Vendor::ubah/$1');
    $routes->get('hapus/(:any)', 'Vendor::hapus/$1');
});
$routes->group('transaksi', function($routes){
    $routes->get('/', 'Transaksi::index');
    $routes->add('tambah', 'transaksi::tambah');
    $routes->add('ubah/(:any)', 'Vendor::ubah/$1');
    $routes->get('hapus/(:any)', 'Vendor::hapus/$1');
});
