<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$jabatan = $_POST['jabatan'];
$nomor_hp = $_POST['nomor_hp'];
$alamat = $_POST['alamat'];

// Lakukan validasi data
if (empty($username) || empty($password) || empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($jk) || empty($pendidikan_terakhir) || empty($jabatan) || empty($nomor_hp) || empty($alamat)) {
    echo "data_tidak_lengkap";
    exit();
}

// Ganti "0" dengan "62" pada nomor telepon jika dimulai dengan "0"
if (substr($nomor_hp, 0, 1) === '0') {
    $nomor_hp = '62' . substr($nomor_hp, 1);
}

$kover_name = $_FILES['foto']['name'];
$kover_tmp = $_FILES['foto']['tmp_name'];
$kover_path = '../gambar/' . basename($kover_name); // Simpan kover di dalam folder gambar
move_uploaded_file($kover_tmp, $kover_path);

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tanggal_lahir));

// Buat query SQL untuk menambahkan data pimpinan ke dalam database
$query = "INSERT INTO pimpinan (nama, username, password, tempat_lahir, tanggal_lahir, jk, pendidikan_terakhir, jabatan, nomor_hp, alamat, foto) 
        VALUES ('$nama','$username', '$password', '$tempat_lahir', '$tanggal_formatted', '$jk', '$pendidikan_terakhir', '$jabatan', '$nomor_hp', '$alamat' , '$kover_path')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
