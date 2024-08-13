<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('novedades', 'Home::novedades');


/* Rutas del registro de usuario */
$routes->get('/registro', 'UsuarioController::create');
$routes->post('/enviar-form', 'UsuarioController::formValidation');

/* Rutas del login */
$routes->get('/login', 'LoginController::index');
$routes->post('/enviarlogin', 'LoginController::auth');
$routes->get('/panel', 'PanelController::index', ['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');

/* edit y eliminar */
$routes->get('usuario/delete/(:num)', 'usuario_controller::delete/$1');
$routes->get('/panel/eliminar/(:num)', 'usuario_controller::EliminarUsuario/$1');
/* $routes->get('usuario/delete/(:num)', 'usuario_controller::delete/$1'); */
$routes->get('usuario/edit/(:num)', 'usuario_controller::edit/$1');
$routes->post('usuario/update/(:num)', 'usuario_controller::update/$1');

