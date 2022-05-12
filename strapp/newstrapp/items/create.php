<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$itemname = $_POST['itemname'];
		$descrip = $_POST['descrip'];
		$cp = $_POST['cp'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO item(itemname, descrip,cp) 
			
			VALUES(:eitemname, :esdescrip, :ecp)");
			
			$stmt->bindParam(":eitemname", $itemname);
			$stmt->bindParam(":esdescrip", $descrip);
			$stmt->bindParam(":ecp", $cp);
		
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