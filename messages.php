<?php
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

//*$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Team-Clean.css">
  <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
  <link rel="stylesheet" href="assets/css/chatstyle.css">
</head>

<body style="padding:0px;padding-top:0px;">

  <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
  {include("businessLayer/navBarWS.html");}
  else
  {include("businessLayer/navBarNoS.html");}?>

  <div class="team-clean">
    <div class="container" style="margin-top:63px;height:684px;">
      <div class="intro">
        <p class="text-center"> </p>
      </div>
      
        <div class = "chatbox">
        
      </div>
      
    
        </div>
      <div class = "chatbox">
        <div class = "chatlogs">
          <div class = "chat clin">
            <div class = "user-photo"></div>
            <p class="chat-message">hi i am clint</p>
          </div>
          <div class = "chat freelancer">
            <div class = "user-photo"></div>
            <p class="chat-message">hi i am freelancer</p>
          </div>
      </div>
      
    </div>
    <div class="chat-form">
        <textarea></textarea>
        <button>Send</button>
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
  <script src="assets/js/Project_Slider.js"></script>
  <script src="assets/js/Sidebar-Menu.js"></script>
  <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
</body>

</html>
