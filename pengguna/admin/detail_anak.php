<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_admin'])) {
    // Pengguna belum login, arahkan kembali ke halaman masuk.php
    header("Location: ../../login");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengarahkan
}

// Jika pengguna sudah login, Anda dapat melanjutkan menampilkan halaman admin.php seperti biasa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/2-logo.png">
    <title>
        PPA | sponsor PPA
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="white-content">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper badge-info">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
                        <img src="../../assets/img/2-logo.png" width="50px" alt=""
                            style="position: relative; bottom: 3px;">
                    </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal position-relative"
                        style="font-size: 14px; font-weight: bold; font-style: italic; right: 10px; color: #ffffff;">
                        PPA
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="./admin">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_ppa">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Profile PPA</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_pimpinan">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <p>Pimpinan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_anak">
                            <i class="fas fa-child"></i>
                            <p>Anak</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_mentor">
                            <i class="fas fa-user-tie"></i>
                            <p>Mentor</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_jadwal">
                            <i class="tim-icons icon-calendar-60"></i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_bantuan">
                            <i class="fas fa-hands-helping"></i>
                            <p>Bantuan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_kelas">
                            <i class="fas fa-chalkboard"></i>
                            <p>Kelas</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./admin_data_sponsor">
                            <i class="tim-icons icon-book-bookmark"></i>
                            <p>Sponsor</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_orang_tua">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Orang Tua</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_perkembangan">
                            <i class="fas fa-chart-line"></i>
                            <p>Perkembangan</p>
                        </a>
                    </li>
                    <li>
                        <a href="./admin_data_kegiatan">
                            <i class="fas fa-bullhorn"></i>
                            <p>Kegiatan</p>
                        </a>
                    </li>
                    <li style="opacity: 0;">
                        <a href="./admin_data_Report">
                            <i class="tim-icons icon-chart-bar-32"></i>
                            <p>data</p>
                        </a>
                    </li>
                    <br>
                    <br>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard Admin</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="search-bar input-group">
                                <button class="btn btn-link" id="search-button" data-toggle="modal"
                                    data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">Search</span>
                                </button>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <?php
                                        // Lakukan koneksi ke database
                                        include '../../koneksi.php';

                                        // Periksa apakah session id_admin telah diset
                                        if (isset($_SESSION['id_admin'])) {
                                            $id_admin = $_SESSION['id_admin'];

                                            // Query SQL untuk mengambil data admin berdasarkan id_admin dari session
                                            $query = "SELECT * FROM admin WHERE id_admin = '$id_admin'";
                                            $result = mysqli_query($koneksi, $query);

                                            // Periksa apakah query berhasil dieksekusi
                                            if ($result) {
                                                // Periksa apakah terdapat data admin
                                                if (mysqli_num_rows($result) > 0) {
                                                    // Ambil data admin sebagai array asosiatif
                                                    $admin = mysqli_fetch_assoc($result);
                                        ?>
                                        <?php if (!empty($admin['fp'])) : ?>
                                        <img class="avatar" src="data_fp/<?php echo $admin['fp']; ?>" alt="...">
                                        <?php else : ?>
                                        <img class="avatar" src="../../assets/img/anime3.png" alt="Profile Photo">
                                        <?php endif; ?>
                                        <h5 class="title">
                                            <?php echo $admin['id_admin']; ?>
                                        </h5>
                                        <?php
                                                } else {
                                                    // Jika tidak ada data admin
                                                    echo "Tidak ada data admin.";
                                                }
                                            } else {
                                                // Jika query tidak berhasil dieksekusi
                                                echo "Gagal mengambil data admin: " . mysqli_error($koneksi);
                                            }
                                        } else {
                                            // Jika session id_admin tidak diset
                                            echo "Session id_admin tidak tersedia.";
                                        }

                                        // Tutup koneksi ke database
                                        mysqli_close($koneksi);
                                        ?>

                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="foto_profile"
                                            class="nav-item dropdown-item">Profile</a></li>
                                    <li class="nav-link"><a href="logout" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
                aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="" method="GET">
                            <div class="modal-header">
                                <input type="text" name="search_query" class="form-control" id="inlineFormInputGroup"
                                    placeholder="SEARCH">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Modal Tambah Data Tamabh -->
            <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambah" style="font-size: 250%;">Tambah
                                Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: 240%;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form untuk menambahkan data tambah -->
                            <form id="form_tambah" action="sponsor/tambah.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin:</label>
                                    <select class="form-control" id="editjk" name="jk" required>
                                        <option value="" selected>Silakan Pilih</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia :</label>
                                    <input type="number" class="form-control" min="1" id="usia" name="usia" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Asal Negara :</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel" style="font-size: 150%;">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: 140%;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form untuk menambahkan atau mengedit data video -->
                            <form id="form_edit" action="sponsor/edit.php" method="POST" enctype="multipart/form-data">
                                <!-- Menambahkan input tersembunyi untuk menyimpan id_video saat mengedit -->
                                <input type="hidden" id="editid_sponsor" name="id_sponsor">
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input type="text" class="form-control" id="editnama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" class="form-control" id="editusername" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="text" class="form-control" id="editpassword" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin:</label>
                                    <select class="form-control" id="editeditjk" name="jk" required>
                                        <option value="" selected>Silakan Pilih</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia :</label>
                                    <input type="number" class="form-control" min="1" id="editusia" name="usia"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Asal Negara :</label>
                                    <input type="text" class="form-control" id="editalamat" name="alamat" required>
                                </div>
                                <script>
                                function openEditModal(id_sponsor, nama, username, password, jk, usia,
                                    alamat) {
                                    // Isi data ke dalam form edit
                                    document.getElementById('editid_sponsor').value = id_sponsor;
                                    document.getElementById('editnama').value = nama;
                                    document.getElementById('editusername').value = username;
                                    document.getElementById('editpassword').value = password;
                                    document.getElementById('editeditjk').value = jk;
                                    document.getElementById('editusia').value = usia;
                                    document.getElementById('editalamat').value = alamat;
                                    $('#editModal').modal('show');
                                }
                                </script>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="addEditVideoForm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Koneksi ke database
            include '../../koneksi.php';

            // Ambil id_sponsor dari URL
            $id_sponsor = isset($_GET['id_sponsor']) ? $_GET['id_sponsor'] : '';

            // Inisialisasi variabel untuk menyimpan nama sponsor
            $nama_sponsor = '';

            if (!empty($id_sponsor)) {
                // Query untuk mengambil nama sponsor berdasarkan id_sponsor
                $query_sponsor = "SELECT nama FROM sponsor WHERE id_sponsor = '$id_sponsor'";
                $result_sponsor = mysqli_query($koneksi, $query_sponsor);

                // Cek jika data sponsor ditemukan
                if ($result_sponsor && mysqli_num_rows($result_sponsor) > 0) {
                    $row_sponsor = mysqli_fetch_assoc($result_sponsor);
                    $nama_sponsor = $row_sponsor['nama'];
                }

                // Query untuk mengambil data anak berdasarkan id_sponsor
                $query_anak = "SELECT anak.id_anak, anak.nama, anak.jenjang_umur, anak.alamat FROM anak 
                   JOIN bantuan ON anak.id_anak = bantuan.id_anak
                   WHERE bantuan.id_sponsor = '$id_sponsor'";
                $result_anak = mysqli_query($koneksi, $query_anak);
            }
            ?>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="places-buttons">
                                    <div class="row">
                                        <div class="col-md-6 ml-auto mr-auto text-center">
                                            <h2 class="card-title">
                                                Data Anak yang Dibantu oleh Sponsor: <?php echo $nama_sponsor; ?>
                                            </h2>

                                            <p class="category">Ini adalah jumlah anak-anak yang dibantu oleh sponsor
                                                ini</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ml-auto mr-auto">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-md-4">
                                                    <a href="admin_data_sponsor" class="btn btn-info btn-block"
                                                        data-toggle="tooltip" data-original-title="Kembali">
                                                        Kembali
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID Anak</th>
                                                <th class="text-center">Nama Anak</th>
                                                <th class="text-center">Jenjang Umur</th>
                                                <th class="text-center">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result_anak && mysqli_num_rows($result_anak) > 0) {
                                                while ($row = mysqli_fetch_assoc($result_anak)) {
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>" . $row['id_anak'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['jenjang_umur'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['alamat'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='4' class='text-center'>Tidak ada data anak yang terkait dengan sponsor ini</td></tr>";
                                            }

                                            // Tutup koneksi database
                                            mysqli_close($koneksi);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
            .button-like {
                display: inline-block;
                padding: 7px 20px;
                background-color: #007bff;
                border: 1px solid #ccc;
                border-radius: 10px;
                cursor: default;
                color: #fff;
            }
            </style>
            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                About Us
                            </a>
                        </li>

                    </ul>
                    <div class="copyright">
                        ©
                        <script>
                        document.write(new Date().getFullYear())
                        </script> Dibuat Oleh FEBRIANI
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--=============== LOADING ===============-->
    <div class="loading">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    const loding = document.querySelector('.loading');

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('form_tambah').addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan aksi default form submit

            var form = this;
            var formData = new FormData(form);

            // Tampilkan elemen .loading sebelum mengirimkan permintaan AJAX
            loding.style.display = 'flex';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'sponsor/tambah.php', true);
            xhr.onload = function() {
                // Sembunyikan elemen .loading setelah permintaan AJAX selesai
                loding.style.display = 'none';

                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === 'success') {
                        swal("Berhasil!", "Data berhasil ditambahkan", "success");
                        // Reset form setelah berhasil
                        form.reset();
                        // Tutup modal setelah berhasil
                        $('#modalTambah').modal('hide');
                        // Muat ulang tabel
                        loadTable();
                    } else if (response === 'data_tidak_lengkap') {
                        swal("Error", "Data yang anda masukan belum lengkap", "error");
                    } else if (response === 'data_username_sudah_ada') {
                        swal("Username Salah!",
                            "Data username sudah digunakan silakan gunakan username lain",
                            "error");
                    } else {
                        swal("Error", "Gagal menambahkan data", "error");
                    }
                } else {
                    swal("Error", "Terjadi kesalahan saat mengirim data", "error");
                }
            };
            xhr.send(formData);
        });
    });

    // logika untuk mengedit data info
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('form_edit').addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan aksi default form submit

            var form = this;
            var formData = new FormData(form);
            // Tampilkan elemen .loading sebelum mengirimkan permintaan AJAX
            loding.style.display = 'flex';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'sponsor/edit.php', true);
            xhr.onload = function() {

                // Sembunyikan elemen .loading setelah permintaan AJAX selesai
                loding.style.display = 'none';

                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === 'success') {
                        swal("Suksess!", "Data berhasil diedit", "success");
                        loadTable();
                        // Reset form setelah berhasil
                        form.reset();
                        // Tutup modal setelah berhasil
                        $('#editModal').modal('hide');
                    } else if (response === 'data_tidak_lengkap') {
                        swal("Error", "Data edit yang anda masukan belum lengkap",
                            "error");
                    } else if (response === 'data_username_sudah_ada') {
                        swal("Username Salah!",
                            "Data username sudah digunakan silakan gunakan username lain",
                            "error");
                    } else {
                        swal("Error", "Gagal mengedit data", "error");
                    }
                } else {
                    swal("Error", "Terjadi kesalahan saat mengirim data", "error");
                }
            };
            xhr.send(formData);
        });
    });

    // logika untuk menghapus data video
    function hapus(id) {
        swal({
                title: "Apakah Anda yakin?",
                text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!",
                icon: "warning",
                buttons: ["Batal", "Ya, hapus!"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Jika pengguna mengonfirmasi untuk menghapus
                    var xhr = new XMLHttpRequest();

                    // Tampilkan elemen .loading sebelum mengirimkan permintaan AJAX
                    loding.style.display = 'flex';

                    xhr.open('POST', 'sponsor/hapus.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = function() {

                        // Sembunyikan elemen .loading setelah permintaan AJAX selesai
                        loding.style.display = 'none';

                        if (xhr.status === 200) {
                            var response = xhr.responseText;
                            if (response === 'success') {
                                swal("Sukses!", "Data info berhasil dihapus.", "success")
                                loadTable();
                            } else {
                                swal("Error", "Gagal menghapus data info.", "error");
                            }
                        } else {
                            swal("Error", "Terjadi kesalahan saat mengirim data.", "error");
                        }
                    };
                    xhr.send("id=" + id);
                } else {
                    // Jika pengguna membatalkan penghapusan
                    swal("Penghapusan dibatalkan", {
                        icon: "info",
                    });
                }
            });
    }


    function loadTable() {
        var xhrTable = new XMLHttpRequest();
        xhrTable.onreadystatechange = function() {
            if (xhrTable.readyState == 4 && xhrTable.status == 200) {
                // Perbarui konten tabel dengan respons dari server
                document.getElementById('dataTable').innerHTML = xhrTable.responseText;
            }
        };
        xhrTable.open('GET', 'sponsor/load_table.php', true);
        xhrTable.send();
    }
    </script>

    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "black-dashboard-free"
        });
    </script>
</body>

</html>