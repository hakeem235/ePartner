<?php


include_once('DB.class.php');
$db = new DB();
$isUserAvailable;
if(!empty($_POST["email"])) {
	$rowsNum = $db->checkUserEmail($_POST["email"]);
  	if($rowsNum>0) {
      echo "<span class='red'>Email already registered</span>";
      echo "<input type='hidden' name='usernameAvail' value='false' />";
  	}else{
      echo "<span class='green'>Email is available</span>";
      echo "<input type='hidden' name='usernameAvail' value='true' />";
  	}
}
?>