<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
<section id="contact">
			<div class="section-content">
            <img src="assets/img/logo unila.png" alt="" width="70" height="70">
				<h1 class="section-header">AYO <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> KKN</span></h1>
				<h5>Silahkan isi laporan hasil kegiatan kkn</h5>
			</div>
			<div class="contact-section">
			<div class="container">
			<form action="<?= site_url('laporan_kegiatan/store') ?>" method="post">
					<div class="col-md-6 form-line">
						<div class="form-group">
							<label for="exampleInputUsername">Nama Mahasiswa</label>
							<input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan Nama Anda">
						</div>
						<div class="form-group">
							<label for="exampleInputUsername">Program Kerja dan Kegiatan</label>
							<input type="text" class="form-control" name="program_kegiatan" placeholder="Masukan Program Kerja dan Kegiatan">
						</div>
						<div class="form-group">
							<label for="telephone">Target</label>
							<input type="tel" class="form-control" name="target" placeholder="Masukan Target">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Keterangan</label>
							<textarea class="form-control" name="keterangan" placeholder="Masukan Keterangan"></textarea>
						</div>
						<div>
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>
    </body>
</html>
