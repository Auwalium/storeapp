




<?php

include("config.php");


if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
 $query="select * from approveditem ";
 $result=mysqli_query($mysqli,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link  href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  
  </head>
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:;">
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3></center><br>
  <table class="table table-condensed">
  <thead>
    <tr>
      <th> Item Code</th>
      <th>Item Name</th>
	  <th>Dept/Unit</th>
      <th>Approved By:.</th>
      <th>Date Approved</th>
      <th>Quantity Approved</th>
    
	 
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $code=$row['emp_id'];
	 $name=$row['name'];
    $dept=$row['dept'];
	$appv=$row['appv'];
	$adate=$row['adate'];
	 $qis=$row['qis'];
   
	
	
    echo '<tr>
      <td>'.$code.'</td>
	  <td>'.$name.'</td>
	  <td>'.$dept.'</td>
      <td>'.$appv.'</td>
      <td>'.$adate.'</td>
      <td>'.$qis.'</td>
       <td><form class="form-inline my-2 my-lg-0" method="post" action= "search7.html"><input type="submit"  name="dispatch" value="Dispatch"></td>
	  
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';

}

?>

<?php
//including the database connection file
include("config.php");



if(isset($_POST['dispatch'])) {




		$code=$row['code'];
		$name=$row['name'];
		$dept=$row['dept'];
		$appv=$row['appv'];
		$adate=$row['adate'];
		$qis=$row['qis'];


	
	
	$query="select * from stock where name='$name';";
	$result=mysqli_query($mysqli,$query);	
	
	if($row=mysqli_fetch_array($result)){

 
    
		$id=$row['id'];
		
    	$category=$row['category'];
    	$slevel=$row['slevel'];
		$mdate=$row['mdate'];
		$edate=$row['edate'];
		$total=$slevel-$qis;
	}
	
	 echo '<tr>
      <td>'.$code.'</td>
	  <td>'.$name.'</td>
	  <td>'.$dept.'</td>
      <td>'.$appv.'</td>
      <td>'.$adate.'</td>
      <td>'.$qis.'</td>
	  <td>'.$total.'</td>
	 </tr>';
	
	
	
	$result = mysqli_query($mysqli, "INSERT INTO dispatch(name,dept,appv,adate,qis,total) 
		VALUES('$name','$dept','$appv','$adate','$qis','$total')");
		
		//display success message
		if  (mysqli_query($mysqli, $result) === false) {
    echo "Record inserted into dispatch item, successfully";
} else {
    echo "Error inserted into approved item, not successful: " . $conn->error;
}
		
		
		
		
		$update="update stock set slevel='".$total."' where id='".$id."'";
     mysqli_query($mysqli, $update) or die(mysqli_error());
    echo '<p style="color:white;">"Record Updated Successfully.</a>"';
		
	

		
$result = mysqli_query($mysqli, "DELETE FROM approveditem WHERE code = $code");
 if  (mysqli_query($mysqli, "DELETE FROM approveditem WHERE code = $code") === TRUE) 
 
 {
    echo "<br>Record deleted successfully";
} else {
    echo "<br>Error deleting record: " . $conn->error;
}

$conn->close();
	}


?>









<a href="search5.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Click Here to search by department </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="approveditem.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




<?php
