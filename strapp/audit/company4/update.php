<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$cp4 = $_POST['cp4'];
		
		
		$stmt = $db_con->prepare("UPDATE raised SET name=:en, descrip=:ed, qty=:es, cp4=:rs WHERE id=:id");
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $descrip);
		$stmt->bindParam(":es", $qty);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rs", $cp4);
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		//redirecting to the display page (index.php in our case)
		header("Location:index.php");
		
	}

?>
