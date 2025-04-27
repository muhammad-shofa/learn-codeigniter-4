<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  pages routing RBAC
$routes->get('/', 'PagesController::login');
$routes->get('/home', 'PagesController::home');
$routes->get('/user-management', 'PagesController::userManagement', ['filter' => 'role:admin']);
$routes->get('/create-transaction', 'PagesController::createTransaction', ['filter' => 'role:cashier']);

// auth endpoint
$routes->post('/api/auth/login', 'UserController::login');
