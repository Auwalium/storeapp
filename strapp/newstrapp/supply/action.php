<?php

	
	
//if (($d == 1) or ($d == 2) or ($d == 3) or ($d == 4) or ($d == 5)or ($d == 6) or ($d == 7)) 
	

//action.php

include('dbconfig.php');
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO supply (item_id, lpo, supply_id, supply_price,model_no,quantity_supply,manufacture_date,expire_date,created_by,date_created) VALUES ('".$_POST["item_id"]."', '".$_POST["lpo"]."', '".$_POST["supply_id"]."' , '".$_POST["supply_price"]."', '".$_POST["model_no"]."', '".$_POST["quantity_supply"]."', '".$_POST["manufacture_date"]."', '".$_POST["expire_date"]."', '".$_POST["created_by"]."', '".$_POST["date_created"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';

       
		$currentTimeinSeconds = time();  
	    $currentDate = date('Y-m-d', $currentTimeinSeconds); 
	    $y = date('Y'); 
	    $m = date('m'); 
	    $d = date('d'); 
if ($m == 1)
{
include('dbconnect.php');       
			$select = "SELECT * FROM item inner join report on report.id = item.id where item.id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["jana"];
		$stock_level = $one + $two;
		$jana = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		jana = $jana  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query);
		$statement->execute();
}
elseif ($m == 2)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item inner join report on report.id = item.id where item.id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["feba"];
		$stock_level = $one + $two;
		$feba = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		feba = $feba  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query);
		$statement->execute();
 }
elseif ($m == 3)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item inner join report on report.id = item.id where item.id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["mara"];
		$stock_level = $one + $two;
		$mara = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		mara = $mara  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();	
 }
elseif ($m == 4)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item inner join report on report.id = item.id where item.id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["apra"];
		$stock_level = $one + $two;
		$apra = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		apra = $apra  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 5)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item  where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["maya"];
		$stock_level = $one + $two;
		$maya = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		maya = $maya  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 6)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["juna"];
		$stock_level = $one + $two;
		$juna = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		juna = $juna  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 7)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["jula"];
		$stock_level = $one + $two;
		$jula = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		jula = $jula  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 8)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["auga"];
		$stock_level = $one + $two;
		$auga = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		auga = $auga  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }  
elseif ($m == 9)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["sepa"];
		$stock_level = $one + $two;
		$sepa = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		sepa = $sepa  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();	
 }
elseif ($m == 10)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["octa"];
		$stock_level = $one + $two;
		$octa = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		octa = $octa  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 11)
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["nova"];
		$stock_level = $one + $two;
		$nova = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		nova = $nova  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
else
 {
include('dbconnect.php');       
			$select = "SELECT * FROM item where id = '".$_POST["item_id"]."'";
		    $result1 = mysqli_query($con, $select);
			$row = mysqli_fetch_assoc($result1); 		
		$one = $row["stock_level"];
		$two = $_POST["quantity_supply"];
		$three = $row["dea"];
		$stock_level = $one + $two;
		$dea = $three + $two;
		$query = "
		UPDATE item 
		SET stock_level = $stock_level 
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		dea = $dea  
		WHERE id = '".$_POST["item_id"]."'
		";
		print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }     



}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM supply WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['item_id'] = $row['item_id'];
			$output['lpo'] = $row['lpo'];
			$output['supply_id'] = $row['supply_id'];
			$output['supply_price'] = $row['supply_price'];
			$output['model_no'] = $row['model_no'];
			$output['quantity_supply'] = $row['quantity_supply'];
			$output['manufacture_date'] = $row['manufacture_date'];
			$output['expire_date'] = $row['expire_date'];
			$output['created_by'] = $row['created_by'];
			$output['date_created'] = $row['date_created'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE supply 
		SET item_id = '".$_POST["item_id"]."', 
		lpo = '".$_POST["lpo"]."',
		supply_id = '".$_POST["supply_id"]."',
		supply_price = '".$_POST["supply_price"]."',
		model_no = '".$_POST["model_no"]."',
		quantity_supply = '".$_POST["quantity_supply"]."',
		manufacture_date = '".$_POST["manufacture_date"]."',
		date_created = '".$_POST["date_created"]."', 
		created_by = '".$_POST["created_by"]."'    
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM supply WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>