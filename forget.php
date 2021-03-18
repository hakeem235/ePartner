<?php 
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();
// $email = $_SESSION['user_email'];
// if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
// $userInfo= $db->getUserInfo($email);}
//////////////////////////////////////

if (isset($_POST["submit"])) {
		
		$email = $_POST["email"];
		
		$isthere = $db->checkUseremail($email);
		
	if ($isthere > 0){
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url = "http://tmtech.sa/epartner/resetPassword.php?token=$str&email=$email";

			//mail($email, "Reset password", "To reset your password, please visit this: $url", "From: talhazmi@tmtech.sa \r\n");

			$db->updatetoken($email, $str);

			$msg = "A rest link sent your email.";
		
	}else {
		$msg = "We're sorry.This email does not Registered.";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form1.css">
    <link rel="stylesheet" href="assets/css/Filterable-Gallery.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header1.css">
    <link rel="stylesheet" href="assets/css/header2.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit1.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>

<body style="margin-top:67px;">
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
   
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="forget.php" method="post">
                <h2 class="text-center">PLease Type Your Email</h2>
                <div><?php echo $msg; ?></div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" name="submit" type="submit">Send</button>
                </div>
            </form>
           
        </div>         
    </div>
    
    
    
	<?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
</body>

</html>