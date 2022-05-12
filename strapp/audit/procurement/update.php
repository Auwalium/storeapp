<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['emp_id'];
		$name = $_POST['name'];
		$sname = $_POST['sname'];
		$slevel = $_POST['slevel'];
		
		$stmt = $db_con->prepare("UPDATE stock SET name=:name, slevel=:slevel, sname=:sname WHERE emp_id=:id");
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":slevel", $slevel);
		$stmt->bindParam(":sname", $sname);
		$stmt->bindParam(":emp_id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>