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
    <title>PPA | Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <li>
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
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Lakukan koneksi ke database
            include '../../koneksi.php';

            // Periksa apakah session id_admin telah diset
            if (isset($_SESSION['id_admin'])) {
                $id_admin = $_SESSION['id_admin'];

                // Query SQL untuk mengambil data perkembangan beserta nama kegiatan
                $query = "
    SELECT perkembangan.id_anak, kegiatan.nama_kegiatan
    FROM perkembangan
    JOIN kegiatan ON perkembangan.id_kegiatan = kegiatan.id_kegiatan
    ";

                $result = mysqli_query($koneksi, $query);

                $perkembangan_data = [];
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $perkembangan_data[] = $row;
                    }
                } else {
                    echo "Gagal mengambil data perkembangan: " . mysqli_error($koneksi);
                }

                // Tutup koneksi ke database
                mysqli_close($koneksi);
            }
            ?>
            <!-- Script untuk Grafik Perkembangan -->
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var ctxPerkembangan = document.getElementById('perkembanganChart').getContext('2d');
                var perkembanganData = <?php echo json_encode($perkembangan_data); ?>;

                var kegiatanCount = {};
                perkembanganData.forEach(function(e) {
                    kegiatanCount[e.nama_kegiatan] = (kegiatanCount[e.nama_kegiatan] || 0) + 1;
                });

                var labelsKegiatan = Object.keys(kegiatanCount);
                var dataKegiatan = labelsKegiatan.map(function(label) {
                    return kegiatanCount[label];
                });

                var chartPerkembangan = new Chart(ctxPerkembangan, {
                    type: 'bar',
                    data: {
                        labels: labelsKegiatan,
                        datasets: [{
                            label: 'Jumlah Kegiatan',
                            data: dataKegiatan,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Jumlah Kegiatan'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Nama Kegiatan'
                                }
                            }
                        }
                    }
                });
            });
            </script>
            <?php
            // Lakukan koneksi ke database
            include '../../koneksi.php';

            // Periksa apakah session id_admin telah diset
            if (isset($_SESSION['id_admin'])) {
                $id_admin = $_SESSION['id_admin'];

                // Query SQL untuk mengambil data bantuan beserta nama anak
                $query = "
        SELECT bantuan.nama_bantuan, anak.nama AS nama_anak
        FROM bantuan
        JOIN anak ON bantuan.id_anak = anak.id_anak
    ";
                $result = mysqli_query($koneksi, $query);

                $bantuan_data = [];
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $bantuan_data[] = $row;
                    }
                } else {
                    echo "Gagal mengambil data bantuan: " . mysqli_error($koneksi);
                }

                // Tutup koneksi ke database
                mysqli_close($koneksi);
            }
            ?>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var ctx = document.getElementById('bantuanChart').getContext('2d');
                var bantuanData = <?php echo json_encode($bantuan_data); ?>;

                // Mengelompokkan data berdasarkan nama_anak dan menghitung jumlah bantuan
                var bantuanCount = {};
                var bantuanDetails = {};
                bantuanData.forEach(function(e) {
                    if (bantuanCount[e.nama_anak]) {
                        bantuanCount[e.nama_anak]++;
                        bantuanDetails[e.nama_anak].push(e.nama_bantuan);
                    } else {
                        bantuanCount[e.nama_anak] = 1;
                        bantuanDetails[e.nama_anak] = [e.nama_bantuan];
                    }
                });

                var labels = Object.keys(bantuanCount);
                var data = labels.map(function(label) {
                    var count = bantuanCount[label];
                    if (count === 1) {
                        return 1.50;
                    } else if (count === 2) {
                        return 2.00;
                    } else if (count >= 3) {
                        return 3.00;
                    }
                });

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Jumlah Bantuan',
                            data: data,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 0.5 // Menetapkan langkah ukuran sumbu Y menjadi 0.5
                                }
                            }
                        },
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        var anak = labels[tooltipItem.dataIndex];
                                        var bantuanList = bantuanDetails[anak].join(', ');
                                        return 'Bantuan: ' + bantuanList;
                                    }
                                }
                            }
                        }
                    }
                });
            });
            </script>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Grafik Perkembangan</h5>
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i> Data Perkembangan
                                </h3>
                            </div>
                            <div class="card-body">
                                <canvas id="perkembanganChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Grafik Bantuan</h5>
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i> Data Bantuan</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="bantuanChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Dashboard</h5>
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i>9 Dashboard</h3>
                            </div>
                            <div class="card-body p-4">
                                Dashboard admin pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Profile PPA</h5>
                                <h3 class="card-title"><i class="tim-icons icon-single-02"></i>4 Profile PPA</h3>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data Profile pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Pimpinan</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel pimpinan
                                $query_count_pimpinan = "SELECT COUNT(*) AS total_pimpinan FROM pimpinan";
                                $result_count_pimpinan = mysqli_query($koneksi, $query_count_pimpinan);

                                if ($result_count_pimpinan) {
                                    $row_count_pimpinan = mysqli_fetch_assoc($result_count_pimpinan);
                                    $total_data_pimpinan = $row_count_pimpinan['total_pimpinan'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_pimpinan Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data pimpinan pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Anak</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel anak
                                $query_count_anak = "SELECT COUNT(*) AS total_anak FROM anak";
                                $result_count_anak = mysqli_query($koneksi, $query_count_anak);

                                if ($result_count_anak) {
                                    $row_count_anak = mysqli_fetch_assoc($result_count_anak);
                                    $total_data_anak = $row_count_anak['total_anak'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_anak Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data anak pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Mentor</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel mentor
                                $query_count_mentor = "SELECT COUNT(*) AS total_mentor FROM mentor";
                                $result_count_mentor = mysqli_query($koneksi, $query_count_mentor);

                                if ($result_count_mentor) {
                                    $row_count_mentor = mysqli_fetch_assoc($result_count_mentor);
                                    $total_data_mentor = $row_count_mentor['total_mentor'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_mentor Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data mentor pada Pusat Pelayanan Anak IO0496 Maranatha
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
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Bantuan</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel bantuan
                                $query_count_bantuan = "SELECT COUNT(*) AS total_bantuan FROM bantuan";
                                $result_count_bantuan = mysqli_query($koneksi, $query_count_bantuan);

                                if ($result_count_bantuan) {
                                    $row_count_bantuan = mysqli_fetch_assoc($result_count_bantuan);
                                    $total_data_bantuan = $row_count_bantuan['total_bantuan'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_bantuan Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data bantuan pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Kelas</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel kelas
                                $query_count_kelas = "SELECT COUNT(*) AS total_kelas FROM kelas";
                                $result_count_kelas = mysqli_query($koneksi, $query_count_kelas);

                                if ($result_count_kelas) {
                                    $row_count_kelas = mysqli_fetch_assoc($result_count_kelas);
                                    $total_data_kelas = $row_count_kelas['total_kelas'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_kelas Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data kelas pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Sponsor</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel sponsor
                                $query_count_sponsor = "SELECT COUNT(*) AS total_sponsor FROM sponsor";
                                $result_count_sponsor = mysqli_query($koneksi, $query_count_sponsor);

                                if ($result_count_sponsor) {
                                    $row_count_sponsor = mysqli_fetch_assoc($result_count_sponsor);
                                    $total_data_sponsor = $row_count_sponsor['total_sponsor'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_sponsor Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data Sponsor pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Perkembangan</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel perkembangan
                                $query_count_perkembangan = "SELECT COUNT(*) AS total_perkembangan FROM perkembangan";
                                $result_count_perkembangan = mysqli_query($koneksi, $query_count_perkembangan);

                                if ($result_count_perkembangan) {
                                    $row_count_perkembangan = mysqli_fetch_assoc($result_count_perkembangan);
                                    $total_data_perkembangan = $row_count_perkembangan['total_perkembangan'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_perkembangan Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data Perkembangan pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Kegiatan</h5>
                                <?php
                                include '../../koneksi.php';

                                // Query SQL untuk menghitung jumlah data dalam tabel kegiatan
                                $query_count_kegiatan = "SELECT COUNT(*) AS total_kegiatan FROM kegiatan";
                                $result_count_kegiatan = mysqli_query($koneksi, $query_count_kegiatan);

                                if ($result_count_kegiatan) {
                                    $row_count_kegiatan = mysqli_fetch_assoc($result_count_kegiatan);
                                    $total_data_kegiatan = $row_count_kegiatan['total_kegiatan'];

                                    echo "<h3 class='card-title'><i class='fas fa-chalkboard-teacher'></i>$total_data_kegiatan Data</h3>";
                                } else {
                                    echo "<h3 class='font-weight-bolder'>Error</h3>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </div>
                            <div class="card-body p-4">
                                Jumlah data Kegiatan pada Pusat Pelayanan Anak IO0496 Maranatha
                            </div>
                        </div>
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