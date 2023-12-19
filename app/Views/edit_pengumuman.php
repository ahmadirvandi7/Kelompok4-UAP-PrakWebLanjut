<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengumuman</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang body */
        }

        .container {
            background-color: #ffffff; /* Warna latar belakang container */
            border: 1px solid #d1d1d1; /* Warna border container */
            border-radius: 8px; /* Border radius container */
            padding: 20px; /* Padding container */
        }

        .card-header {
            background-color: #6c757d !important; /* Warna latar belakang header card */
            color: #ffffff; /* Warna teks header card */
        }

        .card {
            background-color: #ffffff; /* Warna latar belakang card */
            border: 1px solid #d1d1d1; /* Warna border card */
            border-radius: 8px; /* Border radius card */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Edit Pengumuman
                    </div>
                    <div class="card-body">
                        <!-- Menampilkan pesan kesalahan validasi -->
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger">
                                <?= session('error') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Form -->
                        <form action="/pengumuman/update/<?= $pengumuman['id'] ?>" method="post" enctype="multipart/form-data">
                            <!-- Judul Pengumuman -->
                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $pengumuman['title'] ?>" required>
                            </div>

                            <!-- Isi Pengumuman -->
                            <div class="form-group">
                                <label for="isi">Isi Pengumuman</label>
                                <textarea class="form-control" id="isi" name="isi" rows="3" required><?= $pengumuman['content'] ?></textarea>
                            </div>

                            <!-- Unggah File -->
                            <div class="form-group">
                                <label for="file">Unggah File</label>
                                <input type="file" class="form-control" id="file" name="file">
                                <?php if ($pengumuman['attachment_path']): ?>
                                    <p class="mt-2">File Saat Ini: <?= $pengumuman['attachment_path'] ?></p>
                                <?php endif; ?>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
