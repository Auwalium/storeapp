	<div style="background-color: green; color:lavender; text-align: center;">
	<?php
	session_start();
	include('../includes/dbconnect.php');
	
	error_reporting();
	$writers_add = $_POST['writers_add'] ;
	$recipients_add = $_POST['recipients_add'] ;
	$salutation = $_POST['salutation'] ;
	$title = $_POST['title'] ;
	$content = $_POST['content'] ;
	

	if(isset($_POST['submit'])){


		 $sql = "INSERT into file (Department, created_by)
		 values('$dept','$creator') ";

		 if (mysqli_query($con, $sql)){
		 	echo "Department Successfully Created";
			
			header('Location: create_dept.php');
		 } else{
		 	echo"department Creation Failed";
		 	
		 }
		 	
		 
		 
	}




?>
</div>

