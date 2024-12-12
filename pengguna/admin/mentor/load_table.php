                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Mentor
                                                </th>
                                                <th class="text-center">
                                                    Nama
                                                </th>
                                                <th class="text-center">
                                                    Tempat & Tanggal Lahir
                                                </th>
                                                <th class="text-center">
                                                    Jenis Kelamin
                                                </th>
                                                <th class="text-center">
                                                    Nomor Hp
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
                                            // Query SQL untuk mengambil data dari tabel mentor
                                            $query = "SELECT * FROM mentor";
                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE nama LIKE '%$search_query%' OR tempat_lahir LIKE '%$search_query%' OR tanggal_lahir LIKE '%$search_query%' OR jk LIKE '%$search_query%' OR nomor_hp LIKE '%$search_query%'";
                                            }
                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY id_mentor DESC";
                                            $result = mysqli_query($koneksi, $query);
                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;
                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    $tl = $row['tanggal_lahir'];
                                                    $tli = date('Y-m-d', strtotime($tl));
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_mentor'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['tempat_lahir'] . " / " . $row['tanggal_lahir'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jk'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nomor_hp'] . "</td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                        \"" . $row['id_mentor'] . "\",
                                                        \"" . $row['nama'] . "\",
                                                        \"" . $row['tempat_lahir'] . "\",
                                                        \"" . $tli . "\",
                                                        \"" . $row['jk'] . "\",
                                                        \"" . $row['nomor_hp'] . "\"
                                                    )'>Edit</button>
                                                        </td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_mentor'] . "\")'>Hapus</button>
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