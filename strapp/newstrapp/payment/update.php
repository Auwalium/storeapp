<?php
require_once '../dbconfig.php';

include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$itemname = $_POST['itemname'];
		$descrip = $_POST['descrip'];
		
		
		$stmt = $db_con->prepare("UPDATE item SET  itemname=:es, descrip =:et WHERE id=:id");
		
		$stmt->bindParam(":es", $itemname);
		$stmt->bindParam(":et", $descrip);
		$stmt->bindParam(":id", $id);
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
	
		
		
	}

?>