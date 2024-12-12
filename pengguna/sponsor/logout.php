<?php
session_start();

// Hapus sesi id_sponsor jika ada
if (isset($_SESSION['id_sponsor'])) {
    unset($_SESSION['id_sponsor']);
}

// Redirect pengguna kembali ke halaman login
header("Location: ../../login");
exit;
