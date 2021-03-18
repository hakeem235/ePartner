<?php
session_start();
include_once('businessLayer/DB.class.php');
$db = new DB();

$email = $_SESSION['user_email'];

if(!isset($_SESSION['user_email']) && empty($_SESSION['user_email'])){
	 //No session set. So, redirect to homepage
	header('Location: index.php');
}else {
$userInfo= $db->getUserInfo($email);
}

?>