<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPA | Home</title>

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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700" rel="stylesheet"
        type="text/css" />
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
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
                        <li class="active"><a href="index">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profile_ppa">Profile PPA</a></li>
                                <li><a href="profile_ppa#visi&misi">Visi & Misi</a></li>
                                <li><a href="profile_ppa#struktur_ppa">Struktur Organisasi PPA</a></li>
                                <li><a href="profile_ppa#perkembangan_anak">Pekembangan Anak</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="mentor">Mentor</a></li>
                                <li><a href="anak">Anak</a></li>
                                <li><a href="kelas">Kelas</a></li>
                                <li><a href="jadwal">Jadwal</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="kegiatan">Kegiatan</a></li>
                                <li><a href="bantuan">Bantuan</a></li>
                                <li><a href="sponsor">Sponsor</a></li>
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
                            <input type="search" id="searchQuery" name="search_query"
                                placeholder="Apa Yang Anda Cari?" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->

    <!-- Start Slider -->
    <section id="mu-slider">
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="assets/img/slider/3-bg-sekolah.jpg" alt="img" />
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Selamat Datang di Pusat Pengembangan Anak</h4>
                <span></span>
                <h2>Kami Akan Membantu Anak Untuk Belajar</h2>
                <p>
                    Kami berkomitmen untuk membantu anak-anak belajar dan berkembang dengan optimal melalui
                    program-program edukatif yang menyenangkan dan inspiratif.
                </p>
                <a href="#" class="cariData mu-read-more-btn">
                    Cari data <i class="fa fa-search"></i>
                </a>
            </div>
        </div>
        <!-- Start single slider item -->
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="assets/img/slider/4-bg-sekolah.jpg" alt="img" />
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Pendidikan Gratis Yang Berkualitas</h4>
                <span></span>
                <h2>Tempat Pendidikan Anak Yang Menyenangkan</h2>
                <p>
                    Menyediakan pendidikan gratis yang berkualitas, kami menciptakan lingkungan belajar yang
                    menyenangkan untuk mendukung pertumbuhan dan perkembangan anak secara holistik.
                </p>
                <a href="#" class="cariData mu-read-more-btn">
                    Cari data <i class="fa fa-search"></i>
                </a>
            </div>
        </div>
        <!-- Start single slider item -->
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="assets/img/slider/5-bg-sekolah.jpg" alt="img" />
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Khusus Untuk Pendidikan</h4>
                <span></span>
                <h2>Pendidikan Untuk Semua Anak</h2>
                <p>
                    Kami percaya bahwa setiap anak berhak mendapatkan pendidikan yang baik. Dengan program-program kami,
                    pendidikan menjadi aksesibel dan inklusif untuk semua anak.
                </p>
                <a href="#" class="cariData mu-read-more-btn">
                    Cari data <i class="fa fa-search"></i>
                </a>
            </div>
        </div>
        <!-- Start single slider item -->
    </section>
    <!-- End Slider -->

    <!-- Start service  -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>Belajar</h3>
                            <p>
                                Fasilitas belajar yang komprehensif untuk mendukung proses pendidikan dengan materi
                                berkualitas.
                            </p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users"></span>
                            <h3>Mentor</h3>
                            <p>
                                Tenaga pengajar profesional <br />yang berdedikasi untuk membimbing dan menginspirasi
                                para murid.
                            </p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-table"></span>adalah
                            <h3>Ruang Kelas</h3>
                            <p>
                                Ruang kelas yang nyaman dan dilengkapi dengan fasilitas untuk mendukung pembelajaran
                                efektif.
                            </p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service  -->

    <!-- Start about us -->
    <section id="mu-about-us">
        <div class="container" id="about_us">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="mu-title">
                                        <h2>Tentang Kami</h2>
                                    </div>
                                    <!-- End Title -->
                                    <p class="short-description">
                                        Pusat Pengembangan Anak (PPA) merupakan suatu lembaga nirbala yang didirikan
                                        dalam rangka memberikan pelayanan kepada masyarakat secara umum. Pusat
                                        Pengembangan Anak adalah bentuk utama kemitraan Yayasan Compassion Indonesia
                                        (YCI) dengan gereja mitra.
                                        Melalui Pusat Pengembangan Anak (PPA), gereja mitra menjangkau dan melayani anak
                                        yang membutuhkan. Anak-anak dilayani dalam Pusat Pengembangan Anak (PPA) mulai
                                        dari usia tiga tahun sampai dua puluh tahun. Dengan
                                        pelayanan dalam jangka waktu yang panjang, Pusat Pengembangan Anak (PPA) menjadi
                                        seperti keluarga bagi anak-anak selain keluarga inti di rumah.
                                    </p>
                                    <div class="long-description" style="display: none">
                                        <p>
                                            Pusat Pengembangan Anak adalah sebuah organisasi yang mengembangkan anak
                                            secara holistik, berkomitmen untuk menjadi pembela anak, untuk membebaskan
                                            mereka dari kemiskinan baik secara akhlak, fisik, mental, intelektual dan
                                            emosional. Yayasan ini terdapat
                                            di Afrika, Eropa, Amerika, dan Asia. Di Asia, compassion terdapat di negara
                                            Bangladesh, India, Sri Lanka, Thailand, dan Indonesia. Di Indonesia,
                                            compassion berkantor di Manado dan Bandung. Compassion Indonesia
                                            berdiri sejak tahun 1968.
                                        </p>
                                        <p>
                                            Pusat Pengembangan Anak (PPA) merupakan suatu lembaga pengembangan bagi
                                            anak-anak dari keluarga tidak mampu yang bekerja sama dengan suatu lembaga
                                            Pelayanan Pengembangan Anak yaitu Yayasan Compassion yang bertempat di
                                            Sulawesi Utara (Manado).
                                        </p>
                                        <p>
                                            <b>Visi dan Misi</b> <br />Berikut adalah isi Visi dan Misi dari PPA IO0496
                                            Maranatha:
                                        </p>
                                        <ul>
                                            <li>
                                                <b>Visi</b><br />Visi Pusat pengembangan Anak IO0496 Marantha Oebufu
                                                yaitu:
                                                <i>“Terwujudnya pusat pengembangan anak secara
                                                    holistic yang memiliki karakter seperti Yesus
                                                    Kristus.”</i>
                                            </li>
                                            <li>
                                                <b>Misi</b><br />Misi Pusat Pengembangan Anak IO0496 Maranatha Oebufu
                                                yaitu:
                                                <i>“Sebagai tanggapan atas Anugerah Tuhan maka kami
                                                    sepakat untuk melayani dan membina anak-anak PPA
                                                    IO0496 secara holistic untuk menjadi pemimpin masa
                                                    depan yang takut akan Tuhan.”</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button id="toggle-description" class="tombol" onclick="toggleDescription()">
                                        Lihat Selengkapnya >>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-right">
                                    <img src="assets/img/slider/3-bg-sekolah.jpg" alt="img" width="100%" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <script>
    function toggleDescription() {
        const longDescription = document.querySelector(".long-description");
        const button = document.getElementById("toggle-description");

        if (longDescription.style.display === "none") {
            longDescription.style.display = "block";
            button.textContent = "Sembunyikan";
        } else {
            longDescription.style.display = "none";
            button.textContent = "Lihat Selengkapnya >>";
        }
    }
    </script>

    <!-- Start about us counter -->
    <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <?php
                                    include 'koneksi.php';

                                    // Query SQL untuk menghitung jumlah data dalam tabel kegiatan
                                    $query_count_kegiatan = "SELECT COUNT(*) AS total_kegiatan FROM kegiatan";
                                    $result_count_kegiatan = mysqli_query($koneksi, $query_count_kegiatan);

                                    if ($result_count_kegiatan) {
                                        $row_count_kegiatan = mysqli_fetch_assoc($result_count_kegiatan);
                                        $total_data_kegiatan = $row_count_kegiatan['total_kegiatan'];

                                        echo "<h4 class='counter'>$total_data_kegiatan</h4>";
                                    } else {
                                        echo "<h3 class='font-weight-bolder'>Error</h3>";
                                    }

                                    mysqli_close($koneksi);
                                    ?>
                                    <p>Kegiatan</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <?php
                                    include 'koneksi.php';

                                    // Query SQL untuk menghitung jumlah data dalam tabel anak
                                    $query_count_anak = "SELECT COUNT(*) AS total_anak FROM anak";
                                    $result_count_anak = mysqli_query($koneksi, $query_count_anak);

                                    if ($result_count_anak) {
                                        $row_count_anak = mysqli_fetch_assoc($result_count_anak);
                                        $total_data_anak = $row_count_anak['total_anak'];

                                        echo "<h4 class='counter'>$total_data_anak</h4>";
                                    } else {
                                        echo "<h3 class='font-weight-bolder'>Error</h3>";
                                    }

                                    mysqli_close($koneksi);
                                    ?>
                                    <p>Anak</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-chart-line"></span>
                                    <?php
                                    include 'koneksi.php';

                                    // Query SQL untuk menghitung jumlah data dalam tabel perkembangan
                                    $query_count_perkembangan = "SELECT COUNT(*) AS total_perkembangan FROM perkembangan";
                                    $result_count_perkembangan = mysqli_query($koneksi, $query_count_perkembangan);

                                    if ($result_count_perkembangan) {
                                        $row_count_perkembangan = mysqli_fetch_assoc($result_count_perkembangan);
                                        $total_data_perkembangan = $row_count_perkembangan['total_perkembangan'];

                                        echo " <h4 class='counter'>$total_data_perkembangan</h4>";
                                    } else {
                                        echo "<h3 class='font-weight-bolder'>Error</h3>";
                                    }

                                    mysqli_close($koneksi);
                                    ?>
                                    <p>Perkembangan</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-handshake"></span>
                                    <?php
                                    include 'koneksi.php';

                                    // Query SQL untuk menghitung jumlah data dalam tabel bantuan
                                    $query_count_bantuan = "SELECT COUNT(*) AS total_bantuan FROM bantuan";
                                    $result_count_bantuan = mysqli_query($koneksi, $query_count_bantuan);

                                    if ($result_count_bantuan) {
                                        $row_count_bantuan = mysqli_fetch_assoc($result_count_bantuan);
                                        $total_data_bantuan = $row_count_bantuan['total_bantuan'];

                                        echo "<h4 class='counter'>$total_data_bantuan</h4>";
                                    } else {
                                        echo "<h3 class='font-weight-bolder'>Error</h3>";
                                    }

                                    mysqli_close($koneksi);
                                    ?>
                                    <p>Bantuan</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us counter -->

    <!-- Start features section -->
    <section id="mu-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-features-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Fasilitas Kami!</h2>
                            <p>
                                Kami menyediakan berbagai fasilitas unggulan yang dirancang untuk mendukung proses
                                pembelajaran Anda agar lebih efektif dan menyenangkan. Dari metode pembelajaran inovatif
                                hingga dukungan mentor berkualitas, semua tersedia di sini untuk semua anak.
                            </p>
                        </div>
                        <!-- End Title -->
                        <!-- Start features content -->
                        <div class="mu-features-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-book"></span>
                                        <h4>Pembelajaran Menarik dan Mudah</h4>
                                        <p>
                                            Kami menawarkan materi pembelajaran yang disusun secara interaktif dan mudah
                                            dipahami. Dengan berbagai metode kreatif, belajar menjadi aktivitas yang
                                            menyenangkan dan tidak membosankan bagi anak-anak.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-users"></span>
                                        <h4>Mentor Terbaik</h4>
                                        <p>
                                            Kami memiliki tim mentor yang berpengalaman dan ahli di bidangnya. Mereka
                                            siap membantu dan membimbing Anak-anak dalam setiap langkah pembelajaran,
                                            memastikan Anak-anak mencapai hasil terbaik.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="mu-single-feature">
                                        <span class="fa fa-certificate"></span>
                                        <h4>Sertifikat</h4>
                                        <p>
                                            Setelah menyelesaikan kursus, Anak-anak akan mendapatkan sertifikat yang
                                            diakui secara resmi seperti (wisudah). Sertifikat ini dapat meningkatkan
                                            nilai profesional Anak-anak di dalam pendidikan dan menjadi bukti
                                            perkembangan dari setiam Anak-anak.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End features content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End features section -->

    <!-- Start our teacher -->
    <section id="mu-our-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-our-teacher-area">
                        <!-- begain title -->
                        <div class="mu-title">
                            <h2>Sponsor Mu</h2>
                            <p>
                                Sponsor adalah orang yang memberikan bantuan pada Pusat Pelayanan Anak
                            </p>
                        </div>
                        <!-- end title -->

                        <!-- begain our teacher content -->
                        <div class="mu-our-teacher-content">
                            <div class="row">
                                <?php
                                include 'koneksi.php'; // Sertakan file koneksi.php

                                // Lakukan query untuk mengambil data dari tabel sponsor
                                $query = "SELECT nama, fp FROM sponsor";
                                $result = mysqli_query($koneksi, $query);

                                // Periksa apakah query berhasil dieksekusi
                                if (!$result) {
                                    die("Query Error: " . mysqli_error($koneksi));
                                }

                                // Lakukan perulangan untuk menampilkan data sponsor
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <?php if (!empty($row['fp'])) : ?>
                                            <img class="avatar" src="pengguna/sponsor/data_fp/<?php echo $row['fp']; ?>"
                                                alt="...">
                                            <?php else : ?>
                                            <img class="avatar" src="assets/img/anime3.png" alt="Profile Photo">
                                            <?php endif; ?>
                                            <div class="mu-our-teacher-social">
                                                <a href="https://www.facebook.com/"><img src="assets/img/slider/fb.png"
                                                        alt="Facebook" /></a>
                                                <a href="https://www.instagram.com/"><img src="assets/img/slider/ig.png"
                                                        alt="Instagram" /></a>
                                                <a href="https://wa.me/"><img src="assets/img/slider/wa.png"
                                                        alt="WhatsApp" /></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4><?php echo $row['nama']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }

                                // Bebaskan hasil query
                                mysqli_free_result($result);

                                // Tutup koneksi
                                mysqli_close($koneksi);
                                ?>


                            </div>
                        </div>
                        <!-- End our teacher content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our teacher -->

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
        } else if (searchQuery.includes("struk") || searchQuery.includes("struktur") || searchQuery.includes(
                "struktur ppa") || searchQuery.includes("stu") || searchQuery.includes(
                "struktur pusat pelayanan anak")) {
            searchUrl = "profile_ppa#struktur_ppa?search_query=" + encodeURIComponent(searchQuery);
        } else if (searchQuery.includes("per") || searchQuery.includes("perkembangan") || searchQuery.includes(
                "perkembangan anak")) {
            searchUrl = "profile_ppa#perkembangan_anak?search_query=" + encodeURIComponent(searchQuery);
        } else if (searchQuery.includes("me") || searchQuery.includes("men") ||
            searchQuery.includes("mentor")) {
            searchUrl = "mentor?search_query=" + encodeURIComponent(searchQuery);
        } else if (searchQuery.includes("ana") || searchQuery.includes("anak") || searchQuery.includes(
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