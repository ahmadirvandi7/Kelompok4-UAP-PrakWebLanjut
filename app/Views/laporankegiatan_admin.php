<?php
$laporanModel = new \App\Models\LaporanKegiatanModel();
$laporanMahasiswa = $laporanModel->findAll();
$isAdmin = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>laporan kegiatan mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url('assets/img/profile-img.jpg') ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">ADMIN</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <a href="<?= base_url('home_admin') ?>"> <span>Home</span></a></li>
          <li><a href="#Tentang" class="nav-link scrollto"><i class="bx bx-user"></i> <a href="<?= base_url('datamhs_admin') ?>"> <span>Data Mahasiswa</span></a></li>
          <li><a href="#Resume" class="nav-link scrollto"><i class="bx bx-user"></i> <a href="<?= base_url('laporankegiatan_admin') ?>"> <span>Laporan Kegiatan</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <a href="<?= base_url('laporanpelaksanaan_admin') ?>"> <span>Laporan Pelaksanaan</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <a href="<?= base_url('datadosenpembimbing_admin') ?>"> <span>Data Dosen Pembimbing</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Main Section ======= -->
  <main id="main">
    <section id="Resume" class="Resume">
      <div class="container">
        <div class="section-title">
          <h2>Laporan Kegiatan</h2>
          <br>
          <table>
            <a href="<?= base_url('laporan_kegiatan/create') ?>" class="btn btn-primary">Tambah Data</a>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Mahasiswa</th>
                <th>Program Kerja dan Kegiatan</th>
                <th>Target</th>
                <th>Keterangan</th>
                <?php if ($isAdmin) : ?>
                  <th>Aksi</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($laporanMahasiswa as $laporan) : ?>
                <tr>
                  <td><?php echo $laporan['id']; ?></td>
                  <td><?php echo $laporan['nama_mahasiswa']; ?></td>
                  <td><?php echo $laporan['program_kegiatan']; ?></td>
                  <td><?php echo $laporan['target']; ?></td>
                  <td><?php echo $laporan['keterangan']; ?></td>
                  <?php if ($isAdmin) : ?>
                    <td>
                      <a href="<?= base_url('laporan_kegiatan/edit/' . $laporan['id']) ?>" class="text-sm" style="background: none; border: none; color: #007BFF; cursor: pointer; font-size: 14px;">
                        Edit
                      </a>
                      <form action="<?= base_url("/laporan_kegiatan/delete/{$laporan['id']}") ?>" method="post" onsubmit="return confirm('Anda yakin ingin menghapus?')" style="display: inline; background: none; border: none; font-size: 14px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="text-sm" style="background: none; border: none; color: #007BFF; cursor: pointer;">
                          Hapus
                        </button>
                      </form>
                    </td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/typed.js/typed.umd.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>
