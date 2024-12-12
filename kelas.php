<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPA | Data Kelas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/2-logo.png" type="image/x-icon" />

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet" />

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <style>
                        @media (max-width: 768px) {
                            .navbar-brand {
                                margin-top: 7px;
                            }
                        }
                    </style>
                    <a class="navbar-brand" href="index" style="
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                top: 7px;
              "><img src="assets/img/2-logo.png" width="50px" height="50px" alt="" /><span>PPA</span></a>
                    <!-- IMG BASED LOGO  -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="index">Home</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profile_ppa">Profile PPA</a></li>
                                <li><a href="profile_ppa#visi&misi">Visi & Misi</a></li>
                                <li><a href="profile_ppa#struktur_ppa">Struktur Organisasi PPA</a></li>
                                <li><a href="profile_ppa#perkembangan_anak">Pekembangan Anak</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="mentor">Mentor</a></li>
                                <li><a href="anak">Anak</a></li>
                                <li class="active"><a href="kelas">Kelas</a></li>
                                <li><a href="jadwal">Jadwal</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="kegiatan">Kegiatan</a></li>
                                <li><a href="bantuan">Bantuan</a></li>
                                <li><a href="bantuan">Sponsor</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                        <li>
                            <a href="login">
                                Login <i class="fa fa-user"></i></a>
                        </li>
                        <li>
                            <a href="#" class="cariData"> <i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->

    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close">
                <span class="fa fa-close"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form" id="searchForm" method="GET">
                            <input type="search" id="searchQuery" name="search_query" placeholder="Apa Yang Anda Cari?" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Kelas</h2>
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li><a class="active" href="kelas">Kelas</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-18">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-course-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-latest-course-single">
                                                <div class="mu-latest-course-single-content">
                                                    <h4 class="text-center" style="font-size: 30px;"><b>Data Kelas</b>
                                                    </h4>
                                                    <form action="" method="GET">
                                                        <div class="modal-header">
                                                            <input type="text" name="search_query" class="form-control" id="inlineFormInputGroup" placeholder="DATA APA YANG ANDA CARI?">
                                                            <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i class="fa fa-search" style="position: absolute; right: 60px; top: 110px;"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class=" text-primary">
                                                                <tr>
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
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                // Lakukan koneksi ke database
                                                                include 'koneksi.php';

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
                                                                        echo "<td class='text-center'>" . $row['nama_mentor'] . "</td>";
                                                                        echo "<td class='text-center'>" . $row['nama_kelas'] . "</td>";
                                                                        echo "<td class='text-center'>" . $row['tahun_ajaran'] . "</td>";
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
                                <!-- end course content container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start footer -->

    <footer id="mu-footer">
        <!-- start footer top -->
        <div class="mu-footer-top">
            <div class="container">
                <div class="mu-footer-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Profile</h4>
                                <ul>
                                    <li><a href="profile_ppa">Profile PPA</a></li>
                                    <li><a href="profile_ppa#visi&misi">Visi & Misi</a></li>
                                    <li><a href="profile_ppa#struktur_ppa">Struktur Organisasi PPA</a></li>
                                    <li><a href="profile_ppa#perkembangan_anak">Pekembangan Anak</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Layanan</h4>
                                <ul>
                                    <li><a href="mentor">Mentor</a></li>
                                    <li><a href="anak">Anak</a></li>
                                    <li><a href="kelas">Kelas</a></li>
                                    <li><a href="jadwal">Jadwal</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Belum Berlangganan?</h4>
                                <p>Yuk Login! Agar Dapat Melihat Data Lebih Lengkap</p>
                                <form class="mu-subscribe-form">
                                    <a href="login" class="mu-subscribe-btn" type="submit">
                                        Login <i class="fa fa-user"></i>
                                    </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Contact</h4>
                                <address>
                                    <p>Jl.Perintis Kemerdekaan 19 Oebufu Kota Kupang </p>
                                    <p>Kode Pos : 85111</p>
                                    <p>Email: ppa@gmail.com</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p>
                        &copy;Designed by
                        <a href="http://www.markups.io/" rel="nofollow">Febriani Yubelium Monas</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

    <script>
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara default

            var searchQuery = document.getElementById("searchQuery").value
                .toLowerCase(); // Mendapatkan nilai pencarian dari input dan mengonversinya menjadi huruf kecil
            var searchUrl;

            // Tentukan URL pencarian berdasarkan kata kunci pencarian
            if (searchQuery.includes("profil") || searchQuery.includes("profile") || searchQuery.includes("pro") ||
                searchQuery.includes("profile ppa") || searchQuery.includes("ppa") || searchQuery.includes(
                    "tentang") || searchQuery.includes("tentang kami") || searchQuery.includes("pusat") ||
                searchQuery.includes("pusat pelayanan") || searchQuery.includes("pusat pelayanan anak")
            ) {
                searchUrl = "profile_ppa?search_query=" + encodeURIComponent(
                    searchQuery); // Jika kata kunci adalah info, informasi, atau infor, arahkan ke halaman info.php
            } else if (searchQuery.includes("v") || searchQuery.includes("visi") || searchQuery.includes("misi") ||
                searchQuery.includes("visi dan misi") || searchQuery.includes("visi & misi") || searchQuery
                .includes("m") || searchQuery.includes("vis") || searchQuery.includes("mis")) {
                searchUrl = "profile_ppa#visi&misi?search_query=" + encodeURIComponent(
                    searchQuery); // Jika kata kunci adalah video atau videos, arahkan ke halaman video.php
            } else if (searchQuery.includes("struk") || searchQuery.includes("struktur") || searchQuery.includes("struktur ppa") || searchQuery.includes("stu") || searchQuery.includes("struktur pusat pelayanan anak")) {
                searchUrl = "profile_ppa#struktur_ppa?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("per") || searchQuery.includes("perkembangan") || searchQuery.includes("perkembangan anak")) {
                searchUrl = "profile_ppa#perkembangan_anak?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("me") || searchQuery.includes("men") ||
                searchQuery.includes("mentor")) {
                searchUrl = "mentor?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("an") || searchQuery.includes("anak") || searchQuery.includes(
                    "ank")) {
                searchUrl = "anak?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("kel") || searchQuery.includes("kel") || searchQuery.includes(
                    "kelas")) {
                searchUrl = "kelas?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("jad") || searchQuery.includes("jad") || searchQuery.includes(
                    "jadwal")) {
                searchUrl = "jadwal?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("keg") || searchQuery.includes("keg") || searchQuery.includes(
                    "kegiatan")) {
                searchUrl = "kegiatan?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("lo") || searchQuery.includes("log") || searchQuery.includes(
                    "login")) {
                searchUrl = "login?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("ban") || searchQuery.includes("bantu") || searchQuery.includes(
                    "bantuan")) {
                searchUrl = "bantuan?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("spo") || searchQuery.includes("spon") || searchQuery.includes(
                    "sponsor")) {
                searchUrl = "sponsor?search_query=" + encodeURIComponent(searchQuery);
            } else if (searchQuery.includes("kontak") || searchQuery.includes("contact") || searchQuery.includes(
                    "kon")) {
                searchUrl = "contact?search_query=" + encodeURIComponent(searchQuery);
            } else {
                searchUrl = "404"; // Jika tidak ada kata kunci yang cocok, arahkan ke halaman 404.php
            }

            // Lakukan pengiriman permintaan HTTP ke URL pencarian
            fetch(searchUrl)
                .then(function(response) {
                    if (response.ok) {
                        // Jika permintaan berhasil, tampilkan halaman hasil pencarian
                        window.location.href = searchUrl;
                    } else {
                        // Jika tidak ada hasil yang ditemukan, tampilkan halaman 404
                        window.location.href = "404";
                    }
                })
                .catch(function(error) {
                    console.error("Error:", error);
                });
        });
    </script>
    <!-- jQuery library -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="assets/js/waypoints.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
</body>

</html>