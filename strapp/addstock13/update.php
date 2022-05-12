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
		
		$sname = $_POST['sname'];
		$sdate = $_POST['sdate'];
			
	

	$stmt = $db_con->prepare("UPDATE `unused` SET `sname`='$sname',`sdate`='$sdate' WHERE `id` = '$id' ");
		
		
		if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}
	$stmt = $db_con->prepare("UPDATE `unused1` SET `sname`='$sname',`sdate`='$sdate' WHERE `id` = '$id' ");
		
		
		if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	


				
	}

?>