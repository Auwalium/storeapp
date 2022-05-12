<div style="background-color: green; color:lavender; text-align: center;">
	<?php
	session_start();
	include('../includes/dbconnect.php');
	
	error_reporting();
	$dept = $_POST['dept'] ;
	$creator = $_SESSION['username'];

	if(isset($_POST['submit'])){


		 $sql = "INSERT into department (Department, created_by)
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

