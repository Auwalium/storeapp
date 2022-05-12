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
		$adate =  $_POST['adate'];
		$category =  $_POST['category'];
		
		$stmt = $db_con->prepare("UPDATE raised SET name=:en, descrip=:ed, qty=:es, aqp=:rr , acp=:ss WHERE id=:id");
		$stmt->bindParam(":en", $name);
		$stmt->bindParam(":ed", $descrip);
		$stmt->bindParam(":es", $qty);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rr", $aqp);
		$stmt->bindParam(":ss", $acp);
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		$stmt = $db_con->prepare("INSERT INTO company (name,descrip,qty,aqp,acp,adate,category) 
		                       VALUES('$name','$descrip','$qty','$aqp','$acp','$adate','$category')");
							   
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem1";
			}
			
		$stmt = $db_con->prepare("INSERT INTO company1 (name,descrip,qty,aqp,acp,adate,category) 
		                       VALUES('$name','$descrip','$qty','$aqp','$acp','$adate','$category')");
							   
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem1";
			}
		
		
		//redirecting to the display page (index.php in our case)
		header("Location:index.php");
		
	}

?>

  
	