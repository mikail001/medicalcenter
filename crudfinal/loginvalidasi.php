<?php
session_start();
include 'loginkoneksi.php';
$username = $_POST ['username'];
$password = md5($_POST ['password']);
$sql = mysqli_query($koneksi, "SELECT username, password, level FROM logindb WHERE username= '$username' AND password= '$password' ");

$count  = mysqli_num_rows($sql);
$fetchdata = mysqli_fetch_array($sql);
if($count > 0){
    $level = $fetchdata['level'];
    if($level=='1'){
        //kalau dia admin
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
        header('location:index.php');
    } else if($level=='0'){
        //kalau dia user
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
        header('location:usertesting.php');
    }
} else{
    echo "Username dan password yang anda masukan salah. <br>";
    echo "<a href='Login_v1/index.php'>Kembali </a>";
}
?>