<?php
include('koneksi.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$query = $koneksi->query("select * from user where username='$username' and password='$password'");

if($query->rowCount() > 0){
    // var_dump("1");
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];

    header("Location: beranda.php");
}else{
    // var_dump("0");
    header("Location: from.php");
}