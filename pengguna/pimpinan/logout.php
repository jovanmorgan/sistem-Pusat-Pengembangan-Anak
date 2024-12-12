<?php
session_start();

// Hapus sesi id_pimpinan jika ada
if (isset($_SESSION['id_pimpinan'])) {
    unset($_SESSION['id_pimpinan']);
}

// Redirect pengguna kembali ke halaman login
header("Location: ../../login");
exit;
