<?php
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){
$userInfo= $db->getUserInfo($email);}

if(empty($_GET['id'])){
$prjs=$db->getAllPrjs();
}else{
$category = $_GET['id'];
$prjs=$db->getPrjsBy($category);
}




?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projects</title>
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
<link rel="stylesheet" href="assets/css/Profile-Card.css">
<link rel="stylesheet" href="assets/css/Pretty-Footer.css">
<link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
<link rel="stylesheet" href="assets/css/Google-Style-Login.css">
<link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
<link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
<link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
<link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
<link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/Team-Clean.css">
<link rel="stylesheet" href="assets/css/Team-Grid.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="margin-top:32px;">

<script src="https://bahr.910ths.sa/assets/application-3c26f01cb3c7c0ba7c1304ade0cb3de6b2de8fc4452d6de418b8ef6a85fa5445.js" data-turbolinks-track="reload" defer="defer"></script>
<script defer type="text/javascript">
saudiArabiaId = "152";
minPriceVal = " 0 SR";
minDaysVal = " 0 %d-%m-%Y";
minSummaryLengthVal = " 0 حرف علي الأقل";
CURRENT_LOCALE = "en";

</script>
 <?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email']))
   {include("businessLayer/navBarWS.html");}
   else
   {include("businessLayer/navBarNoS.html");}?>
   

<div class="content">
<div class="container">
<div id="flash_messages">



</div>
<div id="project-listing">
<form id="projects_sort_filter" class="L-filter-on-change" data-turboboost="true" action="/en/projects" accept-charset="UTF-8" data-remote="true" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
<input type="hidden" name="sort" id="sort" value="projects.created_at DESC" />
<div class="row">

<div class="col-md-3 col-sm-4">
<div class="box side clearfix">
<a data-toggle="collapse" href="#collapse_filters" class="visible-xs collapse-btn collapsed" aria-expanded="false">
Search project<i class="glyphicon"></i>
</a>
<div class="collapse in" id="collapse_filters">

<div class="filter">
<h3 class="hidden-xs">Search project</h3>
<div class="search input-group">
<input type="text" name="search" id="search" class="form-control" placeholder="name or description" />
<span class="input-group-btn">
<button type="submit" id="filter_projects" class="btn btn-primary">
<i class="fa fa-search"></i>
</button>              </span>
</div>
<!-- /input-group -->
</div>


