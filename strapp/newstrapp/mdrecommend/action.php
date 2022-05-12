<?php

//action.php

 session_start();
include('dbconfig.php');
if(isset($_POST["action"]))
{
	
	if($_POST["action"] == "fetch_single")
	{
	
		$query = "
		SELECT * FROM requestitem WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['first_name'] = $row['name'];
			$output['last_name'] = $row['dept'];
		}
		echo json_encode($output);
	}
	

	if($_POST["action"] == "update")
	{	
   
	include 'connection.php';
	$user = $_SESSION['username1'];
	$query1 ="SELECT * from users where username = '$user' ";
		$result =mysqli_query($mysqli, $query1);  
		while($row = mysqli_fetch_assoc($result))
		$role = $row['role']; 
{
			    
		if($role == 'md')
	 {
	include('dbconfig.php');
	$currentTimeinSeconds = time();  
	$currentDate = date('Y-m-d', $currentTimeinSeconds); 
	$query = "
		UPDATE requestitem 
		SET rqmd1 = '".$_POST["rqmd1"]."', 
		adate = '$currentDate',noti = 3
		WHERE id = '".$_POST["hidden_id"]."'
		";
		
	  }

	   elseif($row['role'] == 'hn' )
	 {
	include('dbconfig.php');
	$currentTimeinSeconds = time();  
	$currentDate = date('Y-m-d', $currentTimeinSeconds); 
	$query = "
		UPDATE requestitem 
		SET nursing = '".$_POST["rqmd1"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		//print_r($query);
	 
		
	 }

	 elseif($row['role'] == 'hcs' )
	 {
	include('dbconfig.php');
	$currentTimeinSeconds = time();  
	$currentDate = date('Y-m-d', $currentTimeinSeconds); 
	$query = "
		UPDATE requestitem 
		SET rqmd = '".$_POST["rqmd1"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		//print_r($query);
	 
		
	 }

	 elseif($row['role'] == 'admin' )
	 {
	include('dbconfig.php');
	$currentTimeinSeconds = time();  
	$currentDate = date('Y-m-d', $currentTimeinSeconds); 
	$query = "
		UPDATE requestitem 
		SET rqa = '".$_POST["rqmd1"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		//print_r($query);
	 
		
	 }
	 elseif($row['role'] == 'account' )
	 {
	include('dbconfig.php');
	$currentTimeinSeconds = time();  
	$currentDate = date('Y-m-d', $currentTimeinSeconds); 
	$query = "
		UPDATE requestitem 
		SET rqs = '".$_POST["rqmd1"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		//print_r($query);
	 
		
	 }
	else

	 {
	include('dbconfig.php');
	 $query = "
		UPDATE requestitem 
		SET rqa = '".$_POST["rqmd1"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		
	 }

}

		
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated and Visible to the <br>Next Officer for Necessary Action</p>';
	}
	if($_POST["action"] == "delete")
	{include('dbconfig.php');
	 $currentTimeinSeconds = time();  
	 $currentDate = date('Y-m-d', $currentTimeinSeconds); 
		$query = "UPDATE requestitem set noti = 5, adate = '$currentDate' WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Request Declined Successfully</p>';
	}

}
?>