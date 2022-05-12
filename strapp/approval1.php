



<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dispatchby = $_SESSION["username"];
  	





$query="select * from stock where name='$name';";
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
  <body style="background-color:#3498DB;color:white;text-align:left; padding:8px 15px;      ">
  <div class="container1" style="text-align:left;">
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
  	

  
$query="select * from approveditem where name='$name';";
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
  <body style="background-color:#3498DB;color:white;text-align:center;  ">
  <div class="container" style="text-align:left;">
  <left><h3 style="text-shadow:1px 2px black;">Items Approved for the various Dept and Unit</h3></left><br>
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
        
		$code=$row['code'];
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
     
	 <td><input type="submit"  name="search_submit" value="approved"></td>
	 
	 
	 
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
  	

  
$query="select * from approveditem where dept='$dept';";
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
  <body style="background-color:#3498DB;color:white;text-align:right;  ">
  <div class="container1" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">All Items Requested by the same dept</h3></center><br>
  <center><table class="table table-hover">
  <thead>
    <tr>
       
		<th> Name</th>
          <th>Quantity</th>
	  <th>Dept</th>
          <th>Request Date</th>
      
    </tr>
  </thead>
  <tbody>,</center>
  ';

  while($row=mysqli_fetch_array($result)){
        
		
		$name=$row['name'];
        $quantity=$row['quantity'];
		$dept=$row['dept'];
        $rdate=$row['rdate'];
    
	
	
	
    echo '<center><tr>
	
      <td>'.$name.'  </td>
      <td>'.$quantity.'</td>
	  <td>'.$dept.'</td>
      <td>'.$rdate.'</td>
	  <td><input type="submit"  name="search_submit" value="approved"></td>
	  <br>
    </tr><br></center>';


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



<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'approval1.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>
  </head>
  <body>
    <form>
      
	  
	  
	  
<div class="main">
  

   <form action="approval1.php" method="post" name="form">
		<table width="25%" align = center border="5">
			
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
				<td>Dept or Unit</td>
				<td><input type="text" name="dept"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dispatch By</td>
				<td><input type="int" name="appv"   value=<?php echo "$dispatchby" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity in Store</td>
				<td><input type="text" id="consult_fee"   name="consult_fee"   value=<?php echo "$slevel" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity needed</td>
				<td><input type="text" id="glass_fee"     name="glass_fee"     placeholder="Enter Quantity Needed"></td>

			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" name="adate"></td>
			</tr>
			
				
				<script>
function sumBill(){
var consult, glasses,  total;
	consult	= parseInt(document.getElementById('consult_fee').value);
	glasses	= parseInt(document.getElementById('glass_fee').value);
	
	total 	= (consult - glasses );
	document.getElementById('total').value = total;
	
	return;
}
</script>

			
				
			<td><input type="submit" name="sum_bill" value="Subtract Stock" onclick="sumBill(); return false;"></td>
			<td><input type="text" id="total"         name="total" required /></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
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
<div style=" background-color:#0067ab; padding:2%; width:96%; ">
<?php
//including the database connection file
include("config.php");



if(isset($_POST['Submit'])) {


	$code = mysqli_real_escape_string($mysqli, $_POST['code']);
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$appv = mysqli_real_escape_string($mysqli, $_POST['appv']);
	$qa = mysqli_real_escape_string($mysqli, $_POST['consult_fee']);
	$qis = mysqli_real_escape_string($mysqli, $_POST['glass_fee']);
	$adate = mysqli_real_escape_string($mysqli, $_POST['adate']);
    $total = mysqli_real_escape_string($mysqli, $_POST['total']);
	
		
	
	$result = mysqli_query($mysqli, "INSERT INTO dispatch(name,dept,appv,adate,qis,qa,total) 
		VALUES('$name','$dept','$appv','$adate','$qis','$qa','$total')");
		
		//display success message
		if  (mysqli_query($mysqli, $result) === false) {
    echo "Record inserted into approve item, successfully";
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

</div>	
</div>

<div><center></h2>

	  
	  
	  
	
  </body>
</html>

  

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




<a href="store.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="search6.html" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Dispatch Another Item </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.html" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="search7.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Click Here to Delete any Request you dont want to dispatch</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center></h2>
</div>


 </body style="background-color:#3498DB;color:white;text-align:center;">



</html>









































