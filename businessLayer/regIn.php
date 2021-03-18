<?php

include_once('DB.class.php');
$db = new DB();

$email=$_POST['email'];
$pass= $_POST['password'];

if($_POST['usernameAvail']==true && $_POST['passwordCheck']==true && $_POST['passwordMatching']==true){
 // insret data to DB 
		$accountCreated = $db->insertUser($email, $pass);
		if($accountCreated>=1){
		}
		
		else{
		 echo "<span class='red'>wrooooong!!!</span>";
		}


 }else { 
  echo "<span class='red'>check info</span>";
}

?>