<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$rqmd1 = $_POST['rqmd1'];
		$rqa = $_POST['rqa'];
		$hm = $_POST['hm'];
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET  hm=:rs WHERE id=:id");
		
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rs", $hm);

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

