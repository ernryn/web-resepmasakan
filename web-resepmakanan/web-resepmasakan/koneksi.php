<?php
$hostname="localhost";
$username="root";
$password="";
$database="webresep_2614";

$koneksi= mysqli_connect($hostname,$username,$password) or die ("koneksi gagal");
mysqli_select_db($koneksi, $database) or die ("koneksi gagal");
?>