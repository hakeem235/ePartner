<?php
include_once('businessLayer/sessionStart.php');

$proV=$db->getProByID($_GET['id']);
$prj=$db->getPrjByID($proV[0]["Project_ID"]);
$user=$db->getUserInfoByID($proV[0]["User_ID"]);
$prjUser=$db->getUserInfoByID($prj[0]["User_ID"]);

if($userInfo[0]["User_ID"] == $user[0]["User_ID"] || $userInfo[0]["User_ID"] == $prjUser[0]["User_ID"]){

	if(isset($_POST['accept'])){
		//change proposal status to Accepted 
		$st=$db->updateProStat($_GET['id'], 'Accepted');

		//change All other proposal status to Rejected
		$ast=$db->updateAllProStat($proV[0]["Project_ID"]);
	
		//change prject status to Process 
		$pst=$db->updatePrjStat($proV[0]["Project_ID"], 'Process');

		header('location: payment.php?id='.$proV[0]["Project_ID"].'&pro='.$_GET['id']);
	}

	if(isset($_POST['reject'])){
		//change proposal status to Rejected 
		$st=$db->updateProStat($_GET['id'], 'Rejected');
		header('location: ProjectView.php?id='.$proV[0]["Project_ID"]);
	}
}else {header('location: index.php');}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal View</title>
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
                <h2 class="text-center text-info" style="color:rgb(10,111,183);">Proposal View </h2></div>
                <form id="my-form" method="post">
                    <div class="form-group"><label class="control-label">Project Name (Owner):</label><p><?php echo "<a href='ProjectView.php?id=".$proV[0]["Project_ID"]."'>".$prj[0]["Prj_Name"]."</a>  (<a href='profileView.php?id=".$prj[0]["User_ID"]."'>".$prjUser[0]["User_Name"]."</a>)";?></p></div>
                    <div class="form-group"><label class="control-label">From Freelancer:</label><p><?php echo "<a href='profileView.php?id=".$user[0]["User_ID"]."' alt='edit'>".$user[0]["User_Name"]."</a>" ?></p></div>
                    <div class="form-group"><label class="control-label">Amount:</label><p>SAR <?php echo $proV[0]["ProAmount"];?></p></div>
                    <div class="form-group"><label class="control-label">Period:</label><p><?php echo $proV[0]["ProPeriod"];?> Days</p></div>
                    <div class="form-group"><label class="control-label">Date:</label><p><?php echo $proV[0]["ProDate"];?></p></div>
                    <div class="form-group"><label class="control-label">Status:</label><p><?php echo $proV[0]["ProStat"];?></p></div>
					<div class="form-group"><label class="control-label">Enquiry:</label><p><?php echo $proV[0]["ProEnquiry"];?></p></div>
				
				<?php 
            		$pUser= $user[0]["User_ID"];
            		$sesUser= $userInfo[0]["User_ID"];
            		if ($pUser == $sesUser) {
            				if ($proV[0]["ProStat"]== 'Accepted'){
            					echo nl2br("<hr><h4 style='color:#339933;'>Congratulations, Your proposal accepted.</4>
            								\n <h4 style='color:#0a6fb7;'>Please completed on time and attached the output. If you uploaded the file, your file's link will appear below. Also, you can update the file by upload it again.</h4>
            								\n<h4 style='color:#0a6fb7;'>Your file link: <a href='".$prj[0]["Prj_File"]."'>".$prj[0]["Prj_File"]."</a></h4>
            								\n <a href='uploadFile.php?id=".$proV[0]["Project_ID"]."&pro=".$_GET['id']."' class='btn btn-primary form-btn' role='button'>Upload File</a>");
            				}else{
            						if ($proV[0]["ProStat"]== 'Rejected'){
            								echo "<hr><h4 style='color:#b32d00;'>Sorry, Yuor propsal rejected</h4>";
            						}else{
            								echo "<hr><a href='editProposal.php?id=".$proV[0]["ProID"]."' class='btn btn-primary form-btn' role='button'>Edit</a>";
            						}
            				}
            		}else{
            			if ($prj[0]["Prj_Stat"] != 'New'){
            				if ($proV[0]["ProStat"]== 'Accepted'){
            					echo nl2br("<hr><h4 style='color:#0a6fb7;'>Once the freelance finished, he\she will upload the project file. 
            								\n If the file uploaded, file's link will appear below. Also, freelancer can update the file by upload it again until you confirm delivery in project page.
            								\n File link: <a href='".$prj[0]["Prj_File"]."'>".$prj[0]["Prj_File"]."</a></h4>
            								\n <a href='ProjectView.php?id=".$proV[0]["Project_ID"]."' class='btn btn-primary form-btn' role='button'>Go to Project page</a>");
            				}else{
            					echo nl2br ("<hr><h4 style='color:#b32d00;'>You rejected this Propsal.</h4>
            								<a href='ProjectView.php?id=".$proV[0]["Project_ID"]."' class='btn btn-primary form-btn' role='button'>Go to Project page</a>");
            				}
            				
            			}else{
            				echo "<hr><button class='btn btn-primary form-btn' type='submit' name='accept' id='accept' style='margin-top:16px;' title='Accept this Proposal and REJECT other proposal for same prject'>Accept</button>
            				  <button class='btn btn-primary form-btn' type='submit' name='reject' id='reject' style='margin-top:16px;background-color: #b32d00;border-color:#b32d00;' title='REJECT this Proposal'>Reject</button>";
            			}
            		}
            		?>
				
                </form>
            <div> 
				
            </div>
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