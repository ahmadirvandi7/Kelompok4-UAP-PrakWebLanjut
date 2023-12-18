<?php

use App\Controllers\Index;

use App\Controllers\PengumumanController;
use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

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



$routes->get('/datamhs_admin', [Index::class, 'datamhs_admin'], ['filter' => 'role:admin']);
$routes->get('/laporankegiatan_admin', [Index::class, 'laporankegiatan_admin']);
$routes->get('/laporanpelaksanaan_admin', [Index::class, 'laporanpelaksanaan_admin']);
$routes->get('/datadosenpembimbing_admin', [Indexgit::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin'], ['filter' => 'role:admin']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan'], ['filter' => 'role:admin']);

$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa'], ['filter' => 'role:mahasiswa']);

