<?php
session_start();

 ?>

<html>
<head>
  <title>Login and Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <body>
    <div class ="container">
      <div class="Login-box">

        <div class="col-mid-6 Login-left">
          <h2><center>Login</center></h2>
          <form action="validation.php" method="post">
              <font color = "blue"></font>
            <div class="form-group">
              <label>Username</label>
              <input type="email" name="user" class="form-control" placeholder="Enter valid email adress" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>
          </form>

          <form action="forgetpass.php" method="post">

              <button type=" submit" class="btn btn-link">Forget Password</button>
          </form>


          <?php
          if (isset($_SESSION ['ERRMSG1'] )) {
            echo ($_SESSION ['ERRMSG1']);
            unset($_SESSION['ERRMSG1']);}
           ?>
        </div>

        <div class="col-mid-6 Login-left">
          <h2><center>Registration</center> </h2>
          <form action="Registration.php" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="email" name="user" class="form-control"  placeholder="Enter valid email adress" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Registration </button>
          </form>
          <?php
          if (isset($_SESSION ['ERRMSG2'] )) {
            echo ($_SESSION ['ERRMSG2']);
            unset($_SESSION['ERRMSG2']);}
            if (isset($_SESSION ['ssmsg'] )){
              echo($_SESSION ['ssmsg']);
              unset($_SESSION['ssmsg']);
            }
           ?>
        </div>
      </div>
      </div>
  </body>
</head>
</html>
