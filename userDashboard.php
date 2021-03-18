<?php 
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}

// My project
$prjall=$db->getPrjNumByUserID($userInfo[0]["User_ID"]);
$prjnew=$db->getPrjByUserIDstat($userInfo[0]["User_ID"], 'New');
$prjprocess=$db->getPrjByUserIDstat($userInfo[0]["User_ID"], 'Process');
$prjclosed=$db->getPrjByUserIDstat($userInfo[0]["User_ID"], 'Closed');
//My Proposal
$proall=$db->getProNumByUserID($userInfo[0]["User_ID"]);
$pronew=$db->getProByUserIDstat($userInfo[0]["User_ID"], 'New');
$proaccept=$db->getProByUserIDstat($userInfo[0]["User_ID"], 'Accepted');
$proreject=$db->getProByUserIDstat($userInfo[0]["User_ID"], 'Rejected');
//Project for you
$prjyou=$db->getPrjByCategoryStat($userInfo[0]["Category"]);
//New Project
$newprjs=$db->getAllPrjs();
//
$proR=$db->getPrjWithNewPro($userInfo[0]["User_ID"]);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<!-- 		.container -->
<div class="container" id="info-container">

	<div class="col-md-12">
		<h1 class="text-center text-info" style="color:rgb(10,111,183);">Dashboard</h1>
	</div>

	<div> 
       		<?php include("businessLayer/userNav.html"); ?>
         
		<div class="col-lg-8">

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                My Project (<?php echo $prjall; ?>)
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-success">
                                    <a href="MyProjectList.php" class="alert-link">You have (<?php echo $prjnew; ?>) New projects</a>.
                                </div>
                                <div class="alert alert-warning">
                                 <a href="MyProjectList.php" class="alert-link">You have (<?php echo $prjprocess; ?>) Process projects</a>.
                                </div>
                                <div class="alert alert-danger">
                                  <a href="MyProjectList.php" class="alert-link">You have (<?php echo $prjclosed; ?>) Closed projects</a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
              		
              		<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                My Proposal (<?php echo $proall; ?>)
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-success">
                                    <a href="MyProposalList.php" class="alert-link">You have (<?php echo $pronew; ?>) New proposals</a>.
                                </div>
                                <div class="alert alert-warning">
                                 <a href="MyProposalList.php" class="alert-link">You have (<?php echo $proaccept; ?>) Accepted proposals</a>.
                                </div>
                                <div class="alert alert-danger">
                                  <a href="MyProposalList.php" class="alert-link">You have (<?php echo $proreject; ?>) Rejected proposals</a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
              
              		<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Messages ()
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-info">
                                    <a href="#" class="alert-link">Alert Link</a>.
                                </div>
                                <div class="alert alert-info">
                                 <a href="#" class="alert-link">Alert Link</a>.
                                </div>
                                <div class="alert alert-info">
                                  <a href="#" class="alert-link">Alert Link</a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
              
              		<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Proposals Received ()
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-info">
                                    <a href="#" class="alert-link"><?php echo $proR[0]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                 <a href="#" class="alert-link"><?php echo $proR[1]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                  <a href="#" class="alert-link"><?php echo $proR[2]["Prj_Name"]; ?></a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Project for You
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-info">
                                    <a href="AllProjectList.php?id=<?php echo $userInfo[0]["Category"]; ?>" class="alert-link"><?php echo $prjyou[0]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                 <a href="AllProjectList.php?id=<?php echo $userInfo[0]["Category"]; ?>" class="alert-link"><?php echo $prjyou[1]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                  <a href="AllProjectList.php?id=<?php echo $userInfo[0]["Category"]; ?>" class="alert-link"><?php echo $prjyou[2]["Prj_Name"]; ?></a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                New Project 
                            </div>
                           
                            <div class="panel-body">
                                <div class="alert alert-info">
                                    <a href="#" class="alert-link"><?php echo $newprjs[0]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                 <a href="#" class="alert-link"><?php echo $newprjs[1]["Prj_Name"]; ?></a>.
                                </div>
                                <div class="alert alert-info">
                                  <a href="#" class="alert-link"><?php echo $newprjs[2]["Prj_Name"]; ?></a>.
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
              
        </div>
	</div>
</div> 
<!-- 		.container -->
		
		
		
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