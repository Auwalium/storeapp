<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$unit = $_POST['unit'];
		$sunit = $_POST['sunit'];
		$qty1 = $_POST['qty1'];
		$qty2 = $_POST['qty'];
		$model = $_POST['model'];
		$snum = $_POST['snum'];
		$rname = $_POST['rname'];
		$rdate = $_POST['rdate'];
		$qty = ($qty2 -$qty1);
 	
			
	$stmt = $db_con->prepare("INSERT INTO unused(name,dept,unit,sunit,qty2,qty1 ,model,snum,rname,rdate,qty) 
			
	VALUES('$name','$dept','$unit','$sunit','$qty2','$qty1','$model','$snum','$rname','$rdate','$qty')");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
				
		$stmt = $db_con->prepare("INSERT INTO unused1(name,dept,unit,sunit,qty2,qty1 ,model,snum,rname,rdate,qty) 
			
	VALUES('$name','$dept','$unit','$sunit','$qty2','$qty1','$model','$snum','$rname','$rdate','$qty')");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}			
		

	$stmt = $db_con->prepare("UPDATE `audit` SET `qty`='$qty' WHERE `id` = '$id' ");
		
		
		if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
	}

?>