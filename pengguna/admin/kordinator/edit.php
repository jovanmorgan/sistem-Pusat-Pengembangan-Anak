<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_kordinator = $_POST['id_kordinator'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi data
if (empty($nama) || empty($username) || empty($password)) {
    echo "data_tidak_lengkap";
    exit();
}

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi data
if (empty($nama) || empty($username) || empty($password)) {
    echo "data_tidak_lengkap";
    exit();
}


// pengecekan username pada orang_tua
$check_query_orang_tua = "SELECT * FROM orang_tua WHERE username = '$username'";
$check_result_orang_tua = mysqli_query($koneksi, $check_query_orang_tua);

if (mysqli_num_rows($check_result_orang_tua) > 0) {
    echo "data_username_sudah_ada";
    exit();
}

// pengecekan username pada admin
$check_query = "SELECT * FROM admin WHERE username = '$username'";
$check_result = mysqli_query($koneksi, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo "data_username_sudah_ada";
    exit();
}


// pengecekan username pada kordinator
$check_query_kordinator = "SELECT * FROM kordinator WHERE username = '$username' AND id_kordinator != '$id_kordinator'";
$check_result_kordinator = mysqli_query($koneksi, $check_query_kordinator);

if (mysqli_num_rows($check_result_kordinator) > 0) {
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

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE kordinator SET nama = '$nama', username = '$username', password = '$password' WHERE id_kordinator = '$id_kordinator'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
