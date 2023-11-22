<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengumuman</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Pengumuman
                    </div>
                    <div class="card-body">
                        <!-- Menampilkan pesan kesalahan validasi -->
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger">
                                <?= session('error') ?>
                            </div>
                        <?php endif; ?>
                        <!-- Form -->
                        <form action="<?= isset($pengumuman['id']) ? "/pengumuman/update/{$pengumuman['id']}" : '/pengumuman/store' ?>" method="post" enctype="multipart/form-data">
                            <!-- Judul Pengumuman -->
                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" class="form-control" id="judul" name="title" value="<?= isset($pengumuman['title']) ? $pengumuman['title'] : '' ?>" required>
                            </div>

                            <!-- Isi Pengumuman -->
                            <div class="form-group">
                                <label for="isi">Isi Pengumuman</label>
                                <textarea class="form-control" id="isi" name="content" rows="3" required><?= isset($pengumuman['content']) ? $pengumuman['content'] : '' ?></textarea>
                            </div>

                            <!-- Unggah File -->
                            <div class="form-group">
                                <label for="file">Unggah File</label>
                                <input type="file" class="form-control" id="file" name="attachment_path">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary"><?= isset($pengumuman['id']) ? 'Update' : 'Submit' ?></button>
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
