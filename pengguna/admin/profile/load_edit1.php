<div id="dataGambar1">
                                                                        <?php
                                                                include '../../../koneksi.php';

                                                                $sql = "SELECT id_ppa, gambar_ppa FROM ppa";
                                                                $result = $koneksi->query($sql);

                                                                if ($result->num_rows > 0) {
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $gambar_ppa = str_replace("../../../", "../../", $row["gambar_ppa"]);
                                                                        echo '<figure class="mu-latest-course-img">';
                                                                        echo '<a href="#" onclick="openEditModal(' . $row["id_ppa"] . ', \'' . $gambar_ppa . '\')" data-toggle="modal" data-target="#edit1">';
                                                                        echo '<img src="' . $gambar_ppa . '" alt="img" />';
                                                                        echo '<figcaption class="mu-latest-course-imgcaption"><span class="hover-text">Klik untuk mengedit</span></figcaption>';
                                                                        echo '</a>';
                                                                        echo '</figure>';
                                                                    }
                                                                } else {
                                                                    echo "Tidak ada data.";
                                                                }

                                                                $koneksi->close();
                                                                ?>
