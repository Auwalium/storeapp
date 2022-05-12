




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
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th> Item Code</th>
      <th>Item ID</th>
	  <th>Item Name</th>
      <th>Serial No.</th>
      <th>Dept</th>
      <th>Supply name</th>
      <th>Stock Level</th>
	  <th>Depatch Date</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $code=$row['code'];
    $id=$row['id'];
	 $name=$row['name'];
    $snum=$row['sname'];
    $dept=$row['dept'];
    $sname=$row['sname'];
    $qunn=$row['qunn'];
	$ddate=$row['ddate'];
	
	
    echo '<tr>
      <td>'.$code.'</td>
      <td>'.$id.'</td>
	  <td>'.$name.'</td>
      <td>'.$sname.'</td>
      <td>'.$dept.'</td>
      <td>'.$sname.'</td>
      <td>'.$squnn.'</td>
	  <td>'.$ddate.'</td>
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
else{
echo 'There is no report on the selected item, check back latter</br>';
}
?>

</div>










<a href="store.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Login Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<?php
