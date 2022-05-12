





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="main">
  
<!DOCTYPE html>
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
 
  <table class="table table-hover">
  
  
  <h1 style="text-decoration:underline"><center>
OUT OF STOCK ITEM  
  </center></h1>
  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "requisitionreport3.php"> 
       <center><h3 style="text-shadow:1px 2px black;"><input type="submit" id="inputbtn" name="search_submit" value="Click Search"></h3></center><br>
    </form>
  
  
  
</div>

 
</div>

<div class="Footer">
  
</div>
</div>
  
</div>

	
	
	
	
	<?php

include("config.php");


if(isset($_POST['search_submit'])){
  $name = $_POST['name'];
 $query="select * from applyitem ";
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
  <div class="container" style="text-align:center;">
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3><br>
  <table class="table table-hover">

  <thead>  <tr>
			<th> Name</th>
			<th> Description</th>
			<th>Quantity</th>
			<th>Why it is needed</th>
			<th>Cost Price</th>
			<th>Requested Dept/Unit</th>
			<th>Date</th>
			
			</tr>
		</thead>
		<tbody>,</center> ';

  while($row=mysqli_fetch_array($result)){

 
    
		$name=$row['name'];
		$descrip=$row['descrip'];
		$quantity=$row['quantity'];
    	$swy=$row['swy'];
    	$cprice=$row['cprice'];
		$dept=$row['dept'];
		$ddate=$row['ddate'];
	
	
	
    echo '<tr>
     
      	 <td>'.$name.'</td>
		<td>'.$descrip.'</td>
     	 <td>'.$quantity.'</td>
     	 <td>'.$swy.'</td>
		<td>'.$cprice.'</td>
		<td>'.$dept.'</td>
		<td>'.$ddate.'</td>

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

</div>


 <center><h3 style="text-shadow:1px 2px black;">



</h3></center><br>	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
