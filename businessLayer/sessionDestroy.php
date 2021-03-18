<?php
session_start();
$error ='';
include_once('DB.class.php');
$db = new DB();
session_destroy();
header('location: /index.php'); 

?>