<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  pages routes
$routes->get('/', 'PagesController::dashboard');
$routes->get('/user-management', 'PagesController::userManagement');
// $routes->get('','');
