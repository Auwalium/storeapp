
<?php

	$db_host = "sql213.byethost7.com";
	$db_name = "b7_26627836_nsuk";
	$db_user = "b7_26627836";
	$db_pass = "1066emedear";
	
	try{
		
		$con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

?>


<?php
//require_once 'dbconfig.php';

	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$brand_name = $_POST['brand_name'];
		$quantity = $_POST['quantity'];
		$dept = $_POST['dept'];
		$unit = $_POST['unit'];
		$sunit = $_POST['sunit'];
		$rname = $_POST['rname'];
		$rdate = $_POST['rdate'];
		$category = $_POST['category'];
		
		
		
		
		
			
	$stmt = $con->prepare("INSERT INTO requestitem(name, quantity,dept,unit,sunit,rname,rdate,category, noti,brand_name ) 
			
			VALUES('$name', '$quantity','$dept','$unit','$sunit','$rname','$rdate','$category','1','$brand_name' )");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	

	
	}

?>