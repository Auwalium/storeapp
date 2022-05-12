<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		$reg = $_POST['reg'];
		$amount1 = $_POST['amount1'];
		$receipt1 = $_POST['receipt1'];
		$date1 = $_POST['date1'];
		$amount2 = $_POST['amount2'];
		$receipt2 = $_POST['receipt2'];
		$date2 = $_POST['date2'];
		$amount3 = $_POST['amount3'];
		$receipt3 = $_POST['receipt3'];
		$date3 = $_POST['date3'];
		$total = $_POST['total'];
		$balance = ($total -($amount1+$amount2+$amount3));
		$total1 = ($amount1+$amount2+$amount3);
	
				
		$stmt = $db_con->prepare("update fee set balance = '".$balance."', amount1='".$amount1."', receipt1='".$receipt1."', date1='".$date1."', amount2='".$amount2."' , receipt2='".$receipt2."', date2='".$date2."', amount3='".$amount3."', receipt3='".$receipt3."', date3='".$date3."', total1='".$total1."' where reg = '".$reg."'");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}		
				
		
			
	}
	
	
	

?>