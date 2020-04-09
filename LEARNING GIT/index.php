
  <?php
  session_start();

    if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
    }
  ?>

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
</head>

<body class="bg-light">

  <?php
  include_once("header.php"); ?> <br /><br />

  <!-- Page Content -->
  <div class="container bg-light">
    <!--notification -->
    <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top mx-auto" style="width: 60%" src="./assets/img/cards/admin.png" alt="card image cap">
          <div class="card-body">
            <h4 class="card-title">Profile Info</h4>
            <p class="card-text"><i class="icon-user"></i>&nbsp;Kenneth Kunusia</p>
            <p class="card-text"><i class="icon-user"></i>&nbsp;Admin</p>
            <p class="card-text">Last Login: xxxx-xx-xx</p>
            <a href="#" class="btn btn-primary"><i class="icon-edit"></i>&nbspEdit Profile</a>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="jumbotron" style="width: 100%;height: 100%;">
          <h1>Welcome Admin</h1>
          <div class="row">
            <div class="col-sm-6">
              <div style="text-align:center;padding:1em 0;">
                <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/country/ke">Kenya</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Africa%2FNairobi" width="100%" height="115" frameborder="0" seamless></iframe>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Orders</h4>
                  <p class="card-text">Make New Orders and print Invoices Here</p>
                  <a href="#" class="btn btn-primary">New Orders</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <p></p>
  <p></p>
  <div class="container bg-light">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Categories</h4>
            <p class="card-text">Manage Categories Parent and Sub Categories Here</p>
            <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add</a>
            <a href="#" class="btn btn-primary"><i class="icon-chain">Manage</i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Brands</h4>
            <p class="card-text">Add and/or Manage Merchandise Brands Here</p>
            <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add</a>
            <a href="#" class="btn btn-primary">Manage</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Products</h4>
            <p class="card-text">Add or/and Manage you Merchandise Products Here</p>
            <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add</a>
            <a href="#" class="btn btn-primary">Manage</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <?php
  //category form
  include_once("category.php");
  ?>
  <?php
  //Brand form
  include_once("Brand.php");
  ?>
  <?php
  //products form
  include_once("products.php");
  ?>


  <!-- Bootstrap core JavaScript -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/scripts.js"></script>

  <script>
  </script>
</body>

</html>