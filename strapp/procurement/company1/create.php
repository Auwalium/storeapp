<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$cp1 = $_POST['cp1'];
	
		
		$stmt = $db_con->prepare("update raised set cp1='".$cp1."' where id='".$id."'");
		$stmt->bindParam(":cp1", $cp1);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem2";
	}
	
	}
	

?>