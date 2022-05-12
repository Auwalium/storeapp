
<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
echo ($currentDate);  
?> 

<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dept = $_POST['dept'];
  $dispatchby = $_SESSION["username"];
  	

  
  
 $query="select * from stock where name='$name'  ;";
 $result=mysqli_query($mysqli,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Stock in Store</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      
     
	  <th>Item ID</th>
	   <th>Item Name</th>
      <th>Category</th>
      <th>Cost Price</th>
      <th>Sale Price</th>
      <th>Stock Level</th>
	  <th>Manufacture Date</th>
	  <th>Expiry Date</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $code=$row['code'];
    $name=$row['name'];
	 $id=$row['id'];
    $category=$row['category'];
    $cprice=$row['cprice'];
    $sprice=$row['sprice'];
    $slevel=$row['slevel'];
	$mdate=$row['mdate'];
	$edate=$row['edate'];
	
    echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
	  
      <td>'.$category.'</td>
      <td>'.$cprice.'</td>
      <td>'.$sprice.'</td>
      <td>'.$slevel.'</td>
	  <td>'.$mdate.'</td>
	  <td>'.$edate.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
  </body>
   
</html>';

}
else{
echo '</br>';
}
?>

<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dispatchby = $_SESSION["username"];
  	

  
$query="select * from approveditem where name='$name';";
 $result=mysqli_query($mysqli,$query);


  echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Items Approved for the various Dept and Unit</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
	  <th> Code</th>
	  <th> Name</th>
	  <th>Dept</th>
	  <th> Approved by:</th>
	  <th>Approved Date</th>
	  <th>Quantity Approved</th>
    </tr>
  </thead>
  <tbody>,</center>
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
     
    </tr><br>';

  


}
}




 ?>	
 <html>
 <head>
 </head>
 <body>



<div class="main">
  
   <form action="searchprocess.php" method="post" name="form1">
		<table width="50%" align ="center" border="0">
			
			
			<tr> 
				<td>Item id</td>
				<td><input type="int" name="id" value=<?php echo "$id" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Item code</td>
				<td><input type="text" name="code" value=<?php echo "$code" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Item name</td>
				<td><input type="text" name="name" value=<?php echo "$name" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr> <tr> </tr>  
			<tr> 
				<td>Serial Number</td>
				<td><input type="text" name="snum"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dept </td>
				<td><input type="int" name="dept" value=<?php echo "$dept" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td> Unit</td>
				<td><input type="int" name="unit" value=<?php echo "$unit" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Sub Unit</td>
				<td><input type="int" name="sunit" value=<?php echo "$sunit" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dispatch By</td>
				<td><input type="text" name="appv"   value=<?php echo "$dispatchby" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity in Store</td>
				<td><input type="text" id="consult_fee"   name="slevel"   value=<?php echo "$slevel" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity Approved</td>
				<td><input type="text" id="glass_fee"     name="qis" value=<?php echo "$qis" ?>>   </td>

			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr>
			
			
			
			
			<tr>
			<tr> 
				<td>Item category</td>
				<td>
				  <select name="category">
                  
				
				                <option value = "Hospital Equipment">Hospital Equipment</option>
				                <option value = "Office Equipment">Office Equipment</option>
								<option value = "Office Stationary">Office Stationary</option>
								<option value = "Maintenace Items">Maintenace Items</option>
								<option value = "Scrap">Scrap</option>
								<option value = "Radiology Goods">Radiology Goods</option>
								<option value = "Dental Goods">Dental Goods</option>
								<option value = "Theater Goods">Theater Goods</option>
								<option value = "Laboratory Goods">Laboratory Goods</option>
								
				</select>
				
				</td>
				</tr> 
			<tr> 
				<td>Date</td>
				<td><input type="text" name="adate"  value=<?php echo ($currentDate) ?>  ></td>
			</tr>
			<td></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
			</tr>

			</tr>
 
 <h1 style="text-decoration:underline"><center>
  Complete this Form to Dispatch Item.
 </center></h1>
  </table>
	</form>   
	
	<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");



if(isset($_POST['search_submit'])) {
	
	
	
	
	
	
}




if(isset($_POST['Submit'])) {



	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$code = mysqli_real_escape_string($mysqli, $_POST['code']);

	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$appv = mysqli_real_escape_string($mysqli, $_POST['appv']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$unit = mysqli_real_escape_string($mysqli, $_POST['unit']);
	$sunit = mysqli_real_escape_string($mysqli, $_POST['sunit']);
	$sname = mysqli_real_escape_string($mysqli, $_POST['sname']);
	$qis = mysqli_real_escape_string($mysqli, $_POST['slevel']);
	$quann = mysqli_real_escape_string($mysqli, $_POST['qis']);
	

	$adate = mysqli_real_escape_string($mysqli, $_POST['adate']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
  
		$total 			= ( $qis-$quann);

	
	$result = mysqli_query($mysqli, "INSERT INTO dispatch1(name,dept, unit, sunit,appv,adate,qis,category) 
		VALUES('$name','$dept','$unit','$sunit','$appv','$adate','$qis','$category')");
		
	
	$result = mysqli_query($mysqli, "INSERT INTO dispatch(name,dept, unit, sunit,appv,adate,qis,category) 
		VALUES('$name','$dept','$unit','$sunit','$appv','$adate','$qis','$category')");
		
		//display success message
		echo "<font color='green'>Record registration is successfull.";
		
		$update="update stock set slevel='".$total."' where id='".$id."'";
     mysqli_query($mysqli, $update) or die(mysqli_error());
    echo '<p style="color:#FF0000;">"Record Updated Successfully.</a>"';
		echo "<br/><a href='search.html'>Back</a>";
	
	
	$result = mysqli_query($mysqli, "DELETE FROM approveditem WHERE emp_id = '".$code."'");
 if  (mysqli_query($mysqli, "DELETE FROM approveditem WHERE id = '".$code."'") === TRUE) 
 
 {
   echo "<br>Error deleting record ";
} else {
  echo "<br>:Record deleted successfully " . $conn->error;
}



	
$conn->close();

	
	
	
	
	}
	
	//<script>
	//function subtractQuantity(){
	//var quantity, cslevel,  total;
	//quantity	= parseInt(document.getElementById('quantity').value);
	//cslevel	= parseInt(document.getElementById('cslevel').value);
	
	//total 	= (quantity - cslevel );
	//document.getElementById('total').value = total;
	
	//return;
	//}
	//</script>
	
	//
	//$result2 = mysqli_query($mysqli, "UPDATE stock SET slevel =  '$total' WHERE  name = $name";
?>


</body>
</html>
	
	
</div>




<a href="store.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




<?php
