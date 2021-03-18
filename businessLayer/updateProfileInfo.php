<?php
include_once('DB.class.php');
$db = new DB();

// $image= $_FILE['avatar-file']; //image file 
// $imageName = $_FILES['avatar-file']['name'];   
// $imageTmpName = $_FILES['avatar-file']['tmp_name']; //temporary file path 
// $imageExt= strtolower(end(explode('.',$imageName))); 
// $imageType = array ('jpg', 'jpeg', 'png'); // allowed type 
// if (in_array($imageExt, $imageType)){ //check image type
//  $newName= substr(md5(time()),0,10).'.'.$imageExt; //create uniqe name for image 
//  $imagepath= 'avatar/'.$newName; //image path 
//   move_uploaded_file($imageTmpName, $imagepath);  
// }

$email = $_POST['email'];
$name= $_POST['name'];
$brithday= $_POST['brithday'];
$nationality= $_POST['nationality'];
$mobile= $_POST['mobile'];
$iban= $_POST['iban'];
$address= $_POST['address'];
$country= $_POST['country'];
$city= $_POST['city'];
$about=$_POST['about'];
$category=$_POST['Category']; 
//$avatar_path= $imagepath;

//$avatar_path = 'avatar/'.$_FILES['avatar-file']['name'];
//copy($_FILES['avatar-file']['tmp_name'], $avatar_path); 


$isEdited = $db->updateProfile($name, $brithday, $email, $nationality, $mobile, $iban, $address, $country, $city, $about, $category);

if($isEdited!=0){
		echo "<span class='red'>Profile updated</span>";
		echo $isEdited;
}else{
		echo "<span class='red'>Profile NOT updated</span>";
		echo $isEdited;
} 
?>