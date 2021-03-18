<?php
include_once('businessLayer/sessionStart.php');

$prjID= $_GET['id'];
$prjV=$db->getPrjByID($prjID);

$userID=$prjV[0]["User_ID"];
$Owner=$db->getUserInfoByID($userID);
$pros=$db->getProByPrjID($_GET['id']);
$userPros=$db->getProByUserPrj($userInfo[0]["User_ID"], $prjID);

if(isset($_POST['confirm'])){
//change project state to Closed 
$confirmed=$db->updatePrjStat($_GET['id'], 'Closed');

header('location: ProjectView.php?id='.$_GET['id']);
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project View</title>
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
           <div class="row profile-row">
        		<?php include("businessLayer/userNav.html"); ?>
            <div class="col-md-8 col-sm-6 col-xs-12 site-form">
            <div class="col-md-12">
                <h2 class="text-center text-info" style="color:rgb(10,111,183);">Project View </h2></div>
                <form id="my-form" method="post">
                    <div class="form-group"><label class="control-label">Project Name:</label><p><?php echo $prjV[0]["Prj_Name"];?></p></div>
                    <div class="form-group"><label class="control-label">Owner Name:</label><p><?php echo "<a href='profileView.php?id=".$prjV[0]["User_ID"]."' alt='edit'>".$Owner[0]["User_Name"]."</a>" ?></p></div>
                    <div class="form-group"><label class="control-label">Category:</label><p><?php echo $prjV[0]["Prj_Category"];?></p></div>
                    <div class="form-group"><label class="control-label">Description:</label><p><?php echo $prjV[0]["Prj_Description"];?></p></div>
                    <div class="form-group"><label class="control-label">Budget:</label><p>SAR <?php echo $prjV[0]["Prj_Budget"];?></p></div>
                    <div class="form-group"><label class="control-label">Period:</label><p><?php echo $prjV[0]["Prj_Period"];?> Days</p></div>
                    <div class="form-group"><label class="control-label">Status:</label><p><?php echo $prjV[0]["Prj_Stat"];?></p></div>

                
            	<div>
            	<?php 
            	$prjUser= $prjV[0]["User_ID"];
            	$sesUser= $userInfo[0]["User_ID"];
            	If ($prjV[0]["Prj_Stat"] == 'Closed'){
            	echo "<h3 style='color:red;'>Project is Closed</h3>";
            	}else{
            	if ($prjUser == $sesUser) {
            			if (empty($pros)){
            			echo nl2br ("<a href='editProject.php?id=".$prjV[0]["Prj_ID"]."'style='margin:5px;' class='btn btn-primary form-btn' role='button'>Edit</a> \n <h3>There are no proposals.</h3>");
            			}else{
            					if ($prjV[0]["Prj_Stat"] != 'New'){
            							echo nl2br ("<hr><h4 style='color:#b32d00;'>If you recived all outputs of your project, Please confirm it.</h4> \n <button class='btn btn-primary form-btn' type='submit' name='confirm' id='confirm' style='margin:0px;background-color: #b32d00;border-color:#b32d00;'>Confirm Delivery</button> \n <hr> <h5>You received a proposal:</h5>");
            							include("businessLayer/ProByPrj.html");
            					}else{
            							echo nl2br ("<a href='editProject.php?id=".$prjV[0]["Prj_ID"]."'style='margin:5px;' class='btn btn-primary form-btn' role='button'>Edit</a> \n You received a proposal:");
            							include("businessLayer/ProByPrj.html");
            					}
            	}
            	}else{
            		if ($prjV[0]["Prj_Stat"] == 'Process'){
            		echo "<h3 style='color:red;'>Project is under Process. Yuo Can not Submit Proposal</h3>";
            		}else{
            				if(empty($userPros)){
            					echo "<a href='postProposal.php?id=".$prjV[0]["Prj_ID"]." alt='edit' class='btn btn-primary form-btn' role='button'>Submit Proposal</a>";
            				}else{
            					echo "<h5>Your proposal for this project:</h5>";
            					include("businessLayer/ProByUser.html");
            			}
            		}
            			
            	}
            	} 
            	?>
            	</div>
            </form>
            </div>
            <div class="clearfix"></div>
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