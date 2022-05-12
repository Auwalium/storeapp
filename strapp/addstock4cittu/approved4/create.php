<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$comments = $_POST['comments'];

		
		try{
		
		$stmt = $db_con->prepare("update requestitem set comments='$comments' where id='$id'");
		$stmt->bindParam(":comments", $comments);
	
		if($stmt->execute())
		{
			echo "Successfully updated";
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