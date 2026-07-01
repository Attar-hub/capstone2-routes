<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['filter' => 'auth'], function($routes) {
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('home/about', 'Home::about');
$routes->get('home/produk', 'Home::produk');
$routes->get('home/keranjang', 'Home::keranjang');
$routes->get('home/tambah/(:num)', 'Home::tambah/$1');
$routes->get('home/hapus/(:num)', 'Home::hapus/$1');
$routes->get('home/profile', 'Home::profile');
});
$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');
$routes->get('produk', 'ProdukController::index');
$routes->get('produk/detail/(:num)', 'ProdukController::detail/$1');
$routes->get('produk/tambah', 'ProdukController::tambah');
$routes->post('produk/simpan', 'ProdukController::simpan');
$routes->get('produk/edit/(:num)', 'ProdukController::edit/$1');
$routes->post('produk/update/(:num)', 'ProdukController::update/$1');
$routes->get('produk/hapus/(:num)', 'ProdukController::hapus/$1');
$routes->get('produk/cetak', 'ProdukController::cetakPdf');
$routes->get('produk/tambahKeranjang/(:num)', 'ProdukController::tambahKeranjang/$1');
$routes->get('produk/keranjang', 'ProdukController::tampilKeranjang');