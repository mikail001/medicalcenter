<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if ($_POST['Submit'] == "Submit"){
$Nik            = $_POST['Nik'];
$NamaAnak       = $_POST['NamaAnak'];
$TanggalLahir   = $_POST['TanggalLahir'];
$NamaOrangTua   = $_POST['NamaOrangTua'];
$NikOrangTua    = $_POST['NikOrangTua'];
$NomorTelepon   = $_POST['NomorTelepon'];
$Posyandu       = $_POST['Posyandu'];
$Alamat         = $_POST['Alamat'];
$TanggalUkur    = $_POST['TanggalUkur'];
$UmurBulan      = $_POST['UmurBulan'];
$BeratBadan     = $_POST['BeratBadan'];
$TinggiBadan    = $_POST['TinggiBadan'];
$StatusGiziBB   = $_POST['StatusGiziBB'];
$StatusGiziTB   = $_POST['StatusGiziTB'];
$StatusGiziBBTB = $_POST['StatusGiziBBTB'];
$StatusGiziIMT  = $_POST['StatusGiziIMT'];
}
 
// menginput data ke database

  mysqli_query($koneksi, "INSERT INTO mekar18(Nik,NamaAnak,TanggalLahir,NamaOrangTua,NikOrangTua,NomorTelepon,Posyandu,Alamat,TanggalUkur,UmurBulan,BeratBadan,TinggiBadan,StatusGiziBB,StatusGiziTB,StatusGiziBBTB,StatusGiziIMT) VALUES('$Nik','$NamaAnak','$TanggalLahir','$NamaOrangTua','$NikOrangTua','$NomorTelepon','$Posyandu','$Alamat','$TanggalUkur','$UmurBulan','$BeratBadan','$TinggiBadan','$StatusGiziBB','$StatusGiziTB','$StatusGiziBBTB','$StatusGiziIMT')");

// mengalihkan halaman kembali ke index.php
header("location:formlaki.php");
 
?>
