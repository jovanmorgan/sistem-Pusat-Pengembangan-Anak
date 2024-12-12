                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Bantuan
                                                </th>
                                                <th class="text-center">
                                                    Nama Anak
                                                </th>
                                                <th class="text-center">
                                                    NAMA BANTUAN
                                                </th>
                                                <th class="text-center">
                                                    Dibantu Oleh Sponsor
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

                                            // Query SQL untuk mengambil data dari tabel bantuan, juga mengambil data nama guru dan nama kelas berdasarkan id_guru dan id_kelas
                                            $query = "SELECT bantuan.*, anak.nama AS nama_anak, sponsor.nama AS nama_sponsor
                                            FROM bantuan
                                            LEFT JOIN anak ON bantuan.id_anak = anak.id_anak
                                            LEFT JOIN sponsor ON bantuan.id_sponsor = sponsor.id_sponsor";

                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE bantuan.nama_bantuan LIKE '%$search_query%' OR bantuan.asal_bantuan LIKE '%$search_query%' OR anak.nama LIKE '%$search_query%'";
                                            }

                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY bantuan.id_bantuan DESC";

                                            $result = mysqli_query($koneksi, $query);

                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;

                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_bantuan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_anak'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_bantuan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_sponsor'] . "</td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                                    \"" . $row['id_bantuan'] . "\",
                                                                    \"" . $row['id_anak'] . "\",
                                                                    \"" . $row['nama_bantuan'] . "\",
                                                                    \"" . $row['id_sponsor'] . "\"
                                                                )'>Edit</button>
                                                            </td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_bantuan'] . "\")'>Hapus</button>
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