<?php


include_once('DB.class.php');
$db = new DB();
$isUserAvailable;
if(!empty($_POST["email"])) {
	$rowsNum = $db->checkUserEmail($_POST["email"]);
  	if($rowsNum>0) {
      echo "<span class='green'>Your Email registred. Type your password.</span>";
      echo "<input type='hidden' name='usernameAvail' value='false' />";
  	}else{
      echo "<span class='red'>You do NOT have acount. SIGNUP</span>";
      echo "<input type='hidden' name='usernameAvail' value='true' />";
  	}
}
?>