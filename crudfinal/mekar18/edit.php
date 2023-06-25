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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../css/laki/edit.css">
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
                        <h6 class="font-weight-light mt-2 mb-1">Admin</h6>
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
                        Edit Data
                    </h4>
                </div>
            </div>
            
        </div>
    </header>
	<!--Today Tab End-->
    <?php
	include 'koneksi.php';
	
    if( isset( $_GET['id'])) {
    $id = $_GET['id'];
} 
	$data = mysqli_query($koneksi,"select * from mekar18 where id='$id'");
	 

	while($d = mysqli_fetch_array($data)){
		
		?>
		<form method="post" action="editaksi.php">
			<table>
				<tr>
				<td></td>
					<td>
					<input type="hidden" name="id" value="<?= $d['id']; ?>">
					</td>
				</tr>
                <div  class="login-box">
    <div class="user-box">
      <input type="number" name="Nik" value="<?php echo $d['Nik']; ?>">
      <label>Nik Anak</label>
    </div>


    <div class="user-box">
      <input type="text" name="NamaAnak" value="<?php echo $d['NamaAnak']; ?>">
      <label>Nama Anak</label>
    </div>


    <div class="user-box">
      <input type="date" name="TanggalLahir" value="<?php echo $d['TanggalLahir']; ?>">
      <label>Tanggal Lahir</label>
    </div>


    <div class="user-box">
      <input type="text" name="NamaOrangTua" value="<?php echo $d['NamaOrangTua']; ?>">
      <label>Nama Orang Tua</label>
    </div>
    
    <div class="user-box">
      <input type="number" name="NikOrangTua" value="<?php echo $d['NikOrangTua']; ?>">
      <label>Nik Orang Tua</label>
    </div>

    
    <div class="user-box">
      <input type="number" name="NomorTelepon" value="<?php echo $d['NomorTelepon']; ?>">
      <label>NomorTelepon</label>
    </div>

    <div class="user-box">
      <input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>">
      <label>Alamat Anak</label>
    </div>
    

    <div class="user-box">
      <input type="date" name="TanggalUkur" value="<?php echo $d['TanggalUkur']; ?>">
      <label>Tanggal Ukur</label>
    </div>


    <div class="user-box">
      <input id="bulan" type="text" name="UmurBulan" value="<?php echo $d['UmurBulan']; ?>">
      <label>Umur Bulan Saat Diukur</label>
    </div>
    
    
    <div class="user-box">
      <input id="angka" type="text" name="BeratBadan" value="<?php echo $d['BeratBadan']; ?>">
      <label>Berat Badan</label>
    </div>


    <div class="user-box">
      <input id="tinggi" type="text" name="TinggiBadan" value="<?php echo $d['TinggiBadan']; ?>">
      <label>Tinggi Badan</label>
    </div>
    
    <div class="form-group" >
        <label for="exampleFormControlSelect4">JENIS KELAMIN</label>
        <select class="form-control" id="jk" name="jeniskelamin" value="<?php echo $d['jeniskelamin']; ?>">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki">Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="user-box">
      <input type="text" id="b" required="" name="zsbbu" value="<?php echo $d['zsbbu']; ?>">
      <label>Z-Score Berat Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="statusbbu" name="StatusGiziBB" value="<?php echo $d['StatusGiziBB']; ?>">
      <label>Status Gizi Berdasarkan Berat Badan Menurut Umur</label>
    </div>

    <div class="user-box">
      <input type="text" id="t" required="" name="zstbu" value="<?php echo $d['zstbu']; ?>">
      <label>Z-Score Tinggi Badan Menurut Umur</label>
    </div>
    <div class="user-box">
      <input type="text" id="statustbu" name="StatusGiziTB" value="<?php echo $d['StatusGiziTB']; ?>">
      <label>Status Gizi Berdasarkan Tinggi Badan Menurut Umur</label>
    </div>
    
    <div class="user-box">
      <input type="text" id="zsimtu" required="" name="zsimt" value="<?php echo $d['zsimt']; ?>">
      <label>Z-Score Indeks Masa Tubuh Menurut Umur</label>
    </div>

    <div class="user-box">
      <input id="statusimtu" type="text" name="StatusGiziIMT" value="<?php echo $d['StatusGiziIMT']; ?>">
      <label>Status Gizi Berdasarkan Indeks Masa Tubuh Menurut Umur</label>
    </div>
    <div >
<input type="submit" value="Submit" name="Simpan">
</div>			
<tr>
				<td><h1>

				</h1></td>

			</tr>
			</table>
		</form>
		<?php 
	}

	?>
 

<!-- Right Sidebar -->
            
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
		 <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="../assets/js/app.js"></script>
