<?php
require_once '../dbconfig.php';

include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
	
	if($_POST)
	{
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$category = $_POST['category'];
		$slevel1 = $_POST['slevel1'];
		$uqty = $_POST['uqty'];
		$uby = $_POST['uby'];
		$edate = $_POST['edate'];
		$slevel = ($slevel1 + $uqty);
		
		
		$stmt = $db_con->prepare("UPDATE stock SET  slevel=:es, noti = 1 WHERE id=:id");
		
		$stmt->bindParam(":es", $slevel);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
		
			
	$stmt = $db_con->prepare("INSERT INTO updatestock(name,category, descrip ,slevel,edate,uqty,uby,slevel1) 
			
			VALUES('$name', '$category','$descrip' ,'$slevel','$edate','$uqty','$uby','$slevel1')");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	

		
		
	}

?>