<?php include_once('./database/server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Final Year</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
  <link rel="stylesheet" href="assets/css/flexslider.css">

  <!-- Includes css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body class="bg-light">
  <?php /*NAVBAR*/ include_once("header.php"); ?> <br /><br />

  <!-- Page Content -->
  <div class="container bg-light">
    <div class="card mx-auto" style="width: 20rem;">
      <img class="card-img-top mx-auto" src="./assets/img/cards/images.png" alt="Login Icon">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <form method="POST" action="login.php">
          <?php include('errors.php'); ?>
          <div class="form-group">
            <label for="username">username</label>
            <input type="text" style="width: 100%" class="form-control" id="username"  placeholder="Enter Username" name="username" value="">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="PasswordHelp" placeholder="Password" name="psw_1" value="">
            <small id="PasswordHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
          </div>
          <button type="submit" class="btn btn-success btn-center" name="login_user"><i class="icon-lock">&nbsp;&nbsp;Login</i></button>
        </form>
        <span><a href="register.php" class="">Register</a></span>
        <div class="card-footer">
          <a href="#">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- \JavaScript -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>

</html>