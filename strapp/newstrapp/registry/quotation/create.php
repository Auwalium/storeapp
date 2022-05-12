<?php



require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$supplierid = $_POST['supplierid'];
		$itemid = $_POST['itemid'];
		$price = $_POST['price'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO qoutation(supplierid, itemid,price) 
			
			VALUES(:esupplierid, :esitemid, :emprice)");
			
			$stmt->bindParam(":esupplierid", $supplierid);
			$stmt->bindParam(":esitemid", $itemid);
			$stmt->bindParam(":emprice", $price);
			//print_r($stmt);
			
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