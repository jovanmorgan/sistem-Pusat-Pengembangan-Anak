                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Anak
                                                </th>
                                                <th class="text-center">
                                                    Nama Kelas
                                                </th>
                                                <th class="text-center">
                                                    Nama Anak
                                                </th>
                                                <th class="text-center">
                                                    Tempat & Tanggal Lahir
                                                </th>
                                                <th class="text-center">
                                                    Jenis Kelamin
                                                </th>
                                                <th class="text-center">
                                                    Hoby
                                                </th>
                                                <th class="text-center">
                                                    Jenjang Umur
                                                </th>
                                                <th class="text-center">
                                                    Alamat
                                                </th>
                                                <th class="text-center">
                                                    Edit
                                                </th>
                                                <th class="text-center">
                                                    Hapus
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Lakukan koneksi ke database
                                            include '../../../koneksi.php';

                                            // Ambil kata kunci pencarian dari URL jika ada
                                            $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';

                                            // Query SQL untuk mengambil data dari tabel anak, juga mengambil data nama guru dan nama kelas berdasarkan id_guru dan id_kelas
                                            $query = "SELECT anak.*, kelas.nama_kelas AS nama_kelas
FROM anak
LEFT JOIN kelas ON anak.id_kelas = kelas.id_kelas";

                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE anak.nama LIKE '%$search_query%' OR anak.tempat_lahir LIKE '%$search_query%' OR anak.tanggal_lahir LIKE '%$search_query%' OR anak.jk LIKE '%$search_query%' OR anak.hoby LIKE '%$search_query%' OR anak.jenjang_umur LIKE '%$search_query%' OR anak.alamat LIKE '%$search_query%' OR anak.alamat LIKE '%$search_query%' OR kelas.nama_kelas LIKE '%$search_query%'";
                                            }

                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY anak.id_anak DESC";

                                            $result = mysqli_query($koneksi, $query);

                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;

                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    $alamat_sambung = str_replace(array("\r", "\n"), '', nl2br($row['alamat']));
                                                    $tl = $row['tanggal_lahir'];
                                                    $tli = date('Y-m-d', strtotime($tl));
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_anak'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_kelas'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['tempat_lahir'] . " / " . $row['tanggal_lahir'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jk'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['hoby'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jenjang_umur'] . "</td>";
                                                    echo "<td class='text-center'>" . $alamat_sambung . "</td>";
                                                    echo "<td class='text-center'>
                                                            <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                                \"" . $row['id_kelas'] . "\",
                                                                \"" . $row['id_anak'] . "\",
                                                                \"" . $row['nama'] . "\",
                                                                \"" . $row['tempat_lahir'] . "\",
                                                                \"" . $tli . "\",
                                                                \"" . $row['jk'] . "\",
                                                                \"" . $row['hoby'] . "\",
                                                                \"" . $row['jenjang_umur'] . "\",
                                                                \"" . $alamat_sambung . "\"
                                                            )'>Edit</button>
                                                        </td>";
                                                    echo "<td class='text-center'>
                    <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_anak'] . "\")'>Hapus</button>
            </td>";

                                                    echo "</tr>";

                                                    // Increment nomor urut
                                                    $counter++;
                                                }
                                            } else {
                                                echo "<td class='text-center'><h3>Gagal mengambil data dari database</h3></td>";
                                            }

                                            // Tutup koneksi ke database
                                            mysqli_close($koneksi);
                                            ?>

                                        </tbody>
                                    </table>