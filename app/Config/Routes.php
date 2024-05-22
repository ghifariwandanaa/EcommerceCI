<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/barang', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BarangController::index');
    $routes->get('(:segment)', 'BarangController::show/$1');
});

$routes->get('cart', 'cart::index');
$routes->get('cart/add/(:any)', 'cart::addToCart/$1');
$routes->get('cart/clear', 'cart::clearCart'); 
$routes->post('cart/update', 'cart::updateCart');
$routes->get('cart/checkout', 'cart::checkout');