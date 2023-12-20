<?php

use App\Controllers\Index;
use App\Controllers\PengumumanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/Tampilan', [Index::class, 'berandamahasiswa'], ['filter' => 'role:mahasiswa']);;

$routes->get('/register','Home::register');
$routes->get('/tampilan', [Index::class, 'index'], ['filter' => 'role:dosen']);
$routes->get('/profile', [Index::class, 'profile'], ['filter' => 'role:dosen']);
$routes->get('/kelompok', [Index::class,'kelompok']);
$routes->get('/admin', [Index::class, 'admin'], ['filter' => 'role:admin']);

#routes mahasiswa
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa'], ['filter' => 'role:mahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store'], ['filter' => 'role:mahasiswa']);
$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa'], ['filter' => 'role:mahasiswa']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan'], ['filter' => 'role:mahasiswa']);
$routes->get('/formlaporanpelaksanaan', [Index::class, 'formlaporanpelaksanaan'], ['filter' => 'role:mahasiswa']);


$routes->get('/laporan_kegiatan', [Index::class, 'laporan_kegiatan']);
$routes->get('/pengumuman', [PengumumanController::class, 'index']);
$routes->get('/list_user', [Index::class, 'list_user']);
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
$routes->get('/beranda_admin', [Index::class, 'beranda_admin'], ['filter' => 'role:admin']);
