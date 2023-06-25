<?php 
// include 'koneksi.php';
include '../mekar18/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM mekar18 WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../mekar18/formlaki.php");
// $conn->close();
?>