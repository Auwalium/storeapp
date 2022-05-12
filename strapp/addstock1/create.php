

<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		
	$name           = $_POST['name'];
	$aname 			= $_POST['aname'];
	$qty       = $_POST['qty'];
	$snum           =  $_POST['snum'];
	$lb           =  $_POST['lb'];
	$lr           =  $_POST['lr'];
	$model           =  $_POST['model'];
	$date          =  $_POST['date'];

	
		$stmt = $db_con->prepare("INSERT INTO audit(name,aname, qty,snum,lb, lr, model,date) 
		VALUES('$name','$aname','$qty','$snum','$lb','$lr','$model','$date')");	
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
			
		
		
	}

?>
