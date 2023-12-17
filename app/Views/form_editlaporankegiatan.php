<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Laporan Kegiatan</title>
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
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="<?= base_url('home_admin') ?>">Home</a></li>
                    <li><a href="<?= base_url('datamhs_admin') ?>">Data Mahasiswa</a></li>
                    <li><a href="<?= base_url('laporankegiatan_admin') ?>">Laporan Kegiatan</a></li>
                    <li><a href="<?= base_url('laporanpelaksanaan_admin') ?>">Laporan Pelaksanaan</a></li>
                    <li><a href="<?= base_url('datadosenpembimbing_admin') ?>">Data Dosen Pembimbing</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <section id="contact">
            <div class="section-content">
                <img src="assets/img/logo unila.png" alt="" width="70" height="70">
                <h1 class="section-header">EDIT <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> LAPORAN KEGIATAN</span></h1>
                <h5>Silahkan edit laporan hasil kegiatan KKN</h5>
            </div>
            <div class="contact-section">
                <div class="container">
                    <form action="<?= base_url('/laporan_kegiatan/update/' . $laporan['id']) ?>" method="post">
                        <input type="hidden" name="id" value="<?= $laporan['id'] ?>">
                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                <label for="exampleInputUsername">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan Nama Anda" value="<?= $laporan['nama_mahasiswa'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername">Program Kerja dan Kegiatan</label>
                                <input type="text" class="form-control" name="program_kegiatan" placeholder="Masukan Program Kerja dan Kegiatan" value="<?= $laporan['program_kegiatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Target</label>
                                <input type="tel" class="form-control" name="target" placeholder="Masukan Target" value="<?= $laporan['target'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Masukan Keterangan"><?= $laporan['keterangan'] ?></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
