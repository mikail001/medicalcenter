<?php 
// include 'koneksi.php';
include '../CRUDFINAL/koneksicewe.php';
$id = $_GET['id'];

$sql = "DELETE FROM perempuan WHERE id='$id'";

mysqli_query($koneksi, $sql);

header("location:../CRUDFINAL/formcewe.php");
// $conn->close();
?>