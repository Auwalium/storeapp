<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$snum = $_POST['snum'];
		$lr = $_POST['lr'];
		$lb = $_POST['lb'];
		$qty = $_POST['qty'];
		$model = $_POST['model'];
		$aname = $_POST['aname'];
		$date = $_POST['date'];
		
		
		$stmt = $db_con->prepare("UPDATE audit SET  qty=:es, date=:ed, aname=:en WHERE id=:id");
		$stmt->bindParam(":es", $qty);
		$stmt->bindParam(":ed", $date);
		$stmt->bindParam(":en", $aname);
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