<?php
include_once('businessLayer/sessionStart.php');

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
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
                        <form id="userprofile" method="post" enctype="multipart/form-data" onsubmit="return updateProInfo();">
                            <div class="row profile-row">
                            	<?php include("businessLayer/userNav.html"); ?>
                                
                                  
                                <div class="col-md-8">
                                    <h1>Profile </h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Name: </label>
                                                <input class="form-control" type="text" name="name" value="<?php echo $userInfo[0]["User_Name"];?>"  autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Nationality </label>
                                                <input class="form-control" type="text" name="nationality" value="<?php echo $userInfo[0]["Nationality"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Email: </label>
                                                <input class="form-control" type="email" name="email" value="<?php echo $email;?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                            </div>
                                            <input class="form-control" type="date" name="brithday" value="<?php echo $userInfo[0]["Brithday"];?>" style="margin:0px;margin-top:-15px;margin-right:-1px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Mobile No: </label>
                                                <input class="form-control" type="number_format" name="mobile" value="<?php echo $userInfo[0]["Mobile"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">IBAN No:</label>
                                                <input class="form-control" type="text" name="iban" value="<?php echo $userInfo[0]["IBAN"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address :</label>
                                        <input class="form-control" type="text" autocomplete="off" required="" name="address" value="<?php echo $userInfo[0]["Address"];?>" autocomplete="off" required="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Country </label>
                                                <input class="form-control" type="text" name="country" value="<?php echo $userInfo[0]["Country"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label"> City </label>
                                                <input class="form-control" type="text" name="city" value="<?php echo $userInfo[0]["City"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                
                                <div class="form-group">
                                    <label class="control-label">About Me: </label>
                                    <textarea class="form-control" type ="text" name="about" id="about" maxlength="300"><?php echo $userInfo[0]["About_Me"];?></textarea>
                                </div>
								<div class="dropdown">
								    <label class="control-label">Intrest: </label>
                        			 <?php include("businessLayer/category.html"); ?>
                			    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 content-right">
                                            <span aria-hidden="true"></span></button><span></span></div>
                                    <button class="btn btn-primary form-btn" type="submit" name="submit" id="submit">SAVE</button>

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