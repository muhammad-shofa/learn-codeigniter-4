<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user', 'UserController::index'); // ketika route pada url /user maka jalankan method index dari UserController
$routes->get('/user/show-create', 'UserController::showCreate'); // ketika route pada url /user/show-create maka panggil method showCreate dari UserController
$routes->post('/user/save-create', 'UserController::saveCreate');
