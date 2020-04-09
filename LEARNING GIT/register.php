<?php  include_once('./database/server.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Final Year</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />

  <!-- Includes css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/form.css">
</head>

<body class="bg-light">

  <?php
  /*NAVIGATION*/
  include_once("header.php");
  ?>
  <div class="container bg-light py-0">
    <div class="row">
      <div class="col-md-6 col-xl-5 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post" action="register.php">
              <?php include('errors.php'); ?>
              <div class="form-label-group">
                <input type="text" name="username" class="form-control" placeholder="User Name"  value="" required autofocus>
              </div>

              <div class="form-label-group">
                <input type="email" name="email" class="form-control" placeholder="Email address"  value="" required>

              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" name="psw_1" class="form-control" placeholder="Password" value="" required >

              </div>

              <div class="form-label-group">
                <input type="password" name="psw_2" class="form-control" placeholder="Confirm Password"  value="" required>
              </div>
              <div class="form-label-group mb-3">

                <select class="custom-select" id="inputGroupSelect01" name="usertype" >
                  <option selected> User Type...</option>
                  <option value="1">Admin</option>
                  <option value="0">Other</option>
                </select>
              </div>
              <hr>
              <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit" name="reg_user">Register</button>
              <a class="d-block text-center mt-1 small" href="index.php">Sign In</a>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>