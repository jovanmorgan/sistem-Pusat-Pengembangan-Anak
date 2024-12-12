<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_kegiatan = $_POST['id_kegiatan'];
$id_kelas = $_POST['id_kelas'];
$waktu = $_POST['waktu'];

// Lakukan validasi data
if (empty($id_kegiatan) || empty($id_kelas) || empty($waktu)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y H:i', strtotime($waktu));

// Buat query SQL untuk menambahkan data kegiatan ke dalam database
$query = "INSERT INTO jadwal (id_kegiatan, id_kelas, waktu) 
        VALUES ('$id_kegiatan', '$id_kelas', '$tanggal_formatted')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
