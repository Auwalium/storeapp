<?php

session_start();
$sid = $_GET['sid']; 
$did = $_GET['did'];

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
    <title>Print LPO</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css">
     <script type="text/javascript" src="jquery-3.3.1/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="bootstrap-4.3.1/js/bootstrap.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
function printDiv(divName){

  var printContents= document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;
   document.body.innerHTML = printContents;
  window.print();
 //document.body.innerHTML = originalContents;
 
}

</script>
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
    <div id="main-wrapper" id="printableArea">
	 <div class="table-responsive" id="printableArea">
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
        <?php include('../includes/department_unit_sidebar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
				     <input type="submit" id="print" name="print" value="Print This Letter" onclick="printDiv('printableArea');">  

                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">LOWEST BIDDED LPO Generated Today </h4>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row"style='background-color:whitesmoke;'>
                   
                    <!--  <div class="col-md-6 col-lg-2 col-xlg-3" >
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    
                                
                    <!-- Column -->
                    
          <div class='row'> 
          <div class="col-md-6 col-lg-12 col-xlg-3"  id='large_card' style='background-color:#444;' >
         <div class="card card-hover" id='card' >
         <div class='table-responsive' style='background-color:WHITESMOKE;padding:1%; width:100%;' > 
    


	

<div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Directorate" role="tab">LPO GENERATED TODAY</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Department" role="tab">LPO GENERATED FOR SPECIFIED SUPPLIER</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Unit" role="tab">LPO GENERATED FOR SPECIFIED REVOLVING FUND</a> </li>
			 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Unit1" role="tab"> LPO GENERATED WITHIN SPECIFIED DATE</a> </li>

        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
        <div class="tab-pane active" id="Directorate" role="tabpanel">
        <div class="p-10">
 
 <table cellspacing="0" width="90%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
      		
		<th>ID</th>
		<th>NAME</th>
		<th>SUPPLIER</th>
		
		<th>PRICE</th>
		<th>PHONE</th>
	
        </tr>
        </thead>
        <tbody>
        <?php
       // require_once 'dbconfig.php';
	   
	   // variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
$today = ($currentDate); 
         include("../includes/dbconnect.php");
      $sql = "SELECT lpo.name,lpo.name,lpo.id,lpo.amount,supplier.phone from supplier inner join lpo
       on lpo.suppliername = supplier.name where date = '$today' ";
   //PRINT_R($sql);
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
		$w_add 		= $row['name'];	
    	$r_add 		= $row['suppliername'];	
    	$salute 	= $row['amount'];	
    	$title 		= $row['id'];
		$phone 		= $row['phone'];
			
			?>
			<tr>
			<td><?php echo $title; ?></td>
			<td><?php echo $w_add; ?></td>
			<td><?php echo $r_add; ?></td>
			<td><?php echo $salute; ?></td>
			<td><?php echo $phone; ?></td>
		
			</tr>
			<?php
		}
		?>
		 </tbody>
        </table>   
                           
                     </div>
                </div>
				
   <div class="tab-pane  p-20" id="Department" role="tabpanel">
    <div class="p-10">
   
<?php include_once("includes/frame.php");?>
<form class="search" action="" method="post">

<table class="px_sum">
<tr>
<td>SPECIFY: Start Date</td><td><input type="date" name="search" placeholder="yyyy/mm/dd"></td>
<td>End Date</td><td><input type="date" name="search1" placeholder="yyyy/mm/dd"></td>
<td>Supplier Name</td><td><input type="text" name="supplier" placeholder="enter supplier name"></td>
<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table>
</form>


<table class="px_sum">

<tr><td>
<table cellspacing="0" width="90%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
      		
		<th>ID</th>
		<th>ITEM NAME</th>	
		<th>SUPPLIER</th>	
		<th>PRICE</th>
		<th>AMOUNT</th>
		<th>DESCRIPTION</th>
	
        </tr>
        </thead>
        <tbody>
<?php
if(isset($_POST["search"])){
 $search_value =  $_POST["search"];
 $search_value1 = $_POST["search1"];
 $supplier = $_POST["supplier"];
	
	   include("../includes/dbconnect.php");
      $sql = "SELECT lpo.name,lpo.suppliername,lpo.id,lpo.amount,lpo.descrip,supplier.phone from supplier inner join lpo
       on lpo.suppliername = supplier.name  where CAST(date AS DATE)>='$search_value' AND CAST(date AS DATE)<='$search_value1' and supplier.name ='$supplier'";
   
   
   print_r($sql);
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
		$w_add 		= $row['name'];	
    	$r_add 		= $row['name1'];	
    	$salute 	= $row['amount'];	
    	$title 		= $row['id'];
		
		$descrip 		= $row['descrip'];
			?>
			<tr>
			<td><?php echo $title; ?></td>
			<td><?php echo $w_add; ?></td>
			<td><?php echo $r_add; ?></td>
			<td><?php echo $salute; ?></td>
			<td><?php echo $descrip; ?></td>
			</tr>
			<?php
		}

	mysqli_close($con);
	}
        