<div class="filter">
<h3>Categories</h3>
<div class="scroll-cat">
<div class="checkbox parent">
<label id="L_category_10">
<input type="checkbox" name="categories[]" id="categories_10" value="10" class="large " />
accounting and consulting
</label>
</div>
<div class="checkbox child">
<label id="L_category_47">
<input type="checkbox" name="categories[]" id="categories_47" value="47" class="large pid_10" />
Accounting Operations
</label>
</div>
<div class="checkbox child">
<label id="L_category_50">
<input type="checkbox" name="categories[]" id="categories_50" value="50" class="large pid_10" />
Accounting and Consulting - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_48">
<input type="checkbox" name="categories[]" id="categories_48" value="48" class="large pid_10" />
Financial Planing
</label>
</div>
<div class="checkbox child">
<label id="L_category_49">
<input type="checkbox" name="categories[]" id="categories_49" value="49" class="large pid_10" />
Management Consulting
</label>
</div>
<div class="checkbox parent">
<label id="L_category_3">
<input type="checkbox" name="categories[]" id="categories_3" value="3" class="large " />
Administrative Support Operations
</label>
</div>
<div class="checkbox child">
<label id="L_category_46">
<input type="checkbox" name="categories[]" id="categories_46" value="46" class="large pid_3" />
Administrative Support - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_43">
<input type="checkbox" name="categories[]" id="categories_43" value="43" class="large pid_3" />
Data Entry
</label>
</div>
<div class="checkbox child">
<label id="L_category_44">
<input type="checkbox" name="categories[]" id="categories_44" value="44" class="large pid_3" />
Project Management
</label>
</div>
<div class="checkbox child">
<label id="L_category_45">
<input type="checkbox" name="categories[]" id="categories_45" value="45" class="large pid_3" />
Web Searching
</label>
</div>
<div class="checkbox parent">
<label id="L_category_6">
<input type="checkbox" name="categories[]" id="categories_6" value="6" class="large " />
Customers Service
</label>
</div>
<div class="checkbox child">
<label id="L_category_40">
<input type="checkbox" name="categories[]" id="categories_40" value="40" class="large pid_6" />
Customer Service
</label>
</div>
<div class="checkbox child">
<label id="L_category_42">
<input type="checkbox" name="categories[]" id="categories_42" value="42" class="large pid_6" />
Customer Service - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_41">
<input type="checkbox" name="categories[]" id="categories_41" value="41" class="large pid_6" />
Technical Support
</label>
</div>
<div class="checkbox parent">
<label id="L_category_8">
<input type="checkbox" name="categories[]" id="categories_8" value="8" class="large " />
Data Analysis
</label>
</div>
<div class="checkbox child">
<label id="L_category_32">
<input type="checkbox" name="categories[]" id="categories_32" value="32" class="large pid_8" />
Data Analysis - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_30">
<input type="checkbox" name="categories[]" id="categories_30" value="30" class="large pid_8" />
Data Analysis and Presentation
</label>
</div>
<div class="checkbox child">
<label id="L_category_31">
<input type="checkbox" name="categories[]" id="categories_31" value="31" class="large pid_8" />
Data extraction
</label>
</div>
<div class="checkbox parent">
<label id="L_category_2">
<input type="checkbox" name="categories[]" id="categories_2" value="2" class="large " />
Design and Innovation
</label>
</div>
<div class="checkbox child">
<label id="L_category_19">
<input type="checkbox" name="categories[]" id="categories_19" value="19" class="large pid_2" />
Brand &amp; Logo Design
</label>
</div>
<div class="checkbox child">
<label id="L_category_56">
<input type="checkbox" name="categories[]" id="categories_56" value="56" class="large pid_2" />
Design and Innovation - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_18">
<input type="checkbox" name="categories[]" id="categories_18" value="18" class="large pid_2" />
Graphic Design
</label>
</div>
<div class="checkbox child">
<label id="L_category_20">
<input type="checkbox" name="categories[]" id="categories_20" value="20" class="large pid_2" />
PowerPoint Presentation
</label>
</div>
<div class="checkbox parent">
<label id="L_category_15">
<input type="checkbox" name="categories[]" id="categories_15" value="15" class="large " />
Digital Marketing
</label>
</div>
<div class="checkbox child">
<label id="L_category_36">
<input type="checkbox" name="categories[]" id="categories_36" value="36" class="large pid_15" />
Digital Marketing - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_35">
<input type="checkbox" name="categories[]" id="categories_35" value="35" class="large pid_15" />
Marketing Consultation
</label>
</div>
<div class="checkbox child">
<label id="L_category_34">
<input type="checkbox" name="categories[]" id="categories_34" value="34" class="large pid_15" />
SEO Marketing
</label>
</div>
<div class="checkbox child">
<label id="L_category_33">
<input type="checkbox" name="categories[]" id="categories_33" value="33" class="large pid_15" />
Social Meida
</label>
</div>
<div class="checkbox parent">
<label id="L_category_11">
<input type="checkbox" name="categories[]" id="categories_11" value="11" class="large " />
engineering and construction
</label>
</div>
<div class="checkbox parent">
<label id="L_category_4">
<input type="checkbox" name="categories[]" id="categories_4" value="4" class="large " />
IT &amp; Networking
</label>
</div>
<div class="checkbox child">
<label id="L_category_60">
<input type="checkbox" name="categories[]" id="categories_60" value="60" class="large pid_4" />
IT &amp; Networking - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_51">
<input type="checkbox" name="categories[]" id="categories_51" value="51" class="large pid_4" />
Network Administration
</label>
</div>
<div class="checkbox child">
<label id="L_category_52">
<input type="checkbox" name="categories[]" id="categories_52" value="52" class="large pid_4" />
System Administration
</label>
</div>
<div class="checkbox parent">
<label id="L_category_12">
<input type="checkbox" name="categories[]" id="categories_12" value="12" class="large " />
Law
</label>
</div>
<div class="checkbox child">
<label id="L_category_38">
<input type="checkbox" name="categories[]" id="categories_38" value="38" class="large pid_12" />
Companies Laws
</label>
</div>
<div class="checkbox child">
<label id="L_category_37">
<input type="checkbox" name="categories[]" id="categories_37" value="37" class="large pid_12" />
Contracting Laws
</label>
</div>
<div class="checkbox child">
<label id="L_category_39">
<input type="checkbox" name="categories[]" id="categories_39" value="39" class="large pid_12" />
Law - Others
</label>
</div>
<div class="checkbox parent">
<label id="L_category_7">
<input type="checkbox" name="categories[]" id="categories_7" value="7" class="large " />
Sales and Marketing
</label>
</div>
<div class="checkbox child">
<label id="L_category_53">
<input type="checkbox" name="categories[]" id="categories_53" value="53" class="large pid_7" />
Sales
</label>
</div>
<div class="checkbox child">
<label id="L_category_55">
<input type="checkbox" name="categories[]" id="categories_55" value="55" class="large pid_7" />
Sales and Marketing - Other
</label>
</div>
<div class="checkbox parent">
<label id="L_category_1">
<input type="checkbox" name="categories[]" id="categories_1" value="1" class="large " />
Software Development
</label>
</div>
<div class="checkbox child">
<label id="L_category_17">
<input type="checkbox" name="categories[]" id="categories_17" value="17" class="large pid_1" />
Mobile Application Development
</label>
</div>
<div class="checkbox child">
<label id="L_category_59">
<input type="checkbox" name="categories[]" id="categories_59" value="59" class="large pid_1" />
Software Development - Other
</label>
</div>
<div class="checkbox child">
<label id="L_category_16">
<input type="checkbox" name="categories[]" id="categories_16" value="16" class="large pid_1" />
Web Development
</label>
</div>
<div class="checkbox parent">
<label id="L_category_9">
<input type="checkbox" name="categories[]" id="categories_9" value="9" class="large " />
Translation
</label>
</div>
<div class="checkbox child">
<label id="L_category_27">
<input type="checkbox" name="categories[]" id="categories_27" value="27" class="large pid_9" />
General Translation
</label>
</div>
<div class="checkbox child">
<label id="L_category_28">
<input type="checkbox" name="categories[]" id="categories_28" value="28" class="large pid_9" />
Legal Translation
</label>
</div>
<div class="checkbox child">
<label id="L_category_29">
<input type="checkbox" name="categories[]" id="categories_29" value="29" class="large pid_9" />
Technical Translation
</label>
</div>
<div class="checkbox child">
<label id="L_category_54">
<input type="checkbox" name="categories[]" id="categories_54" value="54" class="large pid_9" />
Translation - Others
</label>
</div>
<div class="checkbox parent">
<label id="L_category_14">
<input type="checkbox" name="categories[]" id="categories_14" value="14" class="large " />
Video &amp; Photography
</label>
</div>
<div class="checkbox child">
<label id="L_category_22">
<input type="checkbox" name="categories[]" id="categories_22" value="22" class="large pid_14" />
Animation
</label>
</div>
<div class="checkbox child">
<label id="L_category_61">
<input type="checkbox" name="categories[]" id="categories_61" value="61" class="large pid_14" />
Audio Production
</label>
</div>
<div class="checkbox child">
<label id="L_category_21">
<input type="checkbox" name="categories[]" id="categories_21" value="21" class="large pid_14" />
Motion Graphics
</label>
</div>
<div class="checkbox child">
<label id="L_category_23">
<input type="checkbox" name="categories[]" id="categories_23" value="23" class="large pid_14" />
Photography
</label>
</div>
<div class="checkbox child">
<label id="L_category_57">
<input type="checkbox" name="categories[]" id="categories_57" value="57" class="large pid_14" />
Video &amp; Photography - Other
</label>
</div>
<div class="checkbox parent">
<label id="L_category_5">
<input type="checkbox" name="categories[]" id="categories_5" value="5" class="large " />
Writing and Editing
</label>
</div>
<div class="checkbox child">
<label id="L_category_25">
<input type="checkbox" name="categories[]" id="categories_25" value="25" class="large pid_5" />
Articles &amp; Blogs
</label>
</div>
<div class="checkbox child">
<label id="L_category_24">
<input type="checkbox" name="categories[]" id="categories_24" value="24" class="large pid_5" />
Creative Writing
</label>
</div>
<div class="checkbox child">
<label id="L_category_26">
<input type="checkbox" name="categories[]" id="categories_26" value="26" class="large pid_5" />
Technical Writing
</label>
</div>
<div class="checkbox child">
<label id="L_category_58">
<input type="checkbox" name="categories[]" id="categories_58" value="58" class="large pid_5" />
Writing and Editing - Other
</label>
</div>
</div>
</div>

