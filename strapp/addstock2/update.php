<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$snum = $_POST['snum'];
		$lr = $_POST['lr'];
		$lb = $_POST['lb'];
		$qty = $_POST['qty'];
		$model = $_POST['model'];
		$hname = $_POST['hname'];
		$cdate = $_POST['cdate'];
		$cqbhu = $_POST['cqbhu'];
		
		
		
		
		$stmt = $db_con->prepare("INSERT INTO audit(name,hname, qty,snum,lb, lr, model,cdate,cqbhu) 
		VALUES('$name','$hname','$qty','$snum','$lb','$lr','$model','$cdate','$cqbhu')");	
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
				
		
		
	}

?>