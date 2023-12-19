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

$routes->get('/tampilan', [Index::class, 'index']);
$routes->get('/profile', [Index::class, 'profile']);
$routes->get('/kelompok', [Index::class, 'kelompok']);
$routes->get('/admin', [Index::class, 'admin']);
$routes->get('/beranda_admin', [Index::class, 'beranda_admin']);
$routes->get('/data_mahasiswa', [Index::class, 'datamahasiswa_admin']);
$routes->get('/data_dosen', [Index::class, 'datadosen_admin']);



$routes->get('/mahasiswa', [Index::class, 'index']);
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store']);
$routes->get('/list_user', [Index::class, 'list_user']);
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


$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin']);
$routes->get('/datadosenpembimbing_admin', [Index::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin']);


$routes->get('/list_kegiatan', 'KelolaJadwalController::list_kegiatan');
$routes->get('/kelola_jadwal/edit/(:num)', 'KelolaJadwalController::edit/$1');
$routes->post('/kelola_jadwal/update/(:num)', 'KelolaJadwalController::update/$1');
$routes->get('/kelola_jadwal/delete/(:num)', 'KelolaJadwalController::delete/$1');

$routes->get('/laporankegiatan_admin', 'LaporanKegiatanController::index');
$routes->get('/laporan_kegiatan/create', 'LaporanKegiatanController::create');
$routes->post('/laporan_kegiatan/store', 'LaporanKegiatanController::store');
$routes->get('/laporan_kegiatan/edit/(:num)', 'LaporanKegiatanController::edit/$1');
$routes->post('/laporan_kegiatan/update/(:num)', 'LaporanKegiatanController::update/$1');
$routes->delete('/laporan_kegiatan/delete/(:num)', 'LaporanKegiatanController::delete/$1');

$routes->get('/laporanpelaksanaan_admin', 'LaporanPelaksanaanController::index');
$routes->get('/laporan_pelaksanaan/create', 'LaporanPelaksanaanController::create');
$routes->post('/laporan_pelaksanaan/store', 'LaporanPelaksanaanController::store');
$routes->get('/laporan_pelaksanaan/edit/(:num)', 'LaporanPelaksanaanController::edit/$1');
$routes->post('/laporan_pelaksanaan/update/(:num)', 'LaporanPelaksanaanController::update/$1');
$routes->delete('/laporan_pelaksanaan/delete/(:num)', 'LaporanPelaksanaanController::delete/$1');

$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa']);