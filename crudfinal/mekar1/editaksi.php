<?php 
// include 'koneksi.php';
include '../mekar17/koneksi.php';
$id             = $_POST['id'];
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

// 
$sql = "UPDATE laki
SET 
Nik            = '$Nik',
NamaAnak       = '$NamaAnak',
TanggalLahir   = '$TanggalLahir',
NamaOrangTua   = '$NamaOrangTua',
NikOrangTua    = '$NikOrangTua',
NomorTelepon   = '$NomorTelepon',
Alamat         = '$Alamat',
TanggalUkur    = '$TanggalUkur',
UmurBulan      = '$UmurBulan',
BeratBadan     = '$BeratBadan',
TinggiBadan    = '$TinggiBadan',
jeniskelamin   = '$jeniskelamin',
zsbbu          = '$zsbbu',
StatusGiziBB   = '$StatusGiziBB',
zstbu          = '$zstbu',
StatusGiziTB   = '$StatusGiziTB',
zsimt          = '$zsimt',
StatusGiziIMT  = '$StatusGiziIMT'
WHERE id='$id'";


mysqli_query($koneksi, $sql);

header("location:../mekar1/formlaki.php?pesan=update");
// $conn->close();
?>