<div class="filter">
<h3>Skills</h3>
<select name="skills[]" id="project_skills_filter" multiple="multiple" placeholder="Select Skill" class="form-control" short="Please enter at least two characters" notfound="No Matches Found" search="Searching">
<option value="119">2D Animation</option>
<option value="120">2D Design</option>
<option value="121">3D Animation</option>
<option value="122">3D Design</option>
<option value="160">3D flash</option>
<option value="123">3D Modeling</option>
<option value="124">3D Printing</option>
<option value="125">3D Rendering</option>
<option value="126">3D Rigging</option>
<option value="127">3D Scanning</option>
<option value="129">3ds Max</option>
<option value="128">3D Systems</option>
<option value="192">Ableton</option>
<option value="344">A/B testing</option>
<option value="281">Academic Writing</option>
<option value="387">Accounting</option>
<option value="386">Account Management</option>
<option value="388">Account Mate</option>
<option value="389">Accounts Payable</option>
<option value="390">Accounts Receivable Management</option>
<option value="668">Action script</option>
<option value="237">Active Directory</option>
<option value="206">Administrative Support</option>
<option value="692">Adobe Cold Fusion</option>
<option value="139">Adobe Dreamweaver</option>
<option value="140">Adobe Flash</option>
<option value="141">Adobe InDesign</option>
<option value="142">Adobe LiveCycle Designer</option>
<option value="620">Adobe Photoshop</option>
<option value="323">Advertising</option>
<option value="143">After Effects</option>
<option value="178">after production</option>
<option value="625">Agile Development</option>
<option value="670">AJAX</option>
<option value="132">Album design</option>
<option value="229">Amazon EC2</option>
<option value="667">Amazon web service</option>
<option value="230">Amazon Web Services</option>
<option value="358">Analytics</option>
<option value="612">Android App Development</option>
<option value="117">Animation</option>
<option value="241">Apache</option>
<option value="227">Apache administration</option>
<option value="242">Apache Solr</option>
<option value="693">Appcelerator Titanium</option>
<option value="144">Apple Compressor</option>
<option value="145">Apple Logic Pro</option>
<option value="146">Apple Motion</option>
<option value="643">Apple Safari</option>
<option value="311">arabic grammer</option>
<option value="385">Arabic to English translation</option>
<option value="433">Architectural Rendering Engineering Drawing</option>
<option value="420">Architecture</option>
<option value="153">Architecture design</option>
<option value="147">art</option>
<option value="904">Articels</option>
<option value="287">Article writing</option>
<option value="662">ASP</option>
<option value="663">ASP.NET</option>
<option value="251">ASSEMBLY language</option>
<option value="664">Atlassian Confluence</option>
<option value="665">Atlassian GreenHopper</option>
<option value="666">Atlassian JIRA</option>
<option value="194">Audio Design</option>
<option value="195">Audio Editing</option>
<option value="196">Audio Engineering</option>
<option value="197">Audio Mastering</option>
<option value="198">Audio Mixing</option>
<option value="200">Audio Post editing</option>
<option value="199">Audio Post Production</option>
<option value="148">audio production</option>
<option value="201">Audio Restoration</option>
<option value="293">Authoring</option>
<option value="190">Auto cad</option>
<option value="429">AutoCAD</option>
<option value="438">Autodesk 3D Studio Max</option>
<option value="149">Autodesk Inventor</option>
<option value="150">Autodesk Revit</option>
<option value="252">Azure networking</option>
<option value="331">B2B marketing</option>
<option value="624">Balsamiq</option>
<option value="413">Bank Reconciliation</option>
<option value="332">Banner ads</option>
<option value="130">Banner ads design</option>
<option value="179">Before production</option>
<option value="439">Benefit law</option>
<option value="633">BigCommerce</option>
<option value="361">Big Data</option>
<option value="333">Bing ads</option>
<option value="290">Biography writing</option>
<option value="271">Biztalk</option>
<option value="906">Blog</option>
<option value="151">Blog design</option>
<option value="283">Blog witting</option>
<option value="458">Blog Writing</option>
<option value="698">BMC Remedy</option>
<option value="131">Book cover design</option>
<option value="410">Bookkeeping</option>
<option value="310">Book writing</option>
<option value="669">Bootstrap</option>
<option value="134">Brand management</option>
<option value="133">Brochure design</option>
<option value="908">BRS</option>
<option value="395">Budgeting and forecasting</option>
<option value="330">Bulk marketing</option>
<option value="396">Business analysis</option>
<option value="154">Business card</option>
<option value="405">Business coaching</option>
<option value="400">Business continuity planning</option>
<option value="404">Business development</option>
<option value="406">Business intelligence</option>
<option value="407">Business IT alignment</option>
<option value="408">Business management</option>
<option value="401">Business modeling</option>
<option value="398">Business planning</option>
<option value="402">Business process modeling</option>
<option value="403">Business process reengineering</option>
<option value="289">Business proposal writing</option>
<option value="409">Business valuation</option>
<option value="288">Business writing</option>
<option value="658">cakePHP</option>
<option value="320">Call Handling</option>
<option value="155">Caricature</option>
<option value="224">CentOS</option>
<option value="318">chat support</option>
<option value="421">Chemical engineering</option>
<option value="644">Chrome</option>
<option value="687">Chrome OS</option>
<option value="435">Circuit Design</option>
<option value="916">CISCO</option>
<option value="243">CISCO routers</option>
<option value="422">Civil and structural engineering</option>
<option value="453">Civil Law</option>
<option value="244">Cloud</option>
<option value="915">COBIT</option>
<option value="607">COBOL</option>
<option value="671">Codeigniter</option>
<option value="294">Commercial writing</option>
<option value="221">communication skills</option>
<option value="905">Company Profile</option>
<option value="428">Computer-Aided Design</option>
<option value="232">Computer Networking</option>
<option value="253">Computer Security</option>
<option value="653">Content management system</option>
<option value="216">Content Writing</option>
<option value="449">Contract Drafting</option>
<option value="440">Contract law</option>
<option value="423">Contract manufacturing</option>
<option value="303">Copywriting</option>
<option value="282">Copy writing</option>
<option value="441">Corporate law</option>
<option value="228">CPanel</option>
<option value="621">C Programming</option>
<option value="622">C# Programming</option>
<option value="623">C++ Programming</option>
<option value="302">Creative writing</option>
<option value="900">Creaza</option>
<option value="443">Criminal law</option>
<option value="274">CRM</option>
<option value="688">CS-Cart</option>
<option value="642">CSS Less</option>
<option value="640">CSS Sass</option>
<option value="641">CSS Stylus</option>
<option value="708">CubeCart</option>
<option value="215">Customer service</option>
<option value="317">Customer support</option>
<option value="350">Data Analytics</option>
<option value="246">Database administration</option>
<option value="249">Database development</option>
<option value="248">Database management</option>
<option value="202">Data Entry</option>
<option value="346">Data extraction</option>
<option value="212">Data mining</option>
<option value="347">Data mining and management</option>
<option value="365">Data Munging</option>
<option value="217">Data scraping</option>
<option value="345">Data visualization</option>
<option value="247">Data warehouse</option>
<option value="254">Debian</option>
<option value="162">Décor</option>
<option value="672">Django</option>
<option value="709">DotNetNuke</option>
<option value="430">Drafting</option>
<option value="626">Drupal</option>
<option value="304">ebook Writing</option>
<option value="308">Editing</option>
<option value="659">edx</option>
<option value="689">e-forms</option>
<option value="710">Elasticsearch</option>
<option value="424">Electrical engineering</option>
<option value="437">Electronics</option>
<option value="208">Email Handling</option>
<option value="219">Email Marketing</option>
<option value="307">English Grammar</option>
<option value="649">Game design</option>
<option value="650">Game development</option>
<option value="651">Gamification</option>
<option value="163">GarageBand</option>
<option value="370">General translation</option>
<option value="381">German to English Translation</option>
<option value="305">Ghostwriting</option>
<option value="673">GIT</option>
<option value="899">GoAnimate</option>
<option value="343">google adsense</option>
<option value="342">google adwords</option>
<option value="660">Google analytics</option>
<option value="661">Google apps</option>
<option value="211">Google Docs</option>
<option value="218">Google search</option>
<option value="164">Google Sketch Up</option>
<option value="614">Graphic design</option>
<option value="712">Grease Monkey</option>
<option value="250">Hadoop</option>
<option value="276">HP Openview</option>
<option value="392">Human resource</option>
<option value="270">IBM Websphere</option>
<option value="135">Illustration</option>
<option value="165">Illustrator</option>
<option value="456">Immigration Law</option>
<option value="166">iMovie</option>
<option value="167">industrial design</option>
<option value="348">infographics</option>
<option value="327">instagram marketing</option>
<option value="451">Intellectual Property Law</option>
<option value="168">interior design</option>
<option value="645">Internet explorer</option>
<option value="203">Internet research</option>
<option value="411">Intuit QuickBook</option>
<option value="169">invitations</option>
<option value="616">iOS Development</option>
<option value="618">iPad App Development</option>
<option value="613">iPhone App Development</option>
<option value="269">ITIL</option>
<option value="279">Jabber</option>
<option value="647">Java</option>
<option value="2">JavaScript</option>
<option value="170">JDF</option>
<option value="674">Joomla</option>
<option value="610">jQuery</option>
<option value="675">jQuery / Prototype</option>
<option value="917">Juniper</option>
<option value="172">Landing page design</option>
<option value="214">Lead generation</option>
<option value="445">Legal consultation</option>
<option value="448">Legal Consulting</option>
<option value="447">Legal research</option>
<option value="368">Legal translation</option>
<option value="446">Legal writing</option>
<option value="920">Linux</option>
<option value="222">Linux System Administration</option>
<option value="116">Logo design</option>
<option value="280">Lotus Notes</option>
<option value="359">Machine learning</option>
<option value="255">Mac OS</option>
<option value="639">Magento</option>
<option value="173">Makerbot</option>
<option value="393">Management consulting</option>
<option value="256">Map reduce</option>
<option value="340">Market and customer research</option>
<option value="329">Marketing</option>
<option value="336">Marketing strategy</option>
<option value="356">Market research</option>
<option value="357">Mathematics</option>
<option value="364">matlab</option>
<option value="174">Maya</option>
<option value="426">Mechanical  engineering</option>
<option value="432">Mechanical Engineering</option>
<option value="367">Medical translation</option>
<option value="272">Microsoft Dynamics</option>
<option value="204">Microsoft Excel</option>
<option value="707">Microsoft Exchange</option>
<option value="236">Microsoft Exchange Server</option>
<option value="706">Microsoft Expression</option>
<option value="399">Microsoft office</option>
<option value="233">Microsoft Windows Server</option>
<option value="209">Microsoft Word</option>
<option value="457">Microsof Word</option>
<option value="187">Mock up</option>
<option value="694">Moodle</option>
<option value="911">MS Word</option>
<option value="676">MVC</option>
<option value="611">MySQL Administration</option>
<option value="223">Network Administration</option>
<option value="267">Network management</option>
<option value="225">Network Security</option>
<option value="295">Newsletter</option>
<option value="161">Newsletter design</option>
<option value="235">Nginx</option>
<option value="475">node.js</option>
<option value="619">Objective-C</option>
<option value="655">Odoo</option>
<option value="638">Open Cart</option>
<option value="257">Oracle</option>
<option value="704">OSCommerce</option>
<option value="156">Package design</option>
<option value="444">Paralegal service</option>
<option value="450">Patent Law</option>
<option value="903">Patience</option>
<option value="677">Paypal API</option>
<option value="418">Payroll Processing</option>
<option value="434">PCB Design</option>
<option value="702">Perl</option>
<option value="901">Persistence</option>
<option value="648">Phone gap</option>
<option value="319">Phone Support</option>
<option value="175">Photo editing</option>
<option value="176">Photography</option>
<option value="177">Photoshop</option>
<option value="604">PHP</option>
<option value="913">PMP</option>
<option value="296">Poem</option>
<option value="171">Poster design</option>
<option value="258">PostgreSQL</option>
<option value="180">PowerPoint</option>
<option value="136">Presentations</option>
<option value="181">Prezi</option>
<option value="427">Product design</option>
<option value="914">Product Owner</option>
<option value="397">Project management</option>
<option value="285">Proof reading</option>
<option value="191">Pro Tools</option>
<option value="183">PSD2CMS</option>
<option value="182">PSD to HTML</option>
<option value="335">Public relation</option>
<option value="297">Publishing</option>
<option value="617">Python</option>
<option value="697">Qualtrics Survey Platform</option>
<option value="349">Quantitative analysis</option>
<option value="184">QuarkXPress</option>
<option value="454">Real Estate Law</option>
<option value="416">Recruiting</option>
<option value="259">Red Hat</option>
<option value="291">Resume and cover letters</option>
<option value="606">Ruby</option>
<option value="322">Sales</option>
<option value="657">sales force</option>
<option value="268">SAP</option>
<option value="300">Scenarios</option>
<option value="700">Scrum</option>
<option value="701">Scrum Development</option>
<option value="339">Search engine marketing</option>
<option value="334">Search engine optimization</option>
<option value="306">Search Engine Optimization (SEO)</option>
<option value="686">Semantic UI</option>
<option value="309">SEO Writing</option>
<option value="678">Shell Script</option>
<option value="636">Shopify</option>
<option value="185">Shopify Templates</option>
<option value="637">Shopping cart</option>
<option value="299">Short stories</option>
<option value="690">Silverlight</option>
<option value="436">SketchUp</option>
<option value="703">Smarty PHP</option>
<option value="210">Social Media Marketing</option>
<option value="277">Socket IO</option>
<option value="628">Software development</option>
<option value="627">Software engineering</option>
<option value="629">Software testing</option>
<option value="278">Solaris</option>
<option value="431">SolidWorks</option>
<option value="379">Spanish to English Translation</option>
<option value="363">spss statistics</option>
<option value="234">SQL</option>
<option value="260">SQLite</option>
<option value="907">SRS</option>
<option value="152">Stationary design</option>
<option value="351">Statistics</option>
<option value="656">sugarCRM</option>
<option value="646">Swift</option>
<option value="240">system administration</option>
<option value="902">Talent</option>
<option value="414">Tax preparation</option>
<option value="316">Technical support</option>
<option value="369">Technical translation</option>
<option value="286">Technical writing</option>
<option value="337">Telemarketing</option>
<option value="213">Telephone Handling</option>
<option value="338">Telesales</option>
<option value="186">Template</option>
<option value="705">TestStand</option>
<option value="452">Trademark Consulting</option>
<option value="341">Trade marketing</option>
<option value="207">Transcription</option>
<option value="366">Translation</option>
<option value="679">Tumblr</option>
<option value="615">twitter bootstrap</option>
<option value="326">twitter marketing</option>
<option value="137">Typography</option>
<option value="231">Ubuntu</option>
<option value="275">UML Design</option>
<option value="261">UNIX</option>
<option value="634">User acceptance test</option>
<option value="910">User Guide</option>
<option value="635">User Interface / IA</option>
<option value="909">User Manual</option>
<option value="354">VBA</option>
<option value="680">VB.NET</option>
<option value="691">vBulletin</option>
<option value="118">Video</option>
<option value="188">Video editing</option>
<option value="189">Video production</option>
<option value="312">Virtual assistance</option>
<option value="205">Virtual Assistant</option>
<option value="681">Visual Basic</option>
<option value="931">Visual C#</option>
<option value="262">VMware</option>
<option value="193">Voice engineering</option>
<option value="1529">Voice Over</option>
<option value="263">VOIP</option>
<option value="284">Web Content writing</option>
<option value="355">Web Crawler</option>
<option value="609">Web design</option>
<option value="352">Web scraping</option>
<option value="608">Website Development</option>
<option value="238">website hosting</option>
<option value="630">website management</option>
<option value="239">website security</option>
<option value="631">website testing</option>
<option value="298">Wikipedia</option>
<option value="933">Windows\</option>
<option value="264">Windows 8</option>
<option value="226">Windows Administration</option>
<option value="265">Windows API</option>
<option value="266">Windows Desktop</option>
<option value="919">Windows Server</option>
<option value="605">WordPress</option>
<option value="415">Xero</option>
<option value="682">XML</option>
<option value="683">XMPP</option>
<option value="684">XQuery</option>
<option value="324">YouTube marketing</option>
<option value="632">Zen Cart</option>
<option value="685">Zend</option>
<option value="314">Zendesk</option>
<option value="315">Zendesk API Development</option>
<option value="654">zoho</option>
<option value="711">Zurb Foundation</option>
<option value="1530">تعريف صوتي</option></select>
</div>

