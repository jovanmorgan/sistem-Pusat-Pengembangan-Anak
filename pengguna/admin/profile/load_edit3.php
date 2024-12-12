<?php
include '../../../koneksi.php';

$sql = "SELECT id_ppa, deskripsi_ppa FROM ppa";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_ppa = $row['id_ppa'];
        $deskripsi_ppa = nl2br($row['deskripsi_ppa']); // Mengganti newline menjadi <br>
        $deskripsi_ppa_sambung = str_replace(array("\r", "\n"), '', nl2br($row['deskripsi_ppa'])); // Mengganti newline dengan <br> dan menghapus baris baru

?>
<a href="#" class="edit-link"
    onclick="openEditModal3(<?php echo $id_ppa; ?>, '<?php echo htmlspecialchars($deskripsi_ppa_sambung, ENT_QUOTES); ?>')">
    <div class="content-to-edit">
        <h4><b>Deskripsi</b></h4>
        <p><?php echo $deskripsi_ppa; ?>
        </p>
        <span class="hover-text2 text-center">Klik
            untuk mengedit</span>
    </div>
</a>
<?php
    }
} else {
    echo "Tidak ada data.";
}

$koneksi->close();
?>