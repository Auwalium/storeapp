<?php
include_once 'dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("UPDATE requestitem set noti = 7 WHERE id=:id and noti != 3");
	$stmt->execute(array(':id'=>$id));	
}
?>