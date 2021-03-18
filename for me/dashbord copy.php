<?php 
session_start();
$error ='';
include_once('businessLayer/DB.class.php');
$db = new DB();

         $_SESSION['user_email'] = $email;


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
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
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
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
    <?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>