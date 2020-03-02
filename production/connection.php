<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "perpus";

$db = new mysqli($server, $user, $password, $nama_database );

@session_start(); 
if ($_SESSION['login'] !== TRUE){
  header("location:index.php");
}

if( !$db ){
    die("Gagal terhubung dengan database: " . mysql_error());
}
?>