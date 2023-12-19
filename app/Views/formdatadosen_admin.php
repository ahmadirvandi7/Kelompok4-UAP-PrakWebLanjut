
<style>
<style>
    #edit-mahasiswa {
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
<section id="add-dosen">
    <div class="section-content">
        <h1 class="section-header">Tambah Data Dosen</h1>
        <h5>Silahkan masukkan data dosen baru</h5>
    </div>
    <div class="form-section">
        <div class="container">
            <?php echo form_open('/datadosen_admin/store'); ?>

            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <?php
                echo form_input([
                    'name' => 'nama_dosen',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Nama Dosen',
                    'required' => 'required',
                ]);
                ?>
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <?php
                echo form_input([
                    'name' => 'nip',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan NIP Dosen',
                    'required' => 'required',
                ]);
                ?>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <?php
                $options = [
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ];
                echo form_dropdown('jenis_kelamin', $options, '', 'class="form-control"');
                ?>
            </div>

            <div class="form-group">
                <label for="bidang_keahlian">Bidang Keahlian</label>
                <?php
                echo form_input([
                    'name' => 'bidang_keahlian',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Bidang Keahlian Dosen',
                    'required' => 'required',
                ]);
                ?>
            </div>

            <button type="submit" class="btn btn-default">Simpan</button>

            <?php echo form_close(); ?>
        </div>
    </div>
</section>