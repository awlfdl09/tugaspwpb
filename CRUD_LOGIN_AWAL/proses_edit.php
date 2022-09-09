<?php

    include("koneksi.php");

    $id = $_GET["id"];
        
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $query = $koneksi->query("UPDATE `user` SET `username`='$username',`role`='$role',`password`='$password',`id` ='$id' WHERE id='$id'");
    
    if ($query){
        Header("Location:beranda.php");
    }

?>