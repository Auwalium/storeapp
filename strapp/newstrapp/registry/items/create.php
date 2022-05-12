<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$generic_name = $_POST['generic_name'];
		$brand_name = $_POST['brand_name'];
		$price = $_POST['price'];
		$item_category = $_POST['item_category'];
		$created_by = $_POST['created_by'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO item(generic_name, brand_name,price,item_category,created_by) 
			
			VALUES(:egeneric_name, :ebrand_name, :eprice, :eitem_category, :ecreated_by)");
			
			$stmt->bindParam(":egeneric_name", $generic_name);
			$stmt->bindParam(":ebrand_name", $brand_name);
			$stmt->bindParam(":eprice", $price);
			$stmt->bindParam(":eitem_category", $item_category);
			$stmt->bindParam(":ecreated_by", $created_by);
		
		
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