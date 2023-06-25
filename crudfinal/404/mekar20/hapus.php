<?php 
// include 'koneksi.php';
include '../mekar20/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM mekar20 WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../mekar20/formlaki.php");
// $conn->close();
?>