<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="session.php" method="post">
    <h1 style="text-align: center;">Anda telah logout</h1>
    <!-- <a class="btn btn-primary" href="from.php" role="button">Back To From</a> -->
    <button type="submit" href="from.php">Back To From</button> 
    
</body>
</html>