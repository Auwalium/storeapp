<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		
		
		$reg = $_POST['id'];
		$year = $_POST['year'];
		$term = $_POST['term'];
		$sclass = $_POST['sclass'];
		$total = $_POST['total'];
		
	
		$stmt = $db_con->prepare("INSERT INTO `session` (`reg`, `year`, `term`, `sclass`) VALUES ('$reg', '$year', '$term', '$sclass')");
			

			if($stmt->execute())
			{
				echo "Successfully";
}
		else{
				echo "Query Problem";
				}	
				
		
				
		$stmt = $db_con->prepare("update biodata set noti = 4 where id = $reg");
			

			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}		
				
		$stmt = $db_con->prepare("INSERT INTO `fee` (reg, term, total, year, sclass) VALUES ('$reg', '$term', '$total', '$year', '$sclass')");
		if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
			
	}
	
	
	

?>