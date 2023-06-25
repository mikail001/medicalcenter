<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kalkulator Indeks Masa Tubuh Menurut Umur</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../assets/css/themify-icons.css">
	<link rel="stylesheet" href="../assets/css/slick.css">
	<link rel="stylesheet" href="../assets/css/nice-select.css">
	<link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../css/kalimtu.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
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
                                    <li><a href="../index.php">Home</a></li>
                                        <li><a target=”_blank” href="https://www.youtube.com/watch?v=XfrWMDMvm6Q&t=675s">Tutorial</a></li>
                                        <li><a href="">Kalkulator Otomatis</a>
                                            <ul class="submenu">
                                            <li><a target=”_blank” href="../kalkulatorotomatis/imtu/imtulaki24.php">Putra</a></li>
                                                <li><a target=”_blank” href="../kalkulatorotomatis/imtu/imtucewe24.php">Putri</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Kalkulator Manual</a>
                                            <ul class="submenu">
                                            <li><a target=”_blank” href="kal-bb-u.html">Berat Badan Menurut Umur</a></li>
                                                <li><a target=”_blank” href="kal-tb-u.html">Tinggi Badan Menurut Umur</a></li>
                                                <li><a target=”_blank” href="kal-imt-u.html">Indeks Masa Tubuh Menurut Umur</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#foot" class="btn header-btn">Contact</a>
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
    <!--Indeks Masa Tubuh Umur-->
    <!--Indeks Masa Tubuh Umur-->
    <!--Indeks Masa Tubuh Umur-->
    <!--Indeks Masa Tubuh Umur-->
    <!--Indeks Masa Tubuh Umur-->
    <div class="indeksmasatubuh-umur" id="imt/u">
        <h1 id="judul">Kalkulator Indeks Masa Tubuh Menurut Umur</h1> 
        <img id="zscoreimtu"src="../gis/indeksmasatubuhmenurutumur.png" alt="">
        <div class="imttbdibagikonversi">
        <input type="text" placeholder="Tinggi Badan(Meter)"id="tbkonversi">
        
        </script>
        </div>
        <div class="imtbbdibagitingggi">
            <p id="judulimt">Maka didapat IMTnya yaitu </p>
        <input type="text" placeholder="Berat Badan" id="bbimt">
        <button id="div4"> / </button>
        
        <input type="text" readonly id="hasilimt" />
        <script type="text/javascript">
          var konversi3 = document.getElementById("bbimt")
          var konversi4 = document.getElementById("tbkonversi")
          var resultimt = document.getElementById("hasilimt");
          document.getElementById("div4").addEventListener("click", function(){
            resultimt.value =
            parseFloat(konversi3.value)/parseFloat(konversi4.value);
          });
          </script>  
      </div>
      <div class="hitungan-atas">
        <p id="judulhitunganatas">Maka didapat hitungan atas yaitu </p>
        <input type="text" placeholder="Median Baku" id="mbimt">
        <button id="subimt4">-</button>
        
        <input type="text" readonly id="hasilhitunganatas" />
        <script type="text/javascript">
          var n1imt = document.getElementById("mbimt")
          var n2imt = document.getElementById("hasilimt")
          var resultimt3 = document.getElementById("hasilhitunganatas");
          document.getElementById("subimt4").addEventListener("click", function(){
            resultimt3.value =
            parseFloat(n2imt.value)-parseFloat(n1imt.value);
          });
          </script>
      </div>
      <div class="hitungan-bawah">
        <p id="judulhitunganbawah">Maka didapat hitungan bawah yaitu </p>
        <input type="text" placeholder="Simpangan Baku" id="sbimt">
        <button id="subimt5">Positif</button>
        <button id="subsubimt5">Negatif</button>
        <input type="text" readonly id="hasilhitunganbawah" /> <br>
        <script type="text/javascript">
          var n3imt = document.getElementById("sbimt")
          var n4imt = document.getElementById("mbimt")
          var resultimt4 = document.getElementById("hasilhitunganbawah");
          document.getElementById("subimt5").addEventListener("click", function(){
            resultimt4.value =
            parseFloat(n3imt.value)-parseFloat(n4imt.value)});
            document.getElementById("subsubimt5").addEventListener("click", function(){
            resultimt4.value =
            parseFloat(n4imt.value)-parseFloat(n3imt.value);
          });
          </script>
      </div>
      <div class="hitungan-atas-dibagi-hitungan-bawah">
        <p>Maka didapat Z-Scorenya yaitu</p> 
        <input type="text" readonly id="hasilzcoreimt" /> <br>
        <button id="div5">Hitung</button>
        <script type="text/javascript">
        var n7imt = document.getElementById("hasilhitunganatas")
        var n8imt = document.getElementById("hasilhitunganbawah")
        var resultzscoreimt = document.getElementById("hasilzcoreimt");
        document.getElementById("div5").addEventListener("click", function(){
          resultzscoreimt.value =
          parseFloat(n7imt.value)/parseFloat(n8imt.value);
        });
        </script>
        </div>
      </div>
