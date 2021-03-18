<?php
include_once('businessLayer/sessionStart.php');

$userID=$userInfo[0]["User_ID"];
$pros=$db->getProByUserID($userID);

//$prj=$db->getPrjByID($pro['Project_ID']);$prj[0]["Prj_Name"];

//<a href='ProjectView.php?id=".$prj['Prj_ID']."' alt='edit'>".$prj['Prj_Name']."</a>

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Proposals List</title>
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
                <h2 class="text-center text-info" style="color:rgb(10,111,183);">My Proposals</h2></div>
           <div class="row profile-row">
            	<?php include("businessLayer/userNav.html"); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 site-form">
                <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="display:none;">ID</th>
                                                <th>Amount (SAR)</th>
                                                <th>Period (Days)</th>
                                                <th>Post Date</th>
                                                <th>Project Name</th>
                                                <th>Owner</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($pros as $pro){
                                        	$prj=$db->getPrjByID($pro['Project_ID']);
                                        	$prjOnwer=$db->getUserInfoByID($prj[0]["User_ID"]);
    										echo "<tr>  
    													<td style="."display:none;".">".$pro['ProID']."</td>
    													<td>".$pro['ProAmount']."</td>
    													<td>".$pro['ProPeriod']."</td>
    													<td>".$pro['ProDate']."</td>
    		  											<td><a href='ProjectView.php?id=".$pro['Project_ID']."'>".$prj[0]["Prj_Name"]."</a></td>
    		  											<td><a href='profileView.php?id=".$prj[0]["User_ID"]."'>".$prjOnwer[0]["User_Name"]."</a></td>
    		  											<td>".$pro['ProStat']."</td>
    		  											<td><a href='ProposalView.php?id=".$pro['ProID']."' alt='edit'>Review</a></td>
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