<?php

session_start();
$user = $_SESSION['username1'];

include('dbconfig.php');
if(isset($_POST["action"]))
{

	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO item (generic_name, brand_name, item_category, date_created,created_by) VALUES ('".$_POST["generic_name"]."', '".$_POST["brand_name"]."', '".$_POST["item_category"]."' , '".$_POST["date_created"]."', '".$_POST["created_by"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	
	if($_POST["action"] == "fetch_single")
	{
	
		$query = "
		SELECT * from approveditem WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['name'] = $row['name'];
			$output['quantity'] = $row['quantity'];

			$output['dept'] = $row['dept'];
			$output['rname'] = $row['rname'];

			$output['rdate'] = $row['rdate'];
			$output['qis'] = $row['qis'];

			$output['adate'] = $row['adate'];
			$output['unit'] = $row['unit'];

			$output['sunit'] = $row['sunit'];
			$output['category'] = $row['category'];

			$output['total'] = $row['total'];
			$output['qa'] = $row['qa'];
			$output['id'] = $row['id'];
			
		}
		echo json_encode($output);
	}
	

if($_POST["action"] == "update")
	{	

	include('connection.php');       
            		
					$select = "SELECT * from approveditem WHERE id = '".$_POST["hidden_id"]."'";
					//print_r($select);
		    		$result1 = mysqli_query($mysqli, $select);
					while($row = mysqli_fetch_assoc($result1)) 
					{
						$id = $row['id'];
						$rname = $row['rname'];
						$name = $row['name'];
						$rdate = $row['rdate'];
						$adate = $row['adate'];
						$quantity = $_POST["quantity"];
						$total = $_POST["total"];

						$dept = $row['dept'];
						$rname = $row['rname'];
						$qis = $row['qis'];
						
						$category = $row['category'];
						$qa = $row['qa'];
						$adate = $row['adate'];
						$unit = $row['unit'];
						$sunit = $_POST["sunit"];

						$adate = $row['adate'];
						$unit = $row['unit'];
						$sunit = $_POST["sunit"];
						$cname = $_POST["cname"];
						$cfile = $_POST["cfile"];
						
				
				   

	
		$query = "
		INSERT INTO dispatch (rname,name, dept, unit, sunit, adate, qis, qa, rdate, category,ddate,dby,cname,cfile,quantity) VALUES ('$rname','$name', '$dept', '$unit', '$sunit',  '$adate', '$qis', '$qa', '$rdate', '$category','$ddate','$user','$cname','$cfile','$quantity')
		";
		print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();


		$query = "
		UPDATE approveditem 
		SET noti = 2 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		//print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();

		echo '<p>Data Updated</p>';
		 
	}
		
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