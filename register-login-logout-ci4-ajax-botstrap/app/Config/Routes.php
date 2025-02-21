<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
$routes->get('/user/login', 'UserController::loginPage');
$routes->get('/user/register', 'UserController::registerPage');
