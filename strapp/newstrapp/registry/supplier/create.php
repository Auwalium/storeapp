<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$suppliername = $_POST['suppliername'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO supplier(suppliername, address,phone) 
			
			VALUES(:esuppliername, :esaddress, :emphone)");
			
			$stmt->bindParam(":esuppliername", $suppliername);
			$stmt->bindParam(":esaddress", $address);
			$stmt->bindParam(":emphone", $phone);
			
			
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