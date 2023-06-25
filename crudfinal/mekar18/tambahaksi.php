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
$Alamat         = $_POST['Alamat'];
$TanggalUkur    = $_POST['TanggalUkur'];
$UmurBulan      = $_POST['UmurBulan'];
$BeratBadan     = $_POST['BeratBadan'];
$TinggiBadan    = $_POST['TinggiBadan'];
$jeniskelamin   = $_POST['jeniskelamin'];
$zsbbu          = $_POST['zsbbu'];
$StatusGiziBB   = $_POST['StatusGiziBB'];
$zstbu          = $_POST['zstbu'];
$StatusGiziTB   = $_POST['StatusGiziTB'];
$zsimt          = $_POST['zsimt'];
$StatusGiziIMT  = $_POST['StatusGiziIMT'];
}
 
// menginput data ke database

  mysqli_query($koneksi, "INSERT INTO mekar18(Nik,NamaAnak,TanggalLahir,NamaOrangTua,NikOrangTua,NomorTelepon,Alamat,TanggalUkur,UmurBulan,BeratBadan,TinggiBadan,jeniskelamin,zsbbu,StatusGiziBB,zstbu,StatusGiziTB,zsimt,StatusGiziIMT) VALUES('$Nik','$NamaAnak','$TanggalLahir','$NamaOrangTua','$NikOrangTua','$NomorTelepon','$Alamat','$TanggalUkur','$UmurBulan','$BeratBadan','$TinggiBadan','$jeniskelamin','$zsbbu','$StatusGiziBB','$zstbu','$StatusGiziTB','$zsimt','$StatusGiziIMT')");

// mengalihkan halaman kembali ke index.php
header("location:formlaki.php");
 
?>