<div class="filter">
<h3>Cost <small class="text-muted">Saudi Riyal</small></h3>
<div class="slider slider-horizontal">
<div id="price_range">
<input type="hidden" name="price_range_min" id="price_range_min" />
<input type="hidden" name="price_range_max" id="price_range_max" />
</div>
<label id="price_max" for="price_max">20,000</label>
<label id="price_min" for="price_min">50</label>
<div id="price_data" data-min="50" data-max="20,000"></div>
</div>
</div>

<div class="filter">
<h3>Duration <small class="text-muted">Day</small></h3>
<div class="slider slider-horizontal">
<div id="time_range">
<input type="hidden" name="time_range_min" id="time_range_min" />
<input type="hidden" name="time_range_max" id="time_range_max" />
</div>
<label id="time_max" for="time_max">365</label>
<label id="time_min" for="time_min">1</label>

<div id="time_data" data-min="1" data-max="365"></div>
</div>
</div>

<div class="box-content box-background">
<input type="submit" name="commit" value="Filter" class="fw-btn-primary btn-block" />
<a id="clear_filter" class="secondary L-clear-filter" href="javascript:void(0)">Reset</a>
</div>
</div>
</div>
</div>

<!--  Sart project object -->
<div class="col-md-9 col-sm-8">

<?php 
foreach ($prjs as $prj){
$prjOnwer=$db->getUserInfoByID($prj["User_ID"]);
echo "<div class='col-sm-6 col-md-4'>
<div class='box project-card'>
<p class='category-name english-text tooltip_class'>".$prj['Prj_Category']."</p>
<p class='project-title arabic-text'>".$prj['Prj_Name']."</p>
<p class='project-publish-date'>Period: ".$prj['Prj_Period']." days</p>
<a class='project-owner-photo' href='profileView.php?id=".$prj['User_ID']."'>".$prjOnwer[0]["User_Name"]."</a>
<div class='card-footer'>
<a class='fw-btn-secondary' href='ProjectView.php?id=".$prj['Prj_ID']."'>Moer details</a>

</div>
</div>
</div>";

//include("projectCard.html");
}?>

</div>
<!--  End project object -->

<div class="col-sm-12 text-center">
<nav>
<ul class="pagination">

<li class='active'>
<a remote="false">1</a>
</li>

<li>
<a rel="next" href="projeclist.php?page=2">2</a>
</li>

<li>
<a class="tooltip_class" title="Last" data-toggle="tooltip" href="/en/projects?page=2">&laquo;</a>
</li>

</ul>

</nav>
</div>
</div>
</form>
</div>

<div class="modal fade" id="no_create_bid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Warning</h4>
</div>
<div class="modal-body">
Adding a new proposal is not allowed as the maximum number of proposals has been already reached
</div>
<div class="modal-footer">
<a class="cancel_button" data-dismiss="modal">Cancel</a>

<a class="fw-btn-primary" href="/en/my_proposals">Edit My Proposals</a>
</div>
</div>
</div>
</div>


</div>
</div>
    <?php include("businessLayer/footer.html");?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/Filterable-Gallery.js"></script>
<script src="assets/js/MUSA_product-display.js"></script>
<script src="assets/js/Sidebar-Menu.js"></script>
</body>
</html>
