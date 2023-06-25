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
                        Edit Anak Laki-Laki
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
      <input type="text" name="Posyandu" value="<?php echo $d['Posyandu']; ?>">
      <label>Jenis Kelamin</label>
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
      <input type="text" name="UmurBulan" value="<?php echo $d['UmurBulan']; ?>">
      <label>Umur Bulan Saat Diukur</label>
    </div>
    
    
    <div class="user-box">
      <input type="text" name="BeratBadan" value="<?php echo $d['BeratBadan']; ?>">
      <label>Berat Badan</label>
    </div>


    <div class="user-box">
      <input type="text" name="TinggiBadan" value="<?php echo $d['TinggiBadan']; ?>">
      <label>Tinggi Badan</label>
    </div>
    
    
    <div class="user-box">
      <input type="text" name="StatusGiziBB" value="<?php echo $d['StatusGiziBB']; ?>">
      <label>Status Gizi Berdasarkan Berat Badan Menurut Umur</label>
    </div>


    <div class="user-box">
      <input type="text" name="StatusGiziTB" value="<?php echo $d['StatusGiziTB']; ?>">
      <label>Status Gizi Berdasarkan Tinggi Badan Menurut Umur</label>
    </div>
    
    
    <div class="user-box">
      <input type="text" name="StatusGiziBBTB" value="<?php echo $d['StatusGiziBBTB']; ?>">
      <label>Status Gizi Berdasarkan Berat Badan Menurut Tinggi Badan</label>
    </div>


    <div class="user-box">
      <input type="text" name="StatusGiziIMT" value="<?php echo $d['StatusGiziIMT']; ?>">
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
</body>
</html>