<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DESTING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a >
                                <font size="15"><b>Desting</b></font>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="#berita">Berita</a></li>
                                        <li><a href="#kalgis">Kalkulator G.I.S</a></li>
                                        <li><a href="#waktu-imunisasi">Jadwal Imunisasi</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#foot" class="btn header-btn">Kontak</a>
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--HEAD-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>Safety First</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">Mari bersama-sama kita menjaga kesehatan balita agar tercipta penerus bangsa yang sehat dan kuat. </p>
                                <a href="crudfinal/Login_v1/index.php" target="_blank" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Login Admin <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!--? FUNGSI MENU AWAL  -->
    <div>
    <div id="map"></div>
 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqztKw2Lp7A0s5fAyRzt-uc1VaWRXdMkc&callback=GMPStart" async defer></script>
<script type="text/javascript">   
    
    let map;
    let infoWindow;
    let mapOptions;
    let bounds;
 
    function GMPStart(){
        // infoWindow ini digunakan untuk menampilkan pop-up diatas marker terkait lokasi markernya
        infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta yang bisa diubah-ubah
        mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Deklarasi untuk melakukan load map Google Maps API
        map = new google.maps.Map(document.getElementById('map'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php
            // Sesuaikan dengan database yang sudah Anda buat diawal
            $host     = "localhost";
            $username = "root";
            $password = "";
            $Dbname   = "final";
            $db       = new mysqli($host,$username,$password,$Dbname);
            
            $query = $db->query("SELECT * FROM latlng_kota_kab ORDER BY kota_kab ASC");
            while ($row = $query->fetch_assoc()) {
                $nama = $row["kota_kab"];
                $lat  = $row["latitude"];
                $long = $row["longitude"];
                echo "addMarker($lat, $long, '$nama');\n";
            }
        ?>
        // Proses membuat marker 
        var location;
        var marker;
        function addMarker(lat, lng, info){
            location = new google.maps.LatLng(lat, lng);
            bounds.extend(location);
            marker = new google.maps.Marker({
                map: map,
                position: location
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        // Proses ini dapat menampilkan informasi lokasi Kota/Kab ketika diklik dari masing-masing markernya
        function bindInfoWindow(marker, map, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
    }
</script>
 </div>
    <!-- FUNGSI MENU AKHIR -->

    <!--? Blog start -->
    <div class="home_blog-area section-padding20" id="berita">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Berita</span>
                        <h1>Mari kita jaga kesehatan diri kita serta keluarga kita.</h>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="gis/berita/1.jpg" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Kesehatan</span>
                                <p>17 Mei 2022</p>
                            </div>
                            <h4><a >Manfaat Imunisasi Penting untuk Mencegah Penyakit Menular dan Tidak Menular, Wajib Tahu!</a></h4>
                            <a href="https://dinkes.kalbarprov.go.id/manfaat-imunisasi-penting-untuk-mencegah-penyakit-menular-dan-tidak-menular-wajib-tahu/" target="_blank" class="read-more1">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="gis/berita/2.jpg" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Kesehatan</span>
                                <p>05 Oktober 2022</p>
                            </div>
                            <h4><a >4 Cara Mengatasi Masalah Stunting pada Balita</a></h4>
                            <a href="https://www.halodoc.com/artikel/4-cara-mengatasi-masalah-stunting-pada-balita" target="_blank" class="read-more1">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="gis/berita/3.jpg" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Kesehatan</span>
                                <p>13 April 2021</p>
                            </div>
                            <h4><a >5 Tips Menjaga Kesehatan Anak Usia 1-2 Tahun</a></h4>
                            <a href="https://www.halodoc.com/artikel/4-tips-menjaga-kesehatan-anak-usia-1-2-tahun" target="_blank" class="read-more1">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!--? About Start-->
    <style>
        .zz{
            background-color: rgb(241, 243, 245);
        }
    </style>
    <div class="zz">
        <div class="container">
            <div id="kalgis" class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-35">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <span>Z-SCORE</span>
                            <h2>Menghitung Z-Score Putra & Putri Anda</h2>
                        </div>
                        <p></p>
                        <div class="about-btn1 mb-30">
                            <a href="umur-kal.html/landing.php" class="btn about-btn">Kalkulator G.I.S.<i class="ti-arrow-right"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <br>
                        
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- About  End-->
    <!--? department_area_start  -->
    <section class="section5">
        <section id="waktu-imunisasi"></section>
        <div class="content-description">
            <h2 style="text-align: center;">Jadwal Imunisasi Anak</h2>
            <p style="text-align: center;">Mengutip dari situs resmi Ikatan Dokter Anak Indonesia (IDAI), berikut jadwal imunisasi anak usia 0-18 tahun</p>
            <p style="text-align: center;"><img src="gis/Jadwal Imunisasi.JPG" alt="Jadwal Imunisasi"></p>
            <p style="text-align: center;">
                Sumber :<a href="https://www.idai.or.id/tentang-idai/pernyataan-idai/jadwal-imunisasi-idai-2020" target="_blank"><h1 id="imunisasihuruf">https://www.idai.or.id/tentang-idai/pernyataan-idai/jadwal-imunisasi-idai-2020</h1> </a>
                <style>
                    #imunisasihuruf{
                        font-color: rgb(0, 0, 0);
                        text-align: center;
                        font-size: medium;
                    }
                </style>
            </p>
        </div>
    </section>

    
    <!-- gallery Products End -->
    
    </main>

    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg" id="foot">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <h1 style="color: rgb(255, 255, 255);" id="dst">DESTING</h1>
                                    <style>
                                        #dst{
                                            
                                            display: block;
                                            font-size: 6em;
                                            font-weight: bold;
                                            
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <a href="credit.php" target="_blank"><h4>Credit</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>+6222 </span>7564 108</h4>
                                    <p>see.secretariat@telkomuniversity.ac.id</p>
                                    <p>Gedung Deli
                                        Telekomunikasi Terusan Buah Batu
                                        Bandung 40257 Indonesia</p>
                                </div>
                                <!-- Form -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Rievnu Muhammad | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-center">
                                <a href="https://www.instagram.com/ftetelkomuniv/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://see.telkomuniversity.ac.id/" target="_blank"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>