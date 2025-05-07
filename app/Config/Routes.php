<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ucapan::index');
$routes->get('/register', 'Home::register');
// $routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dashboard', 'Ucapan::index');
$routes->get('/invitation', 'Invitation::invitation');
$routes->get('/invitation/data', 'Ucapan::display');
$routes->post('/invitation/insert', 'Ucapan::insert');
$routes->get('/invitation/list', 'Invitation::InputInvitation');
$routes->post('/invitation/simpan', 'Invitation::simpan');
$routes->get('/invitation/(:alphanum)', 'Invitation::uniqidInvitation/$1');
