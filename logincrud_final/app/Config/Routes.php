<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Users::index');
$routes->match(['get','post'],'/', 'Users::index');
$routes->match(['get','post'],'register', 'Users::register');
$routes->match(['get','post'],'/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->match(['get','post'],'profile', 'Users::profile');
$routes->get('logout', 'Users::logout');
$routes->get('admin/customers', 'Examples::customers_management');
$routes->get('admin/customers/(:any)', 'Examples::customers_management/$1');
$routes->post('admin/customers/(:any)', 'Examples::customers_management/$1');
