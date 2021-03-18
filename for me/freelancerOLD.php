<?php 
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Filterable-Gallery.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header1.css">
    <link rel="stylesheet" href="assets/css/header2.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>

<body>
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="container-fluid">
        <div class="gallery-pt">
            <div class="row" style="margin-top:52px;">
                <div class="col-md-12 gallery-pt--filter-container">
                    <h1 style="color:rgb(10,111,183);">Our top Freelancer</h1>
                    <ul class="list-inline filters"></ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 gallery-pt--body">
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/colorfull.jpg" class="img-responsive" data-album="abstract"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/colorfull.jpg" class="img-responsive" data-album="animals"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/colorfull.jpg" class="img-responsive" data-album="abstract"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/colorfull.jpg" class="img-responsive" data-album="smth-space"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/lava.jpg" class="img-responsive" data-album="smth-space"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/lava.jpg" class="img-responsive" data-album="abstract"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/lava.jpg" class="img-responsive" data-album="animals"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                    <div class="item col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a href="http://lorempixel.com/320/320" target="_blank" class="text-right thumbnail"><img src="assets/img/lava.jpg" class="img-responsive" data-album="animals"><small class="text-muted">Name of the freelancer </small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>