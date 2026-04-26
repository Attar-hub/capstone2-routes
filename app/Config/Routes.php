<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('home/about', 'Home::about');
$routes->get('home/produk', 'Home::produk');
$routes->get('home/keranjang', 'Home::keranjang');
$routes->get('home/tambah/(:num)', 'Home::tambah/$1');
$routes->get('home/hapus/(:num)', 'Home::hapus/$1');

$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');