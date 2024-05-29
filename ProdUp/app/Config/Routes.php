<?php

namespace config;
use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes();

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/Home', 'Home::index');
$routes->get('/', 'ProdUp::index');
$routes->get('/IniciarSesion', 'ProdUp::inise');
$routes->get('/RegistroUsuario', 'ProdUp::regusu');
$routes->get('/Introduccion', 'ProdUp::intro');
$routes->get('/CargaManual', 'ProdUp::cargamanu');
$routes->get('/CargaMasiva', 'ProdUp::cargamasi');
$routes->get('/BuscarCopiar', 'ProdUp::copiarpegar');
$routes->get('/Almacen', 'ProdUp::alma');
$routes->get('/Proveedores', 'ProdUp::prov');
$routes->get('/AlmacenProve', 'ProdUp::almaprov');
$routes->get('/procesar', 'ProdUp::pro');
$routes->get('/', 'ProdUp::consulta_cp');
