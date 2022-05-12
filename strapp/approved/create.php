


<?php
//including the database connection file

if($_POST)
	{
require_once '../dbconfig.php';


	$code =  $_POST['code'];
	$id =  $_POST['id'];
	$name =  $_POST['name'];
	$dept =  $_POST['dept'];
	$appv = $_POST['appv'];
	$qa =  $_POST['consult_fee'];
	$qis =  $_POST['glass_fee'];
	$adate =  $_POST['adate'];
    $total =  $_POST['total'];
	
		
	
			
			$stmt = $db_con->prepare("INSERT INTO approveditem (name,dept,appv,adate,qis,qa,total) 
		                       VALUES('$name','$dept','$appv','$adate','$qis','$qa','$total')");
			
			
			if($stmt->execute())
			{
				echo "Successfully Added <br>";
			}
			else{
				echo "Query Problem1";
			}
			
			$stmt = $db_con->prepare("INSERT INTO approveditem1 (name,dept,appv,adate,qis,qa,total) 
		                       VALUES('$name','$dept','$appv','$adate','$qis','$qa','$total')");
			
			
			if($stmt->execute())
			{
				echo "Successfully Added <br>";
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
		
	$stmt=$db_con->prepare("DELETE FROM approveditem WHERE emp_id=$id");
	$stmt->execute(array(':emp_id'=>$id));	
		
	if($stmt->execute())
		{
			echo "Successfully deleted";
		}
		else{
			echo "Query Problem3";
		}
	
	
	
	$stmt=$db_con->prepare("DELETE FROM dispatch WHERE emp_id=$id");
	$stmt->execute(array(':emp_id'=>$id));
	
	
	if($stmt->execute())
		{
			echo "Successfully deleted";
		}
		else{
			echo "Query Problem4";
		}
	
	
	
	$stmt=$db_con->prepare("DELETE FROM requestitem WHERE emp_id=$id");
	$stmt->execute(array(':emp_id'=>$id));	
	
	if($stmt->execute())
		{
			echo "Successfully deleted";
		}
		else{
			echo "Query Problem7";
		}
	
	
	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
		
		
		
	


?>





