<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_orang_tua'])) {
    // Pengguna belum login, arahkan kembali ke halaman masuk.php
    header("Location: ../../login");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengarahkan
}

// Jika pengguna sudah login, Anda dapat melanjutkan menampilkan halaman orang_tua.php seperti biasa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/2-logo.png">
    <title>
        PPA | orang tua Dashboard
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
                    <li class="active">
                        <a href="./orang_tua">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./orang_tua_data_jadwal">
                            <i class="tim-icons icon-calendar-60"></i>
                            <p>jadwal</p>
                        </a>
                    </li>
                    <li style="opacity: 0;">
                        <a href="./orang_tua_data_Report">
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
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard orang tua</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <?php
                                        // Lakukan koneksi ke database
                                        include '../../koneksi.php';

                                        // Periksa apakah session id_orang_tua telah diset
                                        if (isset($_SESSION['id_orang_tua'])) {
                                            $id_orang_tua = $_SESSION['id_orang_tua'];

                                            // Query SQL untuk mengambil data orang_tua berdasarkan id_orang_tua dari session
                                            $query = "SELECT * FROM orang_tua WHERE id_orang_tua = '$id_orang_tua'";
                                            $result = mysqli_query($koneksi, $query);

                                            // Periksa apakah query berhasil dieksekusi
                                            if ($result) {
                                                // Periksa apakah terdapat data orang_tua
                                                if (mysqli_num_rows($result) > 0) {
                                                    // Ambil data orang_tua sebagai array asosiatif
                                                    $orang_tua = mysqli_fetch_assoc($result);
                                        ?>
                                        <?php if (!empty($orang_tua['fp'])) : ?>
                                        <img class="avatar" src="data_fp/<?php echo $orang_tua['fp']; ?>" alt="...">
                                        <?php else : ?>
                                        <img class="avatar" src="../../assets/img/anime3.png" alt="Profile Photo">
                                        <?php endif; ?>
                                        <h5 class="title">
                                            <?php echo $orang_tua['id_orang_tua']; ?>
                                        </h5>
                                        <?php
                                                } else {
                                                    // Jika tidak ada data orang_tua
                                                    echo "Tidak ada data orang_tua.";
                                                }
                                            } else {
                                                // Jika query tidak berhasil dieksekusi
                                                echo "Gagal mengambil data orang_tua: " . mysqli_error($koneksi);
                                            }
                                        } else {
                                            // Jika session id_orang_tua tidak diset
                                            echo "Session id_orang_tua tidak tersedia.";
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
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Dashboard</h5>
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i>2 Dashboard</h3>
                            </div>
                            <div class="card-body p-4">
                                Dashboard Orang Tua pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Jadwal</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel jadwal
                                $query_count_jadwal = "SELECT COUNT(*) AS total_jadwal FROM jadwal";
                                $result_count_jadwal = mysqli_query($koneksi, $query_count_jadwal);

                                if ($result_count_jadwal) {
                                    $row_count_jadwal = mysqli_fetch_assoc($result_count_jadwal);
                                    $total_data_jadwal = $row_count_jadwal['total_jadwal'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_jadwal Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data jadwal pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
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
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();

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