<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_perkembangan = $_POST['id_perkembangan'];
$id_anak = $_POST['id_anak'];
$id_kegiatan = $_POST['id_kegiatan'];

// Lakukan validasi data
if (empty($id_anak) || empty($id_kegiatan)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE perkembangan SET id_anak = '$id_anak', id_kegiatan = '$id_kegiatan' WHERE id_perkembangan = '$id_perkembangan'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
