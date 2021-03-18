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
    <title>ePartner</title>
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

<body style="padding:0px;padding-top:0px;">
   <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>

    <div id="promo" style="padding-top:96px;background-image:url(&quot;assets/img/Gallery1.jpg&quot;);">
        <div class="jumbotron" style="padding:59px;height:367px;width:815px;">
            <h1>ePartner </h1>
            <p>We connet you to Freelancing World<i class="icon ion-ios-world-outline"></i></p>
            <p class="lead"><a class="btn btn-default" role="button" href="singup.php">Sing Up</a></p>
        </div>
    </div>
    <div class="site-section" id="welcome" style="padding:30px;background-color:rgba(31,148,255,0.10);">
        <a href="about.php"><h1 id="about">About Us</h1></a>
        <p class="text-justify">ePartner is a platform that connects expert freelancers with clients. It provides a wealth of expertise that gives more opportunities to freelancers to work on a large rangeof fields including website development, programing, technical writing,designing,
            technical support, network management, data analysis, and technical auditand consulting. &nbsp; </p>
    </div>
    <div class="darckk-section" style="padding:0px;">
        <div class="container site-section" id="Project" style="background-color:rgba(209,219,224,0);width:1176px;padding-bottom:0px;">
          <a href="freelancer.php"><h1>Freelancer </h1></a>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail"><img src="assets/img/1.jpg">
                        <div class="caption">
                            <h3>Tom Smith</h3>
                            <p>Web Designer and Developer </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail"><img src="assets/img/3.jpg">
                        <div class="caption">
                            <h3>Jack Nink</h3>
                            <p>Network Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail"><img src="assets/img/2.jpg">
                        <div class="caption">
                            <h3>Rosa Ma</h3>
                            <p>Databases Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="site-section" id="Project" style="padding:30px;background-color:rgba(31,148,255,0.10);">
          <a href="projects.php"><h1>Projects </h1></a>
           <div class="row">
               <div class="col-md-4 item"><img src="assets/img/web.png" style="height:162px;">
                   <h2>Web Desing</h2>
                   <p>We have the best best web designer in the world</p>
               </div>
               <div class="col-md-4 item"><img src="assets/img/mobilapp.png" style="height:161px;">
                   <h2>Mobile App</h2>
                   <p>We have the best best web disainer in the world</p>
               </div>
               <div class="col-md-4 item"><img src="assets/img/Network-icon.png" style="height:161px;">
                   <h2>Network</h2>
                   <p>We have the best best web disainer in the world</p>
               </div>
             </div>
        </div>
        <div>
            <div class="container site-section" id="woh" style ="width:1176px;padding-bottom:0px;">
          <a href="hiw.php"> <h1>How to work it</h1></a>
      <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail"><img src="assets/img/register.jpg" style="height:145px;">
                        <div class="caption">
                            <h3>Registration</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="assets/img/upload.png" style="height:133px;">
                        <div class="caption">
                            <h3>Uplo your project</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="assets/img/print-dollar-sign-large.png" style="height:136px;">
                        <div class="caption">
                            <h3>Set proposal</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="assets/img/payment.jpg">
                        <div class="caption">
                            <h3>paymen</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
    <?php include("businessLayer/footer.html");?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>
