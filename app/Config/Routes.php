<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin', 'Dashboard::index');
$routes->get('login', 'Login::index');
$routes->get('login/auth', 'Login::auth');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');

