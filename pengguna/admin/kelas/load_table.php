                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    ID Kelas
                                                </th>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    Nama Mentor
                                                </th>
                                                <th class="text-center">
                                                    Nama kelas
                                                </th>
                                                <th class="text-center">
                                                    Tahun Ajaran
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

                                            // Query SQL untuk mengambil data dari tabel kelas, juga mengambil data nama guru dan nama mentor berdasarkan id_guru dan id_mentor
                                            $query = "SELECT kelas.*, mentor.nama AS nama_mentor
                                            FROM kelas
                                            LEFT JOIN mentor ON kelas.id_mentor = mentor.id_mentor";

                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE kelas.nama_kelas LIKE '%$search_query%' OR kelas.tahun_ajaran LIKE '%$search_query%' OR mentor.nama LIKE '%$search_query%'";
                                            }

                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY kelas.id_kelas DESC";

                                            $result = mysqli_query($koneksi, $query);

                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;

                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    $tl = $row['tahun_ajaran'];
                                                    $tli = date('Y-m-d', strtotime($tl));
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_kelas'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_mentor'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_kelas'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['tahun_ajaran'] . "</td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                                    \"" . $row['id_kelas'] . "\",
                                                                    \"" . $row['id_mentor'] . "\",
                                                                    \"" . $row['nama_kelas'] . "\",
                                                                    \"" . $tli . "\"
                                                                )'>Edit</button>
                                                            </td>";
                                                    echo "<td class='text-center'>
                                                                <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_kelas'] . "\")'>Hapus</button>
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