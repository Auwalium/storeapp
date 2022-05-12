<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$code = $_POST['code'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$appv = $_POST['appv'];
		$adate = $_POST['adate'];
		$qis = $_POST['qis'];
		$qa = $_POST['qa'];
		$total = $_POST['total'];
		
		
		$stmt = $db_con->prepare("UPDATE stock1 SET slevel=:$total,  WHERE id=:$id");
		$stmt->bindParam(":total", $total);
		$stmt->bindParam(":code", $code);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>