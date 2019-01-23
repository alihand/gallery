<?php
//session baslatma 
session_start();
//session bitirme
session_destroy();
//login.php sayfasına yonlendirme
header("location:../login.php");
?>