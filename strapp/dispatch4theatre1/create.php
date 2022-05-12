<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$comment = $_POST['comment'];

		
		try{
			
		$stmt = $db_con->prepare("update requestitem set comment='$comment' where id='$id'");
		$stmt->bindParam(":comment", $comment);
		$stmt->bindParam(":id", $id);
	
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