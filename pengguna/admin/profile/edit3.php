<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_ppa = $_POST['id_ppa'];
$deskripsi_ppa = $_POST['deskripsi_ppa'];

// Konversi tag <br> kembali menjadi newline (\n)
$deskripsi_ppa = str_replace('<br>', "\n", $deskripsi_ppa);

// Lakukan validasi data
if (empty($deskripsi_ppa)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE ppa SET deskripsi_ppa = '$deskripsi_ppa' WHERE id_ppa = '$id_ppa'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>