<script>
     $('#jk').on('click', function() {
    var jk =$("#jk").val();
    if (jk === "Laki"){

//VARIABEL BERAT BADAN MENURUT UMUR ANAK LAKI
//VARIABEL BERAT BADAN MENURUT UMUR ANAK LAKI
//VARIABEL BERAT BADAN MENURUT UMUR ANAK LAKI
//VARIABEL BERAT BADAN MENURUT UMUR ANAK LAKI
//VARIABEL BERAT BADAN MENURUT UMUR ANAK LAKI
var sdpositif0 = 3.9;
var sdnegatif0 = 2.9;
var median0 = 3.3;

var sdpositif1 =5.1 ;
var sdnegatif1 =3.9 ;
var median1 =4.5 ;

var sdpositif2 =6.3 ;
var sdnegatif2 =4.9 ;
var median2 = 5.6;

var sdpositif3 =7.2 ;
var sdnegatif3 =5.7 ;
var median3 =6.4 ;

var sdpositif4 =7.8 ;
var sdnegatif4 =6.2 ;
var median4 =7.0 ;

var sdpositif5 =8.4 ;
var sdnegatif5 =6.7 ;
var median5 =7.5 ;

var sdpositif6 =8.8 ;
var sdnegatif6 =7.1 ;
var median6 =7.9 ;

var sdpositif7 =9.2 ;
var sdnegatif7 =7.4 ;
var median7 =8.3 ;

var sdpositif8 =9.6 ;
var sdnegatif8 =7.7 ;
var median8 =8.6 ;

var sdpositif9 =9.9 ;
var sdnegatif9 =8.0 ;
var median9 =8.9 ;

var sdpositif10 =10.2 ;
var sdnegatif10 =8.2 ;
var median10 =9.2 ;

var sdpositif11 =10.5 ;
var sdnegatif11 =8.4 ;
var median11 =9.4 ;

var sdpositif12 =10.8 ;
var sdnegatif12 =8.6 ;
var median12 =9.6 ;

var sdpositif13 =11 ;
var sdnegatif13 =8.8 ;
var median13 =9.9 ;

var sdpositif14 =11.3 ;
var sdnegatif14 =9.0 ;
var median14 =10.1 ;

var sdpositif15 = 11.5;
var sdnegatif15 =9.2 ;
var median15 =10.3 ;

var sdpositif16 =11.7 ;
var sdnegatif16 =9.4 ;
var median16 =10.5 ;

var sdpositif17 =12 ;
var sdnegatif17 =9.6 ;
var median17 =10.7 ;

var sdpositif18 =12.2 ;
var sdnegatif18 =9.8 ;
var median18 =10.9 ;

var sdpositif19 =12.5 ;
var sdnegatif19 =10 ;
var median19 =11.1 ;

var sdpositif20 =12.7 ;
var sdnegatif20 =10.1 ;
var median20 =11.1 ;

var sdpositif21 =12.9 ;
var sdnegatif21 =10.3 ;
var median21 =11.5 ;

var sdpositif22 =13.2 ;
var sdnegatif22 =10.5 ;
var median22 =11.8 ;

var sdpositif23 =13.4 ;
var sdnegatif23 =10.7 ;
var median23 =12 ;

var sdpositif24 =13.6 ;
var sdnegatif24 =10.8 ;
var median24 =12.2 ;

var sdpositif25 =13.9 ;
var sdnegatif25 =11 ;
var median25 =12.4 ;

var sdpositif26 =14.1 ;
var sdnegatif26 =11.2 ;
var median26 =12.5 ;

var sdpositif27 =14.3 ;
var sdnegatif27 =11.3 ;
var median27 =12.7 ;

var sdpositif28 =14.5 ;
var sdnegatif28 =11.5 ;
var median28 =12.9 ;

var sdpositif29 =14.8 ;
var sdnegatif29 =11.7 ;
var median29 =13.1 ;

var sdpositif30 =15 ;
var sdnegatif30 =11.8 ;
var median30 =13.3 ;

var sdpositif31 =15.2 ;
var sdnegatif31 =12 ;
var median31 =13.5 ;

var sdpositif32 =15.4 ;
var sdnegatif32 =12.1 ;
var median32 =13.7 ;

var sdpositif33 =15.6 ;
var sdnegatif33 =12.3 ;
var median33 =13.8 ;

var sdpositif34 =15.8 ;
var sdnegatif34 =12.4 ;
var median34 =14 ;

var sdpositif35 =16 ;
var sdnegatif35 =12.6 ;
var median35 = 14.2 ;

var sdpositif36 =16.2 ;
var sdnegatif36 =12.7 ;
var median36 =14.3 ;

var sdpositif37 =16.4 ;
var sdnegatif37 =12.9 ;
var median37 =14.5 ;

var sdpositif38 =16.6 ;
var sdnegatif38 =13 ;
var median38 =14.7 ;

var sdpositif39 =16.8 ;
var sdnegatif39 =13.1 ;
var median39 =14.8 ;

var sdpositif40 =17 ;
var sdnegatif40 =13.3 ;
var median40 =15 ;

var sdpositif41 =17.2 ;
var sdnegatif41 =13.4 ;
var median41 =15.2 ;

var sdpositif42 =17.4 ;
var sdnegatif42 =13.6 ;
var median42 =15.3 ;

var sdpositif43 =17.6 ;
var sdnegatif43 =13.7 ;
var median43 =15.5 ;

var sdpositif44 =17.8 ;
var sdnegatif44 =13.8 ;
var median44 =15.7 ;

var sdpositif45 =18 ;
var sdnegatif45 =14 ;
var median45 =15.8 ;

var sdpositif46 =18.2 ;
var sdnegatif46 =14.1 ;
var median46 =16 ;

var sdpositif47 =18.4 ;
var sdnegatif47 =14.3 ;
var median47 =16.2 ;

var sdpositif48 =18.6 ;
var sdnegatif48 =14.4 ;
var median48 =16.3 ;

var sdpositif49 =18.8 ;
var sdnegatif49 =14.5 ;
var median49 =16.5 ;

var sdpositif50 =19 ;
var sdnegatif50 =14.7 ;
var median50 =16.7 ;

var sdpositif51 =19.2 ;
var sdnegatif51 =14.8 ;
var median51 =16.8 ;

var sdpositif52 =19.4 ;
var sdnegatif52 =15 ;
var median52 =17 ;

var sdpositif53 =19.6 ;
var sdnegatif53 =15.1 ;
var median53 =17.2 ;

var sdpositif54 =19.8 ;
var sdnegatif54 =15.2 ;
var median54 =17.3 ;

var sdpositif55 =20 ;
var sdnegatif55 =15.4 ;
var median55 =17.5 ;

var sdpositif56 =20.2 ;
var sdnegatif56 =15.5 ;
var median56 =17.7 ;

var sdpositif57 =20.4 ;
var sdnegatif57 =15.6 ;
var median57 =17.8 ;

var sdpositif58 =20.6 ;
var sdnegatif58 =15.8 ;
var median58 =18 ;

var sdpositif59 =20.8 ;
var sdnegatif59 =15.9 ;
var median59 =18.2 ;

var sdpositif60 =21 ;
var sdnegatif60 =16 ;
var median60 =18.3 ;


//VARIABEL TINGGI BADAN MENURUT UMUR ANAK LAKI
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK LAKI
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK LAKI
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK LAKI
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK LAKI
var tbusdnegatif0  = 48  ;
var tbumedian0     =49.9   ;
var tbusdpositif0  =51.8   ;

var tbusdnegatif1  = 52.8  ;
var tbumedian1     = 54.7  ;
var tbusdpositif1  = 56.7  ;

var tbusdnegatif2  = 56.4  ;
var tbumedian2     = 58.4  ;
var tbusdpositif2  = 60.4  ;

var tbusdnegatif3  = 59.4  ;
var tbumedian3     = 61.4  ;
var tbusdpositif3  = 63.5  ;

var tbusdnegatif4  = 61.8  ;
var tbumedian4     = 63.9  ;
var tbusdpositif4  = 66  ;

var tbusdnegatif5  = 63.8  ;
var tbumedian5     = 65.9  ;
var tbusdpositif5  = 68  ;

var tbusdpositif6  = 69.8  ;
var tbumedian6     = 67.6  ;
var tbusdnegatif6  = 65.5  ;

var tbusdpositif7  = 71.3  ;
var tbumedian7     =  69.2 ;
var tbusdnegatif7  =  67 ;

var tbusdpositif8  =72.8   ;
var tbumedian8     = 70.6  ;
var tbusdnegatif8  =68.4   ;

var tbusdpositif9  =74.2   ;
var tbumedian9     =72   ;
var tbusdnegatif9  =69.7   ;

var tbusdpositif10  =75.6   ;
var tbumedian10     =73.3   ;
var tbusdnegatif10  = 71  ;

var tbusdpositif11  = 76.9  ;
var tbumedian11     = 74.5  ;
var tbusdnegatif11  = 72.2  ;

var tbusdpositif12  = 78.1  ;
var tbumedian12     = 75.7  ;
var tbusdnegatif12  = 73.4  ;

var tbusdpositif13  = 79.3  ;
var tbumedian13     = 76.9  ;
var tbusdnegatif13  = 74.5  ;

var tbusdpositif14  = 80.5  ;
var tbumedian14     = 78  ;
var tbusdnegatif14  = 75.6  ;

var tbusdpositif15  = 81.7  ;
var tbumedian15     = 79.1  ;
var tbusdnegatif15  = 76.6  ;

var tbusdpositif16  = 82.8  ;
var tbumedian16     = 80.2  ;
var tbusdnegatif16  = 77.6  ;

var tbusdpositif17  = 83.9  ;
var tbumedian17     = 81.2  ;
var tbusdnegatif17  = 78.6  ;

var tbusdpositif18  = 85  ;
var tbumedian18     = 82.3  ;
var tbusdnegatif18  = 79.6  ;

var tbusdpositif19  = 86  ;
var tbumedian19     = 83.2  ;
var tbusdnegatif19  = 80.5  ;

var tbusdpositif20  = 87  ;
var tbumedian20     = 84.2  ;
var tbusdnegatif20  = 81.4  ;

var tbusdpositif21  = 88  ;
var tbumedian21     = 85.1  ;
var tbusdnegatif21  = 82.3  ;

var tbusdpositif22  = 89  ;
var tbumedian22     = 86  ;
var tbusdnegatif22  = 83.1  ;

var tbusdpositif23  = 89.9  ;
var tbumedian23     = 86.9  ;
var tbusdnegatif23  = 83.9  ;

var tbusdpositif24  = 90.9  ;
var tbumedian24     = 87.8  ;
var tbusdnegatif24  = 84.8  ;

var tbusdpositif25  =   91.1;
var tbumedian25     =   88;
var tbusdnegatif25  =   84.9;

var tbusdpositif26  =   92;
var tbumedian26     =   88.8;
var tbusdnegatif26  =   85.6;

var tbusdpositif27  =   92.9;
var tbumedian27     =   89.6;
var tbusdnegatif27  =   86.4;

var tbusdpositif28  =   93.7;
var tbumedian28     =   90.4;
var tbusdnegatif28  =   87.1;

var tbusdpositif29  =   94.5;
var tbumedian29     =   91.2;
var tbusdnegatif29  =   87.8;

var tbusdpositif30  =   95.3;
var tbumedian30     =   91.9;
var tbusdnegatif30  =   88.5;

var tbusdpositif31  =   96.1;
var tbumedian31     =   92.7;
var tbusdnegatif31  =   89.2;

var tbusdpositif32  =   96.9;
var tbumedian32     =   93.4;
var tbusdnegatif32  =   89.9;

var tbusdpositif33  =   97.6;
var tbumedian33     =   94.1;
var tbusdnegatif33  =   90.5;

var tbusdpositif34  =   98.4;
var tbumedian34     =   94.8;
var tbusdnegatif34  =   91.1;

var tbusdpositif35  =   99.1;
var tbumedian35     =   95.4;
var tbusdnegatif35  =   91.8;

var tbusdpositif36  =   99.8;
var tbumedian36     =   96.1;
var tbusdnegatif36  =   92.4;

var tbusdpositif37  =   100.5;
var tbumedian37     =   96.7;
var tbusdnegatif37  =   93;

var tbusdpositif38  =   101.2;
var tbumedian38     =   97.4;
var tbusdnegatif38  =   93.6;

var tbusdpositif39  =   101.8;
var tbumedian39     =   98;
var tbusdnegatif39  =   94.2 ;

var tbusdpositif40  =   102.5;
var tbumedian40     =   98.6;
var tbusdnegatif40  =   94.7;

var tbusdpositif41  =   103.2;
var tbumedian41     =   99.2;
var tbusdnegatif41  =   95.3;

var tbusdpositif42  =   103.8;
var tbumedian42     =   99.9;
var tbusdnegatif42  =   95.9;

var tbusdpositif43  =   104.5;
var tbumedian43     =   100.4;
var tbusdnegatif43  =   96.4;

var tbusdpositif44  =   105.1;
var tbumedian44     =   101;
var tbusdnegatif44  =   97;

var tbusdpositif45  =   105.7;
var tbumedian45     =   101.6;
var tbusdnegatif45  =   97.5;

var tbusdpositif46  =   106.3;
var tbumedian46     =   102.2;
var tbusdnegatif46  =   98.1;

var tbusdpositif47  =   106.9;
var tbumedian47     =   102.8;
var tbusdnegatif47  =   98.6;

var tbusdpositif48  =   107.5;
var tbumedian48     =   103.3;
var tbusdnegatif48  =   99.1;

var tbusdpositif49  =   108.1;
var tbumedian49     =   103.9;
var tbusdnegatif49  =   99.7 ;

var tbusdpositif50  =   108.7;
var tbumedian50     =   104.4;
var tbusdnegatif50  =   100.2;

var tbusdpositif51  =   109.3;
var tbumedian51     =   105  ;
var tbusdnegatif51  =   100.7;

var tbusdpositif52  =   109.9;
var tbumedian52     =   105.6;
var tbusdnegatif52  =   101.2;

var tbusdpositif53  =   110.5;
var tbumedian53     =   106.1;
var tbusdnegatif53  =   101.7;

var tbusdpositif54  =   111.1;
var tbumedian54     =   106.7;
var tbusdnegatif54  =   102.3;

var tbusdpositif55  =   111.7;
var tbumedian55     =   107.2;
var tbusdnegatif55  =   102.8;

var tbusdpositif56  =   112.3;
var tbumedian56     =   107.8;
var tbusdnegatif56  =   103.3;

var tbusdpositif57  =   112.8;
var tbumedian57     =   108.3;
var tbusdnegatif57  =   103.8;

var tbusdpositif58  =   113.4;
var tbumedian58    =   108.9;
var tbusdnegatif58  =   104.3;

var tbusdpositif59  =   114;
var tbumedian59     =   109.4;
var tbusdnegatif59  =   104.8;

var tbusdpositif60  = 114.6  ;
var tbumedian60     =   110;
var tbusdnegatif60  = 105.3  ;


//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI-LAKI
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI-LAKI
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI-LAKI
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI-LAKI
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI-LAKI
var imtusdpositif0  =  14.8 ;
var imtumedian0     = 13.4  ;
var imtusdnegatif0  = 12.2  ;

var imtusdpositif1  = 16.3  ;
var imtumedian1     =  14.9 ;
var imtusdnegatif1  = 13.6  ;

var imtusdpositif2  = 17.8  ;
var imtumedian2     = 16.3  ;
var imtusdnegatif2  =15   ;

var imtusdpositif3  = 18.4  ;
var imtumedian3     = 16.9  ;
var imtusdnegatif3  = 15.5  ;

var imtusdpositif4  = 18.7  ;
var imtumedian4     = 17.2  ;
var imtusdnegatif4  = 15.8  ;

var imtusdpositif5  = 18.8  ;
var imtumedian5     = 17.3  ;
var imtusdnegatif5  = 15.9  ;

var imtusdpositif6  =18.8   ;
var imtumedian6     =17.3   ;
var imtusdnegatif6  = 16  ;

var imtusdpositif7  = 18.8  ;
var imtumedian7     = 17.3  ;
var imtusdnegatif7  = 16  ;

var imtusdpositif8  = 18.7  ;
var imtumedian8     = 17.3  ;
var imtusdnegatif8  =  15.9 ;

var imtusdpositif9  = 18.6  ;
var imtumedian9     = 17.2  ;
var imtusdnegatif9  = 15.8  ;

var imtusdpositif10  = 18.5  ;
var imtumedian10     = 17  ;
var imtusdnegatif10  = 15.7  ;

var imtusdpositif11  = 18.4  ;
var imtumedian11     = 16.9  ;
var imtusdnegatif11  = 15.6  ;

var imtusdpositif12  =  18.2 ;
var imtumedian12     =  16.8 ;
var imtusdnegatif12  =  15.5 ;

var imtusdpositif13  = 18.1  ;
var imtumedian13     = 16.7  ;
var imtusdnegatif13  = 15.4  ;

var imtusdpositif14  = 18  ;
var imtumedian14     = 16.6  ;
var imtusdnegatif14  = 15.3  ;

var imtusdpositif15  = 17.8  ;
var imtumedian15     = 16.4  ;
var imtusdnegatif15  = 15.2  ;

var imtusdpositif16  = 17.7  ;
var imtumedian16     = 16.3  ;
var imtusdnegatif16  = 15.1  ;

var imtusdpositif17  = 17.6  ;
var imtumedian17     = 16.2  ;
var imtusdnegatif17  = 15  ;

var imtusdpositif18  = 17.5  ;
var imtumedian18     = 16.1  ;
var imtusdnegatif18  = 14.9  ;

var imtusdpositif19  =  17.4 ;
var imtumedian19     =  16.1 ;
var imtusdnegatif19  = 14.9  ;

var imtusdpositif20  = 17.3  ;
var imtumedian20     = 16  ;
var imtusdnegatif20  = 14.8  ;

var imtusdpositif21  = 17.2  ;
var imtumedian21     = 15.9  ;
var imtusdnegatif21  = 14.7  ;

var imtusdpositif22  = 17.2  ;
var imtumedian22     = 15.8  ;
var imtusdnegatif22  = 14.7  ;

var imtusdpositif23  = 17.1  ;
var imtumedian23     = 15.8  ;
var imtusdnegatif23  = 14.6  ;

var imtusdpositif24  = 17  ;
var imtumedian24     = 15.7  ;
var imtusdnegatif24  = 14.6  ;

var imtusdpositif25  = 17.3  ;
var imtumedian25     =  16 ;
var imtusdnegatif25  =  14.8 ;

var imtusdpositif26  =  17.3 ;
var imtumedian26     =  15.9 ;
var imtusdnegatif26  =  14.8 ;

var imtusdpositif27  =  17.2 ;
var imtumedian27     =   15.9;
var imtusdnegatif27  =  14.7 ;

var imtusdpositif28  =  17.2 ;
var imtumedian28     =  15.9 ;
var imtusdnegatif28  =  14.7 ;

var imtusdpositif29  =  17.1 ;
var imtumedian29     =  15.8 ;
var imtusdnegatif29  =  14.7 ;

var imtusdpositif30  = 17.1  ;
var imtumedian30     =  15.8 ;
var imtusdnegatif30  =  14.6 ;

var imtusdpositif31  =  17.1 ;
var imtumedian31     =   15.8;
var imtusdnegatif31  =  14.6 ;

var imtusdpositif32  =  17.0 ;
var imtumedian32     =  15.7 ;
var imtusdnegatif32  = 14.6  ;

var imtusdpositif33  =  17.0 ;
var imtumedian33     = 15.7  ;
var imtusdnegatif33  =  14.5 ;

var imtusdpositif34  = 17.0  ;
var imtumedian34     = 15.7  ;
var imtusdnegatif34  = 14.5  ;

var imtusdpositif35  = 16.9  ;
var imtumedian35     = 15.6  ;
var imtusdnegatif35  = 14.5  ;

var imtusdpositif36  =  16.9 ;
var imtumedian36     =  15.6 ;
var imtusdnegatif36  =  14.4 ;

var imtusdpositif37  = 16.9  ;
var imtumedian37     =  15.6 ;
var imtusdnegatif37  =  14.4 ;

var imtusdpositif38  = 16.8  ;
var imtumedian38     =  15.5 ;
var imtusdnegatif38  =  14.4 ;

var imtusdpositif39  =16.8   ;
var imtumedian39     =15.5   ;
var imtusdnegatif39  =14.3   ;

var imtusdpositif40  = 16.8  ;
var imtumedian40     = 15.5  ;
var imtusdnegatif40  = 14.3  ;

var imtusdpositif41  =  16.8 ;
var imtumedian41     =  15.5 ;
var imtusdnegatif41  =  14.3 ;

var imtusdpositif42  = 16.8  ;
var imtumedian42     = 15.4  ;
var imtusdnegatif42  =  14.3 ;

var imtusdpositif43  = 16.7  ;
var imtumedian43     = 15.4  ;
var imtusdnegatif43  =  14.2 ;

var imtusdpositif44  = 16.7  ;
var imtumedian44     = 15.4  ;
var imtusdnegatif44  = 14.2  ;

var imtusdpositif45  =  16.7 ;
var imtumedian45     = 15.4  ;
var imtusdnegatif45  =  14.2 ;

var imtusdpositif46  =  16.7 ;
var imtumedian46     =  15.4 ;
var imtusdnegatif46  = 14.2  ;

var imtusdpositif47  = 16.7  ;
var imtumedian47     = 15.3  ;
var imtusdnegatif47  = 14.2  ;

var imtusdpositif48  = 16.7  ;
var imtumedian48     = 15.3  ;
var imtusdnegatif48  = 14.1  ;

var imtusdpositif49  = 16.7  ;
var imtumedian49     = 15.3  ;
var imtusdnegatif49  = 14.1  ;

var imtusdpositif50  = 16.7  ;
var imtumedian50     = 15.3  ;
var imtusdnegatif50  = 14.1  ;

var imtusdpositif51  =16.6   ;
var imtumedian51     =  15.3 ;
var imtusdnegatif51  =  14.1 ;

var imtusdpositif52  = 16.6  ;
var imtumedian52     = 15.3  ;
var imtusdnegatif52  =  14.1 ;

var imtusdpositif53  =  16.6 ;
var imtumedian53     =  15.3 ;
var imtusdnegatif53  = 14.1  ;

var imtusdpositif54  = 16.6  ;
var imtumedian54     = 15.3  ;
var imtusdnegatif54  =  14 ;

var imtusdpositif55  =  16.6 ;
var imtumedian55     = 15.2  ;
var imtusdnegatif55  = 14  ;

var imtusdpositif56  =  16.6 ;
var imtumedian56     =  15.2 ;
var imtusdnegatif56  = 14  ;

var imtusdpositif57  =  16.6 ;
var imtumedian57     = 15.2  ;
var imtusdnegatif57  = 14  ;

var imtusdpositif58  =  16.6 ;
var imtumedian58    =  15.2 ;
var imtusdnegatif58  = 14  ;

var imtusdpositif59  = 16.6  ;
var imtumedian59     = 15.2  ;
var imtusdnegatif59  = 14  ;

var imtusdpositif60  = 16.6  ;
var imtumedian60     = 15.2  ;
var imtusdnegatif60  =  14 ;



//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK LAKI
{
    var bulan = document.getElementById("bulan").value;
    var angka = document.getElementById("angka").value;
    var tester = 0;
    switch (true) {
        case bulan == 0:
    if(angka - median0 > 0){
        tester = ((angka-median0)/ (sdpositif0-median0) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median0 < 0){
        tester = ((angka-median0)/ (median0-sdnegatif0));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(angka - median1 > 0){
        tester = ((angka-median1)/ (sdpositif1-median1) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median1 < 0){
        tester = ((angka-median1)/ (median1-sdnegatif1));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 2:
    if(angka - median2 > 0){
        tester = ((angka-median2)/ (sdpositif2-median2) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median2 < 0){
        tester = ((angka-median2)/ (median2-sdnegatif2));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(angka - median3 > 0){
        tester = ((angka-median3)/ (sdpositif2-median3) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median3 < 0){
        tester = ((angka-median3)/ (median3-sdnegatif3));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(angka - median4 > 0){
        tester = ((angka-median4)/ (sdpositif4-median4) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median4 < 0){
        tester = ((angka-median4)/ (median4-sdnegatif4));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(angka - median5 > 0){
        tester = ((angka-median5)/ (sdpositif5-median5) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median5 < 0){
        tester = ((angka-median5)/ (median5-sdnegatif5));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(angka - median6 > 0){
        tester = ((angka-median6)/ (sdpositif6-median6) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median6 < 0){
        tester = ((angka-median6)/ (median6-sdnegatif6));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(angka - median7 > 0){
        tester = ((angka-median7)/ (sdpositif7-median7) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median7 < 0){
        tester = ((angka-median7)/ (median7-sdnegatif7));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(angka - median8 > 0){
        tester = ((angka-median8)/ (sdpositif8-median8) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median8 < 0){
        tester = ((angka-median8)/ (median8-sdnegatif8));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(angka - median9 > 0){
        tester = ((angka-median9)/ (sdpositif9-median9) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median9 < 0){
        tester = ((angka-median9)/ (median9-sdnegatif9));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(angka - median10 > 0){
        tester = ((angka-median10)/ (sdpositif10-median10) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median10 < 0){
        tester = ((angka-median10)/ (median10-sdnegatif10));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(angka - median11 > 0){
        tester = ((angka-median11)/ (sdpositif11-median11) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median11 < 0){
        tester = ((angka-median11)/ (median11-sdnegatif11));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(angka - median12 > 0){
        tester = ((angka-median12)/ (sdpositif12-median12) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median12 < 0){
        tester = ((angka-median12)/ (median12-sdnegatif12));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(angka - median13 > 0){
        tester = ((angka-median13)/ (sdpositif13-median13) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median13 < 0){
        tester = ((angka-median13)/ (median13-sdnegatif13));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(angka - median14 > 0){
        tester = ((angka-median14)/ (sdpositif14-median14) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median14 < 0){
        tester = ((angka-median14)/ (median14-sdnegatif14));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(angka - median15 > 0){
        tester = ((angka-median15)/ (sdpositif15-median15) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median15 < 0){
        tester = ((angka-median15)/ (median15-sdnegatif15));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(angka - median16 > 0){
        tester = ((angka-median16)/ (sdpositif16-median16) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median16 < 0){
        tester = ((angka-median16)/ (median16-sdnegatif16));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(angka - median17 > 0){
        tester = ((angka-median17)/ (sdpositif17-median17) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median17 < 0){
        tester = ((angka-median17)/ (median17-sdnegatif17));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(angka - median18 > 0){
        tester = ((angka-median18)/ (sdpositif18-median18) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median18 < 0){
        tester = ((angka-median18)/ (median18-sdnegatif18));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(angka - median19 > 0){
        tester = ((angka-median19)/ (sdpositif19-median19) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median19 < 0){
        tester = ((angka-median19)/ (median19-sdnegatif19));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(angka - median20 > 0){
        tester = ((angka-median20)/ (sdpositif20-median20) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median20 < 0){
        tester = ((angka-median20)/ (median20-sdnegatif20));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(angka - median21 > 0){
        tester = ((angka-median21)/ (sdpositif21-median21) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median21 < 0){
        tester = ((angka-median21)/ (median21-sdnegatif21));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(angka - median22 > 0){
        tester = ((angka-median22)/ (sdpositif22-median22) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median22 < 0){
        tester = ((angka-median22)/ (median22-sdnegatif22));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(angka - median23 > 0){
        tester = ((angka-median23)/ (sdpositif23-median23) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median23 < 0){
        tester = ((angka-median23)/ (median23-sdnegatif23));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(angka - median24 > 0){
        tester = ((angka-median24)/ (sdpositif24-median24) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median24 < 0){
        tester = ((angka-median24)/ (median24-sdnegatif24));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(angka - median25 > 0){
        tester = ((angka-median25)/ (sdpositif25-median25) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median25 < 0){
        tester = ((angka-median25)/ (median25-sdnegatif25));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(angka - median26 > 0){
        tester = ((angka-median26)/ (sdpositif26-median26) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median26 < 0){
        tester = ((angka-median26)/ (median26-sdnegatif26));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(angka - median27 > 0){
        tester = ((angka-median27)/ (sdpositif27-median27) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median27 < 0){
        tester = ((angka-median27)/ (median27-sdnegatif27));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(angka - median28 > 0){
        tester = ((angka-median28)/ (sdpositif28-median28) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median28 < 0){
        tester = ((angka-median28)/ (median28-sdnegatif28));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(angka - median29 > 0){
        tester = ((angka-median29)/ (sdpositif29-median29) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median29 < 0){
        tester = ((angka-median29)/ (median29-sdnegatif29));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(angka - median30 > 0){
        tester = ((angka-median30)/ (sdpositif30-median30) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median30 < 0){
        tester = ((angka-median30)/ (median30-sdnegatif30));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(angka - median31 > 0){
        tester = ((angka-median31)/ (sdpositif31-median31) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median31 < 0){
        tester = ((angka-median31)/ (median31-sdnegatif31));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(angka - median32 > 0){
        tester = ((angka-median32)/ (sdpositif32-median32) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median32 < 0){
        tester = ((angka-median32)/ (median32-sdnegatif32));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(angka - median33 > 0){
        tester = ((angka-median33)/ (sdpositif33-median33) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median33 < 0){
        tester = ((angka-median33)/ (median33-sdnegatif33));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(angka - median34 > 0){
        tester = ((angka-median34)/ (sdpositif34-median34) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median34 < 0){
        tester = ((angka-median34)/ (median34-sdnegatif34));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(angka - median35 > 0){
        tester = ((angka-median35)/ (sdpositif35-median35) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median35 < 0){
        tester = ((angka-median35)/ (median35-sdnegatif35));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(angka - median36 > 0){
        tester = ((angka-median36)/ (sdpositif36-median36) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median36 < 0){
        tester = ((angka-median36)/ (median36-sdnegatif36));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(angka - median37 > 0){
        tester = ((angka-median37)/ (sdpositif37-median37) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median37 < 0){
        tester = ((angka-median37)/ (median37-sdnegatif37));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(angka - median38 > 0){
        tester = ((angka-median38)/ (sdpositif38-median38) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median38 < 0){
        tester = ((angka-median38)/ (median38-sdnegatif38));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(angka - median39 > 0){
        tester = ((angka-median39)/ (sdpositif39-median39) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median39 < 0){
        tester = ((angka-median39)/ (median39-sdnegatif39));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(angka - median40 > 0){
        tester = ((angka-median40)/ (sdpositif40-median40) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median40 < 0){
        tester = ((angka-median40)/ (median40-sdnegatif40));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(angka - median41 > 0){
        tester = ((angka-median41)/ (sdpositif41-median41) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median41 < 0){
        tester = ((angka-median41)/ (median41-sdnegatif41));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(angka - median42 > 0){
        tester = ((angka-median42)/ (sdpositif42-median42) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median42 < 0){
        tester = ((angka-median42)/ (median42-sdnegatif42));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(angka - median43 > 0){
        tester = ((angka-median43)/ (sdpositif43-median43) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median43 < 0){
        tester = ((angka-median43)/ (median43-sdnegatif43));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(angka - median44 > 0){
        tester = ((angka-median44)/ (sdpositif44-median44) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median44 < 0){
        tester = ((angka-median44)/ (median44-sdnegatif44));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(angka - median45 > 0){
        tester = ((angka-median45)/ (sdpositif45-median45) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median45 < 0){
        tester = ((angka-median45)/ (median45-sdnegatif45));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(angka - median46 > 0){
        tester = ((angka-median46)/ (sdpositif46-median46) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median46 < 0){
        tester = ((angka-median46)/ (median46-sdnegatif46));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(angka - median47 > 0){
        tester = ((angka-median47)/ (sdpositif47-median47) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median47 < 0){
        tester = ((angka-median47)/ (median47-sdnegatif47));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(angka - median48 > 0){
        tester = ((angka-median48)/ (sdpositif48-median48) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median48 < 0){
        tester = ((angka-median48)/ (median48-sdnegatif48));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(angka - median49 > 0){
        tester = ((angka-median49)/ (sdpositif49-median49) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median49 < 0){
        tester = ((angka-median49)/ (median49-sdnegatif49));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(angka - median50 > 0){
        tester = ((angka-median50)/ (sdpositif50-median50) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median50 < 0){
        tester = ((angka-median50)/ (median50-sdnegatif50));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(angka - median51 > 0){
        tester = ((angka-median51)/ (sdpositif51-median51) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median51 < 0){
        tester = ((angka-median51)/ (median51-sdnegatif51));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(angka - median52 > 0){
        tester = ((angka-median52)/ (sdpositif52-median52) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median52 < 0){
        tester = ((angka-median52)/ (median52-sdnegatif52));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(angka - median53 > 0){
        tester = ((angka-median53)/ (sdpositif53-median53) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median53 < 0){
        tester = ((angka-median53)/ (median53-sdnegatif53));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(angka - median54 > 0){
        tester = ((angka-median54)/ (sdpositif54-median54) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median54 < 0){
        tester = ((angka-median54)/ (median54-sdnegatif54));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(angka - median55 > 0){
        tester = ((angka-median55)/ (sdpositif55-median55) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median55 < 0){
        tester = ((angka-median55)/ (median55-sdnegatif55));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(angka - median56 > 0){
        tester = ((angka-median56)/ (sdpositif56-median56) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median56 < 0){
        tester = ((angka-median56)/ (median56-sdnegatif56));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(angka - median57 > 0){
        tester = ((angka-median57)/ (sdpositif57-median57) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median57 < 0){
        tester = ((angka-median57)/ (median57-sdnegatif57));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(angka - median58 > 0){
        tester = ((angka-median58)/ (sdpositif58-median58) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median58 < 0){
        tester = ((angka-median58)/ (median58-sdnegatif58));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(angka - median59 > 0){
        tester = ((angka-median59)/ (sdpositif59-median59) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median59 < 0){
        tester = ((angka-median59)/ (median59-sdnegatif59));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(angka - median60 > 0){
        tester = ((angka-median60)/ (sdpositif60-median60) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - median60 < 0){
        tester = ((angka-median60)/ (median60-sdnegatif60));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');
}
}


//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK LAKI
 {
    var bulan = document.getElementById("bulan").value;
    var tinggi = document.getElementById("tinggi").value;
    var angka = document.getElementById("angka").value;
    switch (true) {
        case bulan == 0:
    if(tinggi - tbumedian0 > 0){
        tester2 = ((tinggi-tbumedian0)/ (tbusdpositif0-tbumedian0) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian0 < 0){
        tester2 = ((tinggi-tbumedian0)/ (tbumedian0-tbusdnegatif0));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(tinggi - tbumedian1 > 0){
        tester2 = ((tinggi-tbumedian1)/ (tbusdpositif1-tbumedian1) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian1 < 0){
        tester2 = ((tinggi-tbumedian1)/ (tbumedian1-tbusdnegatif1));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 2:
    if(tinggi - tbumedian2 > 0){
        tester2 = ((tinggi-tbumedian2)/ (tbusdpositif2-tbumedian2) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian2 < 0){
        tester2 = ((tinggi-tbumedian2)/ (tbumedian2-tbusdnegatif2));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(tinggi - tbumedian3 > 0){
        tester2 = ((tinggi-tbumedian3)/ (tbusdpositif2-tbumedian3) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian3 < 0){
        tester2 = ((tinggi-tbumedian3)/ (tbumedian3-tbusdnegatif3));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(tinggi - tbumedian4 > 0){
        tester2 = ((tinggi-tbumedian4)/ (tbusdpositif4-tbumedian4) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian4 < 0){
        tester2 = ((tinggi-tbumedian4)/ (tbumedian4-tbusdnegatif4));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(tinggi - tbumedian5 > 0){
        tester2 = ((tinggi-tbumedian5)/ (tbusdpositif5-tbumedian5) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian5 < 0){
        tester2 = ((tinggi-tbumedian5)/ (tbumedian5-tbusdnegatif5));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(tinggi - tbumedian6 > 0){
        tester2 = ((tinggi-tbumedian6)/ (tbusdpositif6-tbumedian6) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian6 < 0){
        tester2 = ((tinggi-tbumedian6)/ (tbumedian6-tbusdnegatif6));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(tinggi - tbumedian7 > 0){
        tester2 = ((tinggi-tbumedian7)/ (tbusdpositif7-tbumedian7) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian7 < 0){
        tester2 = ((tinggi-tbumedian7)/ (tbumedian7-tbusdnegatif7));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(tinggi - tbumedian8 > 0){
        tester2 = ((tinggi-tbumedian8)/ (tbusdpositif8-tbumedian8) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian8 < 0){
        tester2 = ((tinggi-tbumedian8)/ (tbumedian8-tbusdnegatif8));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(tinggi - tbumedian9 > 0){
        tester2 = ((tinggi-tbumedian9)/ (tbusdpositif9-tbumedian9) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian9 < 0){
        tester2 = ((tinggi-tbumedian9)/ (tbumedian9-tbusdnegatif9));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(tinggi - tbumedian10 > 0){
        tester2 = ((tinggi-tbumedian10)/ (tbusdpositif10-tbumedian10) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian10 < 0){
        tester2 = ((tinggi-tbumedian10)/ (tbumedian10-tbusdnegatif10));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(tinggi - tbumedian11 > 0){
        tester2 = ((tinggi-tbumedian11)/ (tbusdpositif11-tbumedian11) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian11 < 0){
        tester2 = ((tinggi-tbumedian11)/ (tbumedian11-tbusdnegatif11));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(tinggi - tbumedian12 > 0){
        tester2 = ((tinggi-tbumedian12)/ (tbusdpositif12-tbumedian12) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian12 < 0){
        tester2 = ((tinggi-tbumedian12)/ (tbumedian12-tbusdnegatif12));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(tinggi - tbumedian13 > 0){
        tester2 = ((tinggi-tbumedian13)/ (tbusdpositif13-tbumedian13) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian13 < 0){
        tester2 = ((tinggi-tbumedian13)/ (tbumedian13-tbusdnegatif13));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(tinggi - tbumedian14 > 0){
        tester2 = ((tinggi-tbumedian14)/ (tbusdpositif14-tbumedian14) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian14 < 0){
        tester2 = ((tinggi-tbumedian14)/ (tbumedian14-tbusdnegatif14));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(tinggi - tbumedian15 > 0){
        tester2 = ((tinggi-tbumedian15)/ (tbusdpositif15-tbumedian15) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian15 < 0){
        tester2 = ((tinggi-tbumedian15)/ (tbumedian15-tbusdnegatif15));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(tinggi - tbumedian16 > 0){
        tester2 = ((tinggi-tbumedian16)/ (tbusdpositif16-tbumedian16) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian16 < 0){
        tester2 = ((tinggi-tbumedian16)/ (tbumedian16-tbusdnegatif16));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(tinggi - tbumedian17 > 0){
        tester2 = ((tinggi-tbumedian17)/ (tbusdpositif17-tbumedian17) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian17 < 0){
        tester2 = ((tinggi-tbumedian17)/ (tbumedian17-tbusdnegatif17));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(tinggi - tbumedian18 > 0){
        tester2 = ((tinggi-tbumedian18)/ (tbusdpositif18-tbumedian18) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian18 < 0){
        tester2 = ((tinggi-tbumedian18)/ (tbumedian18-tbusdnegatif18));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(tinggi - tbumedian19 > 0){
        tester2 = ((tinggi-tbumedian19)/ (tbusdpositif19-tbumedian19) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian19 < 0){
        tester2 = ((tinggi-tbumedian19)/ (tbumedian19-tbusdnegatif19));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(tinggi - tbumedian20 > 0){
        tester2 = ((tinggi-tbumedian20)/ (tbusdpositif20-tbumedian20) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian20 < 0){
        tester2 = ((tinggi-tbumedian20)/ (tbumedian20-tbusdnegatif20));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(tinggi - tbumedian21 > 0){
        tester2 = ((tinggi-tbumedian21)/ (tbusdpositif21-tbumedian21) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian21 < 0){
        tester2 = ((tinggi-tbumedian21)/ (tbumedian21-tbusdnegatif21));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(tinggi - tbumedian22 > 0){
        tester2 = ((tinggi-tbumedian22)/ (tbusdpositif22-tbumedian22) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian22 < 0){
        tester2 = ((tinggi-tbumedian22)/ (tbumedian22-tbusdnegatif22));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(tinggi - tbumedian23 > 0){
        tester2 = ((tinggi-tbumedian23)/ (tbusdpositif23-tbumedian23) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian23 < 0){
        tester2 = ((tinggi-tbumedian23)/ (tbumedian23-tbusdnegatif23));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(tinggi - tbumedian24 > 0){
        tester2 = ((tinggi-tbumedian24)/ (tbusdpositif24-tbumedian24) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian24 < 0){
        tester2 = ((tinggi-tbumedian24)/ (tbumedian24-tbusdnegatif24));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(tinggi - tbumedian25 > 0){
        tester2 = ((tinggi-tbumedian25)/ (tbusdpositif25-tbumedian25) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian25 < 0){
        tester2 = ((tinggi-tbumedian25)/ (tbumedian25-tbusdnegatif25));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(tinggi - tbumedian26 > 0){
        tester2 = ((tinggi-tbumedian26)/ (tbusdpositif26-tbumedian26) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian26 < 0){
        tester2 = ((tinggi-tbumedian26)/ (tbumedian26-tbusdnegatif26));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(tinggi - tbumedian27 > 0){
        tester2 = ((tinggi-tbumedian27)/ (tbusdpositif27-tbumedian27) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian27 < 0){
        tester2 = ((tinggi-tbumedian27)/ (tbumedian27-tbusdnegatif27));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(tinggi - tbumedian28 > 0){
        tester2 = ((tinggi-tbumedian28)/ (tbusdpositif28-tbumedian28) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian28 < 0){
        tester2 = ((tinggi-tbumedian28)/ (tbumedian28-tbusdnegatif28));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(tinggi - tbumedian29 > 0){
        tester2 = ((tinggi-tbumedian29)/ (tbusdpositif29-tbumedian29) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian29 < 0){
        tester2 = ((tinggi-tbumedian29)/ (tbumedian29-tbusdnegatif29));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(tinggi - tbumedian30 > 0){
        tester2 = ((tinggi-tbumedian30)/ (tbusdpositif30-tbumedian30) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian30 < 0){
        tester2 = ((tinggi-tbumedian30)/ (tbumedian30-tbusdnegatif30));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(tinggi - tbumedian31 > 0){
        tester2 = ((tinggi-tbumedian31)/ (tbusdpositif31-tbumedian31) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian31 < 0){
        tester2 = ((tinggi-tbumedian31)/ (tbumedian31-tbusdnegatif31));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(tinggi - tbumedian32 > 0){
        tester2 = ((tinggi-tbumedian32)/ (tbusdpositif32-tbumedian32) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian32 < 0){
        tester2 = ((tinggi-tbumedian32)/ (tbumedian32-tbusdnegatif32));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(tinggi - tbumedian33 > 0){
        tester2 = ((tinggi-tbumedian33)/ (tbusdpositif33-tbumedian33) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian33 < 0){
        tester2 = ((tinggi-tbumedian33)/ (tbumedian33-tbusdnegatif33));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(tinggi - tbumedian34 > 0){
        tester2 = ((tinggi-tbumedian34)/ (tbusdpositif34-tbumedian34) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian34 < 0){
        tester2 = ((tinggi-tbumedian34)/ (tbumedian34-tbusdnegatif34));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(tinggi - tbumedian35 > 0){
        tester2 = ((tinggi-tbumedian35)/ (tbusdpositif35-tbumedian35) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian35 < 0){
        tester2 = ((tinggi-tbumedian35)/ (tbumedian35-tbusdnegatif35));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(tinggi - tbumedian36 > 0){
        tester2 = ((tinggi-tbumedian36)/ (tbusdpositif36-tbumedian36) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian36 < 0){
        tester2 = ((tinggi-tbumedian36)/ (tbumedian36-tbusdnegatif36));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(tinggi - tbumedian37 > 0){
        tester2 = ((tinggi-tbumedian37)/ (tbusdpositif37-tbumedian37) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian37 < 0){
        tester2 = ((tinggi-tbumedian37)/ (tbumedian37-tbusdnegatif37));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(tinggi - tbumedian38 > 0){
        tester2 = ((tinggi-tbumedian38)/ (tbusdpositif38-tbumedian38) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian38 < 0){
        tester2 = ((tinggi-tbumedian38)/ (tbumedian38-tbusdnegatif38));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(tinggi - tbumedian39 > 0){
        tester2 = ((tinggi-tbumedian39)/ (tbusdpositif39-tbumedian39) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian39 < 0){
        tester2 = ((tinggi-tbumedian39)/ (tbumedian39-tbusdnegatif39));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(tinggi - tbumedian40 > 0){
        tester2 = ((tinggi-tbumedian40)/ (tbusdpositif40-tbumedian40) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian40 < 0){
        tester2 = ((tinggi-tbumedian40)/ (tbumedian40-tbusdnegatif40));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(tinggi - tbumedian41 > 0){
        tester2 = ((tinggi-tbumedian41)/ (tbusdpositif41-tbumedian41) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian41 < 0){
        tester2 = ((tinggi-tbumedian41)/ (tbumedian41-tbusdnegatif41));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(tinggi - tbumedian42 > 0){
        tester2 = ((tinggi-tbumedian42)/ (tbusdpositif42-tbumedian42) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian42 < 0){
        tester2 = ((tinggi-tbumedian42)/ (tbumedian42-tbusdnegatif42));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(tinggi - tbumedian43 > 0){
        tester2 = ((tinggi-tbumedian43)/ (tbusdpositif43-tbumedian43) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian43 < 0){
        tester2 = ((tinggi-tbumedian43)/ (tbumedian43-tbusdnegatif43));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(tinggi - tbumedian44 > 0){
        tester2 = ((tinggi-tbumedian44)/ (tbusdpositif44-tbumedian44) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian44 < 0){
        tester2 = ((tinggi-tbumedian44)/ (tbumedian44-tbusdnegatif44));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(tinggi - tbumedian45 > 0){
        tester2 = ((tinggi-tbumedian45)/ (tbusdpositif45-tbumedian45) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian45 < 0){
        tester2 = ((tinggi-tbumedian45)/ (tbumedian45-tbusdnegatif45));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(tinggi - tbumedian46 > 0){
        tester2 = ((tinggi-tbumedian46)/ (tbusdpositif46-tbumedian46) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian46 < 0){
        tester2 = ((tinggi-tbumedian46)/ (tbumedian46-tbusdnegatif46));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(tinggi - tbumedian47 > 0){
        tester2 = ((tinggi-tbumedian47)/ (tbusdpositif47-tbumedian47) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian47 < 0){
        tester2 = ((tinggi-tbumedian47)/ (tbumedian47-tbusdnegatif47));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(tinggi - tbumedian48 > 0){
        tester2 = ((tinggi-tbumedian48)/ (tbusdpositif48-tbumedian48) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian48 < 0){
        tester2 = ((tinggi-tbumedian48)/ (tbumedian48-tbusdnegatif48));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(tinggi - tbumedian49 > 0){
        tester2 = ((tinggi-tbumedian49)/ (tbusdpositif49-tbumedian49) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian49 < 0){
        tester2 = ((tinggi-tbumedian49)/ (tbumedian49-tbusdnegatif49));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(tinggi - tbumedian50 > 0){
        tester2 = ((tinggi-tbumedian50)/ (tbusdpositif50-tbumedian50) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian50 < 0){
        tester2 = ((tinggi-tbumedian50)/ (tbumedian50-tbusdnegatif50));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(tinggi - tbumedian51 > 0){
        tester2 = ((tinggi-tbumedian51)/ (tbusdpositif51-tbumedian51) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian51 < 0){
        tester2 = ((tinggi-tbumedian51)/ (tbumedian51-tbusdnegatif51));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(tinggi - tbumedian52 > 0){
        tester2 = ((tinggi-tbumedian52)/ (tbusdpositif52-tbumedian52) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian52 < 0){
        tester2 = ((tinggi-tbumedian52)/ (tbumedian52-tbusdnegatif52));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(tinggi - tbumedian53 > 0){
        tester2 = ((tinggi-tbumedian53)/ (tbusdpositif53-tbumedian53) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian53 < 0){
        tester2 = ((tinggi-tbumedian53)/ (tbumedian53-tbusdnegatif53));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(tinggi - tbumedian54 > 0){
        tester2 = ((tinggi-tbumedian54)/ (tbusdpositif54-tbumedian54) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian54 < 0){
        tester2 = ((tinggi-tbumedian54)/ (tbumedian54-tbusdnegatif54));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(tinggi - tbumedian55 > 0){
        tester2 = ((tinggi-tbumedian55)/ (tbusdpositif55-tbumedian55) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian55 < 0){
        tester2 = ((tinggi-tbumedian55)/ (tbumedian55-tbusdnegatif55));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(tinggi - tbumedian56 > 0){
        tester2 = ((tinggi-tbumedian56)/ (tbusdpositif56-tbumedian56) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian56 < 0){
        tester2 = ((tinggi-tbumedian56)/ (tbumedian56-tbusdnegatif56));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(tinggi - tbumedian57 > 0){
        tester2 = ((tinggi-tbumedian57)/ (tbusdpositif57-tbumedian57) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian57 < 0){
        tester2 = ((tinggi-tbumedian57)/ (tbumedian57-tbusdnegatif57));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(tinggi - tbumedian58 > 0){
        tester2 = ((tinggi-tbumedian58)/ (tbusdpositif58-tbumedian58) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian58 < 0){
        tester2 = ((tinggi-tbumedian58)/ (tbumedian58-tbusdnegatif58));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(tinggi - tbumedian59 > 0){
        tester2 = ((tinggi-tbumedian59)/ (tbusdpositif59-tbumedian59) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian59 < 0){
        tester2 = ((tinggi-tbumedian59)/ (tbumedian59-tbusdnegatif59));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(tinggi - tbumedian60 > 0){
        tester2 = ((tinggi-tbumedian60)/ (tbusdpositif60-tbumedian60) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbumedian60 < 0){
        tester2 = ((tinggi-tbumedian60)/ (tbumedian60-tbusdnegatif60));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');
}
}


//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI
//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK LAKI
  {
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
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else if(angka - imtumedian0 < 0){
            tester3 = ((angka-imtumedian0)/ (imtumedian0-imtusdnegatif0));
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
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
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else if(angka - imtumedian1 < 0){
            tester3 = ((angka-imtumedian1)/ (imtumedian1-imtusdnegatif1));
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else {
        alert('Not Available');
        }
        break;
        case bulan == 2:
    if(angka - imtumedian2 > 0){
        tester3 = ((angka-imtumedian2)/ (imtusdpositif2-imtumedian2) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian2 < 0){
        tester3 = ((angka-imtumedian2)/ (imtumedian2-imtusdnegatif2));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(angka - imtumedian3 > 0){
        tester3 = ((angka-imtumedian3)/ (imtusdpositif2-imtumedian3) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian3 < 0){
        tester3 = ((angka-imtumedian3)/ (imtumedian3-imtusdnegatif3));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(angka - imtumedian4 > 0){
        tester3 = ((angka-imtumedian4)/ (imtusdpositif4-imtumedian4) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian4 < 0){
        tester3 = ((angka-imtumedian4)/ (imtumedian4-imtusdnegatif4));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(angka - imtumedian5 > 0){
        tester3 = ((angka-imtumedian5)/ (imtusdpositif5-imtumedian5) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian5 < 0){
        tester3 = ((angka-imtumedian5)/ (imtumedian5-imtusdnegatif5));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(angka - imtumedian6 > 0){
        tester3 = ((angka-imtumedian6)/ (imtusdpositif6-imtumedian6) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian6 < 0){
        tester3 = ((angka-imtumedian6)/ (imtumedian6-imtusdnegatif6));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(angka - imtumedian7 > 0){
        tester3 = ((angka-imtumedian7)/ (imtusdpositif7-imtumedian7) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian7 < 0){
        tester3 = ((angka-imtumedian7)/ (imtumedian7-imtusdnegatif7));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(angka - imtumedian8 > 0){
        tester3 = ((angka-imtumedian8)/ (imtusdpositif8-imtumedian8) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian8 < 0){
        tester3 = ((angka-imtumedian8)/ (imtumedian8-imtusdnegatif8));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(angka - imtumedian9 > 0){
        tester3 = ((angka-imtumedian9)/ (imtusdpositif9-imtumedian9) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian9 < 0){
        tester3 = ((angka-imtumedian9)/ (imtumedian9-imtusdnegatif9));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(angka - imtumedian10 > 0){
        tester3 = ((angka-imtumedian10)/ (imtusdpositif10-imtumedian10) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian10 < 0){
        tester3 = ((angka-imtumedian10)/ (imtumedian10-imtusdnegatif10));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(angka - imtumedian11 > 0){
        tester3 = ((angka-imtumedian11)/ (imtusdpositif11-imtumedian11) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian11 < 0){
        tester3 = ((angka-imtumedian11)/ (imtumedian11-imtusdnegatif11));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(angka - imtumedian12 > 0){
        tester3 = ((angka-imtumedian12)/ (imtusdpositif12-imtumedian12) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian12 < 0){
        tester3 = ((angka-imtumedian12)/ (imtumedian12-imtusdnegatif12));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(angka - imtumedian13 > 0){
        tester3 = ((angka-imtumedian13)/ (imtusdpositif13-imtumedian13) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian13 < 0){
        tester3 = ((angka-imtumedian13)/ (imtumedian13-imtusdnegatif13));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(angka - imtumedian14 > 0){
        tester3 = ((angka-imtumedian14)/ (imtusdpositif14-imtumedian14) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian14 < 0){
        tester3 = ((angka-imtumedian14)/ (imtumedian14-imtusdnegatif14));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(angka - imtumedian15 > 0){
        tester3 = ((angka-imtumedian15)/ (imtusdpositif15-imtumedian15) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian15 < 0){
        tester3 = ((angka-imtumedian15)/ (imtumedian15-imtusdnegatif15));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(angka - imtumedian16 > 0){
        tester3 = ((angka-imtumedian16)/ (imtusdpositif16-imtumedian16) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian16 < 0){
        tester3 = ((angka-imtumedian16)/ (imtumedian16-imtusdnegatif16));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(angka - imtumedian17 > 0){
        tester3 = ((angka-imtumedian17)/ (imtusdpositif17-imtumedian17) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian17 < 0){
        tester3 = ((angka-imtumedian17)/ (imtumedian17-imtusdnegatif17));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(angka - imtumedian18 > 0){
        tester3 = ((angka-imtumedian18)/ (imtusdpositif18-imtumedian18) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian18 < 0){
        tester3 = ((angka-imtumedian18)/ (imtumedian18-imtusdnegatif18));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(angka - imtumedian19 > 0){
        tester3 = ((angka-imtumedian19)/ (imtusdpositif19-imtumedian19) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian19 < 0){
        tester3 = ((angka-imtumedian19)/ (imtumedian19-imtusdnegatif19));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(angka - imtumedian20 > 0){
        tester3 = ((angka-imtumedian20)/ (imtusdpositif20-imtumedian20) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian20 < 0){
        tester3 = ((angka-imtumedian20)/ (imtumedian20-imtusdnegatif20));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(angka - imtumedian21 > 0){
        tester3 = ((angka-imtumedian21)/ (imtusdpositif21-imtumedian21) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian21 < 0){
        tester3 = ((angka-imtumedian21)/ (imtumedian21-imtusdnegatif21));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(angka - imtumedian22 > 0){
        tester3 = ((angka-imtumedian22)/ (imtusdpositif22-imtumedian22) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian22 < 0){
        tester3 = ((angka-imtumedian22)/ (imtumedian22-imtusdnegatif22));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(angka - imtumedian23 > 0){
        tester3 = ((angka-imtumedian23)/ (imtusdpositif23-imtumedian23) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian23 < 0){
        tester3 = ((angka-imtumedian23)/ (imtumedian23-imtusdnegatif23));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(angka - imtumedian24 > 0){
        tester3 = ((angka-imtumedian24)/ (imtusdpositif24-imtumedian24) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian24 < 0){
        tester3 = ((angka-imtumedian24)/ (imtumedian24-imtusdnegatif24));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(angka - imtumedian25 > 0){
        tester3 = ((angka-imtumedian25)/ (imtusdpositif25-imtumedian25) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian25 < 0){
        tester3 = ((angka-imtumedian25)/ (imtumedian25-imtusdnegatif25));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(angka - imtumedian26 > 0){
        tester3 = ((angka-imtumedian26)/ (imtusdpositif26-imtumedian26) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian26 < 0){
        tester3 = ((angka-imtumedian26)/ (imtumedian26-imtusdnegatif26));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(angka - imtumedian27 > 0){
        tester3 = ((angka-imtumedian27)/ (imtusdpositif27-imtumedian27) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian27 < 0){
        tester3 = ((angka-imtumedian27)/ (imtumedian27-imtusdnegatif27));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(angka - imtumedian28 > 0){
        tester3 = ((angka-imtumedian28)/ (imtusdpositif28-imtumedian28) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian28 < 0){
        tester3 = ((angka-imtumedian28)/ (imtumedian28-imtusdnegatif28));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(angka - imtumedian29 > 0){
        tester3 = ((angka-imtumedian29)/ (imtusdpositif29-imtumedian29) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian29 < 0){
        tester3 = ((angka-imtumedian29)/ (imtumedian29-imtusdnegatif29));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(angka - imtumedian30 > 0){
        tester3 = ((angka-imtumedian30)/ (imtusdpositif30-imtumedian30) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian30 < 0){
        tester3 = ((angka-imtumedian30)/ (imtumedian30-imtusdnegatif30));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(angka - imtumedian31 > 0){
        tester3 = ((angka-imtumedian31)/ (imtusdpositif31-imtumedian31) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian31 < 0){
        tester3 = ((angka-imtumedian31)/ (imtumedian31-imtusdnegatif31));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(angka - imtumedian32 > 0){
        tester3 = ((angka-imtumedian32)/ (imtusdpositif32-imtumedian32) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian32 < 0){
        tester3 = ((angka-imtumedian32)/ (imtumedian32-imtusdnegatif32));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(angka - imtumedian33 > 0){
        tester3 = ((angka-imtumedian33)/ (imtusdpositif33-imtumedian33) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian33 < 0){
        tester3 = ((angka-imtumedian33)/ (imtumedian33-imtusdnegatif33));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(angka - imtumedian34 > 0){
        tester3 = ((angka-imtumedian34)/ (imtusdpositif34-imtumedian34) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian34 < 0){
        tester3 = ((angka-imtumedian34)/ (imtumedian34-imtusdnegatif34));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(angka - imtumedian35 > 0){
        tester3 = ((angka-imtumedian35)/ (imtusdpositif35-imtumedian35) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian35 < 0){
        tester3 = ((angka-imtumedian35)/ (imtumedian35-imtusdnegatif35));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(angka - imtumedian36 > 0){
        tester3 = ((angka-imtumedian36)/ (imtusdpositif36-imtumedian36) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian36 < 0){
        tester3 = ((angka-imtumedian36)/ (imtumedian36-imtusdnegatif36));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(angka - imtumedian37 > 0){
        tester3 = ((angka-imtumedian37)/ (imtusdpositif37-imtumedian37) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian37 < 0){
        tester3 = ((angka-imtumedian37)/ (imtumedian37-imtusdnegatif37));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(angka - imtumedian38 > 0){
        tester3 = ((angka-imtumedian38)/ (imtusdpositif38-imtumedian38) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian38 < 0){
        tester3 = ((angka-imtumedian38)/ (imtumedian38-imtusdnegatif38));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(angka - imtumedian39 > 0){
        tester3 = ((angka-imtumedian39)/ (imtusdpositif39-imtumedian39) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian39 < 0){
        tester3 = ((angka-imtumedian39)/ (imtumedian39-imtusdnegatif39));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(angka - imtumedian40 > 0){
        tester3 = ((angka-imtumedian40)/ (imtusdpositif40-imtumedian40) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian40 < 0){
        tester3 = ((angka-imtumedian40)/ (imtumedian40-imtusdnegatif40));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(angka - imtumedian41 > 0){
        tester3 = ((angka-imtumedian41)/ (imtusdpositif41-imtumedian41) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian41 < 0){
        tester3 = ((angka-imtumedian41)/ (imtumedian41-imtusdnegatif41));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(angka - imtumedian42 > 0){
        tester3 = ((angka-imtumedian42)/ (imtusdpositif42-imtumedian42) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian42 < 0){
        tester3 = ((angka-imtumedian42)/ (imtumedian42-imtusdnegatif42));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(angka - imtumedian43 > 0){
        tester3 = ((angka-imtumedian43)/ (imtusdpositif43-imtumedian43) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian43 < 0){
        tester3 = ((angka-imtumedian43)/ (imtumedian43-imtusdnegatif43));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(angka - imtumedian44 > 0){
        tester3 = ((angka-imtumedian44)/ (imtusdpositif44-imtumedian44) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian44 < 0){
        tester3 = ((angka-imtumedian44)/ (imtumedian44-imtusdnegatif44));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(angka - imtumedian45 > 0){
        tester3 = ((angka-imtumedian45)/ (imtusdpositif45-imtumedian45) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian45 < 0){
        tester3 = ((angka-imtumedian45)/ (imtumedian45-imtusdnegatif45));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(angka - imtumedian46 > 0){
        tester3 = ((angka-imtumedian46)/ (imtusdpositif46-imtumedian46) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian46 < 0){
        tester3 = ((angka-imtumedian46)/ (imtumedian46-imtusdnegatif46));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(angka - imtumedian47 > 0){
        tester3 = ((angka-imtumedian47)/ (imtusdpositif47-imtumedian47) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian47 < 0){
        tester3 = ((angka-imtumedian47)/ (imtumedian47-imtusdnegatif47));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(angka - imtumedian48 > 0){
        tester3 = ((angka-imtumedian48)/ (imtusdpositif48-imtumedian48) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian48 < 0){
        tester3 = ((angka-imtumedian48)/ (imtumedian48-imtusdnegatif48));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(angka - imtumedian49 > 0){
        tester3 = ((angka-imtumedian49)/ (imtusdpositif49-imtumedian49) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian49 < 0){
        tester3 = ((angka-imtumedian49)/ (imtumedian49-imtusdnegatif49));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(angka - imtumedian50 > 0){
        tester3 = ((angka-imtumedian50)/ (imtusdpositif50-imtumedian50) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian50 < 0){
        tester3 = ((angka-imtumedian50)/ (imtumedian50-imtusdnegatif50));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(angka - imtumedian51 > 0){
        tester3 = ((angka-imtumedian51)/ (imtusdpositif51-imtumedian51) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian51 < 0){
        tester3 = ((angka-imtumedian51)/ (imtumedian51-imtusdnegatif51));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(angka - imtumedian52 > 0){
        tester3 = ((angka-imtumedian52)/ (imtusdpositif52-imtumedian52) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian52 < 0){
        tester3 = ((angka-imtumedian52)/ (imtumedian52-imtusdnegatif52));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(angka - imtumedian53 > 0){
        tester3 = ((angka-imtumedian53)/ (imtusdpositif53-imtumedian53) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian53 < 0){
        tester3 = ((angka-imtumedian53)/ (imtumedian53-imtusdnegatif53));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(angka - imtumedian54 > 0){
        tester3 = ((angka-imtumedian54)/ (imtusdpositif54-imtumedian54) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian54 < 0){
        tester3 = ((angka-imtumedian54)/ (imtumedian54-imtusdnegatif54));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(angka - imtumedian55 > 0){
        tester3 = ((angka-imtumedian55)/ (imtusdpositif55-imtumedian55) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian55 < 0){
        tester3 = ((angka-imtumedian55)/ (imtumedian55-imtusdnegatif55));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(angka - imtumedian56 > 0){
        tester3 = ((angka-imtumedian56)/ (imtusdpositif56-imtumedian56) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian56 < 0){
        tester3 = ((angka-imtumedian56)/ (imtumedian56-imtusdnegatif56));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(angka - imtumedian57 > 0){
        tester3 = ((angka-imtumedian57)/ (imtusdpositif57-imtumedian57) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian57 < 0){
        tester3 = ((angka-imtumedian57)/ (imtumedian57-imtusdnegatif57));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(angka - imtumedian58 > 0){
        tester3 = ((angka-imtumedian58)/ (imtusdpositif58-imtumedian58) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian58 < 0){
        tester3 = ((angka-imtumedian58)/ (imtumedian58-imtusdnegatif58));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(angka - imtumedian59 > 0){
        tester3 = ((angka-imtumedian59)/ (imtusdpositif59-imtumedian59) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian59 < 0){
        tester3 = ((angka-imtumedian59)/ (imtumedian59-imtusdnegatif59));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(angka - imtumedian60 > 0){
        tester3 = ((angka-imtumedian60)/ (imtusdpositif60-imtumedian60) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtumedian60 < 0){
        tester3 = ((angka-imtumedian60)/ (imtumedian60-imtusdnegatif60));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
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
    }


    
    else if (jk === "Perempuan"){
//VARIABEL BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
var cewesdpositif0 = 3.7;
var cewesdnegatif0 = 2.8;
var cewemedian0 = 3.2;

var cewesdpositif1 =4.8 ;
var cewesdnegatif1 =3.6 ;
var cewemedian1 =4.2 ;

var cewesdpositif2 =5.8 ;
var cewesdnegatif2 =4.5 ;
var cewemedian2 = 5.1;

var cewesdpositif3 =6.6 ;
var cewesdnegatif3 =5.2 ;
var cewemedian3 =5.8 ;

var cewesdpositif4 =7.3 ;
var cewesdnegatif4 =5.7 ;
var cewemedian4 =6.4 ;

var cewesdpositif5 =7.8 ;
var cewesdnegatif5 =6.1 ;
var cewemedian5 =6.9 ;

var cewesdpositif6 =8.2 ;
var cewesdnegatif6 =6.5 ;
var cewemedian6 =7.3 ;

var cewesdpositif7 =8.6 ;
var cewesdnegatif7 =6.8 ;
var cewemedian7 =7.6 ;

var cewesdpositif8 =9.0 ;
var cewesdnegatif8 =7.0 ;
var cewemedian8 =7.9 ;

var cewesdpositif9 =9.3 ;
var cewesdnegatif9 =7.3 ;
var cewemedian9 =8.2 ;

var cewesdpositif10 =9.6 ;
var cewesdnegatif10 =7.5 ;
var cewemedian10 =8.5 ;

var cewesdpositif11 =9.9 ;
var cewesdnegatif11 =7.7 ;
var cewemedian11 =8.7 ;

var cewesdpositif12 =10.1 ;
var cewesdnegatif12 =7.9 ;
var cewemedian12 =8.9 ;

var cewesdpositif13 =10.4 ;
var cewesdnegatif13 =8.1 ;
var cewemedian13 =9.2 ;

var cewesdpositif14 =10.6 ;
var cewesdnegatif14 =8.3 ;
var cewemedian14 =9.4 ;

var cewesdpositif15 = 10.9;
var cewesdnegatif15 =8.5;
var cewemedian15 =9.6 ;

var cewesdpositif16 =11.1 ;
var cewesdnegatif16 =8.7 ;
var cewemedian16 =9.8;

var cewesdpositif17 =11.4 ;
var cewesdnegatif17 =8.9 ;
var cewemedian17 =10 ;

var cewesdpositif18 =11.6 ;
var cewesdnegatif18 =9.1 ;
var cewemedian18 =10.2 ;

var cewesdpositif19 =11.8 ;
var cewesdnegatif19 =9.2 ;
var cewemedian19 =10.4 ;

var cewesdpositif20 =12.1 ;
var cewesdnegatif20 =9.4 ;
var cewemedian20 =10.6 ;

var cewesdpositif21 =12.3 ;
var cewesdnegatif21 =9.6 ;
var cewemedian21 =10.9 ;

var cewesdpositif22 =12.5 ;
var cewesdnegatif22 =9.8 ;
var cewemedian22 =11.1 ;

var cewesdpositif23 =12.8 ;
var cewesdnegatif23 =10 ;
var cewemedian23 =11.3 ;

var cewesdpositif24 =13 ;
var cewesdnegatif24 =10.2 ;
var cewemedian24 =11.5 ;

var cewesdpositif25 =13.3 ;
var cewesdnegatif25 =10.3 ;
var cewemedian25 =11.7 ;

var cewesdpositif26 =13.5 ;
var cewesdnegatif26 =10.5 ;
var cewemedian26 =11.9 ;

var cewesdpositif27 =13.7 ;
var cewesdnegatif27 =10.7 ;
var cewemedian27 =12.1 ;

var cewesdpositif28 =14 ;
var cewesdnegatif28 =10.9 ;
var cewemedian28 =12.3 ;

var cewesdpositif29 =14.2 ;
var cewesdnegatif29 =11.1 ;
var cewemedian29 =12.5 ;

var cewesdpositif30 =14.4 ;
var cewesdnegatif30 =11.2 ;
var cewemedian30 =12.7 ;

var cewesdpositif31 =14.7 ;
var cewesdnegatif31 =11.4 ;
var cewemedian31 =12.9 ;

var cewesdpositif32 =14.9 ;
var cewesdnegatif32 =11.6 ;
var cewemedian32 =13.1 ;

var cewesdpositif33 =15.1 ;
var cewesdnegatif33 =11.7 ;
var cewemedian33 =13.3 ;

var cewesdpositif34 =15.4 ;
var cewesdnegatif34 =11.9 ;
var cewemedian34 =13.5 ;

var cewesdpositif35 =15.6 ;
var cewesdnegatif35 =12 ;
var cewemedian35 = 13.7 ;

var cewesdpositif36 =15.8 ;
var cewesdnegatif36 =12.2 ;
var cewemedian36 =13.9 ;

var cewesdpositif37 =16 ;
var cewesdnegatif37 =12.4 ;
var cewemedian37 =14 ;

var cewesdpositif38 =16.3 ;
var cewesdnegatif38 =12.5 ;
var cewemedian38 =14.2 ;

var cewesdpositif39 =16.5 ;
var cewesdnegatif39 =12.7 ;
var cewemedian39 =14.4 ;

var cewesdpositif40 =16.7 ;
var cewesdnegatif40 =12.8 ;
var cewemedian40 =14.6 ;

var cewesdpositif41 =16.9 ;
var cewesdnegatif41 =13 ;
var cewemedian41 =14.8 ;

var cewesdpositif42 =17.2 ;
var cewesdnegatif42 =13.1 ;
var cewemedian42 =15 ;

var cewesdpositif43 =17.4 ;
var cewesdnegatif43 =13.3 ;
var cewemedian43 =15.2 ;

var cewesdpositif44 =17.6 ;
var cewesdnegatif44 =13.4 ;
var cewemedian44 =15.3 ;

var cewesdpositif45 =17.8 ;
var cewesdnegatif45 =13.6 ;
var cewemedian45 =15.5 ;

var cewesdpositif46 =18.1 ;
var cewesdnegatif46 =13.7 ;
var cewemedian46 =15.7 ;

var cewesdpositif47 =18.3 ;
var cewesdnegatif47 =13.9 ;
var cewemedian47 =15.9 ;

var cewesdpositif48 =18.5 ;
var cewesdnegatif48 =14 ;
var cewemedian48 =16.1 ;

var cewesdpositif49 =18.8 ;
var cewesdnegatif49 =14.2 ;
var cewemedian49 =16.3 ;

var cewesdpositif50 =19 ;
var cewesdnegatif50 =14.3;
var cewemedian50 =16.4 ;

var cewesdpositif51 =19.2 ;
var cewesdnegatif51 =14.5 ;
var cewemedian51 =16.6 ;

var cewesdpositif52 =19.4 ;
var cewesdnegatif52 =14.6 ;
var cewemedian52 =16.8 ;

var cewesdpositif53 =19.7 ;
var cewesdnegatif53 =14.8 ;
var cewemedian53 =17 ;

var cewesdpositif54 =19.9 ;
var cewesdnegatif54 =14.9 ;
var cewemedian54 =17.2 ;

var cewesdpositif55 =20.1 ;
var cewesdnegatif55 =15.1 ;
var cewemedian55 =17.3 ;

var cewesdpositif56 =20.3 ;
var cewesdnegatif56 =15.2 ;
var cewemedian56 =17.5 ;

var cewesdpositif57 =20.6 ;
var cewesdnegatif57 =15.3 ;
var cewemedian57 =17.7 ;

var cewesdpositif58 =20.8 ;
var cewesdnegatif58 =15.5 ;
var cewemedian58 =17.9 ;

var cewesdpositif59 =21 ;
var cewesdnegatif59 =15.6 ;
var cewemedian59 =18 ;

var cewesdpositif60 =22.2 ;
var cewesdnegatif60 =15.8 ;
var cewemedian60 =18.2 ;

//VARIABEL TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//VARIABEL TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
var tbucewesdpositif0  = 51  ;
var tbucewemedian0     = 49.1  ;
var tbucewesdnegatif0  = 47.3  ;

var tbucewesdpositif1  =55.6   ;
var tbucewemedian1     = 53.7  ;
var tbucewesdnegatif1  = 51.7  ;

var tbucewesdpositif2  =  59.1 ;
var tbucewemedian2     =  57.1 ;
var tbucewesdnegatif2  = 55  ;

var tbucewesdpositif3  =  61.9 ;
var tbucewemedian3     =  59.8 ;
var tbucewesdnegatif3  =  57.7 ;

var tbucewesdpositif4  = 64.3  ;
var tbucewemedian4     =62.1   ;
var tbucewesdnegatif4  =59.9   ;

var tbucewesdpositif5  =66.2   ;
var tbucewemedian5     =64   ;
var tbucewesdnegatif5  =61.8   ;

var tbucewesdpositif6  = 68  ;
var tbucewemedian6     = 65.7  ;
var tbucewesdnegatif6  =63.5   ;

var tbucewesdpositif7  =  69.6 ;
var tbucewemedian7     =  67.3 ;
var tbucewesdnegatif7  = 65  ;

var tbucewesdpositif8  = 71.1  ;
var tbucewemedian8     =68.7   ;
var tbucewesdnegatif8  = 66.4  ;

var tbucewesdpositif9  = 72.6  ;
var tbucewemedian9     = 70.1  ;
var tbucewesdnegatif9  = 67.7  ;

var tbucewesdpositif10  =73.9   ;
var tbucewemedian10     = 71.5  ;
var tbucewesdnegatif10  = 69  ;

var tbucewesdpositif11  = 75.3  ;
var tbucewemedian11     = 72.8  ;
var tbucewesdnegatif11  = 70.3  ;

var tbucewesdpositif12  = 76.6  ;
var tbucewemedian12     = 74  ;
var tbucewesdnegatif12  = 71.4  ;

var tbucewesdpositif13  = 77.8  ;
var tbucewemedian13     = 75.2  ;
var tbucewesdnegatif13  = 72.6  ;

var tbucewesdpositif14  =79.1   ;
var tbucewemedian14     = 76.4  ;
var tbucewesdnegatif14  = 73.7  ;

var tbucewesdpositif15  = 80.2  ;
var tbucewemedian15     = 77.5  ;
var tbucewesdnegatif15  = 74.8  ;

var tbucewesdpositif16  = 81.4  ;
var tbucewemedian16     =  78.6 ;
var tbucewesdnegatif16  = 75.8  ;

var tbucewesdpositif17  = 82.5  ;
var tbucewemedian17     = 79.7  ;
var tbucewesdnegatif17  = 76.8  ;

var tbucewesdpositif18  = 83.6  ;
var tbucewemedian18     = 80.7  ;
var tbucewesdnegatif18  = 77.8  ;

var tbucewesdpositif19  =84.7   ;
var tbucewemedian19     = 81.7  ;
var tbucewesdnegatif19  = 78.8  ;

var tbucewesdpositif20  = 85.7  ;
var tbucewemedian20     = 82.7   ;
var tbucewesdnegatif20  = 79.7  ;

var tbucewesdpositif21  = 86.7  ;
var tbucewemedian21     = 83.7  ;
var tbucewesdnegatif21  = 80.6  ;

var tbucewesdpositif22  = 87.7  ;
var tbucewemedian22     = 84.6 ;
var tbucewesdnegatif22  = 81.5  ;

var tbucewesdpositif23  = 88.7  ;
var tbucewemedian23     = 85.5  ;
var tbucewesdnegatif23  = 82.3  ;

var tbucewesdpositif24  = 89.6  ;
var tbucewemedian24     = 86.4  ;
var tbucewesdnegatif24  = 83.2  ;

var tbucewesdpositif25  = 89.9  ;
var tbucewemedian25     =  86.6 ;
var tbucewesdnegatif25  = 83.3  ;

var tbucewesdpositif26  = 90.8  ;
var tbucewemedian26     = 87.4  ;
var tbucewesdnegatif26  = 84.1  ;

var tbucewesdpositif27  = 91.7  ;
var tbucewemedian27     =  88.3 ;
var tbucewesdnegatif27  =  84.9 ;

var tbucewesdpositif28  =92.5   ;
var tbucewemedian28     = 89.1  ;
var tbucewesdnegatif28  = 85.7  ;

var tbucewesdpositif29  = 93.4  ;
var tbucewemedian29     = 89.9  ;
var tbucewesdnegatif29  = 86.4  ;

var tbucewesdpositif30  = 94.2  ;
var tbucewemedian30     =  90.7 ;
var tbucewesdnegatif30  = 87.1  ;

var tbucewesdpositif31  =95   ;
var tbucewemedian31     = 91.4  ;
var tbucewesdnegatif31  = 87.9  ;

var tbucewesdpositif32  =95.8   ;
var tbucewemedian32     =92.2   ;
var tbucewesdnegatif32  = 88.6  ;

var tbucewesdpositif33  = 96.6  ;
var tbucewemedian33     = 92.9  ;
var tbucewesdnegatif33  = 89.3  ;

var tbucewesdpositif34  =97.4   ;
var tbucewemedian34     = 93.6  ;
var tbucewesdnegatif34  = 89.9  ;

var tbucewesdpositif35  =98.1   ;
var tbucewemedian35     =94.4   ;
var tbucewesdnegatif35  =90.6   ;

var tbucewesdpositif36  =98.9   ;
var tbucewemedian36     =95.1   ;
var tbucewesdnegatif36  = 91.2  ;

var tbucewesdpositif37  = 99.6  ;
var tbucewemedian37     =95.7   ;
var tbucewesdnegatif37  = 91.9  ;

var tbucewesdpositif38  = 100.3  ;
var tbucewemedian38     =96.4   ;
var tbucewesdnegatif38  = 92.5  ;

var tbucewesdpositif39  = 101  ;
var tbucewemedian39     =97.1   ;
var tbucewesdnegatif39  = 93.1  ;

var tbucewesdpositif40  =101.7   ;
var tbucewemedian40     =97.7   ;
var tbucewesdnegatif40  = 93.8  ;

var tbucewesdpositif41  = 102.4  ;
var tbucewemedian41     = 98.4  ;
var tbucewesdnegatif41  = 94.4  ;

var tbucewesdpositif42  = 103.1  ;
var tbucewemedian42     = 99  ;
var tbucewesdnegatif42  = 95  ;

var tbucewesdpositif43  = 103.8  ;
var tbucewemedian43     = 99.7  ;
var tbucewesdnegatif43  = 95.6  ;

var tbucewesdpositif44  = 104.5  ;
var tbucewemedian44     = 100.3  ;
var tbucewesdnegatif44  = 96.2  ;

var tbucewesdpositif45  = 105.1  ;
var tbucewemedian45     = 100.9  ;
var tbucewesdnegatif45  = 96.7  ;

var tbucewesdpositif46  =105.8   ;
var tbucewemedian46     = 101.5  ;
var tbucewesdnegatif46  = 97.3  ;

var tbucewesdpositif47  =106.4   ;
var tbucewemedian47     = 102.1  ;
var tbucewesdnegatif47  = 97.9  ;

var tbucewesdpositif48  =107   ;
var tbucewemedian48     = 102.7  ;
var tbucewesdnegatif48  = 98.4  ;

var tbucewesdpositif49  =107.7   ;
var tbucewemedian49     = 103.3  ;
var tbucewesdnegatif49  = 99  ;

var tbucewesdpositif50  =108.3   ;
var tbucewemedian50     = 103.9  ;
var tbucewesdnegatif50  =99.5   ;

var tbucewesdpositif51  =108.9   ;
var tbucewemedian51     = 104.5  ;
var tbucewesdnegatif51  =100.1   ;

var tbucewesdpositif52  = 109.5  ;
var tbucewemedian52     = 105  ;
var tbucewesdnegatif52  = 100.6  ;

var tbucewesdpositif53  = 110.1  ;
var tbucewemedian53     = 105.6  ;
var tbucewesdnegatif53  =  101.1 ;

var tbucewesdpositif54  = 110.7  ;
var tbucewemedian54     = 106.2  ;
var tbucewesdnegatif54  = 101.6  ;

var tbucewesdpositif55  =111.3   ;
var tbucewemedian55     = 106.7  ;
var tbucewesdnegatif55  = 102.2  ;

var tbucewesdpositif56  =111.9   ;
var tbucewemedian56     = 107.3  ;
var tbucewesdnegatif56  =102.7   ;

var tbucewesdpositif57  =112.5   ;
var tbucewemedian57     =107.8   ;
var tbucewesdnegatif57  =103.2   ;

var tbucewesdpositif58  =113   ;
var tbucewemedian58    = 108.4  ;
var tbucewesdnegatif58  =103.7   ;

var tbucewesdpositif59  = 113.6  ;
var tbucewemedian59     = 108.9  ;
var tbucewesdnegatif59  = 104.2  ;

var tbucewesdpositif60  = 114.2  ;
var tbucewemedian60     = 109.4  ;
var tbucewesdnegatif60  = 104.7  ;

//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//VARIABEL INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
var imtucewesdpositif0  =   14.6;
var imtucewemedian0     =   13.3;
var imtucewesdnegatif0  =   12.2;

var imtucewesdpositif1  =   16;
var imtucewemedian1     =   14.6;
var imtucewesdnegatif1  =   13.2;

var imtucewesdpositif2  =   17.3;
var imtucewemedian2     =   15.8;
var imtucewesdnegatif2  =   14.3;

var imtucewesdpositif3  =   17.9;
var imtucewemedian3     =   16.4;
var imtucewesdnegatif3  =   14.9;

var imtucewesdpositif4  =   18.3;
var imtucewemedian4     =   16.7;
var imtucewesdnegatif4  =   15.2;

var imtucewesdpositif5  =   18.4;
var imtucewemedian5     =   16.8;
var imtucewesdnegatif5  =   15.4;

var imtucewesdpositif6  =   18.5;
var imtucewemedian6     =   16.9;
var imtucewesdnegatif6  =   15.5;

var imtucewesdpositif7  =   18.5;
var imtucewemedian7     =   16.9;
var imtucewesdnegatif7  =   15.5;

var imtucewesdpositif8  =   18.4;
var imtucewemedian8     =   16.8;
var imtucewesdnegatif8  =   15.4;

var imtucewesdpositif9  =   18.3;
var imtucewemedian9     =   16.7;
var imtucewesdnegatif9  =   15.3;

var imtucewesdpositif10  =   18.2;
var imtucewemedian10     =   16.6;
var imtucewesdnegatif10  =   15.2;

var imtucewesdpositif11  =   18;
var imtucewemedian11     =   16.5;
var imtucewesdnegatif11  =   15.1;

var imtucewesdpositif12  =   17.9;
var imtucewemedian12     =   16.4;
var imtucewesdnegatif12  =   15;

var imtucewesdpositif13  =   17.7;
var imtucewemedian13     =   16.2;
var imtucewesdnegatif13  =   14.9;

var imtucewesdpositif14  =   17.6;
var imtucewemedian14     =   16.1;
var imtucewesdnegatif14  =   14.8;

var imtucewesdpositif15  =   17.5;
var imtucewemedian15     =   16;
var imtucewesdnegatif15  =   14.7;

var imtucewesdpositif16  =   17.4;
var imtucewemedian16     =   15.9;
var imtucewesdnegatif16  =   14.6;

var imtucewesdpositif17  =   17.3;
var imtucewemedian17     =   15.8;
var imtucewesdnegatif17  =   14.5;

var imtucewesdpositif18  =   17.2;
var imtucewemedian18     =   15.7;
var imtucewesdnegatif18  =   14.4;

var imtucewesdpositif19  =   17.1;
var imtucewemedian19     =   15.7;
var imtucewesdnegatif19  =   14.4;

var imtucewesdpositif20  =   17;
var imtucewemedian20     =   15.6;
var imtucewesdnegatif20  =   14.3;

var imtucewesdpositif21  =   17;
var imtucewemedian21     =   15.5;
var imtucewesdnegatif21  =   14.3;

var imtucewesdpositif22  =   16.9;
var imtucewemedian22     =   15.5;
var imtucewesdnegatif22  =   14.2;

var imtucewesdpositif23  =   16.9;
var imtucewemedian23     =   15.4;
var imtucewesdnegatif23  =   14.2;

var imtucewesdpositif24  =   16.8;
var imtucewemedian24     =   15.4;
var imtucewesdnegatif24  =   14.2;

var imtucewesdpositif25  =  17.1 ;
var imtucewemedian25     =   15.7;
var imtucewesdnegatif25  = 14.4  ;

var imtucewesdpositif26  =  17.0 ;
var imtucewemedian26     =   15.6;
var imtucewesdnegatif26  = 14.4  ;

var imtucewesdpositif27  =  17.0 ;
var imtucewemedian27     =  15.6 ;
var imtucewesdnegatif27  = 14.4  ;

var imtucewesdpositif28  =  17.0 ;
var imtucewemedian28     =   15.6;
var imtucewesdnegatif28  = 14.3  ;

var imtucewesdpositif29  =  17.0 ;
var imtucewemedian29     =   15.6;
var imtucewesdnegatif29  = 14.3  ;

var imtucewesdpositif30  =  16.9 ;
var imtucewemedian30     =   15.5;
var imtucewesdnegatif30  =14.3   ;

var imtucewesdpositif31  =  16.9 ;
var imtucewemedian31     =  15.5 ;
var imtucewesdnegatif31  = 14.3  ;

var imtucewesdpositif32  = 16.9  ;
var imtucewemedian32     =  15.5 ;
var imtucewesdnegatif32  =14.3  ;

var imtucewesdpositif33  =  16.9 ;
var imtucewemedian33     =  15.5 ;
var imtucewesdnegatif33  =14.2   ;

var imtucewesdpositif34  =  16.8 ;
var imtucewemedian34     =  15.4 ;
var imtucewesdnegatif34  = 14.2  ;

var imtucewesdpositif35  =  16.8 ;
var imtucewemedian35     =  15.4 ;
var imtucewesdnegatif35  = 14.2  ;

var imtucewesdpositif36  =  16.8 ;
var imtucewemedian36     =   15.4;
var imtucewesdnegatif36  = 14.2  ;

var imtucewesdpositif37  =  16.8 ;
var imtucewemedian37     =   15.4;
var imtucewesdnegatif37  = 14.1  ;

var imtucewesdpositif38  =  16.8 ;
var imtucewemedian38     =   15.4;
var imtucewesdnegatif38  = 14.1  ;

var imtucewesdpositif39  =16.8   ;
var imtucewemedian39     =15.3   ;
var imtucewesdnegatif39  =14.1   ;

var imtucewesdpositif40  =  16.8 ;
var imtucewemedian40     =  15.3 ;
var imtucewesdnegatif40  = 14.1  ;

var imtucewesdpositif41  =  16.8 ;
var imtucewemedian41     =  15.3 ;
var imtucewesdnegatif41  = 14.1  ;

var imtucewesdpositif42  =  16.8 ;
var imtucewemedian42     =  15.3 ;
var imtucewesdnegatif42  = 14.0  ;

var imtucewesdpositif43  =  16.8 ;
var imtucewemedian43     =  15.3 ;
var imtucewesdnegatif43  = 14.0  ;

var imtucewesdpositif44  =  16.8 ;
var imtucewemedian44     = 15.3  ;
var imtucewesdnegatif44  = 14.0  ;

var imtucewesdpositif45  =  16.8 ;
var imtucewemedian45     =  15. ;
var imtucewesdnegatif45  = 14.0  ;

var imtucewesdpositif46  =  16.8 ;
var imtucewemedian46     = 15.3  ;
var imtucewesdnegatif46  = 14.0  ;

var imtucewesdpositif47  =  16.8 ;
var imtucewemedian47     = 15.3  ;
var imtucewesdnegatif47  =14.0   ;

var imtucewesdpositif48  = 16.8  ;
var imtucewemedian48     = 15.3  ;
var imtucewesdnegatif48  = 14.0  ;

var imtucewesdpositif49  = 16.8  ;
var imtucewemedian49     = 15.3  ;
var imtucewesdnegatif49  =13.9   ;

var imtucewesdpositif50  =  16.8 ;
var imtucewemedian50     =  15.3 ;
var imtucewesdnegatif50  =13.9   ;

var imtucewesdpositif51  =  16.8 ;
var imtucewemedian51     =  15.3 ;
var imtucewesdnegatif51  =13.9   ;

var imtucewesdpositif52  =  16.8 ;
var imtucewemedian52     =  15.2 ;
var imtucewesdnegatif52  = 13.9  ;

var imtucewesdpositif53  = 16.8  ;
var imtucewemedian53     = 15.3  ;
var imtucewesdnegatif53  = 13.9  ;

var imtucewesdpositif54  = 16.8  ;
var imtucewemedian54     = 15.3  ;
var imtucewesdnegatif54  = 13.9  ;

var imtucewesdpositif55  = 16.8  ;
var imtucewemedian55     = 15.3  ;
var imtucewesdnegatif55  = 13.9  ;

var imtucewesdpositif56  =  16.8 ;
var imtucewemedian56     = 15.3  ;
var imtucewesdnegatif56  = 13.9  ;

var imtucewesdpositif57  =  16.9 ;
var imtucewemedian57     = 15.3  ;
var imtucewesdnegatif57  = 13.9  ;

var imtucewesdpositif58  = 16.9  ;
var imtucewemedian58    = 15.3  ;
var imtucewesdnegatif58  = 13.9  ;

var imtucewesdpositif59  = 16.9  ;
var imtucewemedian59     = 15.3  ;
var imtucewesdnegatif59  = 13.9  ;

var imtucewesdpositif60  = 16.9  ;
var imtucewemedian60     = 15.3  ;
var imtucewesdnegatif60  = 13.9  ;



//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS BERAT BADAN MENURUT UMUR ANAK PEREMPUAN
{
    var bulan = document.getElementById("bulan").value;
    var angka = document.getElementById("angka").value;
    var tester = 0;
    switch (true) {
        case bulan == 0:
    if(angka - cewemedian0 > 0){
        tester = ((angka-cewemedian0)/ (cewesdpositif0-cewemedian0) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian0 < 0){
        tester = ((angka-cewemedian0)/ (cewemedian0-cewesdnegatif0));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(angka - cewemedian1 > 0){
        tester = ((angka-cewemedian1)/ (cewesdpositif1-cewemedian1) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian1 < 0){
        tester = ((angka-cewemedian1)/ (cewemedian1-cewesdnegatif1));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 2:
    if(angka - cewemedian2 > 0){
        tester = ((angka-cewemedian2)/ (cewesdpositif2-cewemedian2) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian2 < 0){
        tester = ((angka-cewemedian2)/ (cewemedian2-cewesdnegatif2));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(angka - cewemedian3 > 0){
        tester = ((angka-cewemedian3)/ (cewesdpositif2-cewemedian3) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian3 < 0){
        tester = ((angka-cewemedian3)/ (cewemedian3-cewesdnegatif3));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(angka - cewemedian4 > 0){
        tester = ((angka-cewemedian4)/ (cewesdpositif4-cewemedian4) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian4 < 0){
        tester = ((angka-cewemedian4)/ (cewemedian4-cewesdnegatif4));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(angka - cewemedian5 > 0){
        tester = ((angka-cewemedian5)/ (cewesdpositif5-cewemedian5) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian5 < 0){
        tester = ((angka-cewemedian5)/ (cewemedian5-cewesdnegatif5));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(angka - cewemedian6 > 0){
        tester = ((angka-cewemedian6)/ (cewesdpositif6-cewemedian6) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian6 < 0){
        tester = ((angka-cewemedian6)/ (cewemedian6-cewesdnegatif6));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(angka - cewemedian7 > 0){
        tester = ((angka-cewemedian7)/ (cewesdpositif7-cewemedian7) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian7 < 0){
        tester = ((angka-cewemedian7)/ (cewemedian7-cewesdnegatif7));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(angka - cewemedian8 > 0){
        tester = ((angka-cewemedian8)/ (cewesdpositif8-cewemedian8) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian8 < 0){
        tester = ((angka-cewemedian8)/ (cewemedian8-cewesdnegatif8));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(angka - cewemedian9 > 0){
        tester = ((angka-cewemedian9)/ (cewesdpositif9-cewemedian9) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian9 < 0){
        tester = ((angka-cewemedian9)/ (cewemedian9-cewesdnegatif9));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(angka - cewemedian10 > 0){
        tester = ((angka-cewemedian10)/ (cewesdpositif10-cewemedian10) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian10 < 0){
        tester = ((angka-cewemedian10)/ (cewemedian10-cewesdnegatif10));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(angka - cewemedian11 > 0){
        tester = ((angka-cewemedian11)/ (cewesdpositif11-cewemedian11) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian11 < 0){
        tester = ((angka-cewemedian11)/ (cewemedian11-cewesdnegatif11));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(angka - cewemedian12 > 0){
        tester = ((angka-cewemedian12)/ (cewesdpositif12-cewemedian12) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian12 < 0){
        tester = ((angka-cewemedian12)/ (cewemedian12-cewesdnegatif12));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(angka - cewemedian13 > 0){
        tester = ((angka-cewemedian13)/ (cewesdpositif13-cewemedian13) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian13 < 0){
        tester = ((angka-cewemedian13)/ (cewemedian13-cewesdnegatif13));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(angka - cewemedian14 > 0){
        tester = ((angka-cewemedian14)/ (cewesdpositif14-cewemedian14) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian14 < 0){
        tester = ((angka-cewemedian14)/ (cewemedian14-cewesdnegatif14));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(angka - cewemedian15 > 0){
        tester = ((angka-cewemedian15)/ (cewesdpositif15-cewemedian15) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian15 < 0){
        tester = ((angka-cewemedian15)/ (cewemedian15-cewesdnegatif15));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(angka - cewemedian16 > 0){
        tester = ((angka-cewemedian16)/ (cewesdpositif16-cewemedian16) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian16 < 0){
        tester = ((angka-cewemedian16)/ (cewemedian16-cewesdnegatif16));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(angka - cewemedian17 > 0){
        tester = ((angka-cewemedian17)/ (cewesdpositif17-cewemedian17) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian17 < 0){
        tester = ((angka-cewemedian17)/ (cewemedian17-cewesdnegatif17));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(angka - cewemedian18 > 0){
        tester = ((angka-cewemedian18)/ (cewesdpositif18-cewemedian18) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian18 < 0){
        tester = ((angka-cewemedian18)/ (cewemedian18-cewesdnegatif18));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(angka - cewemedian19 > 0){
        tester = ((angka-cewemedian19)/ (cewesdpositif19-cewemedian19) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian19 < 0){
        tester = ((angka-cewemedian19)/ (cewemedian19-cewesdnegatif19));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(angka - cewemedian20 > 0){
        tester = ((angka-cewemedian20)/ (cewesdpositif20-cewemedian20) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian20 < 0){
        tester = ((angka-cewemedian20)/ (cewemedian20-cewesdnegatif20));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(angka - cewemedian21 > 0){
        tester = ((angka-cewemedian21)/ (cewesdpositif21-cewemedian21) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian21 < 0){
        tester = ((angka-cewemedian21)/ (cewemedian21-cewesdnegatif21));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(angka - cewemedian22 > 0){
        tester = ((angka-cewemedian22)/ (cewesdpositif22-cewemedian22) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian22 < 0){
        tester = ((angka-cewemedian22)/ (cewemedian22-cewesdnegatif22));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(angka - cewemedian23 > 0){
        tester = ((angka-cewemedian23)/ (cewesdpositif23-cewemedian23) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian23 < 0){
        tester = ((angka-cewemedian23)/ (cewemedian23-cewesdnegatif23));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(angka - cewemedian24 > 0){
        tester = ((angka-cewemedian24)/ (cewesdpositif24-cewemedian24) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian24 < 0){
        tester = ((angka-cewemedian24)/ (cewemedian24-cewesdnegatif24));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(angka - cewemedian25 > 0){
        tester = ((angka-cewemedian25)/ (cewesdpositif25-cewemedian25) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian25 < 0){
        tester = ((angka-cewemedian25)/ (cewemedian25-cewesdnegatif25));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(angka - cewemedian26 > 0){
        tester = ((angka-cewemedian26)/ (cewesdpositif26-cewemedian26) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian26 < 0){
        tester = ((angka-cewemedian26)/ (cewemedian26-cewesdnegatif26));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(angka - cewemedian27 > 0){
        tester = ((angka-cewemedian27)/ (cewesdpositif27-cewemedian27) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian27 < 0){
        tester = ((angka-cewemedian27)/ (cewemedian27-cewesdnegatif27));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(angka - cewemedian28 > 0){
        tester = ((angka-cewemedian28)/ (cewesdpositif28-cewemedian28) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian28 < 0){
        tester = ((angka-cewemedian28)/ (cewemedian28-cewesdnegatif28));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(angka - cewemedian29 > 0){
        tester = ((angka-cewemedian29)/ (cewesdpositif29-cewemedian29) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian29 < 0){
        tester = ((angka-cewemedian29)/ (cewemedian29-cewesdnegatif29));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(angka - cewemedian30 > 0){
        tester = ((angka-cewemedian30)/ (cewesdpositif30-cewemedian30) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian30 < 0){
        tester = ((angka-cewemedian30)/ (cewemedian30-cewesdnegatif30));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(angka - cewemedian31 > 0){
        tester = ((angka-cewemedian31)/ (cewesdpositif31-cewemedian31) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian31 < 0){
        tester = ((angka-cewemedian31)/ (cewemedian31-cewesdnegatif31));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(angka - cewemedian32 > 0){
        tester = ((angka-cewemedian32)/ (cewesdpositif32-cewemedian32) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian32 < 0){
        tester = ((angka-cewemedian32)/ (cewemedian32-cewesdnegatif32));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(angka - cewemedian33 > 0){
        tester = ((angka-cewemedian33)/ (cewesdpositif33-cewemedian33) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian33 < 0){
        tester = ((angka-cewemedian33)/ (cewemedian33-cewesdnegatif33));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(angka - cewemedian34 > 0){
        tester = ((angka-cewemedian34)/ (cewesdpositif34-cewemedian34) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian34 < 0){
        tester = ((angka-cewemedian34)/ (cewemedian34-cewesdnegatif34));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(angka - cewemedian35 > 0){
        tester = ((angka-cewemedian35)/ (cewesdpositif35-cewemedian35) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian35 < 0){
        tester = ((angka-cewemedian35)/ (cewemedian35-cewesdnegatif35));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(angka - cewemedian36 > 0){
        tester = ((angka-cewemedian36)/ (cewesdpositif36-cewemedian36) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian36 < 0){
        tester = ((angka-cewemedian36)/ (cewemedian36-cewesdnegatif36));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(angka - cewemedian37 > 0){
        tester = ((angka-cewemedian37)/ (cewesdpositif37-cewemedian37) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian37 < 0){
        tester = ((angka-cewemedian37)/ (cewemedian37-cewesdnegatif37));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(angka - cewemedian38 > 0){
        tester = ((angka-cewemedian38)/ (cewesdpositif38-cewemedian38) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian38 < 0){
        tester = ((angka-cewemedian38)/ (cewemedian38-cewesdnegatif38));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(angka - cewemedian39 > 0){
        tester = ((angka-cewemedian39)/ (cewesdpositif39-cewemedian39) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian39 < 0){
        tester = ((angka-cewemedian39)/ (cewemedian39-cewesdnegatif39));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(angka - cewemedian40 > 0){
        tester = ((angka-cewemedian40)/ (cewesdpositif40-cewemedian40) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian40 < 0){
        tester = ((angka-cewemedian40)/ (cewemedian40-cewesdnegatif40));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(angka - cewemedian41 > 0){
        tester = ((angka-cewemedian41)/ (cewesdpositif41-cewemedian41) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian41 < 0){
        tester = ((angka-cewemedian41)/ (cewemedian41-cewesdnegatif41));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(angka - cewemedian42 > 0){
        tester = ((angka-cewemedian42)/ (cewesdpositif42-cewemedian42) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian42 < 0){
        tester = ((angka-cewemedian42)/ (cewemedian42-cewesdnegatif42));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(angka - cewemedian43 > 0){
        tester = ((angka-cewemedian43)/ (cewesdpositif43-cewemedian43) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian43 < 0){
        tester = ((angka-cewemedian43)/ (cewemedian43-cewesdnegatif43));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(angka - cewemedian44 > 0){
        tester = ((angka-cewemedian44)/ (cewesdpositif44-cewemedian44) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian44 < 0){
        tester = ((angka-cewemedian44)/ (cewemedian44-cewesdnegatif44));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(angka - cewemedian45 > 0){
        tester = ((angka-cewemedian45)/ (cewesdpositif45-cewemedian45) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian45 < 0){
        tester = ((angka-cewemedian45)/ (cewemedian45-cewesdnegatif45));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(angka - cewemedian46 > 0){
        tester = ((angka-cewemedian46)/ (cewesdpositif46-cewemedian46) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian46 < 0){
        tester = ((angka-cewemedian46)/ (cewemedian46-cewesdnegatif46));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(angka - cewemedian47 > 0){
        tester = ((angka-cewemedian47)/ (cewesdpositif47-cewemedian47) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian47 < 0){
        tester = ((angka-cewemedian47)/ (cewemedian47-cewesdnegatif47));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(angka - cewemedian48 > 0){
        tester = ((angka-cewemedian48)/ (cewesdpositif48-cewemedian48) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian48 < 0){
        tester = ((angka-cewemedian48)/ (cewemedian48-cewesdnegatif48));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(angka - cewemedian49 > 0){
        tester = ((angka-cewemedian49)/ (cewesdpositif49-cewemedian49) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian49 < 0){
        tester = ((angka-cewemedian49)/ (cewemedian49-cewesdnegatif49));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(angka - cewemedian50 > 0){
        tester = ((angka-cewemedian50)/ (cewesdpositif50-cewemedian50) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian50 < 0){
        tester = ((angka-cewemedian50)/ (cewemedian50-cewesdnegatif50));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(angka - cewemedian51 > 0){
        tester = ((angka-cewemedian51)/ (cewesdpositif51-cewemedian51) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian51 < 0){
        tester = ((angka-cewemedian51)/ (cewemedian51-cewesdnegatif51));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(angka - cewemedian52 > 0){
        tester = ((angka-cewemedian52)/ (cewesdpositif52-cewemedian52) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian52 < 0){
        tester = ((angka-cewemedian52)/ (cewemedian52-cewesdnegatif52));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(angka - cewemedian53 > 0){
        tester = ((angka-cewemedian53)/ (cewesdpositif53-cewemedian53) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian53 < 0){
        tester = ((angka-cewemedian53)/ (cewemedian53-cewesdnegatif53));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(angka - cewemedian54 > 0){
        tester = ((angka-cewemedian54)/ (cewesdpositif54-cewemedian54) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian54 < 0){
        tester = ((angka-cewemedian54)/ (cewemedian54-cewesdnegatif54));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(angka - cewemedian55 > 0){
        tester = ((angka-cewemedian55)/ (cewesdpositif55-cewemedian55) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian55 < 0){
        tester = ((angka-cewemedian55)/ (cewemedian55-cewesdnegatif55));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(angka - cewemedian56 > 0){
        tester = ((angka-cewemedian56)/ (cewesdpositif56-cewemedian56) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian56 < 0){
        tester = ((angka-cewemedian56)/ (cewemedian56-cewesdnegatif56));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(angka - cewemedian57 > 0){
        tester = ((angka-cewemedian57)/ (cewesdpositif57-cewemedian57) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian57 < 0){
        tester = ((angka-cewemedian57)/ (cewemedian57-cewesdnegatif57));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(angka - cewemedian58 > 0){
        tester = ((angka-cewemedian58)/ (cewesdpositif58-cewemedian58) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian58 < 0){
        tester = ((angka-cewemedian58)/ (cewemedian58-cewesdnegatif58));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(angka - cewemedian59 > 0){
        tester = ((angka-cewemedian59)/ (cewesdpositif59-cewemedian59) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian59 < 0){
        tester = ((angka-cewemedian59)/ (cewemedian59-cewesdnegatif59));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(angka - cewemedian60 > 0){
        tester = ((angka-cewemedian60)/ (cewesdpositif60-cewemedian60) );
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else if(angka - cewemedian60 < 0){
        tester = ((angka-cewemedian60)/ (cewemedian60-cewesdnegatif60));
        document.getElementById("b").value = tester;
        if(tester > 2){
                statustester = ("Gizi Lebih");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester <-3){
            statustester = ("Gizi Buruk");
                document.getElementById("statusbbu").value = statustester;
        }
        else if(tester >= -3 && tester <= -2){
            statustester = ("Gizi Kurang");
                document.getElementById("statusbbu").value = statustester;
        }
        else {
            statustester = ("Gizi Baik");
                document.getElementById("statusbbu").value = statustester;
        }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');
}
}


//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS TINGGI BADAN MENURUT UMUR ANAK PEREMPUAN
{
    var bulan = document.getElementById("bulan").value;
    var tinggi = document.getElementById("tinggi").value;
    var angka = document.getElementById("angka").value;
    switch (true) {
        case bulan == 0:
    if(tinggi - tbucewemedian0 > 0){
        tester2 = ((tinggi-tbucewemedian0)/ (tbucewesdpositif0-tbucewemedian0) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian0 < 0){
        tester2 = ((tinggi-tbucewemedian0)/ (tbucewemedian0-tbucewesdnegatif0));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 1:
    if(tinggi - tbucewemedian1 > 0){
        tester2 = ((tinggi-tbucewemedian1)/ (tbucewesdpositif1-tbucewemedian1) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian1 < 0){
        tester2 = ((tinggi-tbucewemedian1)/ (tbucewemedian1-tbucewesdnegatif1));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 2:
    if(tinggi - tbucewemedian2 > 0){
        tester2 = ((tinggi-tbucewemedian2)/ (tbucewesdpositif2-tbucewemedian2) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian2 < 0){
        tester2 = ((tinggi-tbucewemedian2)/ (tbucewemedian2-tbucewesdnegatif2));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(tinggi - tbucewemedian3 > 0){
        tester2 = ((tinggi-tbucewemedian3)/ (tbucewesdpositif3-tbucewemedian3) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian3 < 0){
        tester2 = ((tinggi-tbucewemedian3)/ (tbucewemedian3-tbucewesdnegatif3));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(tinggi - tbucewemedian4 > 0){
        tester2 = ((tinggi-tbucewemedian4)/ (tbucewesdpositif4-tbucewemedian4) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian4 < 0){
        tester2 = ((tinggi-tbucewemedian4)/ (tbucewemedian4-tbucewesdnegatif4));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(tinggi - tbucewemedian5 > 0){
        tester2 = ((tinggi-tbucewemedian5)/ (tbucewesdpositif5-tbucewemedian5) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian5 < 0){
        tester2 = ((tinggi-tbucewemedian5)/ (tbucewemedian5-tbucewesdnegatif5));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(tinggi - tbucewemedian6 > 0){
        tester2 = ((tinggi-tbucewemedian6)/ (tbucewesdpositif6-tbucewemedian6) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian6 < 0){
        tester2 = ((tinggi-tbucewemedian6)/ (tbucewemedian6-tbucewesdnegatif6));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(tinggi - tbucewemedian7 > 0){
        tester2 = ((tinggi-tbucewemedian7)/ (tbucewesdpositif7-tbucewemedian7) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian7 < 0){
        tester2 = ((tinggi-tbucewemedian7)/ (tbucewemedian7-tbucewesdnegatif7));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(tinggi - tbucewemedian8 > 0){
        tester2 = ((tinggi-tbucewemedian8)/ (tbucewesdpositif8-tbucewemedian8) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian8 < 0){
        tester2 = ((tinggi-tbucewemedian8)/ (tbucewemedian8-tbucewesdnegatif8));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(tinggi - tbucewemedian9 > 0){
        tester2 = ((tinggi-tbucewemedian9)/ (tbucewesdpositif9-tbucewemedian9) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian9 < 0){
        tester2 = ((tinggi-tbucewemedian9)/ (tbucewemedian9-tbucewesdnegatif9));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(tinggi - tbucewemedian10 > 0){
        tester2 = ((tinggi-tbucewemedian10)/ (tbucewesdpositif10-tbucewemedian10) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian10 < 0){
        tester2 = ((tinggi-tbucewemedian10)/ (tbucewemedian10-tbucewesdnegatif10));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(tinggi - tbucewemedian11 > 0){
        tester2 = ((tinggi-tbucewemedian11)/ (tbucewesdpositif11-tbucewemedian11) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian11 < 0){
        tester2 = ((tinggi-tbucewemedian11)/ (tbucewemedian11-tbucewesdnegatif11));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(tinggi - tbucewemedian12 > 0){
        tester2 = ((tinggi-tbucewemedian12)/ (tbucewesdpositif12-tbucewemedian12) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian12 < 0){
        tester2 = ((tinggi-tbucewemedian12)/ (tbucewemedian12-tbucewesdnegatif12));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(tinggi - tbucewemedian13 > 0){
        tester2 = ((tinggi-tbucewemedian13)/ (tbucewesdpositif13-tbucewemedian13) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian13 < 0){
        tester2 = ((tinggi-tbucewemedian13)/ (tbucewemedian13-tbucewesdnegatif13));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(tinggi - tbucewemedian14 > 0){
        tester2 = ((tinggi-tbucewemedian14)/ (tbucewesdpositif14-tbucewemedian14) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian14 < 0){
        tester2 = ((tinggi-tbucewemedian14)/ (tbucewemedian14-tbucewesdnegatif14));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(tinggi - tbucewemedian15 > 0){
        tester2 = ((tinggi-tbucewemedian15)/ (tbucewesdpositif15-tbucewemedian15) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian15 < 0){
        tester2 = ((tinggi-tbucewemedian15)/ (tbucewemedian15-tbucewesdnegatif15));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(tinggi - tbucewemedian16 > 0){
        tester2 = ((tinggi-tbucewemedian16)/ (tbucewesdpositif16-tbucewemedian16) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian16 < 0){
        tester2 = ((tinggi-tbucewemedian16)/ (tbucewemedian16-tbucewesdnegatif16));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(tinggi - tbucewemedian17 > 0){
        tester2 = ((tinggi-tbucewemedian17)/ (tbucewesdpositif17-tbucewemedian17) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian17 < 0){
        tester2 = ((tinggi-tbucewemedian17)/ (tbucewemedian17-tbucewesdnegatif17));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(tinggi - tbucewemedian18 > 0){
        tester2 = ((tinggi-tbucewemedian18)/ (tbucewesdpositif18-tbucewemedian18) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian18 < 0){
        tester2 = ((tinggi-tbucewemedian18)/ (tbucewemedian18-tbucewesdnegatif18));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(tinggi - tbucewemedian19 > 0){
        tester2 = ((tinggi-tbucewemedian19)/ (tbucewesdpositif19-tbucewemedian19) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian19 < 0){
        tester2 = ((tinggi-tbucewemedian19)/ (tbucewemedian19-tbucewesdnegatif19));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(tinggi - tbucewemedian20 > 0){
        tester2 = ((tinggi-tbucewemedian20)/ (tbucewesdpositif20-tbucewemedian20) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian20 < 0){
        tester2 = ((tinggi-tbucewemedian20)/ (tbucewemedian20-tbucewesdnegatif20));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(tinggi - tbucewemedian21 > 0){
        tester2 = ((tinggi-tbucewemedian21)/ (tbucewesdpositif21-tbucewemedian21) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian21 < 0){
        tester2 = ((tinggi-tbucewemedian21)/ (tbucewemedian21-tbucewesdnegatif21));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(tinggi - tbucewemedian22 > 0){
        tester2 = ((tinggi-tbucewemedian22)/ (tbucewesdpositif22-tbucewemedian22) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian22 < 0){
        tester2 = ((tinggi-tbucewemedian22)/ (tbucewemedian22-tbucewesdnegatif22));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(tinggi - tbucewemedian23 > 0){
        tester2 = ((tinggi-tbucewemedian23)/ (tbucewesdpositif23-tbucewemedian23) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian23 < 0){
        tester2 = ((tinggi-tbucewemedian23)/ (tbucewemedian23-tbucewesdnegatif23));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(tinggi - tbucewemedian24 > 0){
        tester2 = ((tinggi-tbucewemedian24)/ (tbucewesdpositif24-tbucewemedian24) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian24 < 0){
        tester2 = ((tinggi-tbucewemedian24)/ (tbucewemedian24-tbucewesdnegatif24));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(tinggi - tbucewemedian25 > 0){
        tester2 = ((tinggi-tbucewemedian25)/ (tbucewesdpositif25-tbucewemedian25) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian25 < 0){
        tester2 = ((tinggi-tbucewemedian25)/ (tbucewemedian25-tbucewesdnegatif25));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(tinggi - tbucewemedian26 > 0){
        tester2 = ((tinggi-tbucewemedian26)/ (tbucewesdpositif26-tbucewemedian26) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian26 < 0){
        tester2 = ((tinggi-tbucewemedian26)/ (tbucewemedian26-tbucewesdnegatif26));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(tinggi - tbucewemedian27 > 0){
        tester2 = ((tinggi-tbucewemedian27)/ (tbucewesdpositif27-tbucewemedian27) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian27 < 0){
        tester2 = ((tinggi-tbucewemedian27)/ (tbucewemedian27-tbucewesdnegatif27));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(tinggi - tbucewemedian28 > 0){
        tester2 = ((tinggi-tbucewemedian28)/ (tbucewesdpositif28-tbucewemedian28) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian28 < 0){
        tester2 = ((tinggi-tbucewemedian28)/ (tbucewemedian28-tbucewesdnegatif28));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(tinggi - tbucewemedian29 > 0){
        tester2 = ((tinggi-tbucewemedian29)/ (tbucewesdpositif29-tbucewemedian29) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian29 < 0){
        tester2 = ((tinggi-tbucewemedian29)/ (tbucewemedian29-tbucewesdnegatif29));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(tinggi - tbucewemedian30 > 0){
        tester2 = ((tinggi-tbucewemedian30)/ (tbucewesdpositif30-tbucewemedian30) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian30 < 0){
        tester2 = ((tinggi-tbucewemedian30)/ (tbucewemedian30-tbucewesdnegatif30));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(tinggi - tbucewemedian31 > 0){
        tester2 = ((tinggi-tbucewemedian31)/ (tbucewesdpositif31-tbucewemedian31) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian31 < 0){
        tester2 = ((tinggi-tbucewemedian31)/ (tbucewemedian31-tbucewesdnegatif31));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(tinggi - tbucewemedian32 > 0){
        tester2 = ((tinggi-tbucewemedian32)/ (tbucewesdpositif32-tbucewemedian32) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian32 < 0){
        tester2 = ((tinggi-tbucewemedian32)/ (tbucewemedian32-tbucewesdnegatif32));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(tinggi - tbucewemedian33 > 0){
        tester2 = ((tinggi-tbucewemedian33)/ (tbucewesdpositif33-tbucewemedian33) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian33 < 0){
        tester2 = ((tinggi-tbucewemedian33)/ (tbucewemedian33-tbucewesdnegatif33));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(tinggi - tbucewemedian34 > 0){
        tester2 = ((tinggi-tbucewemedian34)/ (tbucewesdpositif34-tbucewemedian34) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian34 < 0){
        tester2 = ((tinggi-tbucewemedian34)/ (tbucewemedian34-tbucewesdnegatif34));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(tinggi - tbucewemedian35 > 0){
        tester2 = ((tinggi-tbucewemedian35)/ (tbucewesdpositif35-tbucewemedian35) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian35 < 0){
        tester2 = ((tinggi-tbucewemedian35)/ (tbucewemedian35-tbucewesdnegatif35));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(tinggi - tbucewemedian36 > 0){
        tester2 = ((tinggi-tbucewemedian36)/ (tbucewesdpositif36-tbucewemedian36) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian36 < 0){
        tester2 = ((tinggi-tbucewemedian36)/ (tbucewemedian36-tbucewesdnegatif36));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(tinggi - tbucewemedian37 > 0){
        tester2 = ((tinggi-tbucewemedian37)/ (tbucewesdpositif37-tbucewemedian37) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian37 < 0){
        tester2 = ((tinggi-tbucewemedian37)/ (tbucewemedian37-tbucewesdnegatif37));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(tinggi - tbucewemedian38 > 0){
        tester2 = ((tinggi-tbucewemedian38)/ (tbucewesdpositif38-tbucewemedian38) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian38 < 0){
        tester2 = ((tinggi-tbucewemedian38)/ (tbucewemedian38-tbucewesdnegatif38));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(tinggi - tbucewemedian39 > 0){
        tester2 = ((tinggi-tbucewemedian39)/ (tbucewesdpositif39-tbucewemedian39) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian39 < 0){
        tester2 = ((tinggi-tbucewemedian39)/ (tbucewemedian39-tbucewesdnegatif39));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(tinggi - tbucewemedian40 > 0){
        tester2 = ((tinggi-tbucewemedian40)/ (tbucewesdpositif40-tbucewemedian40) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian40 < 0){
        tester2 = ((tinggi-tbucewemedian40)/ (tbucewemedian40-tbucewesdnegatif40));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(tinggi - tbucewemedian41 > 0){
        tester2 = ((tinggi-tbucewemedian41)/ (tbucewesdpositif41-tbucewemedian41) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian41 < 0){
        tester2 = ((tinggi-tbucewemedian41)/ (tbucewemedian41-tbucewesdnegatif41));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(tinggi - tbucewemedian42 > 0){
        tester2 = ((tinggi-tbucewemedian42)/ (tbucewesdpositif42-tbucewemedian42) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian42 < 0){
        tester2 = ((tinggi-tbucewemedian42)/ (tbucewemedian42-tbucewesdnegatif42));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(tinggi - tbucewemedian43 > 0){
        tester2 = ((tinggi-tbucewemedian43)/ (tbucewesdpositif43-tbucewemedian43) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian43 < 0){
        tester2 = ((tinggi-tbucewemedian43)/ (tbucewemedian43-tbucewesdnegatif43));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(tinggi - tbucewemedian44 > 0){
        tester2 = ((tinggi-tbucewemedian44)/ (tbucewesdpositif44-tbucewemedian44) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian44 < 0){
        tester2 = ((tinggi-tbucewemedian44)/ (tbucewemedian44-tbucewesdnegatif44));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(tinggi - tbucewemedian45 > 0){
        tester2 = ((tinggi-tbucewemedian45)/ (tbucewesdpositif45-tbucewemedian45) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian45 < 0){
        tester2 = ((tinggi-tbucewemedian45)/ (tbucewemedian45-tbucewesdnegatif45));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(tinggi - tbucewemedian46 > 0){
        tester2 = ((tinggi-tbucewemedian46)/ (tbucewesdpositif46-tbucewemedian46) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian46 < 0){
        tester2 = ((tinggi-tbucewemedian46)/ (tbucewemedian46-tbucewesdnegatif46));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(tinggi - tbucewemedian47 > 0){
        tester2 = ((tinggi-tbucewemedian47)/ (tbucewesdpositif47-tbucewemedian47) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian47 < 0){
        tester2 = ((tinggi-tbucewemedian47)/ (tbucewemedian47-tbucewesdnegatif47));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(tinggi - tbucewemedian48 > 0){
        tester2 = ((tinggi-tbucewemedian48)/ (tbucewesdpositif48-tbucewemedian48) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian48 < 0){
        tester2 = ((tinggi-tbucewemedian48)/ (tbucewemedian48-tbucewesdnegatif48));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(tinggi - tbucewemedian49 > 0){
        tester2 = ((tinggi-tbucewemedian49)/ (tbucewesdpositif49-tbucewemedian49) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian49 < 0){
        tester2 = ((tinggi-tbucewemedian49)/ (tbucewemedian49-tbucewesdnegatif49));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(tinggi - tbucewemedian50 > 0){
        tester2 = ((tinggi-tbucewemedian50)/ (tbucewesdpositif50-tbucewemedian50) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian50 < 0){
        tester2 = ((tinggi-tbucewemedian50)/ (tbucewemedian50-tbucewesdnegatif50));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(tinggi - tbucewemedian51 > 0){
        tester2 = ((tinggi-tbucewemedian51)/ (tbucewesdpositif51-tbucewemedian51) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian51 < 0){
        tester2 = ((tinggi-tbucewemedian51)/ (tbucewemedian51-tbucewesdnegatif51));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(tinggi - tbucewemedian52 > 0){
        tester2 = ((tinggi-tbucewemedian52)/ (tbucewesdpositif52-tbucewemedian52) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian52 < 0){
        tester2 = ((tinggi-tbucewemedian52)/ (tbucewemedian52-tbucewesdnegatif52));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(tinggi - tbucewemedian53 > 0){
        tester2 = ((tinggi-tbucewemedian53)/ (tbucewesdpositif53-tbucewemedian53) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian53 < 0){
        tester2 = ((tinggi-tbucewemedian53)/ (tbucewemedian53-tbucewesdnegatif53));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(tinggi - tbucewemedian54 > 0){
        tester2 = ((tinggi-tbucewemedian54)/ (tbucewesdpositif54-tbucewemedian54) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian54 < 0){
        tester2 = ((tinggi-tbucewemedian54)/ (tbucewemedian54-tbucewesdnegatif54));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(tinggi - tbucewemedian55 > 0){
        tester2 = ((tinggi-tbucewemedian55)/ (tbucewesdpositif55-tbucewemedian55) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian55 < 0){
        tester2 = ((tinggi-tbucewemedian55)/ (tbucewemedian55-tbucewesdnegatif55));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(tinggi - tbucewemedian56 > 0){
        tester2 = ((tinggi-tbucewemedian56)/ (tbucewesdpositif56-tbucewemedian56) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian56 < 0){
        tester2 = ((tinggi-tbucewemedian56)/ (tbucewemedian56-tbucewesdnegatif56));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(tinggi - tbucewemedian57 > 0){
        tester2 = ((tinggi-tbucewemedian57)/ (tbucewesdpositif57-tbucewemedian57) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian57 < 0){
        tester2 = ((tinggi-tbucewemedian57)/ (tbucewemedian57-tbucewesdnegatif57));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(tinggi - tbucewemedian58 > 0){
        tester2 = ((tinggi-tbucewemedian58)/ (tbucewesdpositif58-tbucewemedian58) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian58 < 0){
        tester2 = ((tinggi-tbucewemedian58)/ (tbucewemedian58-tbucewesdnegatif58));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(tinggi - tbucewemedian59 > 0){
        tester2 = ((tinggi-tbucewemedian59)/ (tbucewesdpositif59-tbucewemedian59) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian59 < 0){
        tester2 = ((tinggi-tbucewemedian59)/ (tbucewemedian59-tbucewesdnegatif59));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(tinggi - tbucewemedian60 > 0){
        tester2 = ((tinggi-tbucewemedian60)/ (tbucewesdpositif60-tbucewemedian60) );
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else if(tinggi - tbucewemedian60 < 0){
        tester2 = ((tinggi-tbucewemedian60)/ (tbucewemedian60-tbucewesdnegatif60));
        document.getElementById("t").value = tester2;
        if(tester2 > 2){
                statustester2 = ("Tinggi");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 <-3){
            statustester2 = ("Sangat Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else if(tester2 >= -3 && tester2 <= -2){
            statustester2 = ("Pendek");
                document.getElementById("statustbu").value = statustester2;
        }
        else {
            statustester2 = ("Normal");
                document.getElementById("statustbu").value = statustester2;
        }
    } else {
    alert('Not Available');
    }
    break;
    default:
    alert('Not Available');
}
}


//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
//AWAL KALKULATOR OTOMATIS INDEKS MASA TUBUH MENURUT UMUR ANAK PEREMPUAN
{
    var bulan = document.getElementById("bulan").value;
    var tb = document.getElementById("tinggi").value;
    var tinggi = (tb/100);
    var bb = document.getElementById("angka").value;
    var imt = (bb/tinggi);
    var angka = imt;
    switch (true) {
        case bulan == 0:
        if(angka - imtucewemedian0 > 0){
            tester3 = ((angka-imtucewemedian0)/ (imtucewesdpositif0-imtucewemedian0) );
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else if(angka - imtucewemedian0 < 0){
            tester3 = ((angka-imtucewemedian0)/ (imtucewemedian0-imtucewesdnegatif0));
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else {
        alert('Not Available');
        }
        break;
        case bulan == 1:
        if(angka - imtucewemedian1 > 0){
            tester3 = ((angka-imtucewemedian1)/ (imtucewesdpositif1-imtucewemedian1) );
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else if(angka - imtucewemedian1 < 0){
            tester3 = ((angka-imtucewemedian1)/ (imtucewemedian1-imtucewesdnegatif1));
            document.getElementById("zsimtu").value = tester3;
            if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
        } else {
        alert('Not Available');
        }
        break;
        case bulan == 2:
    if(angka - imtucewemedian2 > 0){
        tester3 = ((angka-imtucewemedian2)/ (imtucewesdpositif2-imtucewemedian2) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian2 < 0){
        tester3 = ((angka-imtucewemedian2)/ (imtucewemedian2-imtucewesdnegatif2));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 3:
    if(angka - imtucewemedian3 > 0){
        tester3 = ((angka-imtucewemedian3)/ (imtucewesdpositif3-imtucewemedian3) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian3 < 0){
        tester3 = ((angka-imtucewemedian3)/ (imtucewemedian3-imtucewesdnegatif3));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 4:
    if(angka - imtucewemedian4 > 0){
        tester3 = ((angka-imtucewemedian4)/ (imtucewesdpositif4-imtucewemedian4) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian4 < 0){
        tester3 = ((angka-imtucewemedian4)/ (imtucewemedian4-imtucewesdnegatif4));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 5:
    if(angka - imtucewemedian5 > 0){
        tester3 = ((angka-imtucewemedian5)/ (imtucewesdpositif5-imtucewemedian5) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian5 < 0){
        tester3 = ((angka-imtucewemedian5)/ (imtucewemedian5-imtucewesdnegatif5));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 6:
    if(angka - imtucewemedian6 > 0){
        tester3 = ((angka-imtucewemedian6)/ (imtucewesdpositif6-imtucewemedian6) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian6 < 0){
        tester3 = ((angka-imtucewemedian6)/ (imtucewemedian6-imtucewesdnegatif6));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 7:
    if(angka - imtucewemedian7 > 0){
        tester3 = ((angka-imtucewemedian7)/ (imtucewesdpositif7-imtucewemedian7) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian7 < 0){
        tester3 = ((angka-imtucewemedian7)/ (imtucewemedian7-imtucewesdnegatif7));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 8:
    if(angka - imtucewemedian8 > 0){
        tester3 = ((angka-imtucewemedian8)/ (imtucewesdpositif8-imtucewemedian8) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian8 < 0){
        tester3 = ((angka-imtucewemedian8)/ (imtucewemedian8-imtucewesdnegatif8));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 9:
    if(angka - imtucewemedian9 > 0){
        tester3 = ((angka-imtucewemedian9)/ (imtucewesdpositif9-imtucewemedian9) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian9 < 0){
        tester3 = ((angka-imtucewemedian9)/ (imtucewemedian9-imtucewesdnegatif9));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 10:
    if(angka - imtucewemedian10 > 0){
        tester3 = ((angka-imtucewemedian10)/ (imtucewesdpositif10-imtucewemedian10) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian10 < 0){
        tester3 = ((angka-imtucewemedian10)/ (imtucewemedian10-imtucewesdnegatif10));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 11:
    if(angka - imtucewemedian11 > 0){
        tester3 = ((angka-imtucewemedian11)/ (imtucewesdpositif11-imtucewemedian11) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian11 < 0){
        tester3 = ((angka-imtucewemedian11)/ (imtucewemedian11-imtucewesdnegatif11));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 12:
    if(angka - imtucewemedian12 > 0){
        tester3 = ((angka-imtucewemedian12)/ (imtucewesdpositif12-imtucewemedian12) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian12 < 0){
        tester3 = ((angka-imtucewemedian12)/ (imtucewemedian12-imtucewesdnegatif12));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 13:
    if(angka - imtucewemedian13 > 0){
        tester3 = ((angka-imtucewemedian13)/ (imtucewesdpositif13-imtucewemedian13) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian13 < 0){
        tester3 = ((angka-imtucewemedian13)/ (imtucewemedian13-imtucewesdnegatif13));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 14:
    if(angka - imtucewemedian14 > 0){
        tester3 = ((angka-imtucewemedian14)/ (imtucewesdpositif14-imtucewemedian14) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian14 < 0){
        tester3 = ((angka-imtucewemedian14)/ (imtucewemedian14-imtucewesdnegatif14));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 15:
    if(angka - imtucewemedian15 > 0){
        tester3 = ((angka-imtucewemedian15)/ (imtucewesdpositif15-imtucewemedian15) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian15 < 0){
        tester3 = ((angka-imtucewemedian15)/ (imtucewemedian15-imtucewesdnegatif15));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 16:
    if(angka - imtucewemedian16 > 0){
        tester3 = ((angka-imtucewemedian16)/ (imtucewesdpositif16-imtucewemedian16) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian16 < 0){
        tester3 = ((angka-imtucewemedian16)/ (imtucewemedian16-imtucewesdnegatif16));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 17:
    if(angka - imtucewemedian17 > 0){
        tester3 = ((angka-imtucewemedian17)/ (imtucewesdpositif17-imtucewemedian17) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian17 < 0){
        tester3 = ((angka-imtucewemedian17)/ (imtucewemedian17-imtucewesdnegatif17));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 18:
    if(angka - imtucewemedian18 > 0){
        tester3 = ((angka-imtucewemedian18)/ (imtucewesdpositif18-imtucewemedian18) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian18 < 0){
        tester3 = ((angka-imtucewemedian18)/ (imtucewemedian18-imtucewesdnegatif18));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 19:
    if(angka - imtucewemedian19 > 0){
        tester3 = ((angka-imtucewemedian19)/ (imtucewesdpositif19-imtucewemedian19) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian19 < 0){
        tester3 = ((angka-imtucewemedian19)/ (imtucewemedian19-imtucewesdnegatif19));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 20:
    if(angka - imtucewemedian20 > 0){
        tester3 = ((angka-imtucewemedian20)/ (imtucewesdpositif20-imtucewemedian20) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian20 < 0){
        tester3 = ((angka-imtucewemedian20)/ (imtucewemedian20-imtucewesdnegatif20));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 21:
    if(angka - imtucewemedian21 > 0){
        tester3 = ((angka-imtucewemedian21)/ (imtucewesdpositif21-imtucewemedian21) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian21 < 0){
        tester3 = ((angka-imtucewemedian21)/ (imtucewemedian21-imtucewesdnegatif21));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 22:
    if(angka - imtucewemedian22 > 0){
        tester3 = ((angka-imtucewemedian22)/ (imtucewesdpositif22-imtucewemedian22) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian22 < 0){
        tester3 = ((angka-imtucewemedian22)/ (imtucewemedian22-imtucewesdnegatif22));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 23:
    if(angka - imtucewemedian23 > 0){
        tester3 = ((angka-imtucewemedian23)/ (imtucewesdpositif23-imtucewemedian23) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian23 < 0){
        tester3 = ((angka-imtucewemedian23)/ (imtucewemedian23-imtucewesdnegatif23));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 24:
    if(angka - imtucewemedian24 > 0){
        tester3 = ((angka-imtucewemedian24)/ (imtucewesdpositif24-imtucewemedian24) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian24 < 0){
        tester3 = ((angka-imtucewemedian24)/ (imtucewemedian24-imtucewesdnegatif24));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 25:
    if(angka - imtucewemedian25 > 0){
        tester3 = ((angka-imtucewemedian25)/ (imtucewesdpositif25-imtucewemedian25) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian25 < 0){
        tester3 = ((angka-imtucewemedian25)/ (imtucewemedian25-imtucewesdnegatif25));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 26:
    if(angka - imtucewemedian26 > 0){
        tester3 = ((angka-imtucewemedian26)/ (imtucewesdpositif26-imtucewemedian26) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian26 < 0){
        tester3 = ((angka-imtucewemedian26)/ (imtucewemedian26-imtucewesdnegatif26));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 27:
    if(angka - imtucewemedian27 > 0){
        tester3 = ((angka-imtucewemedian27)/ (imtucewesdpositif27-imtucewemedian27) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian27 < 0){
        tester3 = ((angka-imtucewemedian27)/ (imtucewemedian27-imtucewesdnegatif27));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 28:
    if(angka - imtucewemedian28 > 0){
        tester3 = ((angka-imtucewemedian28)/ (imtucewesdpositif28-imtucewemedian28) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian28 < 0){
        tester3 = ((angka-imtucewemedian28)/ (imtucewemedian28-imtucewesdnegatif28));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 29:
    if(angka - imtucewemedian29 > 0){
        tester3 = ((angka-imtucewemedian29)/ (imtucewesdpositif29-imtucewemedian29) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian29 < 0){
        tester3 = ((angka-imtucewemedian29)/ (imtucewemedian29-imtucewesdnegatif29));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 30:
    if(angka - imtucewemedian30 > 0){
        tester3 = ((angka-imtucewemedian30)/ (imtucewesdpositif30-imtucewemedian30) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian30 < 0){
        tester3 = ((angka-imtucewemedian30)/ (imtucewemedian30-imtucewesdnegatif30));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 31:
    if(angka - imtucewemedian31 > 0){
        tester3 = ((angka-imtucewemedian31)/ (imtucewesdpositif31-imtucewemedian31) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian31 < 0){
        tester3 = ((angka-imtucewemedian31)/ (imtucewemedian31-imtucewesdnegatif31));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 32:
    if(angka - imtucewemedian32 > 0){
        tester3 = ((angka-imtucewemedian32)/ (imtucewesdpositif32-imtucewemedian32) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian32 < 0){
        tester3 = ((angka-imtucewemedian32)/ (imtucewemedian32-imtucewesdnegatif32));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 33:
    if(angka - imtucewemedian33 > 0){
        tester3 = ((angka-imtucewemedian33)/ (imtucewesdpositif33-imtucewemedian33) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian33 < 0){
        tester3 = ((angka-imtucewemedian33)/ (imtucewemedian33-imtucewesdnegatif33));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 34:
    if(angka - imtucewemedian34 > 0){
        tester3 = ((angka-imtucewemedian34)/ (imtucewesdpositif34-imtucewemedian34) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian34 < 0){
        tester3 = ((angka-imtucewemedian34)/ (imtucewemedian34-imtucewesdnegatif34));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 35:
    if(angka - imtucewemedian35 > 0){
        tester3 = ((angka-imtucewemedian35)/ (imtucewesdpositif35-imtucewemedian35) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian35 < 0){
        tester3 = ((angka-imtucewemedian35)/ (imtucewemedian35-imtucewesdnegatif35));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 36:
    if(angka - imtucewemedian36 > 0){
        tester3 = ((angka-imtucewemedian36)/ (imtucewesdpositif36-imtucewemedian36) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian36 < 0){
        tester3 = ((angka-imtucewemedian36)/ (imtucewemedian36-imtucewesdnegatif36));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 37:
    if(angka - imtucewemedian37 > 0){
        tester3 = ((angka-imtucewemedian37)/ (imtucewesdpositif37-imtucewemedian37) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian37 < 0){
        tester3 = ((angka-imtucewemedian37)/ (imtucewemedian37-imtucewesdnegatif37));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 38:
    if(angka - imtucewemedian38 > 0){
        tester3 = ((angka-imtucewemedian38)/ (imtucewesdpositif38-imtucewemedian38) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian38 < 0){
        tester3 = ((angka-imtucewemedian38)/ (imtucewemedian38-imtucewesdnegatif38));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 39:
    if(angka - imtucewemedian39 > 0){
        tester3 = ((angka-imtucewemedian39)/ (imtucewesdpositif39-imtucewemedian39) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian39 < 0){
        tester3 = ((angka-imtucewemedian39)/ (imtucewemedian39-imtucewesdnegatif39));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 40:
    if(angka - imtucewemedian40 > 0){
        tester3 = ((angka-imtucewemedian40)/ (imtucewesdpositif40-imtucewemedian40) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian40 < 0){
        tester3 = ((angka-imtucewemedian40)/ (imtucewemedian40-imtucewesdnegatif40));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 41:
    if(angka - imtucewemedian41 > 0){
        tester3 = ((angka-imtucewemedian41)/ (imtucewesdpositif41-imtucewemedian41) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian41 < 0){
        tester3 = ((angka-imtucewemedian41)/ (imtucewemedian41-imtucewesdnegatif41));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 42:
    if(angka - imtucewemedian42 > 0){
        tester3 = ((angka-imtucewemedian42)/ (imtucewesdpositif42-imtucewemedian42) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian42 < 0){
        tester3 = ((angka-imtucewemedian42)/ (imtucewemedian42-imtucewesdnegatif42));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 43:
    if(angka - imtucewemedian43 > 0){
        tester3 = ((angka-imtucewemedian43)/ (imtucewesdpositif43-imtucewemedian43) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian43 < 0){
        tester3 = ((angka-imtucewemedian43)/ (imtucewemedian43-imtucewesdnegatif43));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 44:
    if(angka - imtucewemedian44 > 0){
        tester3 = ((angka-imtucewemedian44)/ (imtucewesdpositif44-imtucewemedian44) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian44 < 0){
        tester3 = ((angka-imtucewemedian44)/ (imtucewemedian44-imtucewesdnegatif44));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 45:
    if(angka - imtucewemedian45 > 0){
        tester3 = ((angka-imtucewemedian45)/ (imtucewesdpositif45-imtucewemedian45) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian45 < 0){
        tester3 = ((angka-imtucewemedian45)/ (imtucewemedian45-imtucewesdnegatif45));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 46:
    if(angka - imtucewemedian46 > 0){
        tester3 = ((angka-imtucewemedian46)/ (imtucewesdpositif46-imtucewemedian46) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian46 < 0){
        tester3 = ((angka-imtucewemedian46)/ (imtucewemedian46-imtucewesdnegatif46));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 47:
    if(angka - imtucewemedian47 > 0){
        tester3 = ((angka-imtucewemedian47)/ (imtucewesdpositif47-imtucewemedian47) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian47 < 0){
        tester3 = ((angka-imtucewemedian47)/ (imtucewemedian47-imtucewesdnegatif47));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 48:
    if(angka - imtucewemedian48 > 0){
        tester3 = ((angka-imtucewemedian48)/ (imtucewesdpositif48-imtucewemedian48) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian48 < 0){
        tester3 = ((angka-imtucewemedian48)/ (imtucewemedian48-imtucewesdnegatif48));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 49:
    if(angka - imtucewemedian49 > 0){
        tester3 = ((angka-imtucewemedian49)/ (imtucewesdpositif49-imtucewemedian49) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian49 < 0){
        tester3 = ((angka-imtucewemedian49)/ (imtucewemedian49-imtucewesdnegatif49));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 50:
    if(angka - imtucewemedian50 > 0){
        tester3 = ((angka-imtucewemedian50)/ (imtucewesdpositif50-imtucewemedian50) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian50 < 0){
        tester3 = ((angka-imtucewemedian50)/ (imtucewemedian50-imtucewesdnegatif50));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 51:
    if(angka - imtucewemedian51 > 0){
        tester3 = ((angka-imtucewemedian51)/ (imtucewesdpositif51-imtucewemedian51) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian51 < 0){
        tester3 = ((angka-imtucewemedian51)/ (imtucewemedian51-imtucewesdnegatif51));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 52:
    if(angka - imtucewemedian52 > 0){
        tester3 = ((angka-imtucewemedian52)/ (imtucewesdpositif52-imtucewemedian52) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian52 < 0){
        tester3 = ((angka-imtucewemedian52)/ (imtucewemedian52-imtucewesdnegatif52));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 53:
    if(angka - imtucewemedian53 > 0){
        tester3 = ((angka-imtucewemedian53)/ (imtucewesdpositif53-imtucewemedian53) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian53 < 0){
        tester3 = ((angka-imtucewemedian53)/ (imtucewemedian53-imtucewesdnegatif53));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 54:
    if(angka - imtucewemedian54 > 0){
        tester3 = ((angka-imtucewemedian54)/ (imtucewesdpositif54-imtucewemedian54) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian54 < 0){
        tester3 = ((angka-imtucewemedian54)/ (imtucewemedian54-imtucewesdnegatif54));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 55:
    if(angka - imtucewemedian55 > 0){
        tester3 = ((angka-imtucewemedian55)/ (imtucewesdpositif55-imtucewemedian55) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian55 < 0){
        tester3 = ((angka-imtucewemedian55)/ (imtucewemedian55-imtucewesdnegatif55));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 56:
    if(angka - imtucewemedian56 > 0){
        tester3 = ((angka-imtucewemedian56)/ (imtucewesdpositif56-imtucewemedian56) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian56 < 0){
        tester3 = ((angka-imtucewemedian56)/ (imtucewemedian56-imtucewesdnegatif56));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 57:
    if(angka - imtucewemedian57 > 0){
        tester3 = ((angka-imtucewemedian57)/ (imtucewesdpositif57-imtucewemedian57) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian57 < 0){
        tester3 = ((angka-imtucewemedian57)/ (imtucewemedian57-imtucewesdnegatif57));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 58:
    if(angka - imtucewemedian58 > 0){
        tester3 = ((angka-imtucewemedian58)/ (imtucewesdpositif58-imtucewemedian58) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian58 < 0){
        tester3 = ((angka-imtucewemedian58)/ (imtucewemedian58-imtucewesdnegatif58));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 59:
    if(angka - imtucewemedian59 > 0){
        tester3 = ((angka-imtucewemedian59)/ (imtucewesdpositif59-imtucewemedian59) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian59 < 0){
        tester3 = ((angka-imtucewemedian59)/ (imtucewemedian59-imtucewesdnegatif59));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    case bulan == 60:
    if(angka - imtucewemedian60 > 0){
        tester3 = ((angka-imtucewemedian60)/ (imtucewesdpositif60-imtucewemedian60) );
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else if(angka - imtucewemedian60 < 0){
        tester3 = ((angka-imtucewemedian60)/ (imtucewemedian60-imtucewesdnegatif60));
        document.getElementById("zsimtu").value = tester3;
        if(tester3 > 2){
                statustester3 = ("Gemuk");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 <-3){
            statustester3 = ("Sangat Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else if(tester3 >= -3 && tester3 <= -2){
            statustester3 = ("Kurus");
                document.getElementById("statusimtu").value = statustester3;
        }
        else {
            statustester3 = ("Normal");
                document.getElementById("statusimtu").value = statustester3;
        }
    } else {
    alert('Not Available');
    }
    break;
    }
}
    }
    else {
        $('#b').val("");
        $('#statusbbu').val("");
        $('#t').val("");
        $('#statustbu').val("");
        $('#zsimtu').val("");
        $('#statusimtu').val("");

    }
});
        
    </script>
</body>
</html>