<?php
include '../../../koneksi.php';

// Terima ID anak yang akan dihapus dari formulir HTML
$id_anak = $_POST['id']; // Ubah menjadi $_GET jika menggunakan metode GET

// Lakukan validasi data
if (empty($id_anak)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menghapus data anak berdasarkan ID
$query_delete_anak = "DELETE FROM anak WHERE id_anak = '$id_anak'";

// Jalankan query untuk menghapus data
if (mysqli_query($koneksi, $query_delete_anak)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
