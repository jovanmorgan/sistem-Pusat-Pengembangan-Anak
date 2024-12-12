<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_ppa = $_POST['id_ppa'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

// Konversi tag <br> kembali menjadi newline (\n)
$visi = str_replace('<br>', "\n", $visi);
$misi = str_replace('<br>', "\n", $misi);

// Lakukan validasi data
if (empty($visi) ||empty($misi)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE ppa SET visi = '$visi', misi = '$misi' WHERE id_ppa = '$id_ppa'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>