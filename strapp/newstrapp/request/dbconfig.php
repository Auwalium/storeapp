<?php
	$db_host = "sql213.byethost7.com";
	$db_name = "b7_26627836_nsuk";
	$db_user = "b7_26627836";
	$db_pass = "1066emedear";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>

