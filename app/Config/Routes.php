<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Index;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

$routes->get('/register','Home::register');
$routes->get('/tampilan', [Index::class, 'index']);
$routes->get('/profile', [Index::class, 'profile']);
$routes->get('/admin', [Index::class, 'admin']);
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store']);
$routes->get('/list_user', [Index::class, 'list_user']);
$routes->get('/mahasiswa', [Index::class, 'index']);
$routes->get('/laporan_kegiatan', [Index::class, 'laporan_kegiatan']);
