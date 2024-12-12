<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_bantuan = $_POST['id_bantuan'];
$id_anak = $_POST['id_anak'];
$nama_bantuan = $_POST['nama_bantuan'];
$id_sponsor = $_POST['id_sponsor'];

// Lakukan validasi data
if (empty($id_anak) || empty($nama_bantuan) || empty($id_sponsor)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE bantuan SET id_anak = '$id_anak', nama_bantuan = '$nama_bantuan', id_sponsor = '$id_sponsor' WHERE id_bantuan = '$id_bantuan'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
