<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$cp1 = $_POST['cp1'];
		$cp2 = $_POST['cp2'];
		$cp3 = $_POST['cp3'];
		$cp4 = $_POST['cp4'];
		$cp5 = $_POST['cp5'];
		$aqp = $_POST['aqp'];
		$acp = $_POST['acp'];
		
		
		$stmt = $db_con->prepare("UPDATE raised SET name=:en, descrip=:ed, qty=:es, cp1=:aa, cp2=:bb , cp3=:cc , cp4=:dd, cp5=:ee , aqp=:ff, acp=:gg   WHERE id=:id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $descrip);
		$stmt->bindParam(":es", $qty);
		$stmt->bindParam(":aa", $cp1);
		$stmt->bindParam(":bb", $cp2);
		$stmt->bindParam(":cc", $cp3);
		$stmt->bindParam(":dd", $cp4);
		$stmt->bindParam(":ee", $cp5);
		$stmt->bindParam(":ff", $aqp);
		$stmt->bindParam(":gg", $acp);
		
		
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
