<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$usia = $_POST['usia'];
$asal_negara = $_POST['asal_negara'];

// Lakukan validasi data
if (empty($nama) || empty($username) || empty($password) || empty($jk) || empty($usia) || empty($asal_negara)) {
    echo "data_tidak_lengkap";
    exit();
}

// pengecekan username pada admin
$check_query = "SELECT * FROM admin WHERE username = '$username'";
$check_result = mysqli_query($koneksi, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo "data_username_sudah_ada";
    exit();
}

// pengecekan username pada orang_tua
$check_query_orang_tua = "SELECT * FROM orang_tua WHERE username = '$username'";
$check_result_orang_tua = mysqli_query($koneksi, $check_query_orang_tua);

if (mysqli_num_rows($check_result_orang_tua) > 0) {
    echo "data_username_sudah_ada";
    exit();
}

// pengecekan username pada pimpinan
$check_query_pimpinan = "SELECT * FROM pimpinan WHERE username = '$username'";
$check_result_pimpinan = mysqli_query($koneksi, $check_query_pimpinan);

if (mysqli_num_rows($check_result_pimpinan) > 0) {
    echo "data_username_sudah_ada";
    exit();
}

// pengecekan username pada sponsor
$check_query_sponsor = "SELECT * FROM sponsor WHERE username = '$username'";
$check_result_sponsor = mysqli_query($koneksi, $check_query_sponsor);

if (mysqli_num_rows($check_result_sponsor) > 0) {
    echo "data_username_sudah_ada";
    exit();
}

// Buat query SQL untuk menambahkan data orang_tua ke dalam database
$query = "INSERT INTO sponsor (nama, username, password, jk, usia, asal_negara) 
        VALUES ('$nama', '$username', '$password', '$jk', '$usia', '$asal_negara')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);