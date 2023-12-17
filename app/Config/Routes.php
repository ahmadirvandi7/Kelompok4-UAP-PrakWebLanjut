<?php

use App\Controllers\Index;
use App\Controllers\PengumumanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/tampilan', [Index::class, 'index']);
$routes->get('/profile', [Index::class, 'profile']);
$routes->get('/kelompok', [Index::class, 'kelompok']);
$routes->get('/admin', [Index::class, 'admin']);
$routes->get('/beranda_admin', [Index::class, 'beranda_admin']);
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store']);
$routes->get('/list_user', [Index::class, 'list_user']);
$routes->get('/mahasiswa', [Index::class, 'index']);
$routes->get('/laporan_kegiatan', [Index::class, 'laporan_kegiatan']);
$routes->get('/pengumuman', [PengumumanController::class, 'index']);

$routes->get('/kelola_jadwal', 'KelolaJadwalController::index');
$routes->post('/kelola_jadwal/store', 'KelolaJadwalController::store');

$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin']);
$routes->get('/laporankegiatan_admin', [Index::class, 'laporankegiatan_admin']);
$routes->get('/laporanpelaksanaan_admin', [Index::class, 'laporanpelaksanaan_admin']);
$routes->get('/datadosenpembimbing_admin', [Index::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan']);

$routes->get('/list_kegiatan', 'KelolaJadwalController::list_kegiatan');
$routes->get('/kelola_jadwal/edit/(:num)', 'KelolaJadwalController::edit/$1');
$routes->post('/kelola_jadwal/update/(:num)', 'KelolaJadwalController::update/$1');
$routes->get('/kelola_jadwal/delete/(:num)', 'KelolaJadwalController::delete/$1');

