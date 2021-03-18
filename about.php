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
    <title>About Us</title>
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
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
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
    <div class="team-clean">
        <div class="container" style="margin-top:63px;height:684px;">
            <div class="intro">
                <h2 class="text-center">About Us</h2>
                <p class="text-center text-justify">ePartner is a platform that connects expert freelancers with clients. It provides a wealth 
                of expertise that gives more opportunities to freelancers to work on a large range of fields including website 
                development, programing, technical writing, designing, technical support, network management, data analysis, and 
                technical audit and consulting. The value of ePartner lies in providing a list of local and global expert and creates 
                opportunities for them to gain experience and earn money. The service offers an integrated environment for both expert 
                and business owners, mainly with adding a project, submitting proposals, online payment, and rating. </p>
            </div>
            
            <div class="row people">
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/d.jpg">
                    <h3 class="name">Ahmed Hakeem</h3>
                    <p class="title">Web Designer, HTML, CSS</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.  </p>
                    <div class="social"><a><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/thamer2.jpeg">
                    <h3 class="name">Thamer Alhazmi</h3>
                    <p class="title">IT Specialist, PHP, Database</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.  </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="https://twitter.com/AlhazmiThamer"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/WhatsApp Image 20dd17-09-30 at 4.34.03 PM.jpeg">
                    <h3 class="name">Mohammed Alghamdi</h3>
                    <p class="title">System Administrator</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.  </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
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