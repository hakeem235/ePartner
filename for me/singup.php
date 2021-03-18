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
			
			
			function checkPasswordMatch(){
				jQuery.ajax({
				url: "businessLayer/checkPasswordRqMatch.php",
				data: 'pass='+$("#pass").val()+'&confPass='+$("#confPass").val(),
				type: "POST",
				success:function(data){
					$("#password-check-status").html(data);
					$("#conf-password-status").html(data);
				},
				
				error:function (){}
				});
			}
		
			// function submitRegisteration(){
// 				
// 				jQuery.ajax({
// 				url: "businessLayer/regIn.php",
// 				data: $('#registerForm').serialize(),
// 				type: "POST",
// 				success:function(data){
// 				console.log(data);
// 					 if(data.indexOf("span") > -1){
// 						$("#errMsg").html(data);
//  						}else{
//  							location.href = "profileEdit.php";
// 						}
// 				},
// 				error:function (err){
// 				
// 				}
// 				});
// 				 return false;
// 			} // end submit Registration
			
	
		</script>
    
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="padding:0px;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html"><strong>ePartner</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">About Us</a></li>
                    <li role="presentation"><a href="#">Freelacer </a></li>
                    <li role="presentation"><a href="projet.html">Projects </a></li>
                    <li role="presentation"><a href="#">How to Work IT</a></li>
                    <li role="presentation"><a href="singin.html">Sing IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
    
<!-- Registration Form -->
 
            <form method="post" id="registerForm" onsubmit="">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
   
<!--user email--> 
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email"
                    	onBlur="checkAvailability()">
                    <span id="email-availability-status"></span>
                </div>
<!--password-->            
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="pass"  placeholder="Password"
                    >
                   <!-- <span id="password-check-status"></span> -->
                </div>
<!--conf  password-->  
                <div class="form-group">
                    <input class="form-control" type="password" name="password-repeat" id=confPass placeholder="Confirm Password"
                    	onBlur="checkPasswordMatch()">
                    <span id="conf-password-status"></span>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="control-label">
                            <input type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
<!-- submit button -->   
				  
                <div class="form-group">
                	<div id="errMsg"></div>
                    <button class="btn btn-primary btn-block" name="submit" type="submit">Sign Up</button>
                </div><a href="singin.html" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
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