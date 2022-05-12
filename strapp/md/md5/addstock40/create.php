<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$rby = $_POST['rby'];
		$qty = $_POST['qty'];
		$rdate = $_POST['rdate'];
		
 	
			
	$stmt = $db_con->prepare("INSERT INTO raised(name,qty,rdate,rby,category)
	VALUES('$name','$qty','$rdate','$rby','store')");
			

			if($stmt->execute())
			{
				echo "Success";
			}
			else{
				echo "Query Problem";
				}	
				
	

	$stmt = $db_con->prepare("UPDATE `applyitem` SET `noti`=0 WHERE `id` = '$id' ");
		
		
		if($stmt->execute())
			{
				echo "fully";
			}
			else{
				echo "Query Problem";
				}	
	}

?>