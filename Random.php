<?php
session_start();
$number=rand();

?>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
 <body>
<div class="container">
   <a class="float-right" href="Login.php">  click here to go back </a>
   <h1>
   <?php
   $con = mysqli_connect('localhost','root','');

   mysqli_select_db($con, 'user_resgistration');
   $name=$_SESSION ['msgran'];
   $s="update usertable set password='$number' where Username='$name'";
   $result = mysqli_query($con, $s);
   $rows=mysqli_affected_rows($con);
   if($rows==1){
           echo "Your new password is   ".$number;
   }
    ?>
  </div>
 </h1>
 </body>
 </html>
