
<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$rqs = $_POST['rqs'];
		$rqa = $_POST['rqa'];
		$rqmd = $_POST['rqmd'];
		$rqmd = $_POST['rqmd1'];
		
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET name=:en, dept=:ed, quantity=:es, rqs=:rs, rqa=:ra, rqmd=:rd, rqmd1=:rd, adate=:ae WHERE id=:id");
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $dept);
		$stmt->bindParam(":es", $quantity);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rs", $rqs);
		$stmt->bindParam(":ra", $rqa);
		$stmt->bindParam(":rd", $rqmd);
		$stmt->bindParam(":rm", $rqmd1);
		
		
		$stmt->bindParam(":ae", $adate);
		
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
























