<?php
require_once 'dbconfig.php';
		$vnumber1 = $_POST['vnumber1'];
		$vreceived = $_POST['vreceived'];
		$storename = $_POST['storename'];
		$lpono = $_POST['lpono'];
		$received_of = $_POST['received_of'];
		$check_by = $_POST['check_by'];
		$card_no = $_POST['card_no'];
		$store_of = $_POST['store_of'];
		$date1 = $_POST['date1'];
		
		
$stmt = $db_con->prepare("INSERT INTO `voucher`(`vnumber1`, `vreceived`, `storename`, `lpono`, `received_of`, `check_by`, `card_no`, `store_of`,`date1`) 
		VALUES ('$vnumber1', '$vreceived', '$storename', '$lpono', '$received_of', '$check_by', '$card_no', '$store_of', '$date1')");	
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
header("Location:yes2.php");

?>
