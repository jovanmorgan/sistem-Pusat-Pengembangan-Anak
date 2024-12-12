                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    ID Pimpinan
                                                </th>
                                                <th class="text-center">
                                                    Nama
                                                </th>
                                                <th class="text-center">
                                                    Username
                                                </th>
                                                <th class="text-center">
                                                    Password
                                                </th>
                                                <th class="text-center">
                                                    Tempat & Tanggal Lahir
                                                </th>
                                                <th class="text-center">
                                                    Jenis Kelamin
                                                </th>
                                                <th class="text-center">
                                                    Jabatan
                                                </th>
                                                <th class="text-center">
                                                    Pendidikan
                                                </th>
                                                <th class="text-center">
                                                    Nomor Hp
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
                                            // Query SQL untuk mengambil data dari tabel pimpinan
                                            $query = "SELECT * FROM pimpinan";
                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE nama LIKE '%$search_query%' OR tempat_lahir LIKE '%$search_query%' OR tanggal_lahir LIKE '%$search_query%' OR jk LIKE '%$search_query%' OR jabatan LIKE '%$search_query%' OR pendidikan_terakhir LIKE '%$search_query%' OR nomor_hp LIKE '%$search_query%' OR alamat LIKE '%$search_query%'";
                                            }
                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY id_pimpinan DESC";
                                            $result = mysqli_query($koneksi, $query);
                                            // Variabel untuk menyimpan nomor urut
                                            $counter = 1;
                                            // Cek jika query berhasil dieksekusi
                                            if ($result) {
                                                // Lakukan iterasi untuk menampilkan setiap baris data dalam tabel
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Menampilkan data ke dalam tabel HTML
                                                    $foto_path = str_replace('../', '', $row['foto']);
                                                    $tl = $row['tanggal_lahir'];
                                                    $tli = date('Y-m-d', strtotime($tl));
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $counter . "</td>";
                                                    echo "<td class='text-center'>" . $row['id_pimpinan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                                    echo "<td class='text-center'><p class='button-like text-white'>" . $row['username'] . "</p></td>";
                                                    echo "<td class='text-center'><p class='button-like text-white'>" . $row['password'] . "</p></td>";
                                                    echo "<td class='text-center'>" . $row['tempat_lahir'] . " / " . $row['tanggal_lahir'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jk'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jabatan'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['pendidikan_terakhir'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nomor_hp'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['alamat'] . "</td>";
                                                    echo "<td class='text-center'><img src='" . htmlspecialchars($foto_path, ENT_QUOTES) . "' alt='Kover Image' style='max-width: 100px; cursor: pointer;' data-toggle='modal' data-target='#imageModal" . $counter . "'></td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-primary btn-sm' onclick='openEditModal(
                                                        \"" . $row['id_pimpinan'] . "\",
                                                        \"" . $row['nama'] . "\",
                                                        \"" . $row['username'] . "\",
                                                        \"" . $row['password'] . "\",
                                                        \"" . $row['tempat_lahir'] . "\",
                                                        \"" . $tli . "\",
                                                        \"" . $row['jk'] . "\",
                                                        \"" . $row['jabatan'] . "\",
                                                        \"" . $row['pendidikan_terakhir'] . "\",
                                                        \"" . $row['nomor_hp'] . "\",
                                                        \"" . $row['alamat'] . "\",
                                                        \"" . $foto_path . "\"
                                                    )'>Edit</button>
                                                        </td>";
                                                    echo "<td class='text-center'>
                                                    <button class='btn btn-danger btn-sm' onclick='hapus(\"" . $row['id_pimpinan'] . "\")'>Hapus</button>
                                                </td>";

                                                    echo "</tr>";
                                                    // Tambahkan modal untuk setiap gambar
                                                    echo "<div class='modal fade' id='imageModal" . $counter . "' tabindex='-1' role='dialog' aria-labelledby='imageModalLabel" . $counter . "' aria-hidden='true'>
                                                            <div class='modal-dialog' role='document'>
                                                                <div class='modal-content'>
                                                                    <div class='modal-header'>
                                                                        <h5 class='modal-title' id='imageModalLabel" . $counter . "'>Gambar Sertifikat</h5>
                                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                            <span aria-hidden='true'>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class='modal-body text-center'>
                                                                        <img src='" . htmlspecialchars($foto_path, ENT_QUOTES) . "' alt='Kover Image' style='max-width: 100%;'>
                                                                    </div>
                                                                    <div class='modal-footer'>
                                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>";
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