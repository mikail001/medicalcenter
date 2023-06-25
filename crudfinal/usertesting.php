<?php

session_start();
$username = $_SESSION ['username'];
$level = $_SESSION ['level'];
if(!empty($username) && ($level == '0')){
}else {
    header('location:Login_v1/index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/38ea284df8.js" crossorigin="anonymous"></script>
    <title>Admin Desa</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
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
            <img src="assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Admin Desa</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                
                
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>DAFTAR MENU</strong></li>
            <li><a href="usertesting.php"><i class="icon icon-sailing-boat-water yellow-text s-18"></i>Dashboard</a>
            </li>
            <li><a href="mekar17user/formlaki.php"><i class="icon icon-wpforms green-text s-18"></i>Posyandu Mekar Arum 17</a>
            </li>
            <li><a href="mekar18user/formlaki.php"><i class="icon icon-wpforms blue-text s-18"></i>Posyandu Mekar Arum 18</a>
            </li>
            <li><a href="mekar20user/formlaki.php"><i class="icon icon-wpforms green-text s-18"></i>Posyandu Mekar Arum 20</a>
            </li>
            <li><a href="mekar21user/formlaki.php"><i class="icon icon-wpforms blue-text s-18"></i>Posyandu Mekar Arum 21</a>
            </li>
            <!--
            <li><a href="formcewe.php"><i class="icon icon-wpforms red-text s-18"></i></a>
            </li>
            -->
            <li><a href="logout.php"><i class="icon icon-power-off red-text s-18 " ></i>Logout</a>
            </li>

            </li>
            

            <li class="header"><strong>Export</strong></li>
            <li><a href="mekar17user/exportpage.php" target=”_blank”><i class="icon icon-file-excel-o green-text s-18"></i>Export Data Mekar Arum 17</a>
            </li>
            <li><a href="mekar18user/exportpage.php" target=”_blank”><i class="icon icon-file-excel-o blue-text s-18"></i>Export Data Mekar Arum 18</a>
            <li><a href="mekar20user/exportpage.php" target=”_blank”><i class="icon icon-file-excel-o green-text s-18"></i>Export Data Mekar Arum 20</a>
            </li>
            <li><a href="mekar21user/exportpage.php" target=”_blank”><i class="icon icon-file-excel-o blue-text s-18"></i>Export Data Mekar Arum 21</a>
        </ul>
    </section>
</aside>


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
                    
                    <br>
                    <h1 id="jd">
                        SELAMAT DATANG
                    </h1>
                    <style>
                        #jd {
                            text-align: center;
                            font-style: bold;
                        }
                    </style>
                </div>
            </div>
            
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            
            <!--Today Tab End-->
         

<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>