

<?php
//including the database connection file

if($_POST)
	{
require_once 'dbconfig.php';


	$code =  $_POST['code'];
	$id =  $_POST['id'];
	$name =  $_POST['name'];
	$dept =  $_POST['dept'];
	$appv = $_POST['appv'];
	$qa =  $_POST['consult_fee'];
	$qis =  $_POST['glass_fee'];
	$adate =  $_POST['adate'];
    $total =  $_POST['total'];
	
		
	try{
			
			$stmt = $db_con->prepare("INSERT INTO dispatch (name,dept,appv,adate,qis,qa,total) 
		                       VALUES('$name','$dept','$appv','$adate','$qis','$qa','$total')");
			
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem1";
			}
   
		$stmt = $db_con->prepare("update stock set slevel='".$total."' where id='".$id."'");
		$stmt->bindParam(":slevel", $total);
		
		
		
		
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem2";
		}
		$stmt=$db_con->prepare("DELETE FROM stock WHERE slevel=''");
		
	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
		
		
		
	}


?>
