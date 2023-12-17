<html>
<head>
  <link href="<?= base_url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
  <script src="<?= base_url('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('//code.jquery.com/jquery-1.11.1.min.js') ?>"></script>

  <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
  <link href="<?= base_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
  <section id="contact">
    <div class="section-content">
      <img src="<?= base_url('assets/img/logo unila.png') ?>" alt="" width="70" height="70">
      <h1 class="section-header">AYO <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> KKN</span></h1>
      <h5>Silahkan isi laporan pelaksanaan kkn</h5>
    </div>
    <div class="contact-section">
      <div class="container">
        <form method="post" action="<?= base_url('laporan_pelaksanaan/store') ?>">
          <div class="col-md-6 form-line">
            <div class="form-group">
              <label for="nama_mahasiswa">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan Nama Anda">
            </div>
            <div class="form-group">
              <label for="tingkat_keberhasilan">Tingkat Keberhasilan</label>
              <select class="form-control" id="tingkat_keberhasilan" name="tingkat_keberhasilan">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="catatan">Catatan</label>
              <input type="tel" class="form-control" id="catatan" name="catatan" placeholder="Masukkan Catatan">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
