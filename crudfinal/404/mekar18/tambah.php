<?php
session_start();
$username = $_SESSION ['username'];
$level = $_SESSION ['level'];
if(!empty($username) && ($level == '1')){
}else {
    header('location:../Login_v1/index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../css/laki/tm.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="../assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="../assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Alexander Pierce</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>DAFTAR MENU</strong></li>
            <li><a href="../index.php"><i class="icon icon-sailing-boat-water yellow-text s-18"></i>Dashboard</a>
            </li>
            <li><a href="../mekar17/formlaki.php"><i class="icon icon-wpforms green-text s-18"></i>Posyandu Mekar Arum 17</a>
            </li>
            <li><a href="formlaki.php"><i class="icon icon-wpforms blue-text s-18"></i>Posyandu Mekar Arum 18</a>
            </li>
            <li><a href="../mekar20/formlaki.php"><i class="icon icon-wpforms green-text s-18"></i>Posyandu Mekar Arum 20</a>
            </li>
            <li><a href="../mekar21/formlaki.php"><i class="icon icon-wpforms blue-text s-18"></i>Posyandu Mekar Arum 21</a>
            </li>
            <!--
            <li><a href="formcewe.php"><i class="icon icon-wpforms red-text s-18"></i></a>
            </li>
            -->
            <li><a href="../logout.php"><i class="icon icon-power-off red-text s-18 " ></i>Logout</a>
            </li>

            </li>
            <li class="header"><strong>G.I.S</strong></li>
            <li><a href="https://www.youtube.com/" target=”_blank”><i class="icon icon-bar-chart2 orange-text s-18"></i>Kalkulator Stunting & Grafik</a>
            </li>
        </ul>
    </section>
</aside>

<!--TAMBAH-->

<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->

        </div>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Tambah Data Anak Laki-Laki
                    </h4>
                </div>
            </div>
            
        </div>
    </header>
	<!--Today Tab End-->

 
	
<br>
	
	<form method="post" action="tambahaksi.php">
		<table>
		<tr>
		<div  class="login-box">

		<div class="user-box">
      <input type="number" name="Nik" required="">
      <label>Nik Anak</label>
    </div>
	<div class="user-box">
      <input type="text" name="NamaAnak" required="">
      <label>Nama Anak</label>
    </div>
	<div class="ub">
      <input type="date" name="TanggalLahir" required="">
      <label>Tanggal Lahir</label>
    </div>
	<div class="user-box">
      <input type="text" name="NamaOrangTua" required="">
      <label>Nama Orang Tua</label>
    </div>
	<div class="user-box">
      <input type="number" name="NikOrangTua" required="">
      <label>Nik Orang Tua</label>
    </div>
	<div class="user-box">
      <input type="number" name="NomorTelepon" required="">
      <label>Nomor Telepon</label>
    </div>
	<div class="user-box">
      <input type="text" name="Posyandu" required="">
      <label>Jenis Kelamin</label>
    </div>
	<div class="user-box">
      <input type="text" name="Alamat" required="">
      <label>Alamat Anak</label>
    </div>
	
	<div class="user-box">
      <input type="text" name="UmurBulan" required="" id="bulan">
      <label>Umur Bulan Saat Diukur</label>
    </div>
	<div class="user-box">
      <input type="text" name="BeratBadan" required="" id="angka">
      <label>Berat Badan</label>
    </div>
    <div class="user-box">
      <input type="text" name="TinggiBadan" required="" id="tinggi">
      <label>Tinggi Badan</label>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect4">JENIS KELAMIN</label>
        <select class="form-control" id="jk">
        <option value="">Pilih Jenis Kelamin</option>
            <option value="l">Laki</option>
            <option value="p">Perempuan</option>
        </select>
    </div>
    <div class="user-box">
      <input type="text" id="zsbbu" required="">
      <label>Z-Score Berat Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="statusbbu" required="">
      <label>Status Gizi Berdasarkan Berat Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="zstbu" required="">
      <label>Z-Score Tinggi Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="statustbu" required="">
      <label>Status Gizi Berdasarkan Tinggi Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="zsimtu" required="">
      <label>Z-Score Indeks Masa Tubuh Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="statusimtu" required="">
      <label>Status Gizi Berdasarkan Indeks Masa Tubuh Menurut Umur</label>
    </div>
	<div >
	<input  type="submit" value="Submit" name="Submit" >
	</div>
			<tr>
				<td><h1>

				</h1></td>

			</tr>		
		</table>
	</form>

<!-- Right Sidebar -->
            
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
		 <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="../assets/js/app.js"></script>

<script>
    $('#jk').on('change', function() {
    var jk =$("#jk").val();
    if (jk === "l"){

//VARIABEL BERAT BADAN MENURUT UMUR
var sdpositif0 = 3.9;
var sdnegatif0 = 2.9;
var median0 = 3.3;

var sdpositif1 =5.1 ;
var sdnegatif1 =3.9 ;
var median1 =4.5 ;


//VARIABEL TINGGI BADAN MENURUT UMUR
var tbusdnegatif0  = 48  ;
var tbumedian0     =49.9   ;
var tbusdpositif0  =51.8   ;

var tbusdnegatif1  = 52.8  ;
var tbumedian1     = 54.7  ;
var tbusdpositif1  = 56.7  ;


//VARIABEL INDEKS MASA TUBUH MENURUT UMUR
var imtusdpositif0  =  14.8 ;
var imtumedian0     = 13.4  ;
var imtusdnegatif0  = 12.2  ;

var imtusdpositif1  = 16.3  ;
var imtumedian1     =  14.9 ;
var imtusdnegatif1  = 13.6  ;


 
    var bulan = document.getElementById("bulan").value;
    var angka = document.getElementById("angka").value;
    var tester = 0;
    switch (true) {
    case bulan == 0:
    if(angka - median0 > 0){
        tester = ((angka-median0)/ (sdpositif0-median0) );
        document.getElementById("zsbbu").value = tester;
        if(((angka-median0)/ (sdpositif0-median0) ) > 2){
            statustester = ("Anak anda termasuk dalam kategori gizi lebih");
            document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median0)/ (sdpositif0-median0) ) < -2){
        statustester = ("Anak anda termasuk dalam kategori gizi kurang");
        document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median0)/ (sdpositif0-median0)) >=-2  <2){
        ("Anak anda termasuk dalam kategori normal");
        document.getElementById("statusbbu").value = statustester;
    }
    } else if(angka - median0 < 0){
        tester = ((angka-median0)/ (median0-sdnegatif0));
        document.getElementById("zsbbu").value = tester;
        if(((angka-median0)/ (median0-sdnegatif0)) > 2){
            statustester =("Anak anda termasuk dalam kategori gizi lebih");
            document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median0)/ (median0-sdnegatif0)) < -2){
        statustester =("Anak anda termasuk dalam kategori gizi kurang");
        document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median0)/ (median0-sdnegatif0)) >=-2 <2){
        statustester =("Anak anda termasuk dalam kategori normal");
        document.getElementById("statusbbu").value = statustester;
    }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(angka - median1 > 0){
        tester = ((angka-median1)/ (sdpositif1-median1) );
        document.getElementById("zsbbu").value = tester;
        if(((angka-median1)/ (sdpositif1-median1) ) > 2){
            statustester = ("Anak anda termasuk dalam kategori gizi lebih");
            document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median1)/ (sdpositif1-median1) ) < -2){
        statustester = ("Anak anda termasuk dalam kategori gizi kurang");
        document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median1)/ (sdpositif1-median1)) >=-2  <2){
        ("Anak anda termasuk dalam kategori normal");
        document.getElementById("statusbbu").value = statustester;
    }
    } else if(angka - median1 < 0){
        tester = ((angka-median1)/ (median1-sdnegatif1));
        document.getElementById("zsbbu").value = tester;
        if(((angka-median1)/ (median1-sdnegatif1)) > 2){
            statustester =("Anak anda termasuk dalam kategori gizi lebih");
            document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median1)/ (median1-sdnegatif1)) < -2){
        statustester =("Anak anda termasuk dalam kategori gizi kurang");
        document.getElementById("statusbbu").value = statustester;
    }
    else if(((angka-median1)/ (median1-sdnegatif1)) >=-2 <2){
        statustester =("Anak anda termasuk dalam kategori normal");
        document.getElementById("statusbbu").value = statustester;
    }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');
}

    var bulan = document.getElementById("bulan").value;
    var tinggi = document.getElementById("tinggi").value;
    var angka = document.getElementById("angka").value;
    switch (true) {
    case bulan == 0:
    if(tinggi - tbumedian0 > 0){
        tester2 = ((tinggi-tbumedian0)/ (tbusdpositif0-tbumedian0) );
        document.getElementById("zstbu").value = tester2;
        if(((tinggi-tbumedian0)/ (tbusdpositif0-tbumedian0) ) > 2){
            statustester2 = ("Anak anda termasuk dalam kategori tinggi");
            document.getElementById("statustbu").value = statustester2;
    }
    else if(((tinggi-tbumedian0)/ (tbusdpositif0-tbumedian0) ) < -2){
        statustester2 = ("Anak anda termasuk dalam kategori pendek");
        document.getElementById("statustbu").value = statustester2;
    }
    else if(((tinggi-tbumedian0)/ (tbusdpositif0-tbumedian0)) >=-2  <2){
        ("Anak anda termasuk dalam kategori normal");
        document.getElementById("statustbu").value = statustester2;
    }
    } else if(tinggi - tbumedian0 < 0){
        tester2 = ((tinggi-tbumedian0)/ (tbumedian0-tbusdnegatif0));
        document.getElementById("zstbu").value = tester2;
        if(((tinggi-tbumedian0)/ (tbumedian0-tbusdnegatif0)) > 2){
            statustester2 =("Anak anda termasuk dalam kategori tinggi");
            document.getElementById("statustbu").value = statustester2;
    }
    else if(((tinggi-tbumedian0)/ (tbumedian0-tbusdnegatif0)) < -2){
        statustester2 =("Anak anda termasuk dalam kategori pendek");
        document.getElementById("statustbu").value = statustester2;
    }
    else if(((tinggi-tbumedian0)/ (tbumedian0-tbusdnegatif0)) >=-2 <2){
        statustester2 =("Anak anda termasuk dalam kategori normal");
        document.getElementById("statustbu").value = statustester2;
    }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(tinggi - tbumedian1 > 0){
        tester2 = ((tinggi-tbumedian1)/ (tbusdpositif1-tbumedian1) );
        document.getElementById("zstbu").value = tester2;
        if(tester2 > 2){
            statustester2 = ("Anak anda termasuk dalam kategori tinggi");
            document.getElementById("statustbu").value = statustester2;
    }
    else if(tester2 < -2){
        statustester2 = ("Anak anda termasuk dalam kategori pendek");
        document.getElementById("statustbu").value = statustester2;
    }
    else if(tester2 >=-2  <2){
        statustester2 =("Anak anda termasuk dalam kategori normal");
        document.getElementById("statustbu").value = statustester2;
    }
    } else if(tinggi - tbumedian1 < 0){
        tester2 = ((tinggi-tbumedian1)/ (tbumedian1-tbusdnegatif1));
        document.getElementById("zstbu").value = tester2;
        if(tester2 > 2){
            statustester2 =("Anak anda termasuk dalam kategori tinggi");
            document.getElementById("statustbu").value = statustester2;
    }
    else if(tester2 < -2){
        statustester2 =("Anak anda termasuk dalam kategori pendek");
        document.getElementById("statustbu").value = statustester2;
    }
    else if(tester2 >=-2 <2){
        statustester2 =("Anak anda termasuk dalam kategori normal");
        document.getElementById("statustbu").value = statustester2;
    }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');

}

    var bulan = document.getElementById("bulan").value;
    var tb = document.getElementById("tinggi").value;
    var tinggi = (tb/100);
    var bb = document.getElementById("angka").value;
    var imt = (bb/tinggi);
    var angka = imt;
    switch (true) {
        case bulan == 0:
        if(angka - imtumedian0 > 0){
            tester3 = ((angka-imtumedian0)/ (imtusdpositif0-imtumedian0) );
            document.getElementById("zsimtu").value = tester3;
            if(((angka-imtumedian0)/ (imtusdpositif0-imtumedian0) ) > 2){
                statustester3 = ("Anak anda termasuk dalam kategori gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(((angka-imtumedian0)/ (imtusdpositif0-imtumedian0) ) < -2){
            statustester3 = ("Anak anda termasuk dalam kategori kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(((angka-imtumedian0)/ (imtusdpositif0-imtumedian0)) >=-2  <2){
            ("Anak anda termasuk dalam kategori normal");
            document.getElementById("statusimtu").value = statustester3;
        }
        } else if(angka - imtumedian0 < 0){
            tester3 = ((angka-imtumedian0)/ (imtumedian0-imtusdnegatif0));
            document.getElementById("zsimtu").value = tester3;
            if(((angka-imtumedian0)/ (imtumedian0-imtusdnegatif0)) > 2){
                statustester3 =("Anak anda termasuk dalam kategori gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(((angka-imtumedian0)/ (imtumedian0-imtusdnegatif0)) < -2){
            statustester3 =("Anak anda termasuk dalam kategori kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(((angka-imtumedian0)/ (imtumedian0-imtusdnegatif0)) >=-2 <2){
            statustester3 =("Anak anda termasuk dalam kategori normal");
            document.getElementById("statusimtu").value = statustester3;
        }
        } else {
        alert('Not Available');
        }
        break;
        case bulan == 1:
        if(angka - imtumedian1 > 0){
            tester3 = ((angka-imtumedian1)/ (imtusdpositif1-imtumedian1) );
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Anak anda termasuk dalam kategori gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 < -3){
            statustester3 = ("Anak anda termasuk dalam kategori sangat kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >=-3 <-2){
            statustester3 =("Anak anda termasuk dalam kategori kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >=-2 <2){
            statustester3 =("Anak anda termasuk dalam kategori normal");
            document.getElementById("statusimtu").value = statustester3;
        }

        } else if(angka - imtumedian1 < 0){
            tester3 = ((angka-imtumedian1)/ (imtumedian1-imtusdnegatif1));
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 =("Anak anda termasuk dalam kategori gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 =("Anak anda termasuk dalam kategori sangat kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >=-3 <-2){
            statustester3 =("Anak anda termasuk dalam kategori kurus");
            document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >=-2 <2){
            statustester3 =("Anak anda termasuk dalam kategori normal");
            document.getElementById("statusimtu").value = statustester3;
        }
        } else {
        alert('Not Available');
        }
        break;
        default:
        alert('Not Available');
    
} 
    }
    else if (jk === "p"){
        var csdpositif0 = 3.7;
var csdnegatif0 = 2.8;
var cmedian0 = 3.2;
var bulan = document.getElementById("bulan").value;
var angka = document.getElementById("angka").value;
var tester = 0;
switch (true) {
    case bulan == 0:
    if(angka - cmedian0 > 0){
        tester = ((angka-cmedian0)/ (csdpositif0-cmedian0) );
        document.getElementById("zsbbu").value = tester;
    } else if(angka - cmedian0 < 0){
        tester = ((angka-cmedian0)/ (cmedian0-csdnegatif0));
        document.getElementById("zsbbu").value = tester;
    } else {
        alert('Not Available');
    }
    break;
}
    }
    if (jk === ""){
        $('#zsbbu').val("");
        $('#statusbbu').val("");
        $('#zstbu').val("");
        $('#statustbu').val("");
        $('#zsimtu').val("");
        $('#statusimtu').val("");

    }
});
        
    </script>
</body>
</html>