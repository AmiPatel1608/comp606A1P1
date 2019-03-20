<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_resgistration');

$name = $_POST['U_name'];
$s="select * from usertable where Username='$name'";
$result= mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if ($num == 1) {
  $_SESSION ['msgran']=$name;
  header('location:Random.php');

}
else {
  Echo " No Email Found";
}
 ?>
