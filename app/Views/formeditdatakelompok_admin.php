<?php
$validation = \Config\Services::validation();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kelompok</title>

    <style>
    #edit-kelompok {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .section-content {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header {
        color: #007bff;
    }

    .form-section {
        background-color: #ffffff;
        padding: 16px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px #e0e0e0;
        width: 50%;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        color: #495057;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn-default {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-default:hover {
        background-color: #0056b3;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
    }
</style>
</head>

<body>

    <!-- Tambahkan bagian berikut di dalam form -->
    <?php if (session()->has('validation')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <!-- Setelah itu, tempatkan form Anda di sini -->
    <section id="edit-kelompok">
        <div class="section-content">
            <h1 class="section-header">Edit Data Kelompok</h1>
            <h3>Silakan edit data kelompok</h3>
        </div>
        <div class="form-section">
            <div class="container">
                <?= form_open('/kelompok_admin/update/' . $kelompok['id'], 'method="post"'); ?>

                <input type="hidden" name="id" value="<?= $kelompok['id'] ?>">

                <div class="form-group">
                    <label for="nip_dosen_pembimbing">Dosen Pembimbing</label>
                    <?php
                    $options_dosen = [];
                    if (!empty($dosen)) {
                        foreach ($dosen as $dosen_item) {
                            $options_dosen[$dosen_item['id']] = $dosen_item['nama_dosen'];
                        }
                    }
                    echo form_dropdown('nip_dosen_pembimbing', $options_dosen, $kelompok['nip_dosen_pembimbing'], 'class="form-control"');
                    ?>
                </div>

                <div class="form-group">
                    <label for="nama_kelompok">Nama Kelompok</label>
                    <?= form_input([
                        'name' => 'nama_kelompok',
                        'class' => 'form-control',
                        'value' => $kelompok['nama_kelompok'],
                        'required' => 'required',
                    ]); ?>
                </div>

                <div class="form-group">
                    <label for="ketua_kelompok">Ketua Kelompok (NPM Mahasiswa)</label>
                    <?php
                    $options_mahasiswa = [];
                    if (!empty($mahasiswa) && is_array($mahasiswa)) {
                        foreach ($mahasiswa as $mahasiswa_item) {
                            if (is_array($mahasiswa_item) && array_key_exists('id', $mahasiswa_item) && array_key_exists('nama_mahasiswa', $mahasiswa_item)) {
                                $options_mahasiswa[$mahasiswa_item['id']] = $mahasiswa_item['nama_mahasiswa'];
                            }
                        }
                    }
                    echo form_dropdown('ketua_kelompok', $options_mahasiswa, $kelompok['ketua_kelompok'], 'class="form-control"');
                    ?>
                </div>

                <!-- Anggota Kelompok -->
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <div class="form-group">
                        <label for="npm_anggota_<?= $i ?>">Anggota <?= $i ?> (NPM Mahasiswa)</label>
                        <?php
                        $options_mahasiswa_anggota = [];
                        if (is_array($mahasiswa)) {
                            foreach ($mahasiswa as $mhs) {
                                if (is_array($mhs) && array_key_exists('id', $mhs) && array_key_exists('nama_mahasiswa', $mhs)) {
                                    $options_mahasiswa_anggota[$mhs['id']] = $mhs['nama_mahasiswa'];
                                }
                            }
                        }
                        echo form_dropdown("npm_anggota_$i", $options_mahasiswa_anggota, $kelompok["npm_anggota_$i"], 'class="form-control"');
                        ?>
                    </div>
                <?php endfor; ?>
                <?= form_submit('submit', 'Simpan', 'class="btn btn-default"'); ?>

                <?= form_close(); ?>
            </div>
        </div>
    </section>

</body>

</html>
