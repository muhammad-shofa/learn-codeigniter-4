<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');

// User Routes
$routes->get('/user/get-data', 'UserController::getData');
$routes->post('/user/create', 'UserController::createUser');
$routes->get('/user/show-data-edit/(:num)', 'UserController::showDataEdit/$1');
$routes->post('/user/save-edit/(:num)', 'UserController::saveEdit/$1');
// $routes->get('/user/delete/(:num)', 'UserController::deleteUser/$1');
$routes->delete('/user/delete/(:num)', 'UserController::deleteUser/$1');
