<?php
session_start();

// Hapus sesi id_orang_tua jika ada
if (isset($_SESSION['id_orang_tua'])) {
    unset($_SESSION['id_orang_tua']);
}

// Redirect pengguna kembali ke halaman login
header("Location: ../../login");
exit;
