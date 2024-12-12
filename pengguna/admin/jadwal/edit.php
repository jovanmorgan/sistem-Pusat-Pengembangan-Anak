<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_jadwal = $_POST['id_jadwal'];
$id_kegiatan = $_POST['id_kegiatan'];
$id_kelas = $_POST['id_kelas'];
$waktu = $_POST['waktu'];

// Lakukan validasi data
if (empty($id_jadwal) || empty($id_kegiatan) || empty($id_kelas) || empty($waktu)) {
    echo "data_tidak_lengkap";
    exit();
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y H:i', strtotime($waktu));

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE jadwal SET id_kegiatan = '$id_kegiatan', id_kelas = '$id_kelas', waktu = '$tanggal_formatted' WHERE id_kegiatan = '$id_kegiatan'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
