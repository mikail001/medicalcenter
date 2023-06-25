<?php 
// include 'koneksi.php';
include '../mekar17/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM laki WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../mekar17/formlaki.php");
// $conn->close();
?>