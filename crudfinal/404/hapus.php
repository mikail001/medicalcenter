<?php 
// include 'koneksi.php';
include '../CRUDFINAL/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM laki WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../CRUDFINAL/formlaki.php");
// $conn->close();
?>