<?php

$isMatched=true;

if( $_POST["pass"] != $_POST["confPass"] ) {
	echo "<span class='red'>Password does NOT match.</span>";
	echo "<input type='hidden' name='passwordMatching' value='false' />";
}else{
	echo "<span class='green'>Password Matched </span>";
	echo "<input type='hidden' name='passwordMatching' value='true' />";
}

?>