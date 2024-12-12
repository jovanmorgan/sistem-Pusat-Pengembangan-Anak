<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_sponsor'])) {
    // Pengguna belum login, arahkan kembali ke halaman masuk.php
    header("Location: ../../login");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengarahkan
}

// Jika pengguna sudah login, Anda dapat melanjutkan menampilkan halaman sponsor.php seperti biasa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/2-logo.png">
    <title>
        PPA | Sponsor PPA
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
                        <a href="./sponsor">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./sponsor_data_perkembangan">
                            <i class="fas fa-chart-line"></i>
                            <p>Perkembangan</p>
                        </a>
                    </li>
                    <li style="opacity: 0;">
                        <a href="./sponsor_data_Report">
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
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard Sponsor</a>
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

                                        // Periksa apakah session id_sponsor telah diset
                                        if (isset($_SESSION['id_sponsor'])) {
                                            $id_sponsor = $_SESSION['id_sponsor'];

                                            // Query SQL untuk mengambil data sponsor berdasarkan id_sponsor dari session
                                            $query = "SELECT * FROM sponsor WHERE id_sponsor = '$id_sponsor'";
                                            $result = mysqli_query($koneksi, $query);

                                            // Periksa apakah query berhasil dieksekusi
                                            if ($result) {
                                                // Periksa apakah terdapat data sponsor
                                                if (mysqli_num_rows($result) > 0) {
                                                    // Ambil data sponsor sebagai array asosiatif
                                                    $sponsor = mysqli_fetch_assoc($result);
                                        ?>
                                        <?php if (!empty($sponsor['fp'])) : ?>
                                        <img class="avatar" src="data_fp/<?php echo $sponsor['fp']; ?>" alt="...">
                                        <?php else : ?>
                                        <img class="avatar" src="../../assets/img/anime3.png" alt="Profile Photo">
                                        <?php endif; ?>
                                        <h5 class="title">
                                            <?php echo $sponsor['id_sponsor']; ?>
                                        </h5>
                                        <?php
                                                } else {
                                                    // Jika tidak ada data sponsor
                                                    echo "Tidak ada data sponsor.";
                                                }
                                            } else {
                                                // Jika query tidak berhasil dieksekusi
                                                echo "Gagal mengambil data sponsor: " . mysqli_error($koneksi);
                                            }
                                        } else {
                                            // Jika session id_sponsor tidak diset
                                            echo "Session id_sponsor tidak tersedia.";
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

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="places-buttons">
                                    <div class="row">
                                        <div class="col-md-6 ml-auto mr-auto text-center">
                                            <h2 class="card-title">
                                                Perkembangan Data
                                            </h2>

                                            <p class="category">Clik untuk menambah data Perkembangan</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ml-auto mr-auto">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-md-4">
                                                    <!-- Tombol alat_export -->
                                                    <a href="perkembangan/export" target="_blank"
                                                        class="btn btn-info btn-block" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        EXPORT DATA
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
                        <div class="card ">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="dataTable">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    Nomor
                                                </th>
                                                <th class="text-center">
                                                    Nama Anak
                                                </th>
                                                <th class="text-center">
                                                    Nama Kegiatan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Lakukan koneksi ke database
                                            include '../../koneksi.php';

                                            // Ambil kata kunci pencarian dari URL jika ada
                                            $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';

                                            // Query SQL untuk mengambil data dari tabel perkembangan, juga mengambil data nama guru dan nama anak berdasarkan id_guru dan id_anak
                                            $query = "SELECT perkembangan.*, anak.nama AS nama_anak, kegiatan.nama_kegiatan AS nama_kegiatan
                                            FROM perkembangan
                                            LEFT JOIN anak ON perkembangan.id_anak = anak.id_anak
                                            LEFT JOIN kegiatan ON perkembangan.id_kegiatan = kegiatan.id_kegiatan";

                                            // Jika ada kata kunci pencarian, tambahkan klausa WHERE untuk mencocokkan 
                                            if (!empty($search_query)) {
                                                $query .= " WHERE kegiatan.nama_kegiatan LIKE '%$search_query%' OR anak.nama LIKE '%$search_query%'";
                                            }

                                            // Balik urutan data untuk memunculkan yang paling baru di atas
                                            $query .= " ORDER BY perkembangan.id_perkembangan DESC";

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
                                                    echo "<td class='text-center'>" . $row['nama_anak'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['nama_kegiatan'] . "</td>";
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
            xhr.open('POST', 'bantuan/tambah.php', true);
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
            xhr.open('POST', 'bantuan/edit.php', true);
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

                    xhr.open('POST', 'bantuan/hapus.php', true);
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
        xhrTable.open('GET', 'bantuan/load_table.php', true);
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