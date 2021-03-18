<?php
include_once('businessLayer/sessionStart.php');

// $_GET['id'] is project ID. $_GET['pro'] is proposal ID
$proV=$db->getProByID($_GET['pro']);

//check proposal's user = session user
if($proV[0]["User_ID"] == $userInfo[0]["User_ID"]){
	// check proposal status accepted
	if($proV[0]["ProStat"] == 'Accepted'){
		//check prject ID
		if($proV[0]["Project_ID"] == $_GET['id']){
			if(isset($_POST['submit'])){

  				if ($_FILES["file"]["error"] > 0){
     				echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     				echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
  				 }else{
    			 	move_uploaded_file($_FILES["file"]["tmp_name"],"outputs/" . $_FILES["file"]["name"]);
     			 	$path="outputs/".$_FILES["file"]["name"];
    			 	$uploaded=$db->uploadPrjFile($_GET['id'], $path); //update Prj_file with file path and project status = Finished
				 	header('location: ProjectView.php?id='.$_GET['id']);
				 }
			}
			
		}else {header('location: index.php');}
	}else{header('location: index.php');}
}else {header('location: index.php');}    


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Avatar</title>
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
   
<div class="container">     
	<form enctype="multipart/form-data"  method="post" name="changer">
	<div class="row profile-row center">
		<div class="col-md-8 relative ">
			<div class="avatar">
    			<div class="center"></div>
			</div>
			
	<hr>
	
			<input class="center" name="file" accept="application/zip,application/pdf" type="file">
			<button class="btn btn-primary form-btn" type="submit" name="submit" id="submit" style="margin-top:16px;">Upload</button>
		</div>
	</div>
	</form>
</div>	
       
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>