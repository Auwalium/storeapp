
<?php
//including the database connection file

if($_POST)
	{
require_once 'dbconfig.php';


	
	$name =  $_POST['name'];
	$qty =  $_POST['qty'];
	$aqp =  $_POST['aqp'];
	$acp = $_POST['acp'];
	$adate =  $_POST['adate'];
  
	try{
			
			$stmt = $db_con->prepare("INSERT INTO company (name,qty,aqp,acp,adate) 
		                       VALUES('$name','$qty','$aqp','$acp','$adate')");
							   
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem1";
			}
		
	}

	}
?>
