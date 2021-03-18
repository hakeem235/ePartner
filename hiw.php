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
    <title>How It Works</title>
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

<body style="margin-top:32px;">
   <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="container site-section" id="Project" style="background-color:rgba(209,219,224,0);width:1176px;padding-bottom:0px;">
      <h1>How to work it</h1></div>
  <div>
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h1 class="text-center">Freelancer </h1></div>
              <div class="col-md-6">
                  <h1 class="text-center">Clinet </h1></div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/singup.jpg" style="height:315px;">
                      <div class="caption">
                          <h3>Registration</h3>
                        <p>You can Registar using this form. <a href="singup.php">CLICK HERE</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/singup.jpg" style="height:316px;">
                      <div class="caption">
                          <h3>Registration</h3>
                          <p>You can Registar using this form.<a href="singup.php">CLICK HERE</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/viewprocet.jpg" style="width:439px;height:313px;">
                      <div class="caption">
                          <h3>Viwe Project</h3>
                          <p>In projects page you can viwe all posted projects and select the one you like. You can view project's details after signup.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/post.jpg" style="width:439px;height:317px;">
                      <div class="caption">
                          <h3>Post Project</h3>
                          <p>From this form you can post your project after signup.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/postprop.jpg" style="width:290px;height:247px;margin-right:144px;">
                      <div class="caption">
                          <h3>Submit Proposal </h3>
                          <p>Afte you select a project, you can submit your proposal</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="thumbnail" style="height:362px;"><img src="assets/img/viwepro.jpg" style="width:320px;height:219px;">
                      <div class="caption" style="margin-top:29px;height:162px;">
                          <h3>Review Proposal</h3>
                          <p>You review proposals that received and accept one of theme. Clicking accept mean other proposals will automatically reject.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/payment.jpg" style="width:334px;">
                      <div class="caption">
                          <h3>Receive Payment</h3>
                          <p>The freelancer will receive the payment in his bank account after send project's output.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="thumbnail"><img src="assets/img/print-dollar-sign-large.png" style="width:175px;">
                      <div class="caption">
                          <h3>Make Payment</h3> 
                          <p>You will receive an email for the payment instructions.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <?php include("businessLayer/footer.html");?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark1.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
</body>

</html>