?>
<h4> LPO Generated Between <?php echo $search_value;?> and <?php echo$search_value1;?> For Supplier <?php echo $supplier ;?> </h4>
</td></tr>
</table>
    </tbody>
    </table>  

                                
                     </div>
                </div>
				
   
 <div class="tab-pane p-20" id="Unit" role="tabpanel">
 <div class="p-10">
 
<?php include_once("includes/frame.php");?>
<form class="search" action="" method="post">

<table class="px_sum">
<tr>
<td>SPECIFY: Start Date</td><td><input type="date" name="search" placeholder="yyyy/mm/dd"></td>
<td>End Date</td><td><input type="date" name="search1" placeholder="yyyy/mm/dd"></td>
<td>REVOLVING FUND Name</td><td><input type="text" name="rfn" placeholder="enter revolving fund name"></td>
<td><input type="submit" name="submit9" value="Search"></td>
</tr>
</table>
</form>


<table class="px_sum">

<tr><td>
<table cellspacing="0" width="90%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
      		
		<th>ID</th>
		<th>NAME</th>
		<th>SUPPLIER</th>
		<th>PRICE</th>
		<th>DESCRIPTION</th>
		<th>CATEGORY</th>
	
    
        </tr>
        </thead>
        <tbody>
<?php
if(isset($_POST["submit9"])){
 $search_value =  $_POST["search"];
 $search_value1 = $_POST["search1"];
  $rfn = $_POST["rfn"];
	
	   include("../includes/dbconnect.php");
      $sql = "SELECT lpo.name,lpo.suppliername,lpo.id,lpo.amount,lpo.descrip,lpo.category,supplier.phone from supplier inner join lpo
	   on lpo.suppliername = supplier.name where CAST(date AS DATE)>='$search_value' AND CAST(date AS DATE)<='$search_value1' AND category ='$rfn' ";
   print_r($sql);
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
		$w_add 		= $row['name'];	
    	$r_add 		= $row['suppliername'];	
    	$salute 	= $row['amount'];	
    	$title 		= $row['id'];
		$category 	= $row['category'];
		$descrip 	= $row['descrip'];
			?>
			<tr>
			<td><?php echo $title; ?></td>
			<td><?php echo $w_add; ?></td>
			<td><?php echo $r_add; ?></td>
			<td><?php echo $salute; ?></td>
			
			<td><?php echo $descrip; ?></td>
			<td><?php echo $category; ?></td>
			</tr>
			<?php
		}

	mysqli_close($con);
	}
        
?>
<h4> LPO Generated Between <?php echo $search_value;?> and <?php echo$search_value1;?> For Revolving Fund <?php echo $rfn ;?> </h4>

</td></tr>
</table>
    </tbody>
    </table>  


 
                </div>
            </div>
<div class="tab-pane p-20" id="Unit1" role="tabpanel">
 <div class="p-10">
 
<?php include_once("includes/frame.php");?>
<form class="search" action="" method="post">

<table class="px_sum">
<tr>
<td>Start Date</td><td><input type="date" name="search" placeholder="yyyy/mm/dd"></td>
<td>End Date</td><td><input type="date" name="search1" placeholder="yyyy/mm/dd"></td>
<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table>
</form>


<table class="px_sum">

<tr><td>
<table cellspacing="0" width="90%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
      		
		<th>ID</th>
		<th>NAME</th>
		<th>SUPPLIER</th>
		
		<th>PRICE</th>
		<th>PHONE</th>
	
        </tr>
        </thead>
        <tbody>
<?php
if(isset($_POST["search"])){
 $search_value =  $_POST["search"];
 $search_value1 = $_POST["search1"];
	
	   include("../includes/dbconnect.php");
      $sql = "SELECT lpo.name,lpo.suppliername,lpo.id,lpo.amount,supplier.phone from supplier inner join lpo
	   on lpo.suppliername = supplier.name where CAST(date AS DATE)>='$search_value' AND CAST(date AS DATE)<='$search_value1' ";
   //print_r($sql);
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
		$w_add 		= $row['name'];	
    	$r_add 		= $row['suppliername'];	
    	$salute 	= $row['amount'];	
    	$title 		= $row['id'];
		$phone 		= $row['phone'];
			?>
			<tr>
			<td><?php echo $title; ?></td>
			<td><?php echo $w_add; ?></td>
			<td><?php echo $r_add; ?></td>
			<td><?php echo $salute; ?></td>
			<td><?php echo $phone; ?></td>
			</tr>
			<?php
		}

	mysqli_close($con);
	}
        
?>
<h4> LPO Generated Between <?php echo $search_value;?> and <?php echo$search_value1;?> </h4>
</td></tr>
</table>
    </tbody>
    </table>  


 
                </div>
            </div>
        </div>
		 <div class="alert alert-info">
	
        
		<center><a href="../registry/dashboard.php" class="btn btn-warning">Back</a>
		
     
        </div>
    </div>

       
                 
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>

			</div>   
            
			
			</div>   
			
			</div> 
			</div> 
			</div> 
			</div> 
			</div> 
			</div> 
			</div>
</div> 
			</div> 
			</div> 
			</div>			
  			