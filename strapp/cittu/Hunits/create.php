<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		
		$sdate = $_POST['sdate'];
		$squantity = $_POST['squantity'];
	
		
		$stmt = $db_con->prepare("update company set squantity='".$squantity."',sdate='".$sdate."' where id='".$id."'");
		$stmt->bindParam(":squantity", $squantity);
		$stmt->bindParam(":sdate", $sdate);
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