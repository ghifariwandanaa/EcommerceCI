<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('barang', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BarangController::index');
    $routes->get('(:segment)', 'BarangController::show/$1');
});

$routes->group('cart', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Cart::index');
    $routes->get('add/(:any)', 'Cart::addToCart/$1');
    $routes->get('clear', 'Cart::clearCart');
    $routes->post('update', 'Cart::updateCart');
    $routes->get('checkout', 'Cart::checkout');
    $routes->get('store', 'Cart::store');
});

$routes->get('/', 'BarangController::index');
$routes->get('/checkout', 'CheckoutController::index');
$routes->post('checkout/processCheckout', 'CheckoutController::processCheckout');
