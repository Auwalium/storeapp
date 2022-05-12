<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO company(name,dept,descrip,qty) VALUES(:ename, :edept, :edescrip, :eqty)");
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":edept", $dept);
			$stmt->bindParam(":edescrip", $descrip);
			$stmt->bindParam(":eqty", $qty);
			
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