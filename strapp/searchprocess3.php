




<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
  $dispatchby = $_SESSION["username"];
  	

  
  
 $query="select * from stock where name='$name';  ";

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
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Stock in Store</h3><br>
  <table class="table table-hover">
  <thead>
    <tr>
      
      <th>Item Name</th>
	  <th>Item Model</th>
	  <th>Receiving Officer</th>
	  <th> Item Code</th>
	  <th>Item ID</th>
      <th>Category</th>
      <th>Cost Price</th>
      <th>Unit Price</th>
      <th>Stock Level</th>
	  <th>Manufacture Date</th>
	  <th>Expiry Date</th>
    </tr>
  </thead></center>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    
    $name=$row['name'];
	 $model=$row['model'];
	$rname=$row['rname'];
	$code=$row['code'];
	 $id=$row['id'];
    $category=$row['category'];
    $cprice=$row['cprice'];
    $sprice=$row['sprice'];
    $slevel=$row['slevel'];
	$mdate=$row['mdate'];
	$edate=$row['edate'];
	
	
	
	
	
	
	
    echo '<tr>
      
      <td>'.$name.'</td>
	  <td>'.$model.'</td>
	   <td>'.$rname.'</td>
	  <td>'.$code.'</td>
	  <td>'.$id.'</td>
      <td>'.$category.'</td>
      <td>'.$cprice.'</td>
      <td>'.$sprice.'</td>
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
  

  
 <center><h3 style="text-shadow:1px 2px black; ">If no item name displayed, then it was not successfully added, or you did not type the correct name, else, Contact CITTU to rectify the problem</br></h3></center><br>
 </tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>



<a href="ItemInfo.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



















