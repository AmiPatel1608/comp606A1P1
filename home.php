<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
 ?>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
 <body>
<div class="container">
   <a class="float-right" href="logout.php">  LOGOUT </a>
   <h1>
   Welcome
   <?php
   echo $_SESSION['username'];
    ?>
  </div>
 </h1>
 </body>
 </html>
