<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		
		
		
		$id = $_POST['id'];
		$code = $_POST['code'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$qa = $_POST['rqmd1'];
		$appv = $_POST['appv'];
		$qis = $_POST['qis'];
		$qa = $_POST['qa'];
		$adate = $_POST['adate'];
		$rdate = $_POST['rdate'];
		$slevel = $_POST['slevel'];
		$total = ($slevel-$qa);
		
		$stmt = $db_con->prepare("UPDATE approveditem SET name=:en, dept=:ed, qis=:es WHERE emp_id=:id");
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $dept);
		$stmt->bindParam(":es", $qis);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
	
			$stmt = $db_con->prepare("INSERT INTO dispatch(name,dept,qis,qa,appv,adate,total,rdate) VALUES('$name', '$dept', '$qis', '$qa','$appv','$adate','$total','$rdate')");
			if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
	

	
	$stmt=$db_con->prepare("DELETE FROM `approveditem` WHERE `approveditem`.`emp_id` =:code");
	$stmt->execute(array(':emp_id'=>$code));	
	
	
	
	
		$stmt = $db_con->prepare("update stock set slevel='".$total."' where id='".$code."'");
		$stmt->bindParam(":slevel", $total);
	
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
	
	}
	
	
	

?>