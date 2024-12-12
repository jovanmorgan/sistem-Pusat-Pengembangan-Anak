<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$nama_kegiatan = $_POST['nama_kegiatan'];
$lokasi = $_POST['lokasi'];
$waktu = $_POST['waktu'];

// Lakukan validasi data
if (empty($nama_kegiatan) || empty($lokasi) || empty($waktu)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y H:i', strtotime($waktu));

// Buat query SQL untuk menambahkan data kegiatan ke dalam database
$query = "INSERT INTO kegiatan (nama_kegiatan, lokasi, waktu) 
        VALUES ('$nama_kegiatan', '$lokasi', '$tanggal_formatted')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
