<?php

include_once('businessLayer/sessionStart.php');

	if(empty($_GET['id'])){
		$user = $db->getUserInfo($email); 
	}else{
		$user = $db->getUserInfoByID($_GET['id']);
		$prjs=$db->getPrjByUserID($_GET['id']);
	}




?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit1.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    
    <script> 
    			function updateProInfo(){
				
				jQuery.ajax({
				url: "businessLayer/updateProfileInfo.php",
				data: $('#userprofile').serialize(),
				type: "POST",
				success:function(data){
				console.log(data);
					 if(data.indexOf("span") < 0){
						$("#errMsg").html(data);
 						}else{
 							location.href = "profileView.php";
						}
				},
				error:function (err){
				
				}
				});
				 return false;
			} // end updateProInfo
			
			
    </script>

	
</head>

<body style="margin-top:32px;">

    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>

                    <div class="container profile profile-view" id="profile">
                        
<!-- Profile Form -->
                        <form method="post" id="userprofile" onsubmit="return updateProInfo();">
                            <div class="row profile-row">
                            		<?php include("businessLayer/userNav.html"); ?>
                                
                                <div class="col-md-8">
                                	<?php 
            								$pUser= $user[0]["User_ID"];
            								$sesUser= $userInfo[0]["User_ID"];
            								if ($pUser == $sesUser) {
            									echo "<h2 style='color:rgba(31,148,255,1);'>My Profile </h2>";
            								}else{
            									echo "<h2 style='color:rgba(31,148,255,1);'>".$user[0]["User_Name"]."'s Profile </h2>";
            								}?>
                                    <hr>
                                    <div>
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Name: </label>
                                                <p><?php echo $user[0]["User_Name"];?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Nationality: </label>
                                                <p><?php echo $user[0]["Nationality"];?></p>
                                            </div>
                                        </div>
                                    </div>
<!-- *********************** show for user owen profile ******************* -->
                                    <?php 
                                    	$pUser= $user[0]["User_ID"];
            							$sesUser= $userInfo[0]["User_ID"];
            							if ($pUser == $sesUser){
                                     echo "<div class='row'>
                                        <div class='col-md-6 col-sm-12'>
                                            <div class='form-group'>
                                                <label class='control-label'>Email: </label>
                                                <p>".$user[0]["User_Email"]."</p>
                                            </div>
                                        </div>
                                        <div class='col-md-6 col-sm-12'>
                                            <div class='form-group'>
                                                <label class='control-label'>Date of Birth: </label>
                                                <p>".$user[0]["Brithday"]."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6 col-sm-12'>
                                            <div class='form-group'>
                                                <label class='control-label'>Mobile: </label>
                                                <p>".$user[0]["Mobile"]."</p>
                                            </div>
                                        </div>
                                        <div class='col-md-6 col-sm-12'>
                                            <div class='form-group'>
                                                <label class='control-label'>IBAN: </label>
                                                <p>".$user[0]["IBAN"]."</p>
                                            </div>
                                        </div>
                                    </div>";}
                                    ?>            
<!-- *********************** show for user owen profile ******************* -->

                                    <div class="form-group ">
                                        <label class="control-label">Address:</label>
                                        <p><?php echo $user[0]["Address"];?></p>
                                    </div>
                                    
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label"> City: </label>
                                                <p><?php echo $user[0]["City"];?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                            	<label class="control-label">Country: </label>
                                                <p><?php echo $user[0]["Country"];?></p>
                                            </div>
                                        </div>
                                	</div>
                                
                                <div class="form-group">
                                    <label class="control-label">About Me: </label>
                                    <p><?php echo $user[0]["About_Me"];?></p>
                                </div>
                                
								<div class="form-group">
								    <label class="control-label">Intrest: </label>
								    <p><?php echo $user[0]["Category"];?></p>
                			    </div>
                                 </div>   
                                    <div class="row">
                                    	<div class="col-md-6 col-sm-12">
                                    	<?php 
            								$pUser= $user[0]["User_ID"];
            								$sesUser= $userInfo[0]["User_ID"];
            								if ($pUser == $sesUser) {
            									echo "<a href='profileEdit.php' class='btn btn-primary form-btn' role='button'>Edit</a>";
            								}else{
            								echo "<h3 style='color:rgba(31,148,255,1);'>".$user[0]["User_Name"]."'s Projcts: </h3>";
            								echo "<table class='table table-striped table-bordered table-hover'>
            								<thead>
                                            <tr>
                                                <th style='display:none;'>ID</th>
                                                <th>Projecr Name</th>
                                                <th>Category</th>
                                                <th>Post Date</th>
                                                <th>Budget (SAR)</th>
                                                <th>Period (Days)</th>
                                                <th>Proposals Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                                         foreach ($prjs as $prj){
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
    		  										</tr>";}
                                        echo "</tbody>
                                    </table>"; 
            								
            								}
            								?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
        <?php include("businessLayer/footer.html");?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>