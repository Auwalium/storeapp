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
		$username = $_POST['username'];
		$password = $_POST['password'];
		$created_by = $_POST['created_by'];
		$date_created = $_POST['date_created'];
		$password2 = md5($password);
		
		
		$stmt = $db_con->prepare("UPDATE users SET  password=:es, created_by=:et WHERE id=:id");
		$stmt->bindParam(":et", $created_by);
		$stmt->bindParam(":es", $password2);
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