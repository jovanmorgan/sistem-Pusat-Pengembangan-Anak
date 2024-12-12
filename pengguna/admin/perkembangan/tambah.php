<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_anak = $_POST['id_anak'];
$id_kegiatan = $_POST['id_kegiatan'];

// Lakukan validasi data
if (empty($id_anak) || empty($id_kegiatan)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menambahkan data perkembangan ke dalam database
$query = "INSERT INTO perkembangan (id_anak, id_kegiatan) 
        VALUES ('$id_anak', '$id_kegiatan')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
