<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_mentor = $_POST['id_mentor'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$nomor_hp = $_POST['nomor_hp'];

// Lakukan validasi data
if (empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($jk) || empty($nomor_hp)) {
    echo "data_tidak_lengkap";
    exit();
}

// Ganti "0" dengan "62" pada nomor telepon jika dimulai dengan "0"
if (substr($nomor_hp, 0, 1) === '0') {
    $nomor_hp = '62' . substr($nomor_hp, 1);
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tanggal_lahir));

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE mentor SET nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_formatted', jk = '$jk', nomor_hp = '$nomor_hp' WHERE id_mentor = '$id_mentor'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
