<?php
session_start();
include_once '../dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$rname = $_SESSION['user']['username'];
	
	$stmt=$db_con->prepare("UPDATE `users` SET `noti`= 3 WHERE id =:id");
	$stmt->execute(array(':id'=>$id));	
	
	$stmt=$db_con->prepare("INSERT INTO `trackdelete`(`id`, `rname`, `datab`) VALUES ('$id','$rname','users')");
	$stmt->execute(array(':id'=>$id));	
	
	
	
	
	
}
?>