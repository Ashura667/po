<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/perusahaan', 'Perusahaan::index');
$routes->get('/barang', 'barang::index');
$routes->get('/customer', 'customer::index');
$routes->get('/detailtransaksi', 'detailtransaksi::index');
$routes->get('/vendor', 'vendor::index');
$routes->get('/transaksi', 'transaksi::index');
