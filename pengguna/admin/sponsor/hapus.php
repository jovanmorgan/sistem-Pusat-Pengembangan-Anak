<?php
include '../../../koneksi.php';

// Terima ID sponsor yang akan dihapus dari formulir HTML
$id_sponsor = $_POST['id']; // Ubah menjadi $_GET jika menggunakan metode GET

// Lakukan validasi data
if (empty($id_sponsor)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menghapus data sponsor berdasarkan ID
$query_delete_sponsor = "DELETE FROM sponsor WHERE id_sponsor = '$id_sponsor'";

// Jalankan query untuk menghapus data
if (mysqli_query($koneksi, $query_delete_sponsor)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
