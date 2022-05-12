<?php

//action.php

include('dbconfig.php');
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO item (generic_name, brand_name, item_category, date_created,created_by) VALUES ('".$_POST["generic_name"]."', '".$_POST["brand_name"]."', '".$_POST["item_category"]."' , '".$_POST["date_created"]."', '".$_POST["created_by"]."')
		";
		//print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';

		$query = "
		INSERT INTO report (generic_name, brand_name, item_category) VALUES ('".$_POST["generic_name"]."', '".$_POST["brand_name"]."', '".$_POST["item_category"]."' )
		";
		//print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>OK!</p>';


	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM item WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['generic_name'] = $row['generic_name'];
			$output['brand_name'] = $row['brand_name'];
			$output['item_category'] = $row['item_category'];
			$output['date_created'] = $row['date_created'];
			$output['created_by'] = $row['created_by'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE item 
		SET generic_name = '".$_POST["generic_name"]."', 
		brand_name = '".$_POST["brand_name"]."',
		item_category = '".$_POST["item_category"]."',
		date_created = '".$_POST["date_created"]."'  
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM item WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>