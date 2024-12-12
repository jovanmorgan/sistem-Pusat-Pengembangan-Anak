<?php
include '../../../koneksi.php';

// Terima ID mentor yang akan dihapus dari formulir HTML
$id_mentor = $_POST['id']; // Ubah menjadi $_GET jika menggunakan metode GET

// Lakukan validasi data
if (empty($id_mentor)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menghapus data mentor berdasarkan ID
$query_delete_mentor = "DELETE FROM mentor WHERE id_mentor = '$id_mentor'";

// Jalankan query untuk menghapus data
if (mysqli_query($koneksi, $query_delete_mentor)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
