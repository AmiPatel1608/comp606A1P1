<?php

session_start();
unset($_SESSION['ERRMSG1']);
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_resgistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where Username ='$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username'] = $name;
  header('location:home.php');
}else {
  $msg = "Invalid Credential";
  $_SESSION ['ERRMSG1']=$msg;
  header('location:login.php');
}
 ?>
