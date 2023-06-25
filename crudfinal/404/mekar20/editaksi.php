<?php 
// include 'koneksi.php';
include '../mekar20/koneksi.php';
$id             = $_POST['id'];
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

// 
$sql = "UPDATE mekar20
SET 
Nik            = '$Nik',
NamaAnak       = '$NamaAnak',
TanggalLahir   = '$TanggalLahir',
NamaOrangTua   = '$NamaOrangTua',
NikOrangTua    = '$NikOrangTua',
NomorTelepon   = '$NomorTelepon',
Posyandu       = '$Posyandu',
Alamat         = '$Alamat',
TanggalUkur    = '$TanggalUkur',
UmurBulan      = '$UmurBulan',
BeratBadan     = '$BeratBadan',
TinggiBadan    = '$TinggiBadan',
StatusGiziBB   = '$StatusGiziBB',
StatusGiziTB   = '$StatusGiziTB',
StatusGiziBBTB = '$StatusGiziBBTB',
StatusGiziIMT  = '$StatusGiziIMT'
WHERE id='$id'";


mysqli_query($koneksi, $sql);

header("location:../mekar20/formlaki.php?pesan=update");
// $conn->close();
?>