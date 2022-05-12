<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO requestitem(name,dept,quantity) VALUES(:ename, :edept, :equantity)");
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":edept", $dept);
			$stmt->bindParam(":equantity", $quantity);
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>