<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Index;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Tampilan', [Index::class, 'index']);