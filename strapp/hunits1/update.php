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
		$hname = $_POST['hname'];
		$cqbhu = $_POST['cqbhu'];
		$cdate = $_POST['cdate'];
		
		
		$stmt = $db_con->prepare("UPDATE audit SET hname=:en, cqbhu=:ed, cdate=:cd  WHERE id=:id");
		$stmt->bindParam(":ed", $cqbhu);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":cd", $cdate);
		$stmt->bindParam(":en", $hname);
		
		
		
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
