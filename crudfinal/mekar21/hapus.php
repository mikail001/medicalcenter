<?php 
// include 'koneksi.php';
include '../mekar21/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM mekar21 WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../mekar21/formlaki.php");
// $conn->close();
?>