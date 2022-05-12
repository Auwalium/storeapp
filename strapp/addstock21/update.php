<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$dept = $_POST['dept'];
		$unit = $_POST['unit'];
		$sunit = $_POST['sunit'];
		$rname = $_POST['rname'];
		$rdate = $_POST['rdate'];
		$category = $_POST['category'];
		
		
		
		
		
			
	$stmt = $db_con->prepare("INSERT INTO requestitem(name, quantity,dept,unit,sunit,rname,rdate,category ) 
			
			VALUES('$name', '$quantity','$dept','$unit','$sunit','$rname','$rdate','$category' )");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	

	$stmt = $db_con->prepare("INSERT INTO requestitem1(name, quantity,dept,unit,sunit,rname,rdate,category ) 
			
			VALUES('$name', '$quantity','$dept','$unit','$sunit','$rname','$rdate','$category' )");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}					
		
		
	}

?>