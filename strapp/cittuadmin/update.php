<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		
		$id = $_POST['id'];
		$password = $_POST['password'];
		$password1= md5($password);

	
		
		$stmt = $db_con->prepare("UPDATE users SET password=:en    WHERE id=:id");
		$stmt->bindParam(":en", $password1);
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