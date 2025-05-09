<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ucapan::index');
$routes->get('/register', 'Home::register');
// $routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dashboard', 'Ucapan::index');
$routes->get('/dashboard/count-tamu', 'Invitation::viewCountTamu');
$routes->get('/invitation', 'Invitation::invitation');
$routes->get('/invitation/data', 'Ucapan::display');
$routes->get('/invitation/listundangan', 'Invitation::getDataInvitation');
$routes->get('/invitation/daftarhadir', 'Invitation::getDataHadir');
$routes->post('/invitation/insert', 'Ucapan::insert');
$routes->get('/ucapan/list', 'Ucapan::getUcapanJSON');
$routes->get('/invitation/list', 'Invitation::InputInvitation');
$routes->get('/invitation/buku', 'Invitation::getBukuTamu');
$routes->get('/buku/', 'Invitation::viewBukuTamu');
$routes->get('/show', 'Invitation::showKehadiran');
$routes->post('/invitation/simpan', 'Invitation::simpan');
$routes->get('/invitation/(:alphanum)', 'Invitation::uniqidInvitation/$1');
