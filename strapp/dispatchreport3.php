





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
 DISPATCH REPORT
  </center></h1>
  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "dispatchreport1.php"> 
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
 $query="select * from dispatch ";
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
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th> Item Name</th>
      <th>Dept</th>
	   <th>Unit</th>
	  <th>Approved By</th>
      <th>Quantity Requested</th>
	   <th>Quantity Dispatch</th>
      <th>Date Dispatch</th>
	   <th>Recieved By</th>
      <th>File NO.</th>
	   <th>Dispatch By</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $name=$row['name'];
    $dept=$row['dept'];
	$unit=$row['unit'];
    $appv=$row['appv'];
    $qis=$row['qis'];
	$qabs=$row['qabs'];
    $rdate=$row['rdate'];
	$cname=$row['cname'];
    $cfile=$row['cfile'];
	$dby=$row['dby'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
	  <td>'.$unit.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      <td>'.$qabs.'</td>
	  <td>'.$rdate.'</td>
	  <td>'.$cname.'</td>
	  <td>'.$cfile.'</td>
	  <td>'.$dby.'</td>
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

</div>


 <center><h3 style="text-shadow:1px 2px black;">


<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</h3></center><br>	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
