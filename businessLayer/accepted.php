<?php 
include_once('DB.class.php');
$db = new DB();

//change proposal status to Accepted 
$proID=
$prostat='Accepted';
$st=$db->updateProStat($proID, $prostat);

//change All other proposal status to Rejected
$prjID=
$ast=$db->updateAllProStat($prjID)

//change prject status to Process  
$prjstat='Process';
$pst=$db->updatePrjStat($prjID, $prjstat);

header('location: ProjectView.php?id='.$prj[0]["PrjID"]);
?>