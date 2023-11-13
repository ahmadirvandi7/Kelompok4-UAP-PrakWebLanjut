<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>data dosen pembimbing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">ADMIN</a></h1>
        <!-- <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div> -->
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <a href="<?=base_url('home_admin')?>"> <span>Home</span></a></li>
          <li><a href="#Tentang" class="nav-link scrollto"><i class="bx bx-user"></i> <a href="<?=base_url('datamhs_admin')?>"> <span>Data Mahasiswa</span></a></li>
          <li><a href="#Resume" class="nav-link scrollto"><i class="bx bx-user"></i> <a href="<?=base_url('laporankegiatan_admin')?>"> <span>Laporan Kegiatan</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <a href="<?=base_url('laporanpelaksanaan_admin')?>"> <span>Laporan Pelaksanaan</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <a href="<?=base_url('datadosenpembimbing_admin')?>"> <span>Data Dosen Pembimbing</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>ADMIN</h1>

    </div>
  </section>End Hero -->

  <main id="main">


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Data Dosen Pemimbing</h2>
          <?php


$isAdmin = true;


$laporanMahasiswa = [
    ['id' => 1, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'IOT'],
    ['id' => 2, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'IOT'],
    ['id' => 3, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'Web Development'],
    ['id' => 4, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'AI'],
    ['id' => 5, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'Web Development'],
    ['id' => 6, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Perempuan', 'bidang_keahlian' => 'Biologi'],
    ['id' => 7, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Perempuan', 'bidang_keahlian' => 'Ilmu Komputer'],
    ['id' => 8, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'Fisika'],
    ['id' => 9, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Laki-Laki', 'bidang_keahlian' => 'Sistem Informasi'],
    ['id' => 10, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Perempuan', 'bidang_keahlian' => 'Data Science'],
    ['id' => 11, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Perempuan', 'bidang_keahlian' => 'Kimia'],
    ['id' => 12, 'nama_dosen' => 'Sinta Nurhalifah', 'nip' => '12345690449', 'jenis_kelamin' => 'Perempuan', 'bidang_keahlian' => 'Biologi'],

];

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Jenis Kelamin</th>
            <th>Bidang Keahlian</th>
            <?php if ($isAdmin) : ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporanMahasiswa as $laporan) : ?>
            <tr>
                <td><?php echo $laporan['id']; ?></td>
                <td><?php echo $laporan['nama_dosen']; ?></td>
                <td><?php echo $laporan['nip']; ?></td>
                <td><?php echo $laporan['jenis_kelamin']; ?></td>
                <td><?php echo $laporan['bidang_keahlian']; ?></td>
                <?php if ($isAdmin) : ?>
                    <td>
                        <a href="edit.php?id=<?php echo $laporan['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $laporan['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>