<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/dashboard.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Bootstrap - Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Optional CSS -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="./js/main.js"></script>

    <title>Dashboard.IO</title>

  </head>
  <body>
  <div class="overlay-load"><div class="loader"></div></div>
    <div class="wrapper">
      <!-- ---Sidebar NAV---   -->
      <?php include_once("./templates/sidebar-nav.php")  ?>
      <!-- ------------   -->

      <!-- Page Content -->
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-left"></i>
                    <span>Toggle Menu</span>
                </button>
            </div>
        </nav>
        <div class="container">
          <?php

            if(isset($_GET["msg"]) AND !empty($_GET["msg"])) {
              ?>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                  <?php echo $_GET["msg"] ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php
            }

          ?>
          <div class="card mx-auto" style="width: 18rem;">
            <img src="./images/login.png" class="card-img-top mx-auto" alt="Login Icon">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <form id="form_login" onsubmit="return false">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="log_email" name="log_email" placeholder="Enter Email" >
                  <small id="e_error" class="form-text text-muted" >We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="log_password" name="log_password" placeholder="Enter Password">
                  <small id="p_error" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Submit</button>
                <span><a href="./register.php">Register</a></span>
              </form>
            </div>
            <div class="card-footer"><a href="#">Forgotten Password?</a></div>
          </div>
        </div>
    </div>
  <div class="overlay"></div>          
  </body>
</html>