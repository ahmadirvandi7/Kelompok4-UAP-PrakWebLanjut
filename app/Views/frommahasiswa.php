<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
    background: linear-gradient(to right, #4b6cb7, #182848); /* Use your preferred color codes */
    color: #fff; /* Set text color to white or a contrasting color */
}

.container {
    background: rgba(255, 255, 255, 0.8); 
    padding: 20px;
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
}

.form-group label {
    color: #000; 
}

.btn-primary {
    background-color: #4b6cb7; 
    border-color: #4b6cb7; 
}

.btn-primary:hover {
    background-color: #182848; 
    border-color: #182848; 
}
</style>
</head>
<body>
    
<h1 class="text-center">Form Biodata Mahasiswa</h1>
<div class="container mt-5">
    <form action="<?= base_url('/frommahasiswa/store')?>" method="POST">
        <!-- Nama -->
        <div class="form-group">
            <label for="nama_mahasiswa">Nama:</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan nama">
        </div>

        <!-- NPM -->
        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM">
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakiLaki" value="laki-laki">
                <label class="form-check-label" for="lakiLaki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>

        <!-- Unggah Berkas -->
        <div class="form-group">
            <label for="berkas">Berkas Syarat KKN :</label>
            <input type="file" class="form-control-file" id="upload_berkas" name="upload_berkas">
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
