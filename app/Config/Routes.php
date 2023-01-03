<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//UserController methods
$routes->get('logout', 'UserController::logout');
$routes->match(['get', 'post'], 'registerUser', 'UserController::registerUser');
$routes->match(['get', 'post'], 'login', 'UserController::login');

//Dashboard methods
$routes->get('/', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('inicio', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('productos', 'Dashboard::productos', ['filter' => 'auth']);
$routes->get('categorias', 'Dashboard::categorias', ['filter' => 'auth']);
$routes->get('historial', 'Dashboard::historial', ['filter' => 'auth']);
$routes->get('clientes', 'Dashboard::clientes', ['filter' => 'auth']);
$routes->get('cierres', 'Dashboard::cierres', ['filter' => 'auth']);
$routes->get('carrito', 'Dashboard::carrito', ['filter' => 'auth']);
$routes->get('estadisticas', 'Dashboard::estadisticas', ['filter' => 'auth']);
$routes->get('configuraciones', 'Dashboard::settings', ['filter' => 'auth']);

//ConsultasController methods
$routes->get('consultas', 'ConsultasController::index', ['filter' => 'auth']);
$routes->get('consulta', 'ConsultasController::consultas', ['filter' => 'auth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
