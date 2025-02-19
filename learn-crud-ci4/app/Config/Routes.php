<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// User Routes
$routes->get('/user', 'UserController::index'); // ketika route pada url /user maka jalankan method index dari UserController
$routes->get('/user/show-create', 'UserController::showCreate'); // ketika route pada url /user/show-create maka panggil method showCreate dari UserController
$routes->post('/user/save-create', 'UserController::saveCreate');
$routes->get('/user/edit/(:num)', 'UserController::edit/$1'); // menampilkan data user tertentu pada halaman form edit
$routes->post('/user/update/(:num)', 'UserController::update/$1'); // 
$routes->get('/user/delete/(:num)', 'UserController::delete/$1'); // tangkap id user 

/* noted noted noted noted noted noted noted noted noted noted */
/* noted noted noted noted noted noted noted noted noted noted */
/* noted noted noted noted noted noted noted noted noted noted */
// $routes->get('/user', 'UserController::searchFirst'); // ketika route pada url /user maka jalankan method searchFirst dari UserController
// $routes->get('/user/(:any)', 'UserController::searchSpecified/$1'); /* (:any) digunakan untuk menangkap semua segmen yang diketikkan pada url setelah /user/ dalam kasus ini */
// $routes->get('/user/(:num)', 'UserController::searchSpecified/$1'); /* (:num) digunakan untuk menangkap segmen number saja yang diketikkan pada url setelah /user/ dalam kasus ini */
// $routes->get('/user/(:alpha)', 'UserController::searchSpecified/$1'); /* (:num) digunakan untuk menangkap segmen alphabet saja yang diketikkan pada url setelah /user/ dalam kasus ini */
