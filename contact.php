<?php 
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us1.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form1.css">
    <link rel="stylesheet" href="assets/css/Filterable-Gallery.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header1.css">
    <link rel="stylesheet" href="assets/css/header2.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display1.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card-1.css">
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
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
</head>

<body>
    <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
    <div class="container">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Contact Information</h4></div>
                    <div class="modal-body">
                        <form action="javascript:void();" method="get" id="contactForm">
                            <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com">
                            <input class="form-control" type="hidden" name="subject" value="My Contact Form">
                            <input class="form-control" type="hidden" name="to" value="email@mywebsite.com">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="modal-successfail"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="modal-message">
                                    <fieldset>
                                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                    </fieldset>
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="modal_from_name">Name</label>
                                        <input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="modal_from_name" tabindex="-1">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="modal_from_email">Email</label>
                                        <input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="modal_from_email">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label" for="modal_from_phone">Phone</label>
                                                <input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="modal_from_phone">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="modal_calltime">Best Time to Call</label>
                                                <select class="form-control" name="Call Time" id="modal_calltime">
                                                    <option value="Morning" selected="">Morning</option>
                                                    <option value="Afternoon">Afternoon</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="modal_comments">Comments</label>
                                        <textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="modal_comments"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button>
                                    </div>
                                    <hr class="visible-xs-block visible-sm-block">
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="static-map">
                                                <a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-responsive" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"
                                                    alt="Google Map of Washington Monument"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                            </fieldset>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@address.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr class="visible-xs-block">
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                                            </fieldset>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr.</span></div>
                                            <div><span>Daytona Beach, FL 81500</span></div>
                                            <div>
                                                <abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="javascript:void();" method="get" id="contactForm">
            <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com">
            <input class="form-control" type="hidden" name="subject" value="My Contact Form">
            <input class="form-control" type="hidden" name="to" value="email@mywebsite.com">
            <div class="row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="row" style="padding-top:90px;">
                <div class="col-md-6" id="message">
                    <fieldset>
                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                    </fieldset>
                    <div class="form-group has-feedback">
                        <label class="control-label" for="from_name">Name</label>
                        <input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="from_name" tabindex="-1">
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label" for="from_email">Email</label>
                        <input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="from_email">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="from_phone">Phone</label>
                                <input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="from_phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="calltime">Best Time to Call</label>
                                <select class="form-control" name="Call Time" id="calltime">
                                    <option value="Morning" selected="">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="comments">Comments</label>
                        <textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="comments"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button>
                    </div>
                    <hr class="visible-xs-block visible-sm-block">
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="static-map">
                                <a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-responsive" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"
                                    alt="Google Map of Washington Monument"></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                            </fieldset>
                            <div><span><strong>Thamer Alhazmi</strong></span></div>
                            <div><span>talhazmi@outlook.com</span></div>
                            <div><span>www.seu.edu.sa</span></div>
                            <hr class="visible-xs-block">
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                            </fieldset>
                            <div><span><strong>SEU</strong></span></div>
                            <div><span>Jeddah</span></div>
                            <div><span>Saudi Arabia</span></div>
                            <div><span>+966 55 555 5555</span></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php include("businessLayer/footer.html");?>
	</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/Filterable-Gallery.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark1.js"></script>
    <script src="assets/js/Profile-Edit.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
</body>

</html>