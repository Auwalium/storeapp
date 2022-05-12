<?php
session_start();

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
    <title>Search item</title>
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
                        <h4 class="page-title">SEARCH ITEM</h4>
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
<center>
<form  action="" method="post">
<input type="text" name="search" width='100%' placeholder="Search with ITEM NAME ">
<input type="submit" name="submit1" value="Search ITEM " class='btn-sm btn-info'>
</form>
</center>
</div>

<div class='table-responsive'>
 
 
 
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>INCOME ACCOUNT</h4></th>

        </tr>
        </thead>
        <tr>
            <th>NAME</th>
            <th>COST</th>
            <th>DATE</th>
            <th>CATEGORY</th>
            <th>ORIGINAL STOCK LEVEL</th>
			 <th>PRESENT STOCK LEVEL</th>
			<th>DISPATCH</th>
            <th>COST DISPATCH</th>
			 <th>SALE PRICE</th>
		</tr>
	
       

        <?php

if(isset($_POST["submit1"])){
$search_value=$_POST["search"];

 require_once 'config.php';
$sql="update audit.stock set dispatch = (oslevel - slevel)";
$result=mysqli_query($mysqli,$sql);

$sql="update audit.stock set cdispatch = (dispatch * sprice)";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set oslevel = slevel where oslevel = '0'";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set dispatch = (oslevel - slevel) where dispatch = '0'";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set cdispatch = (sprice * dispatch) where cdispatch = '0'";
$result=mysqli_query($mysqli,$sql);


$sql="update stock set oslevel = slevel where oslevel = '0'";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set dispatch = (oslevel - slevel) where dispatch = '0'";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set cdispatch = (sprice * dispatch) where cdispatch = '0'";
$result=mysqli_query($mysqli,$sql);

 
$sql="SELECT SUM(oslevel) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row6=mysqli_fetch_array($result);


$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row7=mysqli_fetch_array($result);

$sql="SELECT SUM(slevel) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row21=mysqli_fetch_array($result);


$sql="SELECT SUM(dispatch) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row22=mysqli_fetch_array($result);

$sql="SELECT SUM(cdispatch) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row23=mysqli_fetch_array($result);

$sql="SELECT SUM(sprice) AS TotalItemsOrdered FROM stock where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row24=mysqli_fetch_array($result);

$sql="SELECT SUM(slevel) AS TotalItemsOrdered FROM requestitem1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row8=mysqli_fetch_array($result);


$sql="SELECT SUM(qty) AS TotalItemsOrdered FROM requestitem1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row9=mysqli_fetch_array($result);
 

		include('../includes/dbconnect.php');	
		$sql="SELECT * from stock";

        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['cost']; ?></td>
                    <td><?php echo $row['date']; ?></td>
					 <td><?php echo $row['category']; ?></td> 
					<td><?php echo $row['oslevel']; ?></td> 
					<td><?php echo $row['slevel']; ?></td> 
					<td><?php echo $row['dispatch']; ?></td> 
					<td><?php echo $row['cdispatch']; ?></td>
					<td><?php echo $row['sprice']; ?></td> 						
            
        <?php
            }
            }
        ?>

            </tr>
			
			<tr>
                    <td><b>TOTAL</b></td>
					<td><b><?php echo $row7[0]; ?></b></td>
                    <td><b></b></td>
                    <td></td>
					<td><?php echo "$row6[0]"; ?></td>                   
					<td><b><?php echo "$row21[0]"; ?></b></td>
                    <td><b><?php echo "$row22[0]"; ?></b></td>
					<td><b><?php echo "$row23[0]"; ?></b></td>
                    <td><b><?php echo "$row24[0]"; ?></b></td>
					<td></td>

            </tr>
         </tbody>   

</table>
      


<table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>SUB STORE ACCOUNT</h4></th>

        </tr>
        
        <tr>
            <th>NAME</th>
            <th>ORIGINAL STOCK LEVEL</th>
			<th>PRESENT STOCK LEVEL</th>
            <th>COST</th>
            <th>DATE</th>
			<th>SUB STORE NAME</th>
            <th>QTY SOLD</th>
            <th>AMOUNT SOLD</th>
			<th>UPDATED</th>
	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	
	include('../includes/dbconnect.php');
		
		$sql="SELECT * from stock1";
        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <?php $id = $row['id']; ?>
					<td><?php echo $row['oslevel']; ?></td>
					<td><?php echo $row['slevel']; ?></td>
                    <?php $id1 = $row['id1']; ?>
                    <td><?php echo $row['cost']; ?></td>
                    <td><?php echo $row['date']; ?></td>
					<td><?php echo $row['category']; ?></td> 
					<td><?php echo $row['dispatch']; ?></td>
					<td><?php echo $row['cdispatch']; ?></td> 
					<td><?php echo $row['updated']; ?></td> 					
            
        <?php
            }
            }
$sql="SELECT SUM(oslevel) AS TotalItemsOrdered FROM stock1 where name like '%$search_value%'";
 //print_r($sql);
$result=mysqli_query($mysqli,$sql);
$row13=mysqli_fetch_array($result);


$sql="SELECT SUM(slevel) AS TotalItemsOrdered FROM stock1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row14=mysqli_fetch_array($result);


$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM stock1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row15=mysqli_fetch_array($result);

$sql="SELECT SUM(dispatch) AS TotalItemsOrdered FROM stock1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row16=mysqli_fetch_array($result);


$sql="SELECT SUM(cdispatch) AS TotalItemsOrdered FROM stock1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row17=mysqli_fetch_array($result);

$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM requestitem1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row25=mysqli_fetch_array($result);


$sql="SELECT SUM(qty) AS TotalItemsOrdered FROM requestitem1 where name like '%$search_value%'";
$result=mysqli_query($mysqli,$sql);
$row26=mysqli_fetch_array($result);  
  
        ?>
		<tr>
                    <td><b>TOTAL</b></td>
					<td><b><?php echo $row13[0]; ?></b></td>
                    <td><b><?php echo $row14[0]; ?></b></td>
                    <td><b><?php echo "$row15[0]"; ?></b></td>
					<td></td>    
					<td></td>  					   
					<td><?php echo "$row16[0]"; ?></td>   
					<td><?php echo "$row17[0]"; ?></td> 					
					<td></td> 

            </tr>
                    </td>
            </tr>
         </tbody>   

</table>	  
	  

	  
	  

<table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>EXPENDITURE ACCOUNT</h4></th>

        </tr>
        
        <tr>
            
 
            <th>ITEM NAME</th>
            <th>PRICE</th>
			<th>STOCK LEVEL</th>
			<th>DATE</th>
			
   
	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	
	include('../includes/dbconnect.php');
		
		$sql="SELECT * from requestitem1 ";
        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                   
                    <td><?php echo $row['name']; ?></td>
					 <td><?php echo $row['cost']; ?></td> 
					<td><?php echo $row['qty']; ?></td>
					<td><?php echo $row['date']; ?></td>
				
                
        <?php
            }
            }
        ?>

           <tr>
                    <td><b>TOTAL</b></td>
					<td><b><?php echo $row25[0]; ?></b></td>
                    <td><b><?php echo $row26[0]; ?></b></td>
                    <td><b></b></td>

           
            </tr>
         </tbody>   

</table>

	
                    </div>
                    <!-- Column -->
                                </div>
                                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