<style>
    #subimt5{
    margin-left: 3px;
margin-right: 3px;
font-size:large;
color: white;
background-color: #1A68F3 ;
border-color: #1A68F3;
font-style: initial;
font-weight: bold;
width: 70px;
}
    #subsubimt5{
    margin-left: 3px;
margin-right: 4px;
font-size:large;
color: white;
background-color: #1A68F3 ;
border-color: #1A68F3;
font-style: initial;
font-weight: bold;
width: 80px;
}
#hasilhitunganbawah{
     
    width: 30%;
    margin-bottom: 10px;
}
</style>
<!--TAMMPIL ATAU SEMBUNYIKAN KONTEN-->
<!--TAMMPIL ATAU SEMBUNYIKAN KONTEN-->
<!--TAMMPIL ATAU SEMBUNYIKAN KONTEN-->
<section class="container hide">
    <section class="section-title ">
        <button onclick="showHideDTlaki()" id="tomboldatalki">Table Data Laki-Laki</button>
    </section>
    <section class="dt-laki"  >
    <div class="dtlaki">
        <img src="../gis/tablegis/laki/imtumur0-24.png" alt="DTlaki" id="tabledatalaki1">
        <img src="../gis/tablegis/laki/imtumur0-24kedua.png" alt="DTlaki" id="tabledatalaki1">
        <img src="../gis/tablegis/laki/imtumur0-24ketiga.png" alt="DTlaki" id="tabledatalaki1">
    </div>
    </section>
</section>

<section class="container hide">
    <section class="section-title ">
        <button onclick="showHideDTcw()" id="tomboldatacw">Table Data Perempuan</button>
    </section>
    <section class="dt-cw"  >
    <div class="dtcw">
        <img src="../gis/tablegis/perempuan/imtumur0-24.png" alt="DTcw" id="tabledatacewe1">
        <img src="../gis/tablegis/perempuan/imtumur0-24kedua.png" alt="DTcw" id="tabledatacewe1">
        <img src="../gis/tablegis/perempuan/imtumur24-60.png" alt="DTcw" id="tabledatacewe1">
        <img src="../gis/tablegis/perempuan/imtumur24-60kedua.png" alt="DTcw" id="tabledatacewe1">
    </div>
    </section>
</section>
</main>
<br>
<br>
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
                                <h3 style="color: rgb(255, 255, 255);" id="dst">DESTING</h3>
                                <style>
                                    #dst{
                                        
                                        display: block;
                                        font-size: 5em;
                                        
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>About Us</h4>
                                <div class="footer-pera">
                                    <a href="credit.php" target="_blank"><h3 class="info1">Credit</h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-number mb-50">
                                <h4><span>+62 </span>333444</h4>
                                <h3>posyandu@gmail.com</h3>
                                <h3>Alamat</h3>
                                <style>
                                    h3{
                                        color:rgba(255, 255, 255, 0.877);

                                    }
                                </style>
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
                            <h3><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Rievnu Muhammad | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
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

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="kalkulatorgis.js"></script>
    <script src="../js/kalimtu.js"></script>
    </body>
</html>