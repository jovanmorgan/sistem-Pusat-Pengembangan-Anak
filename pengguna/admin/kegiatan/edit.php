<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_kegiatan = $_POST['id_kegiatan'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$lokasi = $_POST['lokasi'];
$waktu = $_POST['waktu'];

// Lakukan validasi data
if (empty($id_kegiatan) || empty($nama_kegiatan) || empty($lokasi) || empty($waktu)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y H:i', strtotime($waktu));

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE kegiatan SET nama_kegiatan = '$nama_kegiatan', lokasi = '$lokasi', waktu = '$tanggal_formatted' WHERE id_kegiatan = '$id_kegiatan'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
