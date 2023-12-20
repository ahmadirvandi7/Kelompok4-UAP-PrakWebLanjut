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


#routes mahasiswa
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa'], ['filter' => 'role:mahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store'], ['filter' => 'role:mahasiswa']);
$routes->get('/berandamahasiswa', [Index::class, 'berandamahasiswa'], ['filter' => 'role:mahasiswa']);
$routes->get('/formlaporankegiatan', [Index::class, 'formlaporankegiatan'], ['filter' => 'role:mahasiswa']);
$routes->get('/formlaporanpelaksanaan', [Index::class, 'formlaporanpelaksanaan'], ['filter' => 'role:mahasiswa']);

$routes->get('/tampilan', [Index::class, 'index']);
$routes->get('/profile', [Index::class, 'profile']);
$routes->get('/kelompok', [Index::class, 'kelompok']);
$routes->get('/admin', [Index::class, 'admin']);
$routes->get('/beranda_admin', [Index::class, 'beranda_admin']);


$routes->get('/mahasiswa', [Index::class, 'index']);
$routes->get('/frommahasiswa', [Index::class, 'frommahasiswa']);
$routes->post('/frommahasiswa/store', [Index::class, 'store']);
$routes->get('/list_user', [Index::class, 'list_user']);

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
$routes->get('/pengumuman_admin', 'PengumumanController::index_admin');
$routes->get('/kelompok_admin', [Index::class, 'kelompok_admin']);
$routes->get('/datamahasiswa_admin', [Index::class, 'datamahasiswa_admin']);
$routes->get('/datadosen_admin', [Index::class, 'datadosen_admin']);
$routes->get('/laporankegiatan_admin', [Index::class, 'laporankegiatan_admin']);
$routes->get('/laporanpelaksanaan_admin', [Index::class, 'laporanpelaksanaan_admin']);
$routes->get('/datadosenpembimbing_admin', [Indexgit::class, 'datadosenpembimbing_admin']);
$routes->get('/home_admin', [Index::class, 'home_admin'], ['filter' => 'role:admin']);

//admin:
$routes->get('/datamahasiswa_admin', 'MahasiswaController::index');
$routes->get('/datamahasiswa_admin/create', 'MahasiswaController::create');
$routes->post('/datamahasiswa_admin/store', 'MahasiswaController::store');
$routes->get('/datamahasiswa_admin/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/datamahasiswa_admin/update/(:num)', 'MahasiswaController::update/$1');
$routes->delete('/datamahasiswa_admin/delete/(:num)', 'MahasiswaController::delete/$1');


$routes->get('/datadosen_admin', 'DosenController::index');
$routes->get('/datadosen_admin/create', 'DosenController::create');
$routes->post('/datadosen_admin/store', 'DosenController::store');
$routes->get('/datadosen_admin/edit/(:num)', 'DosenController::edit/$1');
$routes->post('/datadosen_admin/update/(:num)', 'DosenController::update/$1');
$routes->delete('datadosen_admin/delete/(:num)', 'DosenController::delete/$1');


$routes->get('/kelompok_admin', 'KelompokController::index_admin');
$routes->get('/kelompok_admin/create', 'KelompokController::create');
$routes->post('/kelompok_admin/store', 'KelompokController::store');
$routes->get('/kelompok_admin/edit/(:num)', 'KelompokController::edit/$1');
$routes->post('/kelompok_admin/update/(:num)', 'KelompokController::update/$1');
$routes->delete('/kelompok_admin/delete/(:num)', 'KelompokController::delete/$1');

$routes->get('/beranda_admin', [Index::class, 'beranda_admin'], ['filter' => 'role:admin']);

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