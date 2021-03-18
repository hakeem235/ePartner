<?php 
if (isset($_POST['submit'])){
$file= $_FILE['file']; //image file 

$fileName = $_FILES['file']['name'];   //$fileName=$file['name'];
$fileTmpName = $_FILES['file']['tmp_name']; //tempolarry file path 

$dileExt = explode('.',$fileName);
$fileActualExt= strtolower(end($fileExt));

$allowed = arry ('jpg', 'jpeg', 'png'); // allowed type 

if (in_array($fileActualExt, $allowed)){ //check the type
 
 $newName= uniqid('',true).".".$fileActualExt; //create uniqe name for image 
 $avatarPath= 'asst/img'.$newName; //image path 
  move_uploaded_file($fileTmpName, $avatarPath);  
 }


// array(name, type, tmp_name, error, size)
}

?>