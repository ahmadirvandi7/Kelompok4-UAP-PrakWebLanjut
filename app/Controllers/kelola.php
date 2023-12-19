<?php

class KelolaController {
    public function index() {
        // Logika untuk menangani tindakan index (daftar kegiatan)
        echo "Metode index dijalankan";                                                         
    }

    public function tambah() {
        // Logika untuk menangani tindakan tambah kegiatan
        echo "Metode tambah dijalankan";
    }

    public function edit($id) {
        // Logika untuk menangani tindakan edit kegiatan dengan ID tertentu
        echo "Metode edit dijalankan untuk ID: $id";
    }

    public function hapus($id) {
        // Logika untuk menangani tindakan hapus kegiatan dengan ID tertentu
        echo "Metode hapus dijalankan untuk ID: $id";
    }
}

// Contoh penggunaan
$controller = new KelolaController();

// Panggil metode index
$controller->index();

// Panggil metode tambah
$controller->tambah();

// Panggil metode edit dengan ID tertentu
$controller->edit(123);

// Panggil metode hapus dengan ID tertentu
$controller->hapus(456);
?>
