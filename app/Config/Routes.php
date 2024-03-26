<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('registration', [Home::class, 'registration']);
$routes->post('registration', [Home::class, 'registerUser']);

$routes->get('login', [Home::class, 'login']);
$routes->post('login', [Home::class, 'loginUser']);

$routes->get('dashboard', [Home::class, 'dashboard']);
$routes->post('logout', [Home::class, 'logoutUser']);

$routes->get('forgotpassword', [Home::class, 'forgotpassword']);

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');