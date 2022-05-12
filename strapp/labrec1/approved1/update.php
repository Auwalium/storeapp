<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		$commentm = $_POST['commentm'];
		$comments = $_POST['comments'];
		$qabs = $_POST['qabs'];
		$id = $_POST['id'];
		$code = $_POST['code'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$unit = $_POST['unit'];
		$sunit = $_POST['sunit'];
		$qa = $_POST['rqmd1'];
		$appv = $_POST['appv'];
		$qis = $_POST['qis'];
		$qa = $_POST['qa'];
		$category = $_POST['category'];
		$adate = $_POST['adate'];
		$rdate = $_POST['rdate'];
		$slevel = $_POST['slevel'];
		$total = ($slevel-$qabs);
		
	
		$stmt = $db_con->prepare("INSERT INTO approveditem1(name,dept,unit,sunit,qis,qa,appv,adate,total,rdate,qabs,comments,commentm,category) VALUES('$name', '$dept','$unit','$sunit', '$qis', '$qa','$appv','$adate','$total','$rdate','$qabs','$comments','$commentm','$category')");
			if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
			
			$stmt = $db_con->prepare("INSERT INTO approveditem(name,dept,unit,sunit,qis,qa,appv,adate,total,rdate,qabs,comments,commentm,category) VALUES('$name', '$dept','$unit','$sunit', '$qis', '$qa','$appv','$adate','$total','$rdate','$qabs','$comments','$commentm','$category')");
			if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
	
		
		$stmt = $db_con->prepare("UPDATE requestitem SET comments=:en    WHERE id=:id");
		$stmt->bindParam(":en", $comments);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	
	
	$stmt=$db_con->prepare("DELETE FROM `requestitem` WHERE `requestitem`.`id` =:id");
	$stmt->execute(array(':id'=>$id));	
	
	
	
	
		$stmt = $db_con->prepare("update stock set slevel='".$total."' where id='".$code."'");
		$stmt->bindParam(":slevel", $total);
	
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
			}
	
	}
	
	
	

?>