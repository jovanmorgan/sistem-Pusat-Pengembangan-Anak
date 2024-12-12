                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Kegiatan
                                                </th>
                                                <th class="text-center">
                                                    Nama Kegiatan
                                                </th>
                                                <th class="text-center">
                                                    Lokasi
                                                </th>
                                                <th class="text-center">
                                                    Waktu
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
                                            // Query SQL untuk mengambil data dari tabel kegiatan
                                            $query = "SELECT * FROM kegiatan";
                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE nama_kegiatan LIKE '%$search_query%' OR lokasi LIKE '%$search_query%' OR waktu LIKE '%$search_query%'";
                                            }
                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY id_kegiatan DESC";
                                            $result = mysqli_query($koneksi, $query);
                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;
                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    $waktu_input = $row['waktu'];
                                                    $waktu_input_data = date('Y-m-d\TH:i', strtotime($waktu_input));
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_kegiatan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_kegiatan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['lokasi'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['waktu'] . "</td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                        \"" . $row['id_kegiatan'] . "\",
                                                        \"" . $row['nama_kegiatan'] . "\",
                                                        \"" . $row['lokasi'] . "\",
                                                        \"" . $waktu_input_data . "\"
                                                    )'>Edit</button>
                                                        </td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_kegiatan'] . "\")'>Hapus</button>
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