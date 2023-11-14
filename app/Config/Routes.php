<?php

use App\Controllers\Index;
use App\Controllers\PengumumanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

$routes->get('/register','Home::register');
$routes->get('/Tampilan', [Index::class, 'index']);
$routes->get('/profile', [Index::class, 'profile']);
$routes->get('/kelompok', [Index::class,'kelompok']);
$routes->get('/admin', [Index::class, 'admin']);
$routes->get('/pengumuman', [PengumumanController::class, 'index']);



