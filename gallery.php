<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Varsity | Gallery</title>

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="assets/img/2-logo.png"
      type="image/x-icon"
    />

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <!-- Fancybox slider -->
    <link
      rel="stylesheet"
      href="assets/css/jquery.fancybox.css"
      type="text/css"
      media="screen"
    />
    <!-- Theme color -->
    <link
      id="switcher"
      href="assets/css/theme-color/default-theme.css"
      rel="stylesheet"
    />

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700"
      rel="stylesheet"
      type="text/css"
    />

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
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#navbar"
              aria-expanded="false"
              aria-controls="navbar"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index"
              ><i class="fa fa-university"></i><span>Varsity</span></a
            >
            <!-- IMG BASED LOGO  -->
            <!-- <a class="navbar-brand" href="index"><img src="assets/img/logo.png" alt="logo"></a> -->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="index">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Course <span class="fa fa-angle-down"></span
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="course">Course Archive</a></li>
                  <li><a href="course-detail">Course Detail</a></li>
                </ul>
              </li>
              <li class="active"><a href="gallery">Gallery</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Blog <span class="fa fa-angle-down"></span
                ></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="blog-archive">Blog Archive</a></li>
                  <li><a href="blog-single">Blog Single</a></li>
                </ul>
              </li>
              <li><a href="contact">Contact</a></li>
              <li><a href="404">404 Page</a></li>
              <li>
                <a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a>
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
              <form class="mu-search-form">
                <input
                  type="search"
                  placeholder="Type Your Keyword(s) & Hit Enter"
                />
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
              <h2>Gallery</h2>
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End breadcrumb -->
    <!-- Start gallery  -->
    <section id="mu-gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-gallery-area">
              <!-- start title -->
              <div class="mu-title">
                <h2>Some Moments</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Maiores ut laboriosam corporis doloribus, officia, accusamus
                  illo nam tempore totam alias!
                </p>
              </div>
              <!-- end title -->
              <!-- start gallery content -->
              <div class="mu-gallery-content">
                <!-- Start gallery menu -->
                <div class="mu-gallery-top">
                  <ul>
                    <li class="filter active" data-filter="all">All</li>
                    <li class="filter" data-filter=".lab">Lab</li>
                    <li class="filter" data-filter=".classroom">Class Room</li>
                    <li class="filter" data-filter=".library">Library</li>
                    <li class="filter" data-filter=".cafe">Cafe</li>
                    <li class="filter" data-filter=".others">Others</li>
                  </ul>
                </div>
                <!-- End gallery menu -->
                <div class="mu-gallery-body">
                  <ul id="mixit-container" class="row">
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/1.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Web Design</p>
                              <a
                                href="assets/img/gallery/big/1.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/2.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Animation</p>
                              <a
                                href="assets/img/gallery/big/2.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/3.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Math</p>
                              <a
                                href="assets/img/gallery/big/3.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/4.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>English</p>
                              <a
                                href="assets/img/gallery/big/4.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/5.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Graphics</p>
                              <a
                                href="assets/img/gallery/big/5.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/6.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Health</p>
                              <a
                                href="assets/img/gallery/big/6.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/7.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Sports</p>
                              <a
                                href="assets/img/gallery/big/7.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/8.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Health</p>
                              <a
                                href="assets/img/gallery/big/8.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- start single gallery image -->
                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                      <div class="mu-single-gallery">
                        <div class="mu-single-gallery-item">
                          <div class="mu-single-gallery-img">
                            <a href="#"
                              ><img
                                alt="img"
                                src="assets/img/gallery/small/9.jpg"
                            /></a>
                          </div>
                          <div class="mu-single-gallery-info">
                            <div class="mu-single-gallery-info-inner">
                              <h4>Image Title</h4>
                              <p>Sports</p>
                              <a
                                href="assets/img/gallery/big/9.jpg"
                                data-fancybox-group="gallery"
                                class="fancybox"
                                ><span class="fa fa-eye"></span
                              ></a>
                              <a href="#" class="aa-link"
                                ><span class="fa fa-link"></span
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- end gallery content -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End gallery  -->

    <!-- Start footer -->
    <footer id="mu-footer">
      <!-- start footer top -->
      <div class="mu-footer-top">
        <div class="container">
          <div class="mu-footer-top-area">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                  <h4>Information</h4>
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Course</a></li>
                    <li><a href="">Event</a></li>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Term Of Use</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                  <h4>Student Help</h4>
                  <ul>
                    <li><a href="">Get Started</a></li>
                    <li><a href="#">My Questions</a></li>
                    <li><a href="">Download Files</a></li>
                    <li><a href="">Latest Course</a></li>
                    <li><a href="">Academic News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                  <h4>News letter</h4>
                  <p>Get latest update, news & academic offers</p>
                  <form class="mu-subscribe-form">
                    <input type="email" placeholder="Type your Email" />
                    <button class="mu-subscribe-btn" type="submit">
                      Subscribe!
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                  <h4>Contact</h4>
                  <address>
                    <p>P.O. Box 320, Ross, California 9495, USA</p>
                    <p>Phone: (415) 453-1568</p>
                    <p>Website: www.markups.io</p>
                    <p>Email: info@markups.io</p>
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
              &copy; All Right Reserved. Designed by
              <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a>
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
    <script
      type="text/javascript"
      src="assets/js/jquery.fancybox.pack.js"
    ></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
