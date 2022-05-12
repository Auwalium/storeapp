
<?php
//including the database connection file

if($_POST)
	{
require_once 'dbconfig.php';


	$code =  $_POST['code'];
	$id =  $_POST['id'];
	$name =  $_POST['name'];
	$quantity =  $_POST['quantity'];
	$dept =  $_POST['dept'];
	$appv = $_POST['appv'];
	 
	 $qis =  $_POST['qis'];
	$adate =  $_POST['adate'];
    $total =  $_POST['total'];
	
		
	try{
			
			$stmt = $db_con->prepare("INSERT INTO approveditem (name,dept,qis,adate,) 
		                       VALUES('$name','$dept','$qis','$adate')");
							   
			$stmt = $db_con->prepare("INSERT INTO approveditem (name,dept,adate,qis, appv) 
		                       VALUES('$name','$dept','$adate','$qis','$appv')");
			
			
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem1";
			}
   
		$stmt = $db_con->prepare("update stock1 set slevel='".$total."' where id='".$id."'");
		$stmt->bindParam(":slevel", $total);
		
		
		
		
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem2";
		}
		$stmt=$db_con->prepare("DELETE FROM requestitem WHERE id='".$id."'");
		
		$stmt=$db_con->prepare("DELETE FROM approveditem WHERE emp_id= '".$code."'");
		$stmt->execute(array(':id'=>$code));
	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
		
		
		
	}


?>
