<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_anak = $_POST['id_anak'];
$nama_bantuan = $_POST['nama_bantuan'];
$id_sponsor = $_POST['id_sponsor'];

// Lakukan validasi data
if (empty($id_anak) || empty($nama_bantuan) || empty($id_sponsor)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menambahkan data kegiatan ke dalam database
$query = "INSERT INTO bantuan (id_anak, nama_bantuan, id_sponsor) 
        VALUES ('$id_anak', '$nama_bantuan', '$id_sponsor')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
