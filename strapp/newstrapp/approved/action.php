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
		SELECT requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id from item inner join requestitem on item.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["id"]."'
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

        

		$select = "SELECT requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id from item inner join requestitem on item.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
					//print_r($select);
		    		$result1 = mysqli_query($mysqli, $select);
					$row = mysqli_fetch_assoc($result1); 
						$id = $row['id'];
						$stock_level = $row['stock_level'];
						$rqmd1 = $_POST["rqmd1"];
						$slevel = ($stock_level-$rqmd1);
				
		


		


		if ($stock_level < $rqmd1)
		 {
			echo '<p>Insufficient stock. Check Stock Level and Reduce your Recommended quantity</p>';
		  } 
		else 
		  {
$currentTimeinSeconds = time();  
	    $currentDate = date('Y-m-d', $currentTimeinSeconds); 
	    $y = date('Y'); 
	    $m = date('m'); 
	    $d = date('d');				    
		 
if ($m == 4)
 {
 	   include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["aprs"];
		$stock_level = $one - $two;
		$aprs = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		aprs = $aprs  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
 }
elseif ($m == 1) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["jans"];
		$stock_level = $one - $two;
		$jans = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		jans = $jans  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 2) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["febs"];
		$stock_level = $one - $two;
		$febs = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		febs = $febs  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 3) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["mars"];
		$stock_level = $one - $two;
		$mars = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		mars = $mars  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 5) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["mays"];
		$stock_level = $one - $two;
		$mays = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		mays = $mays  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 6) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["juns"];
		$stock_level = $one - $two;
		$juns = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		juns = $juns  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 7) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["juls"];
		$stock_level = $one - $two;
		$juls = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		juls = $juls  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 8) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["augs"];
		$stock_level = $one - $two;
		$augs = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		augs = $augs  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 9) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["seps"];
		$stock_level = $one - $two;
		$seps = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		seps = $seps  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 10) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["octs"];
		$stock_level = $one - $two;
		$octs = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		octs = $octs  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
elseif ($m == 11) 
{
	include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["novs"];
		$stock_level = $one - $two;
		$novs = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		novs = $novs  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}
else
{
include('connection.php');     
		 $query6 = "SELECT requestitem.rqmd1, report.stock_level,report.id, report.aprs, report.jans,  report.febs,  report.mars,  report.mays,  report.juns,  report.juls, report.augs,  report.seps,  report.octs,  report.novs,  report.des from report inner join requestitem on report.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
		//print_r($query6);
		$result1 = mysqli_query($mysqli, $query6);
		$row = mysqli_fetch_assoc($result1); 
		
		$one = $row["stock_level"];
		$two = $_POST["rqmd1"];
		$three = $row["des"];
		$stock_level = $one - $two;
		$des = $two +  $three;
		
		$query1 = "
		UPDATE report SET 
		stock_level = $stock_level,
		des = $des  
		WHERE id = '".$row["id"]."'
		";
		//print_r($query1);
		$statement = $connect->prepare($query1);
		$statement->execute();
}







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
            		
					$select = "SELECT requestitem.rname,requestitem.rdate,requestitem.adate,  requestitem.name,requestitem.quantity,requestitem.dept,requestitem.rname,requestitem.rdate,requestitem.rqmd1,requestitem.adate,requestitem.unit,requestitem.sunit,requestitem.category,requestitem.approved_qty,item.stock_level,item.id as id1 from item inner join requestitem on item.brand_name = requestitem.name WHERE requestitem.id = '".$_POST["hidden_id"]."'";
					//print_r($select);
		    		$result1 = mysqli_query($mysqli, $select);
					while($row = mysqli_fetch_assoc($result1)) 
					{
						$id = $row['id'];
						$rname = $row['rname'];
						$name = $row['name'];
						$rdate = $row['rdate'];
						$adate = $row['adate'];
						$quantity = $row['quantity'];
						$total = ($stock_level-$rqmd1);

						$dept = $row['dept'];
						$rname = $row['rname'];
						$rqmd1 = $row['rqmd1'];
						
						$category = $row['category'];
						$approved_qty = $row['approved_qty'];
						$item_id = $row['id1'];

						$adate = $row['adate'];
						$unit = $row['unit'];
						$sunit = $row['sunit'];
						$stock_level = $row['stock_level'];
				
				    }












		$query = "
		INSERT INTO approveditem (rname,name, dept, unit, sunit, adate, qis, qa,total, rdate, category,quantity,noti) VALUES ('$rname','$name', '$dept', '$unit', '$sunit',  '$adate', '$stock_level', $approved_qty, '$total', '$rdate', '$category','$quantity','1')
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