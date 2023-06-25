<?php
session_start();
session_destroy();
header('location:Login_v1/index.php');
?>