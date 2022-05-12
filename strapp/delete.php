<?php
include_once 'dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM approveditem WHERE emp_id=:id");
	$stmt->execute(array(':id'=>$id));	
	
	
	$stmt=$db_con->prepare("DELETE FROM requestitem WHERE code=:id");
	$stmt->execute(array(':id'=>$id));	
	

	
	$stmt=$db_con->prepare("DELETE FROM dispatch WHERE emp_id=:id");
	$stmt->execute(array(':id'=>$id));
	
	$stmt=$db_con->prepare("DELETE FROM stock WHERE id=$id");
	$stmt->execute(array(':id'=>$id));
	
	
	
}
?>