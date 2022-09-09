<?php
include('koneksi.php');

if(!isset($_SESSION["username"])) {
   header("Location:form.php");
}
$query = $koneksi->query("select * from user")->fetchAll();


?>


<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documentv2</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
<form action="session.php" method="post">
<table class="table table-bordered border-primary">
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Role</th>
    <th>Actions</th>
    <?php
            foreach ($query as $querys){
                echo "<tr>";
                echo "<td>";
                    echo $querys["id"];
                echo "</td>";
                echo "<td>";
                    echo $querys["username"];
                echo "</td>";
                echo "<td>";
                    echo $querys["password"];
                echo "</td>";
                echo "<td>";
                    echo $querys["role"];
                echo "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=". $querys["id"] ."'>Edit</a> ";
                echo "</td>";
                echo "</tr>";
            };
        ?>
 <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>
    <!-- <a class="btn btn-primary" href="from.php" role="button">Input Data</a>
    <a class="btn btn-primary" href="hapus.php" role="button">Delete Data</a> -->
<button type="submit" href="from.php">Input Data</button>
<button type="submit" href="happus.php">Delete Data</button>  
</body>
</html>