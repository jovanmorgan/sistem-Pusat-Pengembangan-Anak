<?php
include '../../../koneksi.php';

$sql = "SELECT id_ppa, visi, misi FROM ppa";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_ppa = $row['id_ppa'];
        $visi = htmlspecialchars($row['visi'], ENT_QUOTES, 'UTF-8');
        $misi = htmlspecialchars($row['misi'], ENT_QUOTES, 'UTF-8');
?>
<a href="#" class="edit-link"
    onclick="openEditModal4(<?php echo $id_ppa; ?>, '<?php echo $visi; ?>', '<?php echo $misi; ?>')">
    <div class="content-to-edit">
        <h4 id="visi&misi">
            <b>Visi dan Misi</b>
        </h4>
        <p>Berikut adalah isi Visi
            dan
            Misi dari PPA IO0496
            Maranatha:</p>
        <p>Visi</p>
        <blockquote>
            <p>
                <i>“<?php echo nl2br($row['visi']); ?>”</i>
            </p>
        </blockquote>
        <p>Misi</p>
        <blockquote>
            <p>
                <i>“<?php echo nl2br($row['misi']); ?>”</i>
            </p>
        </blockquote>
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