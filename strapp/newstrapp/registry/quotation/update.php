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
		$suppliername = $_POST['suppliername'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
	
		
		
		$stmt = $db_con->prepare("UPDATE supplier SET  suppliername=:es, address =:et, phone=:er WHERE id=:id");
		
		$stmt->bindParam(":es", $suppliername);
		$stmt->bindParam(":et", $address);
		$stmt->bindParam(":er", $phone);
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