<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_kelas = $_POST['id_kelas'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$hoby = $_POST['hoby'];
$jenjang_umur = $_POST['jenjang_umur'];
$alamat = $_POST['alamat'];

// Lakukan validasi data
if (empty($id_kelas) || empty($nama) || empty($tanggal_lahir) || empty($jk) || empty($tempat_lahir) || empty($hoby) || empty($jenjang_umur) || empty($alamat)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tanggal_lahir));
$alamat_data = str_replace('<br>', "\n", $alamat);
// Buat query SQL untuk menambahkan data anak ke dalam database
$query = "INSERT INTO anak (nama, tempat_lahir, tanggal_lahir, jk, hoby, jenjang_umur, id_kelas, alamat) 
        VALUES ('$nama', '$tempat_lahir', '$tanggal_formatted', '$jk', '$hoby', '$jenjang_umur', '$id_kelas', '$alamat_data')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
