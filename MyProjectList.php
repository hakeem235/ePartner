<?php
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}

$userID=$userInfo[0]["User_ID"];
$prjs=$db->getPrjByUserID($userID);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project List</title>
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

<body style="margin-top:59px;">
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="container" id="info-container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-info" style="color:rgb(10,111,183);">My Projects</h2></div>
           <div class="row profile-row">
            	<?php include("businessLayer/userNav.html"); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 site-form">
                <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="display:none;">ID</th>
                                                <th>Projecr Name</th>
                                                <th>Category</th>
                                                <th>Post Date</th>
                                                <th>Budget (SAR)</th>
                                                <th>Period (Days)</th>
                                                <th>Proposals Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($prjs as $prj){
                                        	$proN=$db->getNumProByPrjID($prj['Prj_ID']);
    										echo "<tr>  
    													<td style="."display:none;".">".$prj['Prj_ID']."</td>
    													<td><a href='ProjectView.php?id=".$prj['Prj_ID']."' alt='edit'>".$prj['Prj_Name']."</a></td>
    													<td>".$prj['Prj_Category']."</td>
    													<td>".$prj['Prj_postDate']."</td>
    		  											<td>".$prj['Prj_Budget']."</td>
    		  											<td>".$prj['Prj_Period']."</td>
    		  											<td>".$proN."</td>
    		  											<td>".$prj['Prj_Stat']."</td>
    		  										</tr>";} ?>
                                        </tbody>
                                    </table>
            </div>
            <div class="clearfix">
            
            </div>
        </div>
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