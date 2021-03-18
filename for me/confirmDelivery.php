<?php 

include_once('businessLayer/sessionStart.php');

//$prjID= $_GET['id'];
//change project state to Closed 
$pst=$db->updatePrjStat($_GET['id'], 'Closed');

header('location: ProjectView.php?id='.$_GET['id']);


?>