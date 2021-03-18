<?php

$isMatched=true;

if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $_POST["pass"])){
    echo "<span class='green'>Your password is strong.</span>";
    	echo "<input type='hidden' name='passwordCheck' value='true' />";

} else {
    echo "<span class='red'>Your password is not safe.</span>";
    echo "<input type='hidden' name='passwordCheck' value='false' />";

}

if( $_POST["pass"] != $_POST["confPass"] ) {
	echo "<span class='red'>Password does NOT match.</span>";
	echo "<input type='hidden' name='passwordMatching' value='false' />";
}else{
	echo "<span class='green'>Password Matched </span>";
	echo "<input type='hidden' name='passwordMatching' value='true' />";
}

?>