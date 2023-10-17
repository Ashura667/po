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
    $routes->add('ubah', 'Barang::ubah');
    $routes->get('hapus/(:any)', 'Barang::hapus/$1');
});
$routes->group('customer', function($routes){
    $routes->get('/', 'Customer::index');
    $routes->add('tambah', 'Customer::tambah');
    $routes->add('ubah', 'Customer::ubah');
    $routes->get('hapus/(:any)', 'Customer::hapus/$1');
});
$routes->group('vendor', function($routes){
    $routes->get('/', 'Vendor::index');
    $routes->add('tambah', 'Vendor::tambah');
    $routes->add('ubah/(:any)', 'Vendor::ubah/$1');
    $routes->get('hapus/(:any)', 'Vendor::hapus/$1');
});
$routes->get('/transaksi', 'transaksi::index');

$routes->add('/tambah_transaksi', 'Transaksi::tambah');

