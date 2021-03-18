<?php
session_start();
$error ='';
include_once('businessLayer/DB.class.php');
$db = new DB();
if(isset($_POST['SignIn'])){
 $email = $_POST['email'];
 $pass = $_POST['password'];

 		$checkLogin = $db->checkUserInfo($email, $pass);

      if(!empty($checkLogin)) {
         $_SESSION['user_email'] = $email;
         header('location: profileView.php'); 
      
      }else {
         $error = "Your Email or Password is invalid";
      }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
    
    <script>
			function checkRegistration() {
				jQuery.ajax({
				url: "businessLayer/check_registration.php",
				data:'email='+$("#email").val(),
				type: "POST",
				success:function(data){
					$("#email-registration-status").html(data);
				},
				error:function (){}
				});
			}
			
			
    </script>
</head>

<body style="margin-top:67px;">
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>

<!-- Sign in Form -->
            <form method="post" id="login" onsubmit="">
                <div class="alert alert-error"><?= $error ?></div>
                         
                        
                <h2 class="text-center">Sign-In to Your Account</h2>
<!--user email--> 
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email"
                    onBlur="checkRegistration()">
                	<span id="email-registration-status"></span>
                </div>

<!--password--> 
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>

<!-- submit button -->          
                <div class="form-group"></div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="SignIn">Sign-in</button>
                </div><a href="forget.php" class="already">Frogit password? clicl here.</a></br>
                 <a href="singup.php" class="already">Does not has Account. Sign up now by clicking here.</a></form>
        </div>
    </div>
    <?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>