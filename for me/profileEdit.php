<?php
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

$userInfo= include('businessLayer/getUserInfo.php');

//copy this line to all fileds as vaule 
//<?php if ($userInfo["User_Name"]!= null || $userInfo["User_Name"]!="" || !empty($userInfo["User_Name"]!=)) echo $userInfo["User_Name"];
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

<body style="margin-top:132px;">

    <nav class="navbar navbar-default navbar-fixed-top" style="padding:0px;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html"><strong>ePartner</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#">About Us</a></li>
                    <li role="presentation"><a href="#">Freelacer </a></li>
                    <li class="active" role="presentation"><a href="projet.html">Projects </a></li>
                    <li role="presentation"><a href="#">How to Work IT</a></li>
                    <li role="presentation"><a href="singin.html">Sing IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-1" style="margin-top:7px;">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-1" style="color:rgb(10,111,183);">Personal Information </a></h4></div>
            <div class="panel-collapse collapse item-1" role="tabpanel">
                <div class="panel-body"><span> </span>
                    <div class="container profile profile-view" id="profile">
                        <div class="row">
                            <div class="col-md-12 alert-col relative">
                                <div class="alert alert-info absolue center" role="alert">
                                    
                            </div>
                        </div>
<!-- Profile Form -->
                        <form method="post" id="userprofile" onsubmit="return updateProInfo();">
                            <div class="row profile-row">
                                <div class="col-md-4 relative">
                                    <div class="avatar">
                                        <div class="avatar-bg center"></div>
                                    </div>
                                    <input type="file" class="form-control" name="avatar-file">
                                </div>
                                
                                <div class="col-md-8">
                                    <h1>Profile </h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Name: </label>
                                                <input class="form-control" type="text" name="name" value="<?php echo $userInfo["User_Name"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                            </div>
                                            <input class="form-control" type="date" name="brithday" style="margin:0px;margin-top:-15px;margin-right:-1px;">
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
                                                <label class="control-label">Nationality </label>
                                                <input class="form-control" type="text" name="nationality" value="<?php echo $userInfo["Nationality"];?>" autocomplete="off" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Mobile No: </label>
                                                <input class="form-control" type="number_format" name="mobile" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">IBAN No:</label>
                                                <input class="form-control" type="text" name="iban" autocomplete="off" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address :</label>
                                        <input class="form-control" type="text" autocomplete="off" required="" name="address" autocomplete="off" required="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Country </label>
                                                <input class="form-control" type="text" name="country" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label"> City </label>
                                                <input class="form-control" type="text" name="city" autocomplete="off" required="">
                                            </div>
                                        </div>
                                
                                <div class="form-group">
                                    <label class="control-label">About Me: </label>
                                    <textarea class="form-control"></textarea>
                                </div>
								<div class="dropdown">
								    <label class="control-label">Intrest: </label>
                        			 <select class="form-control" name="Call Time" id="modal_calltime">
                          			   <option value="Morning" selected="">Web Desing</option>
                       			      <option value="Afternoon">App Desing</option>
                      			       <option value="Evening">Networking</option>
                    		    	</select>
                			    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 content-right">
                                            <span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
                                    <button class="btn btn-primary form-btn" name="save" id="save" type="submit">SAVE</button>
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-2" style="color:rgb(10,111,183);"><button class="btn btn-primary form-btn" type="button">next</button></a>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>