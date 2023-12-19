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
    
<h1 class="text-center">Kelola Jadwal Kegiataan</h1>
<div class="container mt-5">
    <form action="<?= base_url('/kelola_jadwal/store')?>" method="POST">
        <!-- hari -->
        <div class="form-group">
            <label for="nama_mahasiswa">Hari: </label>
            <input type="text" class="form-control" id="hari" name="hari" placeholder="Masukkan Hari">
        </div>

        <!-- Tanggal -->
        <div class="form-group">
            <label for="tanggal">Tanggal: </label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>

        <!-- Kegiatan -->
        <div class="form-group">
            <label>Kegiatan:</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan Nama Kegiatan">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
