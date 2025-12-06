<?php
$local = "localhost";
$user = "root";
$pass = "";
$database ="demo";


$conn = mysqli_connect($local,$user,$pass) or die ("Database dose not connect");
mysqli_select_db($conn,$database);
date_default_timezone_set('Asia/Kolkata');
error_reporting(0);
ini_set('display_errors','0');
?>