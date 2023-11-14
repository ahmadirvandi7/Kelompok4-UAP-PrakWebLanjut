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



$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin']);
$routes->get('/laporankegiatan_admin', [Index::class, 'laporankegiatan_admin']);
$routes->get('/laporanpelaksanaan_admin', [Index::class, 'laporanpelaksanaan_admin']);
$routes->get('/datadosenpembimbing_admin', [Index::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan']);

