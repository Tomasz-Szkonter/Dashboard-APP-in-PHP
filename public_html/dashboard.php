<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
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
    <div class="wrapper">
        <!-- ---NAVBAR---   -->
        <?php include_once("./templates/sidebar-nav.php");  ?>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="./images/user.png" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa fa-user">&nbsp;</i>Profile Info</h5>
                                <p class="card-text"><i class="fa fa-user">&nbsp;</i>Tomasz Szkonter</p>
                                <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                                <p class="card-text"><i class="fa fa-user"></i>&nbsp;</i>Last login: twoja matka</p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="jumbotron" style="width:100%;height:100%">
                            <h1>Welcome Admin</h1>
                            <div class="row">
                                <div class="col-sm-6">
                                <iframe src="http://free.timeanddate.com/clock/i7bupw00/n535/szw160/szh160/hoc000/hbw4/cf100/hgr0/hcw2/fav0/fiv0/mqc000/mqs3/mql25/mqw2/mqd96/mhc000/mhs3/mhl20/mhw2/mhd96/mmc000/mms3/mml5/mmw2/mmd96/hhs2/hhw8/hms2/hmw8/hmr4/hsc000/hss3/hsl90" frameborder="0" width="160" height="160"></iframe>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Title</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Categories</h5>
                                <p class="card-text">Manage your categories here.</p>
                                <a href="#" data-toggle="modal" data-target="#categoryModal" class="btn btn-primary">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>					
                    </div>
                    <div class="col-md-4">
                        <div class="card mx-auto">
                            <div class="card-body">
                                <h5 class="card-title">Brands</h5>
                                <p class="card-text">Manage your brands here.</p>
                                <a href="#" data-toggle="modal" data-target="#brandModal" class="btn btn-primary">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mx-auto">
                            <div class="card-body">
                                <h5 class="card-title">Products</h5>
                                <p class="card-text">Manage your products here.</p>
                                <a href="#" data-toggle="modal" data-target="#productModal" class="btn btn-primary">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
            
            <!-- ---Category Form---   -->
            <?php include_once("./templates/category.php");?>
            <!-- -------------------   -->
            <!-- -----Brand Form----   -->
            <?php include_once("./templates/brand.php");?>
            <!-- -------------------   -->
            <!-- ---Products Form---   -->
            <?php include_once("./templates/product.php");?>
            <!-- -------------------   -->
        </div>
    </div>
    <div class="overlay"></div>   
  </body>
</html>