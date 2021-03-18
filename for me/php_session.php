<?php
// Start the session
session_start();


// Set session variables
$_SESSION["favcolor"] = "green";

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";

//show all the session variable values for a user session
print_r($_SESSION);

// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
?>