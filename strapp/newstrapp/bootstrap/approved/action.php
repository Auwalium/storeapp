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
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	
	if($_POST["action"] == "fetch_single")
	{
	
		$query = "
		SELECT requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id from item inner join requestitem on item.generic_name = requestitem.name WHERE requestitem.id = '".$_POST["id"]."'
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
			$output['rqmd1'] = $row['rqmd1'];

			$output['adate'] = $row['adate'];
			$output['unit'] = $row['unit'];

			$output['sunit'] = $row['sunit'];
			$output['category'] = $row['category'];

			$output['approved_qty'] = $row['approved_qty'];
			$output['stock_level'] = $row['stock_level'];
			$output['id'] = $row['id'];
			
		}
		echo json_encode($output);
	}
	

if($_POST["action"] == "update")
	{	

		include('connection.php');       
            		
					$select = "SELECT requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id from item inner join requestitem on item.generic_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
					//print_r($select);
		    		$result1 = mysqli_query($mysqli, $select);
					while($row = mysqli_fetch_assoc($result1)) 
					{
						$id = $row['id'];
						$stock_level = $row['stock_level'];
						$rqmd1 = $_POST["rqmd1"];
						$slevel = ($stock_level-$rqmd1);
				
				    }
					


		if ($stock_level < $rqmd1)
		 {
			echo '<p>Insufficient stock. Check Stock Level and Reduce your Recommended quantity</p>';
		  } 
		else 
		  {
		$query = "
		UPDATE requestitem 
		SET approved_qty = '".$_POST["rqmd1"]."',
		noti = 0
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();

		$query = "
		UPDATE item 
		SET stock_level = '$slevel'
		WHERE id = $id";
		//print_r($query);
		$statement = $connect->prepare($query);
		$statement->execute();



		include('connection.php');       
            		
					$select = "SELECT requestitem.rname,requestitem.rdate,requestitem.adate,  requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id as id1 from item inner join requestitem on item.generic_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
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
						$total = ($stock_level-$rqmd1);

						$dept = $row['dept'];
						$rname = $row['rname'];
						$rqmd1 = $row['rqmd1'];
						
						$category = $row['category'];
						$approved_qty = $row['approved_qty'];
						$item_id = $row['id1'];

						$adate = $row['adate'];
						$unit = $row['unit'];
						$sunit = $_POST["sunit"];
						$stock_level = $row['stock_level'];
				
				    }












		$query = "
		INSERT INTO approveditem (rname,name, dept, unit, sunit, adate, qis, qa,total, rdate, category) VALUES ('$rname','$name', '$dept', '$unit', '$sunit',  '$adate', '$stock_level', $approved_qty, '$total', '$rdate', '$category')
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