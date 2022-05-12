<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$rqs = $_POST['rqs'];
		$rqa = $_POST['rqa'];
		$rqmd = $_POST['rqmd'];
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET name=:en, dept=:ed, quantity=:es,  rqa=:ra,   adate=:ae      WHERE id=:id");
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $dept);
		$stmt->bindParam(":es", $quantity);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":ra", $rqa);
		$stmt->bindParam(":ae", $adate);
		
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

