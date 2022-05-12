<div style="background-color: green; color:lavender; text-align: center;">
	<?php
	session_start();
	include('../includes/dbconnect.php');
	
	error_reporting();
	$unit = $_POST['unit'] ;
	$creator = $_SESSION['username'];

	if(isset($_POST['submit'])){


		 $sql = "INSERT into unit (unit, created_by)
		 values('$unit','$creator') ";

		 if (mysqli_query($con, $sql)){
		 	echo "Unit Successfully Created";
			
			header('Location: create_unit.php');
		 } else{
		 	echo"unit Creation Failed";
		 	
		 }
		 	
		 
		 
	}




?>
</div>

