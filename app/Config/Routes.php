<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Index;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

$routes->get('/register','Home::register');
$routes->get('/Tampilan', [Index::class, 'index']);