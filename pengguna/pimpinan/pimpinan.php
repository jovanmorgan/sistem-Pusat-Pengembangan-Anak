<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_pimpinan'])) {
    // Pengguna belum login, arahkan kembali ke halaman masuk.php
    header("Location: ../../login");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengarahkan
}

// Jika pengguna sudah login, Anda dapat melanjutkan menampilkan halaman pimpinan.php seperti biasa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/2-logo.png">
    <title>
        PPA | pimpinan Dashboard
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
                        <a href="./pimpinan">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./pimpinan_data_bantuan">
                            <i class="fas fa-hands-helping"></i>
                            <p>Bantuan</p>
                        </a>
                    </li>
                    <li style="opacity: 0;">
                        <a href="./pimpinan_data_Report">
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
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard pimpinan</a>
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

                                        // Periksa apakah session id_pimpinan telah diset
                                        if (isset($_SESSION['id_pimpinan'])) {
                                            $id_pimpinan = $_SESSION['id_pimpinan'];

                                            // Query SQL untuk mengambil data pimpinan berdasarkan id_pimpinan dari session
                                            $query = "SELECT * FROM pimpinan WHERE id_pimpinan = '$id_pimpinan'";
                                            $result = mysqli_query($koneksi, $query);

                                            // Periksa apakah query berhasil dieksekusi
                                            if ($result) {
                                                // Periksa apakah terdapat data pimpinan
                                                if (mysqli_num_rows($result) > 0) {
                                                    // Ambil data pimpinan sebagai array asosiatif
                                                    $pimpinan = mysqli_fetch_assoc($result);
                                        ?>
                                        <?php if (!empty($pimpinan['fp'])) : ?>
                                        <img class="avatar" src="data_fp/<?php echo $pimpinan['fp']; ?>" alt="...">
                                        <?php else : ?>
                                        <img class="avatar" src="../../assets/img/anime3.png" alt="Profile Photo">
                                        <?php endif; ?>
                                        <h5 class="title">
                                            <?php echo $pimpinan['id_pimpinan']; ?>
                                        </h5>
                                        <?php
                                                } else {
                                                    // Jika tidak ada data pimpinan
                                                    echo "Tidak ada data pimpinan.";
                                                }
                                            } else {
                                                // Jika query tidak berhasil dieksekusi
                                                echo "Gagal mengambil data pimpinan: " . mysqli_error($koneksi);
                                            }
                                        } else {
                                            // Jika session id_pimpinan tidak diset
                                            echo "Session id_pimpinan tidak tersedia.";
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

                // Query SQL untuk mengambil data bantuan beserta nama sponsor
                $query = "
        SELECT bantuan.id_sponsor, sponsor.nama AS nama_sponsor
        FROM bantuan
        JOIN sponsor ON bantuan.id_sponsor = sponsor.id_sponsor
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
            <!-- Script untuk Grafik Bantuan Sponsor -->
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var ctx = document.getElementById('bantuanChart').getContext('2d');
                var bantuanData = <?php echo json_encode($bantuan_data); ?>;

                // Mengelompokkan data berdasarkan nama_sponsor dan menghitung jumlah bantuan
                var bantuanCount = {};
                bantuanData.forEach(function(e) {
                    bantuanCount[e.nama_sponsor] = (bantuanCount[e.nama_sponsor] || 0) + 1;
                });

                var labels = Object.keys(bantuanCount);
                var data = labels.map(function(label) {
                    return bantuanCount[label];
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
                                title: {
                                    display: true,
                                    text: 'Jumlah Bantuan'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Nama Sponsor'
                                }
                            }
                        }
                    }
                });
            });
            </script>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Grafik Bantuan Sponsor</h5>
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i> Data Bantuan Sponsor
                                </h3>
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
                                <h3 class="card-title"><i class="tim-icons icon-chart-pie-36"></i>2 Dashboard</h3>
                            </div>
                            <div class="card-body p-4">
                                Dashboard pimpinan pada Pusat Pelayanan Anak IO0496 Maranatha
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

                                    echo "<h3 class='card-title'><i class='fas fa-hands-helping'></i>$total_data_bantuan Data</h3>";
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
                                            include '../../koneksi.php';

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