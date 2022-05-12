<?php
    $pid = $_GET['data'];
   
?>

<?php
 	$pid =  $_GET['pid']; 

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pharmacy Invoice Page</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">



        <div class="card o-hidden border-0 shadow-lg my-10" style="padding:2%; background-color:#skyblue;" >
        
            <!-- Nested Row within Card Body -->
           
              
                  <div class="text-center">
                    <h1 style="color:lavender; font-size:17px; font-weight:bold;">Drug Invoice For Patient with PID: <?php echo "$pid";   ?> </h1>
                  </div>


                 <table cellspacing="0" width="50%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        
		<th>Last Name</th>
        <th>country</th>
		<th>State</th>
        <th>city</th>
		<th>price</th>
        <th>Action</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>


	<?php  
	 $pid = $_GET['data'];
   
	$connect = mysqli_connect("localhost", "root", "", "testing");
	$sql="SELECT SUM(price) AS TotalItemsOrdered FROM tbl_sample where first_name = '$pid' and noti = 0";
	$result1 = mysqli_query($connect,$sql);
	$row6=mysqli_fetch_array($result1);

	
	$select = "update tbl_sample set price = last_name * city ";
	$result1 = mysqli_query($connect, $select);


	$connect = mysqli_connect("localhost", "root", "", "testing");
	$select = "SELECT * FROM tbl_sample where first_name = $pid and noti = 0 ";
	//print_r($select);
			$result1 = mysqli_query($connect, $select);
		
			while($row = mysqli_fetch_assoc($result1)) 
		

			{
			$id =	$row['id'];
             ?>	
            <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['country']; ?></td>
			<td><?php echo $row['state']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo "<a href='../ajax15?id1=$id' class='badge badge-primary'> EDIT</a>";?> </td>
			<td><?php echo "<a href='../ajax15?id2=$id' class='badge badge-primary'> DELETE</a>";?> </td>
			 </tr>

			 
            <?php 	
			}

			?>
			 <tr>
			<td>Total</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><?php echo "$row6[0]"; ?></td>
			 </tr>
			   </tbody>
        <hr>
                  
                  <div class="text-center">
                    <a class="small" href="register.html">Register a New User</a>
                  </div>
                
              
        
        </div>



    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>





</body>
</html>