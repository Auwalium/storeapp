
<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
//echo ($currentDate);  
?> 


<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dispatchby = $_SESSION["username"];


$query="select * from stock1 where name='$name';";
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
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:100px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">ITEM STOCK LEVEL IN STORE </h3></center><br>
  <center><table class="table table-hover">
  <thead>  <tr>
			<th> Name</th>
			<th> ID</th>
			<th>Gategory</th>
			<th>Stock Level</th>
			<th>manufactured Date</th>
			<th>Expiry Date</th>
			
			</tr>
		</thead>
		<tbody>,</center> ';

  while($row=mysqli_fetch_array($result)){

 
    
		$id=$row['id'];
		$name=$row['name'];
    	$category=$row['category'];
    	$slevel=$row['slevel'];
		$mdate=$row['mdate'];
		$edate=$row['edate'];
	
	
	
    echo '<tr>
     
      	 <td>'.$name.'</td>
		<td>'.$id.'</td>
     	 <td>'.$category.'</td>
     	 <td>'.$slevel.'</td>
		<td>'.$mdate.'</td>
		<td>'.$edate.'</td>

    	 </tr><br>';
  

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
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dispatchby = $_SESSION["username"];
  	

  
$query="select * from requestitem where name='$name';";
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
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:100px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Various Departments and Units that Requested for the Item</h3></center><br>
  <center><table class="table table-hover">
  <thead>
    <tr>
			<th> Code</th>   
			<th> Name</th>
			<th>Requested Quantity</th>
			<th>Dept</th>
			<th>Request Date</th>
			<th>Approved Qty</th>
	  
    </tr>
  </thead>
  <tbody>,</center>
  ';

  while($row=mysqli_fetch_array($result)){
        
		$code=$row['id'];
		$name=$row['name'];
        $quantity=$row['quantity'];
		$dept=$row['dept'];
		$unit=$row['unit'];
		$sunit=$row['sunit'];
        $rdate=$row['rdate'];
		$rqmd1=$row['rqmd1'];
		$commentm=$row['commentm'];
    
		
    
	
	
	
    echo '<tr>
	 <td>'.$code.'</td>
      <td>'.$name.'</td>
      <td>'.$quantity.'</td>
	  <td>'.$dept.'</td>
      <td>'.$rdate.'</td>
	  <td>'.$rqmd1.'</td>
	  <br>
    </tr><br>';


}
}

 ?>	



<html lang="en">
  <head>
  <style>
  input[type=int],input[type=text],input[type=datet],input[type=submit]{
	  width:100%;
  }
  td{
	  font-size:18px;
	  color:black;
  }
  input[type=submit]{
	  background-color:green;
	  font-size:18px;
	  border-radius:15px;
	  color:white;
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">
  <div class="container" style="text-align:left;">




<div class="main">
  
   <form action="approval.php" method="post" name="form1">
		<table width="50%" align = center border="5">
			
			<tr> 
				<td>Item Code</td>
				<td><input type="int" name="code" value=<?php echo "$code" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Item id</td>
				<td><input type="int" name="id" value=<?php echo "$id" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			 
			<tr> 
				<td>Item name</td>
				<td><input type="text" name="name" value=<?php echo "$name" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr> <tr> </tr>  
			
			<tr> 
				<td>Dept </td>
				<td><input type="text" name="dept" value=<?php echo "$dept" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Unit</td>
				<td><input type="text" name="unit" value=<?php echo "$unit" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Sub Unit</td>
				<td><input type="text" name="sunit" value=<?php echo "$sunit" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dispatch By</td>
				<td><input type="int" name="appv"   value=<?php echo "$dispatchby" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity in Store</td>
				<td><input type="text" id="consult_fee"   name="slevel"   value=<?php echo "$slevel" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity Recommended by MD</td>
				<td><input type="text" id="glass_fee"     name="rqmd1"  value=<?php echo "$rqmd1" ?>></td>
			<tr> 
			<tr> 
				<td>Quantity Approved</td>
				<td><input type="text" id="glass_fee"     name="qabs"  value=<?php echo "$qabs" ?>></td>
			<tr> 
			<tr> 
				<td>Comment to MD if any</td>
				<td><input type="textbox" id="comment"     name="comment"  value=<?php echo "$comment" ?>></td>
			<tr> 
			<tr> 
				<td>Comment from MD</td>
				<td><input type="textbox" name="commentm"   value=<?php echo "$commentm" ?>  ></td>
			</tr>
				<td>Category</td>
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
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" name="adate"  value=<?php echo ($currentDate);  ?>></td>
			</tr>
			
	
			<tr>
			<td></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
			</tr>

			</tr>
 
 
 
 <h2 style="text-decoration:underline"><center>
  Complete this Form to Approve Item.
 </center></h2>
  </table>
	</form>   
</div>

<div><center></h2>

<a href="admin.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="search1.html" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Approve Another Item </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.html" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="search4.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Click Here to Delete any Request you dont want to approved</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center></h2>
</div>
<?php
//including the database connection file
include("config.php");



if(isset($_POST['Submit'])) {
	$comment = mysqli_real_escape_string($mysqli, $_POST['comment']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	$unit = mysqli_real_escape_string($mysqli, $_POST['unit']);
	$sunit = mysqli_real_escape_string($mysqli, $_POST['sunit']);
	
	$code = mysqli_real_escape_string($mysqli, $_POST['code']);
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$appv = mysqli_real_escape_string($mysqli, $_POST['appv']);
	$qa = mysqli_real_escape_string($mysqli, $_POST['slevel']);
	$qis = mysqli_real_escape_string($mysqli, $_POST['rqmd1']);
	$adate = mysqli_real_escape_string($mysqli, $_POST['adate']);
    $total = ($qa - $qis);
	
		
	
	$result = mysqli_query($mysqli, "INSERT INTO approveditem(category,unit,sunit,name,dept,appv,adate,qis,qa,total) 
		VALUES('$category','$unit','$sunit','$name','$dept','$appv','$adate','$qis','$qa','$total')");
		
		//display success message
		if  (mysqli_query($mysqli, $result) === false) {
    echo "Record inserted ";
} else {
    echo "Error inserted into approved item, not successful: " . $conn->error;
}
		
	$result = mysqli_query($mysqli, "INSERT INTO approveditem1(category,unit,sunit,name,dept,appv,adate,qis,qa,total) 
		VALUES($category','$unit','$sunit','$name','$dept','$appv','$adate','$qis','$qa','$total')");
		
		//display success message
		if  (mysqli_query($mysqli, $result) === false) {
    echo " successfully";
} else {
    echo "Error inserted into approved item, not successful: " . $conn->error;
}	
	$result = mysqli_query($mysqli, "INSERT INTO requestitem(comment) 
		VALUES('$comment')");	
		
		$update="update stock1 set slevel='".$total."' where id='".$id."'";
     mysqli_query($mysqli, $update) or die(mysqli_error());
    echo '<p style="color:white;">"Updated and.</a>"';
		
	

		
$result = mysqli_query($mysqli, "DELETE FROM requestitem WHERE id = '".$code."'");
 if  (mysqli_query($mysqli, "DELETE FROM requestitem WHERE id = '".$code."'") === TRUE) 
 
 {
    echo "<br> deleted successfully";
} else {
    echo "<br>Error deleting record: " . $conn->error;
}

$conn->close();
	}


?>



 </body style="background-color:#3498DB;color:white;text-align:center;">



</html>



















