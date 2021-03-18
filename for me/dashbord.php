<?php 
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
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
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header1.css">
    <link rel="stylesheet" href="assets/css/header2.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
</head>

<body>
    <nav class="navbar navbar-default navigation-clean" style="padding:0px;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">ePartner </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Dashboard </a></li>
                    <li role="presentation"><a href="#">Freelancer </a></li>
                    <li role="presentation"><a href="#">Projects </a></li>
                    <li role="presentation"><a href="#">About Us </a></li>
                    <li role="presentation"><a href="#">FAQ </a></li>
                    <li role="presentation"><a href="#">Contact </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding:10px;">Ahmed Hakeem<span class="caret"></span><img src="assets/img/d.jpg" style="width:30px;height:30px;padding:0;margin-left:5px;"></a>
                        <ul
                        class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Logout <i class="fa fa-user-times" id="logouticon"></i></a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="profile-card">
        <div class="profile-back" style="background-color:rgb(31,95,155);"></div><img class="img-circle profile-pic" src="assets/img/d.jpg">
        <h3 class="profile-name" style="background-color:rgb(60,68,72);">Ahmed Hakeem</h3>
        <p class="profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum aliquet ante, non faucibus justo pulvinar sit amet. Aliquam tempor elit ac fringilla pulvinar. Curabitur eleifend, orci ac sagittis sagittis, felis ligula convallis risus,
            eget scelerisque ligula velit in lorem. Etiam sit amet vestibulum arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam mattis tortor in est lacinia eleifend. Nam vel diam ante. Integer nec nulla pharetra, dictum massa
            nec, tincidunt mauris. Nunc pulvinar, ante sed ultricies consequat, felis nunc mollis felis, mollis eleifend est magna eu justo. Aenean ut egestas nibh. Phasellus hendrerit mauris tincidunt urna placerat aliquam. </p>
        <ul class="social-list">
            <li> <i class="fa fa-facebook-official"></i></li>
            <li> <i class="fa fa-twitter-square"></i></li>
            <li> <i class="fa fa-linkedin-square"></i></li>
        </ul>
    </div>
    <div id="wrapper"></div>
    <footer style="margin-top:100px;">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">ePatner </a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p> Jeddah ,K.S.A</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +966 555555</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@epatner.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>