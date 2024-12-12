<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$nama_kelas = $_POST['nama_kelas'];
$id_mentor = $_POST['id_mentor'];
$tahun_ajaran = $_POST['tahun_ajaran'];

// Lakukan validasi data
if (empty($nama_kelas) || empty($id_mentor) || empty($tahun_ajaran)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tahun_ajaran));

// Buat query SQL untuk menambahkan data kelas ke dalam database
$query = "INSERT INTO kelas (nama_kelas, id_mentor, tahun_ajaran) 
        VALUES ('$nama_kelas', '$id_mentor', '$tanggal_formatted')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
