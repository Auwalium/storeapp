<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$cp5 = $_POST['cp5'];
	
		
		$stmt = $db_con->prepare("update raised set cp5='".$cp5."' where id='".$id."'");
		$stmt->bindParam(":cp5", $cp5);
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