


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
 Report By Category
  </center></h1>
  
  <form class="form-inline my-2 my-lg-0" method="post" action= "reportbycategory.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter category name" aria-label="Search" name="category">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
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
  $category = $_POST['category'];
 $query="select * from dispatch where category = '$category' ";
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
	    <th>Sub Unit </th>
	  <th>Approved By</th>
      <th>Quantity Dispatch</th>
      <th>Date Dispatch</th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $name=$row['name'];
    $dept=$row['dept'];
	$unit=$row['unit'];
	$subunit=$row['subunit'];
    $appv=$row['appv'];
    $qis=$row['qis'];
    $adate=$row['adate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
	   <td>'.$unit.'</td>
	    <td>'.$subunit.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      
	  <td>'.$adate.'</td>
	   <td>'.$category.'</td>
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



  <h1 style="text-decoration:underline"><center>
 Report By Item Name
  </center></h1>
  
  <form class="form-inline my-2 my-lg-0" method="post" action= "reportbycategory.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter item name" aria-label="Search" name="name">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit1" value="Search">
    </form>
<?php
if(isset($_POST['search_submit1'])){
  $name = $_POST['name'];
 $query="select * from dispatch where name = '$name' ";
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
      <th>Dept/Unit Dispatch to</th>
	  <th>Approved By</th>
      <th>Quantity Dispatch</th>
      <th>Date Dispatch</th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $name=$row['name'];
    $dept=$row['dept'];
    $appv=$row['appv'];
    $qis=$row['qis'];
    $adate=$row['adate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      
	  <td>'.$adate.'</td>
	   <td>'.$category.'</td>
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
	
	
	<h1 style="text-decoration:underline"><center>
	
	Report By Dept
  </center></h1>
  
  <form class="form-inline my-2 my-lg-0" method="post" action= "reportbycategory.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter Dept/Unit name" aria-label="Search" name="dept">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit2" value="Search">
    </form>
	
<?php
if(isset($_POST['search_submit2'])){
  $dept = $_POST['dept'];
 $query="select * from dispatch where dept = '$dept' ";
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
      <th>Dept/Unit Dispatch to</th>
	  <th>Approved By</th>
      <th>Quantity Dispatch</th>
      <th>Date Dispatch</th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $name=$row['name'];
    $dept=$row['dept'];
    $appv=$row['appv'];
    $qis=$row['qis'];
    $adate=$row['adate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      
	  <td>'.$adate.'</td>
	   <td>'.$category.'</td>
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
	
	
	
	<h1 style="text-decoration:underline"><center>
	
	Report By Stock Level
  </center></h1>
  
  <form class="form-inline my-2 my-lg-0" method="post" action= "reportbycategory.php">
      <input class="form-control mr-sm-2" type="int" placeholder="enter stock level" aria-label="Search" name="slevel">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit3" value="Search">
    </form>
	
<?php
if(isset($_POST['search_submit3'])){
  $slevel = $_POST['slevel'];
 $query="select * from stock1 where slevel <='$slevel'
";
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
      <th>Supplier</th>
	  <th>Model</th>
      <th>Stock level</th>
      <th>Manufactured date</th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $name=$row['name'];
    $rname=$row['rname'];
    $model=$row['model'];
    $slevel=$row['slevel'];
    $edate=$row['edate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$rname.'</td>
      <td>'.$model.'</td>
      <td>'.$slevel.'</td>
      
	  <td>'.$edate.'</td>
	   <td>'.$category.'</td>
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



</h3></center><br>	
</body>
</html>
