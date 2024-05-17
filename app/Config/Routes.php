<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('barang', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BarangController::index');
    $routes->get('(:segment)', 'BarangController::show/$1');
});
