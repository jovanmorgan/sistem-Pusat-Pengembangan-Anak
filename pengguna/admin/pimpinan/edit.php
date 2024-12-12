<?php
include '../../../koneksi.php';

// Terima data dari formulir HTML
$id_pimpinan = $_POST['id_pimpinan'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$jabatan = $_POST['jabatan'];
$nomor_hp = $_POST['nomor_hp'];
$alamat = $_POST['alamat'];

// Lakukan validasi data
if (empty($username) || empty($password) || empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($jk) || empty($pendidikan_terakhir) || empty($jabatan) || empty($nomor_hp) || empty($alamat)) {
    echo "data_tidak_lengkap";
    exit();
}

// Proses upload file
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $kover_name = $_FILES['foto']['name'];
    $kover_tmp = $_FILES['foto']['tmp_name'];
    $kover_path = '../gambar/' . basename($kover_name);

    // Simpan file foto di folder tujuan
    if (move_uploaded_file($kover_tmp, $kover_path)) {
        // File berhasil diupload, lanjutkan dengan update database
    } else {
        echo "error";
        exit();
    }
} else {
    // Jika tidak ada file baru yang diupload, tetap gunakan foto yang lama
    $kover_path = '';
}
// Ganti "0" dengan "62" pada nomor telepon jika dimulai dengan "0"
if (substr($nomor_hp, 0, 1) === '0') {
    $nomor_hp = '62' . substr($nomor_hp, 1);
}

// Format tanggal ke format yang diinginkan
$tanggal_formatted = date('d-M-Y', strtotime($tanggal_lahir));

// Buat query SQL untuk mengupdate data
$query_update = "UPDATE pimpinan SET username = '$username', password = '$password', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_formatted', jk = '$jk', pendidikan_terakhir = '$pendidikan_terakhir', jabatan = '$jabatan', nomor_hp = '$nomor_hp', alamat = '$alamat'";

// Tambahkan kolom foto jika ada file baru yang diupload
if (!empty($kover_path)) {
    $query_update .= ", foto = '$kover_path'";
}

$query_update .= " WHERE id_pimpinan = '$id_pimpinan'";

// Jalankan query
if (mysqli_query($koneksi, $query_update)) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi ke database
mysqli_close($koneksi);