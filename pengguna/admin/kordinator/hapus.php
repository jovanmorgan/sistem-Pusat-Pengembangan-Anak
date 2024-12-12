<?php
include '../../../koneksi.php';

// Terima ID orang_tua yang akan dihapus dari formulir HTML
$id_orang_tua = $_POST['id']; // Ubah menjadi $_GET jika menggunakan metode GET

// Lakukan validasi data
if (empty($id_orang_tua)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menghapus data orang_tua berdasarkan ID
$query_delete_orang_tua = "DELETE FROM orang_tua WHERE id_orang_tua = '$id_orang_tua'";

// Jalankan query untuk menghapus data
if (mysqli_query($koneksi, $query_delete_orang_tua)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
