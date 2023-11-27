<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Laporan Pelaksanaan</title>
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
</head>

<body>

    <section id="contact">
        <div class="section-content">
            <img src="<?= base_url('assets/img/logo unila.png') ?>" alt="" width="70" height="70">
            <h1 class="section-header">AYO <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> KKN</span></h1>
            <h5>Silahkan edit laporan pelaksanaan kkn</h5>
        </div>
        <div class="contact-section">
            <div class="container">
                <form method="post" action="<?= base_url('laporan_pelaksanaan/update') ?>">
                    <input type="hidden" name="id" value="<?= $laporan['id']; ?>">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $laporan['nama_mahasiswa']; ?>" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tingkat Keberhasilan</label>
                            <select class="form-control" name="tingkat_keberhasilan">
                                <option value="1" <?= ($laporan['tingkat_keberhasilan'] == 1) ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?= ($laporan['tingkat_keberhasilan'] == 2) ? 'selected' : ''; ?>>2</option>
                                <option value="3" <?= ($laporan['tingkat_keberhasilan'] == 3) ? 'selected' : ''; ?>>3</option>
                                <option value="4" <?= ($laporan['tingkat_keberhasilan'] == 4) ? 'selected' : ''; ?>>4</option>
                                <option value="5" <?= ($laporan['tingkat_keberhasilan'] == 5) ? 'selected' : ''; ?>>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Catatan</label>
                            <input type="tel" class="form-control" name="catatan" value="<?= $laporan['catatan']; ?>" placeholder="Masukan Catatan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <textarea class="form-control" name="keterangan" placeholder="Masukan Keterangan"><?= $laporan['keterangan']; ?></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

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
