<?php

use App\Controllers\Index;
use App\Controllers\PengumumanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/Tampilan', [Index::class, 'index']);

$routes->get('/register','Home::register');
$routes->get('/tampilan', [Index::class, 'index'], ['filter' => 'role:dosen']);
$routes->get('/profile', [Index::class, 'profile'], ['filter' => 'role:dosen']);
$routes->get('/kelompok', [Index::class,'kelompok']);
$routes->get('/admin', [Index::class, 'admin'], ['filter' => 'role:admin']);

$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa'], ['filter' => 'role:mahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store'], ['filter' => 'role:mahasiswa']);
$routes->get('/list_user', [Index::class, 'list_user']);
$routes->get('/mahasiswa', [Index::class, 'index'], ['filter' => 'role:mahasiswa']);

$routes->get('/laporan_kegiatan', [Index::class, 'laporan_kegiatan']);

$routes->get('/pengumuman', [PengumumanController::class, 'index']);

$routes->get('/kelola_jadwal', 'KelolaJadwalController::index');
$routes->post('/kelola_jadwal/store', 'KelolaJadwalController::store');


$routes->get('/pengumuman', 'PengumumanController::index');
$routes->get('/pengumuman/create', 'PengumumanController::create');
$routes->post('/pengumuman/store', 'PengumumanController::store');
$routes->get('/pengumuman/edit/(:num)', 'PengumumanController::edit/$1');
$routes->post('/pengumuman/update/(:num)', 'PengumumanController::update/$1');
$routes->delete('pengumuman/delete/(:num)', 'PengumumanController::deletePengumuman/$1');

$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin'], ['filter' => 'role:admin']);
$routes->get('/laporankegiatan_admin', [Index::class, 'laporankegiatan_admin']);
$routes->get('/laporanpelaksanaan_admin', [Index::class, 'laporanpelaksanaan_admin']);
$routes->get('/datadosenpembimbing_admin', [Indexgit::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin'], ['filter' => 'role:admin']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan'], ['filter' => 'role:admin']);
$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin']);
$routes->get('/datadosenpembimbing_admin', [Index::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin']);

$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan']);
$routes->get('/formlaporanpelaksanaan', [Index::class, 'formlaporanpelaksanaan']);

$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa']);
$routes->get('/berandamhs', [Index::class, 'berandamhs']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan']);
$routes->get('/formlaporanpelaksanaan', [Index::class, 'formlaporanpelaksanaan']);
$routes->get('/lokasi', [Index::class, 'lokasi']);

$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa'], ['filter' => 'role:mahasiswa']);



