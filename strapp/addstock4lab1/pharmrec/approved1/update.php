<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$name = $_POST['name'];
		$qty = $_POST['qty'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$aqp = $_POST['aqp'];
		$acp = $_POST['acp'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO company(name,descrip,qty,aqp,acp) VALUES(:ename, :edescrip, :eqty, :eaqp, :eacp)");
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":edescrip", $descrip);
			$stmt->bindParam(":eqty", $qty);
			$stmt->bindParam(":eaqp", $aqp);
			$stmt->bindParam(":eacp", $acp);
			
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