<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$address = $_POST['address'];
		$gphone = $_POST['gphone'];
		$sex = $_POST['sex'];
		$mname = $_POST['mname'];
		$surname = $_POST['surname'];
		$gname = $_POST['gname'];
		$age = $_POST['age'];
	
		
		try{
		
		$stmt = $db_con->prepare("INSERT INTO biodata(fname,address,gphone,sex,mname,surname,gname,age,noti)
						VALUES('$fname', '$address','$gphone','$sex','$mname','$surname','$gname','$age','1')");
			if($stmt->execute())
		{
			echo "Customer Added Successfully";
		}
		else{
			echo "Query Problem";
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>