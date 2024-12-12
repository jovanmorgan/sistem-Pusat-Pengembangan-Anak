<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$id_mentor = $_POST['id_mentor'];
$tahun_ajaran = $_POST['tahun_ajaran'];

// Lakukan validasi data
if (empty($id_kelas) || empty($nama_kelas) || empty($id_mentor) || empty($tahun_ajaran)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tahun_ajaran));

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE kelas SET nama_kelas = '$nama_kelas', id_mentor = '$id_mentor', tahun_ajaran = '$tanggal_formatted' WHERE id_kelas = '$id_kelas'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
