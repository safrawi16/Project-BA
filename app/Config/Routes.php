<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin', 'Dashboard::index');
$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
$routes->get('chat', 'Chat::index');


$routes->get('/admin', 'Admin::index');
$routes->get('/admin/intel', 'Admin::intel');
$routes->get('/admin/theme', 'Admin::theme');
$routes->get('/admin/docs', 'Admin::docs');
$routes->get('/admin/components', 'Admin::components');
$routes->get('/admin/database', 'Admin::database');
$routes->get('/admin/auth', 'Admin::auth');
$routes->get('/admin/mailer', 'Admin::mailer');
$routes->get('/admin/api', 'Admin::api');
$routes->get('/admin/security', 'Admin::security');
