<?php 
// include 'koneksi.php';
include '../CRUDFINAL/koneksicewe.php';
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
$BeratBadan     = $_POST['BeratBadan'];
$TinggiBadan    = $_POST['TinggiBadan'];
$LingkarKepala  = $_POST['LingkarKepala'];
$StatusGiziBB   = $_POST['StatusGiziBB'];
$StatusGiziTB   = $_POST['StatusGiziTB'];
$StatusGiziBBTB = $_POST['StatusGiziBBTB'];
$StatusGiziIMT  = $_POST['StatusGiziIMT'];

// 
$sql = "UPDATE perempuan
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
BeratBadan     = '$BeratBadan',
TinggiBadan    = '$TinggiBadan',
LingkarKepala  = '$LingkarKepala',
StatusGiziBB   = '$StatusGiziBB',
StatusGiziTB   = '$StatusGiziTB',
StatusGiziBBTB = '$StatusGiziBBTB',
StatusGiziIMT  = '$StatusGiziIMT'
WHERE id='$id'";


mysqli_query($koneksi, $sql);

header("location:../CRUDFINAL/formcewe.php?pesan=update");
// $conn->close();
?>