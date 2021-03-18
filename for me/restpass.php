<?php
session_start();
$error ='';
include_once('businessLayer/DB.class.php');
$db = new DB();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass= $_POST['password'];

if($_POST['usernameAvail']==true && $_POST['passwordCheck']==true && $_POST['passwordMatching']==true){
 // insret data to DB
		$accountCreated = $db->insertUser($email, $pass);
		if($accountCreated>=1){
		 $_SESSION['user_email'] = $email;
         header('location: profileEdit.php');
		}

		else{
		 echo "<span class='red'>wrooooong!!!</span>";
		}

 }else {
  echo "<span class='red'>check info</span>";
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Password</title>
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

	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


		<script>
			function checkAvailability() {
				jQuery.ajax({
				url: "businessLayer/check_availability.php",
				data:'email='+$("#email").val(),
				type: "POST",
				success:function(data){
					$("#email-availability-status").html(data);
				},
				error:function (){}
				});
			}

			function checkPasswordRq(){
				jQuery.ajax({
				url: "businessLayer/checkPasswordRq.php",
				data: 'pass='+$("#pass").val(),
				type: "POST",
				success:function(data){
					$("#password-check-status").html(data);
				},

				error:function (){}
				});
			}

			function checkPasswordMatch(){
				jQuery.ajax({
				url: "businessLayer/checkPasswordMatch.php",
				data: 'pass='+$("#pass").val()+'&confPass='+$("#confPass").val(),
				type: "POST",
				success:function(data){
					$("#conf-password-status").html(data);
				},

				error:function (){}
				});
			}


		</script>

</head>

<body>
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>

<!-- Registration Form -->

            <form method="post" id="registerForm" onsubmit="">
                <h2 class="text-center"><strong>Rest</strong> Password.</h2>


<!-- new password-->
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="pass"  placeholder="New Password"
                    onBlur="checkPasswordRq()">
                   <span id="password-check-status"></span>
                </div>
<!--conf new  password-->
                <div class="form-group">
                    <input class="form-control" type="password" name="password-repeat" id=confPass placeholder="Confirm New Password"
                    	onBlur="checkPasswordMatch()">
                    <span id="conf-password-status"></span>
                </div>

<!-- submit button -->

                <div class="form-group">
                	<div id="errMsg"></div>
                    <button class="btn btn-primary btn-block" name="submit" type="submit">Chang Password</button>
                </div></form>
        </div>
    </div>
    <?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>
