<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
// Pages routes
$routes->get('/login', 'UserController::loginPage');
$routes->get('/register', 'UserController::registerPage');

// Auth routes
$routes->post('/auth/login', 'UserController::login');
$routes->post('/auth/register','UserController::register');
$routes->get('/auth/logout', 'UserController::logout');
