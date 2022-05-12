<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$descrip = $_POST['descrip'];
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$cprice = $_POST['cprice'];
		$swy = $_POST['swy'];
		$dept = $_POST['dept'];
		$ddate = $_POST['ddate'];
		
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO applyitem(name, descrip,quantity,cprice,swy,dept,ddate) 
			
			VALUES(:ename, :edescrip,:equantity,:ecprice,:eswy,:edept,:eddate)");
			
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":edescrip", $descrip);
			$stmt->bindParam(":equantity", $quantity);
			$stmt->bindParam(":ecprice", $cprice);
			$stmt->bindParam(":eswy", $swy);
			$stmt->bindParam(":edept", $dept);
			$stmt->bindParam(":eddate", $ddate);
			
	
			
			if($stmt->execute())
			{
				echo "Successfully";
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