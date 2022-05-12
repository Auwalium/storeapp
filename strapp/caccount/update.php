<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$aqp = $_POST['aqp'];
		$acp = $_POST['acp'];
		$adate = $_POST['adate'];
		$sdate = $_POST['sdate'];
		$acq = $_POST['acq'];
		$aname = $_POST['aname'];
		$ucd = $_POST['ucd'];
		$uname = $_POST['uname'];
		
		$tc = $_POST['tc'];
		$pay1 = $_POST['pay1'];
		$pay2 = $_POST['pay2'];
		$pay3 = $_POST['pay3'];
		$remain = ($tc -$pay1 -$pay2 -$pay3);
		
		
		$stmt = $db_con->prepare("UPDATE company SET pay1=:en, pay2=:ed,  pay3=:et, remain=:rt WHERE id=:id");
		$stmt->bindParam(":en", $pay1);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":ed", $pay2);
		$stmt->bindParam(":et", $pay3);
		$stmt->bindParam(":rt", $remain);
		
		
		
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
