                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Sponsor
                                                </th>
                                                <th class="text-center">
                                                    Nama sponsor
                                                </th>
                                                <th class="text-center">
                                                    Username
                                                </th>
                                                <th class="text-center">
                                                    Password
                                                </th>
                                                <th class="text-center">
                                                    Jenis anakmin
                                                </th>
                                                <th class="text-center">
                                                    Usia
                                                </th>
                                                <th class="text-center">
                                                    Asal Negara
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

                                            // Query SQL untuk mengambil data dari tabel sponsor, juga mengambil data nama guru dan nama anak berdasarkan id_guru dan id_anak
                                            $query = "SELECT * FROM sponsor";

                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE nama LIKE '%$search_query%' OR username LIKE '%$search_query%' OR password LIKE '%$search_query%' OR jk LIKE '%$search_query%' OR usia LIKE '%$search_query%' OR asal_negara LIKE '%$search_query%'";
                                            }

                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY id_sponsor DESC";

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
                                                    echo "<td class='text-center'>" . $row['id_sponsor'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                                    echo "<td class='text-center'><p class='button-like text-white'>" . $row['username'] . "</p></td>";
                                                    echo "<td class='text-center'><p class='button-like text-white'>" . $row['password'] . "</p></td>";
                                                    echo "<td class='text-center'>" . $row['jk'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['usia'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['asal_negara'] . "</td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                                    \"" . $row['id_sponsor'] . "\",
                                                                    \"" . $row['nama'] . "\",
                                                                    \"" . $row['username'] . "\",
                                                                    \"" . $row['password'] . "\",
                                                                    \"" . $row['jk'] . "\",
                                                                    \"" . $row['usia'] . "\",
                                                                    \"" . $row['asal_negara'] . "\"
                                                                )'>Edit</button>
                                                            </td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_sponsor'] . "\")'>Hapus</button>
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