<?php
include '../../../koneksi.php';

// Terima ID perkembangan yang akan dihapus dari formulir HTML
$id_perkembangan = $_POST['id']; // Ubah menjadi $_GET jika menggunakan metode GET

// Lakukan validasi data
if (empty($id_perkembangan)) {
    echo "data_tidak_lengkap";
    exit();
}

// Buat query SQL untuk menghapus data perkembangan berdasarkan ID
$query_delete_perkembangan = "DELETE FROM perkembangan WHERE id_perkembangan = '$id_perkembangan'";

// Jalankan query untuk menghapus data
if (mysqli_query($koneksi, $query_delete_perkembangan)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
