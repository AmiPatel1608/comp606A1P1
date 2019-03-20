<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_resgistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where Username ='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
  $msg ="Username Already Taken";
  $_SESSION ['ERRMSG2']=$msg;
  header('location:login.php');
}else {
  $reg = "insert into usertable(Username,Password) values ('$name' , '$pass')";
  mysqli_query($con, $reg);
  $ss="Register Successfully";
  $_SESSION['ssmsg']=$ss;
  header('location:login.php');

}
 ?>
