
<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$commentm = $_POST['commentm'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$rqs = $_POST['rqs'];
		$rqa = $_POST['rqa'];
		$rqmd = $_POST['rqmd'];
		$rqmd1 = $_POST['rqmd1'];
		
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET commentm=:en,    rqmd1=:rm, adate=:ae, noti = 0 WHERE id=:id");
		$stmt->bindParam(":en", $commentm);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rm", $rqmd1);
		$stmt->bindParam(":ae", $adate);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
		$stmt = $db_con->prepare("UPDATE requestitem1 SET commentm=:en,    rqmd1=:rm, adate=:ae WHERE id=:id");
		$stmt->bindParam(":en", $commentm);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rm", $rqmd1);
		$stmt->bindParam(":ae", $adate);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
		$stmt = $db_con->prepare("UPDATE approveditem SET commentm=:en,  WHERE emp_id=:id");
		$stmt->bindParam(":en", $commentm);
		
		//redirecting to the display page (index.php in our case)
		header("Location:index.php");
		
	}

?>
























