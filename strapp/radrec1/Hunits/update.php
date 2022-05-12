<?php
require_once 'dbconfig.php';

	
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
		
		
		$stmt = $db_con->prepare("UPDATE company SET ucd=:en, uname=:ed  WHERE id=:id");
		$stmt->bindParam(":en", $ucd);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":ed", $uname);
		
		
		
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
