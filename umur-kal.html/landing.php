<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kalkulator Umur</title>
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
                                        <li><a target=”_blank” href="https://www.youtube.com/watch?v=XfrWMDMvm6Q&t=675s">Tutorial Kalkulator G.I.S.</a></li>
                                        <li><a href="#">Kalkulator G.I.S.</a>
                                            <ul class="submenu">
                                                <li><a href="kal-bb-u.php"  target="_blank">Berat Badan Menurut Umur</a></li>
                                                <li><a href="kal-tb-u.php"  target="_blank">Tinggi Badan Menurut Umur</a></li>
                                                <li><a href="kal-imt-u.php" target="_blank">Indeks Masa Tubuh Menurut Umur</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#contact" class="btn header-btn">Contact</a>
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
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>Selamat Datang di Halaman Kalkulator G.I.S</h2>
                        <br>
                        <h1 size="2">Untuk menggunakan kalkulator GIS, harap terlebih dahulu menghitung umur putra/putri anda. </h1>
                        <br>

                        <form >
                            <p>Masukan Tanggal Lahir Anda</p>
    <input type="date" id="bdt"/>
    <input type="button" id="done" value="Hitung" />
    
    <p id="year"></p>
    <p id="month"></p>
    <script type="text/javascript">
        document.querySelector("#done").addEventListener("click", function() {
            const update = function(){
                let bdt = document.querySelector("#bdt").value,
                bday = new Date(bdt),
                bday_val = bday.getTime(),
                today = new Date(),
                now = today.getTime(),
                value = now - bday_val,
                var_month = Math.floor(value /(1000 * 60 * 60 * 24 * 30.4375)),
                var_year = Math.floor(value /(1000 * 60 * 60 * 24 * 365.25));
            let insert = function(x,y) {
                document.querySelector(x).innerHTML = y;
            }
            insert("#year", "Umur anak anda adalah " + var_year + " tahun");
            insert("#month", "atau " + var_month + " bulan");
            };
            setInterval (update, 10)
        })
    </script>

<style>
        #bdt{
            width: 50%;
            font-size: xx-large;
        }
        #done{
            width: 30%;
            font-size: xx-large;
        }
        #year{
            font-size: x-large;
        }
        #month{
            font-size: x-large;
        }
    </style>
                            
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    


    <!-- Team End -->
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
                                <a href="../credit.php" target="_blank"><h4>Credit</h4></a>
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
        <!-- Footer End-->
    </footer>
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
    </body>
</html>