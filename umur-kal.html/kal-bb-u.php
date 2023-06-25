<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kalkulator  Berat Badan Menurut Umur</title>
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
    <link rel="stylesheet" href="../css/kalbbu.css">
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
                                            <li><a target=”_blank” href="../kalkulatorotomatis/bbu/bbulaki.php">Putra</a></li>
                                                <li><a target=”_blank” href="../kalkulatorotomatis/bbu/bbucewe.php">Putri</a></li>
                                                
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
        <!--Berat Badan Umur-->
    <!--Berat Badan Umur-->
    <!--Berat Badan Umur-->
    <!--Berat Badan Umur-->
    <!--Berat Badan Umur-->
    <div class="beratbadan-umur justify-content-center" id="bb_u">
        <h1 id="judul">Kalkulator Berat Badan Menurut Umur</h1> 
        <img src="../gis/beratbadanmenurutumur.png" style="max-width:100%;height:auto;" id="zscorebbu" alt="">
        <div class="perhitungan-atas">
          <p>Hitungan Atas</p>
          <input type="text" placeholder="Berat Badan"
          id="bb">
          <input type="text" placeholder="Median Baku" id="mb"> <br>
          <button class="bt btn-1 "id="sub">-</button>
          <input type="text" readonly id="hasil" >
          <script type="text/javascript">
          var n1 = document.getElementById("bb")
          var n2 = document.getElementById("mb")
          var res = document.getElementById("hasil");
          document.getElementById("sub").addEventListener("click", function(){
            res.value =
            parseFloat(n1.value)-parseFloat(n2.value);
          });
          
          </script>
          </div>
          <div class="perhitungan-bawah">
            <p>Hitungan Bawah</p>
            <input type="text" placeholder="Simpangan Baku"id="sb">
            <input type="text" placeholder="Median Baku" id="mb2"> <br>
            <button class="bt btn-2" id="subi">Positif</button>
            <button class="bt btn-1 "id="subsub">Negatif</button>
            <input type="text" readonly id="hasil2" >
            <script type="text/javascript">
            var n3 = document.getElementById("sb")
            var n4 = document.getElementById("mb2")
            var result = document.getElementById("hasil2");
            document.getElementById("subi").addEventListener("click", function(){
              result.value =
              parseFloat(n3.value)-parseFloat(n4.value)});
            document.getElementById("subsub").addEventListener("click", function(){
            result.value =
            parseFloat(n4.value)-parseFloat(n3.value);
            });
            </script>
            </div>
            <div class="hitungan-atas-dibagi-hitungan-bawah">
            <p>Maka didapat Z-Scorenya yaitu </p>
            <input type="text" readonly id="hasil12" /> <br>
            <button type="button" class="bt btn-3" id="div" > Hitung </button>
            <script type="text/javascript">
            var n5 = document.getElementById("hasil")
            var n6 = document.getElementById("hasil2")
            var r = document.getElementById("hasil12");
            document.getElementById("div").addEventListener("click", function(){
              r.value =
              parseFloat(n5.value)/parseFloat(n6.value);
            });
            </script>  
        </div> 
      </div>
<style>
    #subsub{
    margin-left: 10px;
    margin-right: 10px;
    font-size:large;
    color: white;
    background-color: #1A68F3 ;
    border-color: #1A68F3;
    font-style: initial;
    font-weight: bold;
    width: 100px;
    
    }
    #hasil2{
    background-color: rgb(212, 211, 211);
    width: 64.5%;
    margin-right: 0px;
    margin-left: 5px;
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
        <img src="../gis/tablegis/laki/bbumur0-60.png" alt="DTlaki" id="tabledatalaki1">
        <img src="../gis/tablegis/laki/bbumur0-60kedua.png" alt="DTlaki" id="tabledatalaki1">
    </div>
    </section>
</section>

<section class="container hide">
    <section class="section-title ">
        <button onclick="showHideDTcw()" id="tomboldatacw">Table Data Perempuan</button>
    </section>
    <section class="dt-cw"  >
    <div class="dtcw">
        <img src="../gis/tablegis/perempuan/bbumur0-60.png" alt="DTcw" id="tabledatacewe1">
        <img src="../gis/tablegis/perempuan/bbumur0-60kedua.png" alt="DTcw" id="tabledatacewe1">
        <img src="../gis/tablegis/perempuan/bbumur0-60ketiga.png" alt="DTcw" id="tabledatacewe1">
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
                                <a href="credit.html" target="_blank"><h4>Credit</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-number mb-50">
                                <h4><span>+6222 </span>7564 108</h4>
                                <h3>see.secretariat@telkomuniversity.ac.id</h3>
                                <h3>Gedung Deli
                                    Telekomunikasi Terusan Buah Batu
                                    Bandung 40257 Indonesia</h3>
                                <style>
                                    h3{
                                        color:rgba(255, 255, 255, 0.877);
                                        font-size: small;

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
    <script src="../js/kalbbu.js"></script>
    </body>
</html>