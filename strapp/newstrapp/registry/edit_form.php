

<?php

session_start();
$user = $_SESSION['username1'];
if(($_SESSION['username'] != procurement) and ($_SESSION['username'] != audit)) 
{
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Search Staff</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('../includes/header_admin.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('../includes/registry_sidebar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
         <div class="page-wrapper" style='background-color:lavender;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id='header-label'>
                <div class="row" style='background-color:lavender;'>
                    <div class="col-12 d-flex no-block align-items-center">
                        <h2 class="page-title"><center>SEARCH ITEM AND PREPARE LPO</center></h2>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"><a href="" style="color:crimson; font-weight:bold;" >Welcome <?php echo $_SESSION['username']; ?></a></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row" style="background-color:whitesmoke; padding:2%; box-shadow:0px 0px 5px 5px grey;">
                    <!-- Column -->
     <div class="search" style='background-color:whitesmoke;'>
<a href='auto' style="float:right;"> Back</a>
</div>

<!DOCTYPE html>
<html>
<head>
<style>
div.cities {
    
  display: flex;
  background-color:#6CC;
  width:1000px;
  height:auto;
  margin-left:auto;
  margin-right:auto;
}
div.cities1 {
 flex:8;
}div.cities2 {
flex:2;
}
</style>
</head>
<body>

<div class="cities">


<div class="cities1">
<?php
include_once 'dbconfig.php';
session_start();
    $dispatchby = $_SESSION['user']['username'];
	$itemname 	= $_GET['itemname'];
    $id 		= $_GET['id'];
	$price 		= $_GET['price'];	
	$supplier 	= $_GET['supplier'];
	$phone 		= $_GET['phone'];	
	$descrip 	= $_GET['descrip'];	
	
	
	
?>

<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
 
?> 
<style type="text/css">
<h3> SUBMIT LPO </h3>
#dis{
	display:none;
}
</style>
    
<h3></h3>
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 	<BR><CENTER><h3> SUBMIT LPO </h3></CENTER>
            <td>Item Name</td>
            <td><input type='hidden' name='name' class='form-control' value='<?php echo $itemname; ?>' required> <?php echo $itemname; ?></td>
        </tr>
		
		<tr>
            <td>LPO Prepared By</td>
            <td><input type='text' name='auditor' class='form-control' value='<?php echo $_SESSION['username1']; ?>' required></td>
        </tr>
		<tr>
            <td>Supplier Name</td>
            <td><input type='text' name='suppliername' class='form-control' value='<?php echo $supplier ; ?>' required></td>
        </tr>
       <tr>
            <td>Supplier Phone</td>
            <td><input type='text' name='phone' class='form-control' value='<?php echo $phone ; ?>' required></td>
        </tr>
		 <tr>
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control' value='<?php echo $descrip ; ?>' required></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type='text' name='qty' class='form-control' </td>
        </tr>
	   <tr> 
		<td>LPO category</td>
		<td><select name="category">
				<option value = "Radiology">Radiology</option>
				<option value = "Dental">Dental</option>
				<option value = "Laboratory">Drugs</option>
				<option value = "Theater">lens</option>
				<option value = "Store">Central Store</option>								
		</select></td>
		</tr> 
		
		<tr>
            <td>Amount</td>
            <td><?php echo $price; ?></td>
        </tr>
		<input type='hidden' name='amount' value='<?php echo $price; ?>'/>
		
		<tr>
            <td>Date</td>
            <td><input type="hidden" name="date" value="<?php echo $currentDate; ?>"><?php echo $currentDate; ?></td>
        </tr>
       
 
        <tr>
            <td colspan="2">
          
			 <button type="submit" name='btn-update' value="SEND" class='btn btn-success'style='text-align:center;' onclick="this.style.display='hide'";>
    		<span class="glyphicon glyphicon-plus"></span> Add
			</button>
            </td>
        </tr>
 
		</table>
		</form>
     <?php
	 if(isset($_POST['btn-update'])){
		$name = $_POST['name'];
		$auditor= $_POST['auditor'];
		$suppliername = $_POST['suppliername'];
		$amount = $_POST['amount'];
		$date = $_POST['date'];
		$category = $_POST['category'];
        $qty = $_POST['qty'];
	 $stmt = $db_con->prepare("INSERT INTO `lpo`( name, auditor, suppliername, amount, date, category,phone,descrip,qty) VALUES 
			
		( '$name', '$auditor', '$suppliername', '$amount', '$date', '$category', '$phone', '$descrip','$qty')");
		//print_r($stmt);	

			if($stmt->execute())
			{
				echo "";
			}
			else{
				echo "";
				}	
	 }
	 
	 
	  if(isset($_POST['submit'])){
		$id = $_POST['id'];
	 $stmt = $db_con->prepare("DELETE FROM `lpo` WHERE id =$id");
	 //print_r($stmt);
		
			if($stmt->execute())
			{
				echo "";
			}
			else{
				echo "";
				}	
	 }
	 ?>
     
    </div>

<div class="cities2">
 <div class="container">
     
        <div class="content-loader">
		<h3> PREPARED LPO </h3>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
		 <th>supplier Name</th>
		 <th>Amount</th>
		 <th>category</th>
		<th>Phone</th>
		<th>Description</th>
		<th>Action</th>
      
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        $stmt = $db_con->prepare("SELECT * FROM lpo  where date = '$currentDate' ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			   <?php $id2 = $row['id']; ?>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['suppliername']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['descrip']; ?></td>	
		  <td> <?php echo "<form method='post' action='#'><input type = 'hidden' name='id' value='$id2'><input type = 'submit' name ='submit' value ='delete' ></form>";?> </td>	
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        </div>
        </div>

    </div>
</div>	  
   
</div>
</div>

 <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
</body>
</html>








           
