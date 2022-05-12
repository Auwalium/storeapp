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
        <?php include('../includes/other_report.php');?>
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
                        ,<center><h4 class="page-title">STORE ITEMS SEARCH REPORT</h4></center>
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

<?php

$connect = mysqli_connect("localhost", "emedion", "Password@1", "inventory2");
$query = "SELECT * FROM item ";
$result = mysqli_query($connect, $query);
echo "<select id='dept' name='search'>";
            echo"<option>Select Item Name To Search </option>";
                while($row = mysqli_fetch_array($result)) {
                   
                 $sid = $row['sid'];  
                  $fno = $row['brand_name'];
                     
                    echo "<option value='" . $row['id']." '>" .$row['generic_name']."=======>".$fno."</option>"; 
         
                }
                
            echo "</select>";
?>






<input type="submit" name="submit1" value="Search ITEM " class='btn-sm btn-info'>
</form>
</center>
</div>

<div class='table-responsive'>
 <table class='table' id='summary_table'>      
        <thead>
        <tr>
            <th colspan="13"><h4>STORE SUPPLY RECORD</h4></th>

        </tr>
        </thead>
        <tr>
            <th>GENERIC NAME</th>
            <th>BRAND NAME</th>
            <th>DATE CREATED</th>
            <th>QUANTITY SUPPLIED</th>
            <th>SUPPLY PRICE</th>
			
             <th>SUPPLIER NAME</th>
			
		</tr>
	
       

        <?php

if(isset($_POST["submit1"])){
$search_value=$_POST["search"];
require_once 'config.php';

    $sql="SELECT SUM(quantity_supply) AS TotalItemsOrdered FROM supply where item_id = $search_value";
    //print_r($sql);
    $result=mysqli_query($mysqli,$sql);
    $row90=mysqli_fetch_array($result);
    
    $sql="SELECT SUM(qa) AS TotalItemsOrdered FROM dispatch inner join item on item.generic_name = dispatch.name where item.id = $search_value";
    $result=mysqli_query($mysqli,$sql);
    $row91=mysqli_fetch_array($result); 

include('../includes/dbconnect.php');	
$sql="SELECT item.generic_name, item.brand_name, item.stock_level, supplier.name, supply.supply_price, 
supply.quantity_supply,supply.date_created from item INNER JOIN supply on item.id = supply.item_id
INNER JOIN supplier on supplier.id =supply.supply_id where supply.item_id = $search_value";

$result = mysqli_query($con,$sql);
   // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['generic_name']; ?></td>
                    <td><?php echo $row['brand_name']; ?></td>
                    <td><?php echo $row['date_created']; ?></td>
					 <td><?php echo $row['quantity_supply']; ?></td> 
					<td><?php echo $row['supply_price']; ?></td> 
					
                    <td><?php echo $row['name']; ?></td> 
										
            
        <?php
            }
            }
        ?>

            </tr>
			
			<tr>
                    <td><b>TOTAL</b></td>
					<td><b><?php echo $row7[0]; ?></b></td>
                    <td><b></b></td>
                    <td><?php echo "$row90[0]"; ?></td>
					<td><?php echo "$row6[0]"; ?></td>                   
					<td><b><?php echo "$row21[0]"; ?></b></td>
                    <td><b><?php echo "$row22[0]"; ?></b></td>
					<td><b></b></td>
                    <td><b><?php echo "$row24[0]"; ?></b></td>
					<td></td>

            </tr>
         </tbody>   

</table>
      


<table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>STORE DISPATCH RECORD</h4></th>

        </tr>
        
        <tr>
            <th>ITEM NAME</th>
            <th>REQUESTING DEPT</th>
			<th>UNIT</th>
            <th>QUANTITY APPROVED</th>
            <th>REQUEST DATE</th>
			<th>SUB STORE NAME</th>
            <th>REQUEST NAME</th>
            <th>COLLECTOR NAME</th>
			<th>FILE NO.</th>
	  </thead>
    </tr>
        <?php  
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	include('../includes/dbconnect.php');	
		$sql="SELECT * from dispatch inner join item on item.brand_name = dispatch.name where item.id = $search_value";
       // print_r($sql);
        $result = mysqli_query($con,$sql);
         
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <?php $id = $row['id']; ?>
					<td><?php echo $row['dept']; ?></td>
					<td><?php echo $row['unit']; ?></td>
                    <?php $id1 = $row['id1']; ?>
                    <td><?php echo $row['qa']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
					<td><?php echo $row['category']; ?></td> 
					<td><?php echo $row['rname']; ?></td>
					<td><?php echo $row['cname']; ?></td> 
					<td><?php echo $row['cfile']; ?></td> 					
            
        <?php
            }
            }
        ?>
		<tr>
                    <td><b>TOTAL</b></td>
					<td><b><?php echo $row13[0]; ?></b></td>
                    <td><b><?php echo $row14[0]; ?></b></td>
                    <td><b><?php echo "$row91[0]"; ?></b></td>
					<td></td>    
					<td><?php echo "$row9[0]"; ?></td>  					   
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
            <th colspan="13"><h4>ITEM SUMMARY INFORMATION</h4></th>
        </tr>  
        <tr>
            <th>ITEM NAME</th>
            <th>ITEM BRAND</th>
            <th>CURRENT STOCK LEVEL</th>
            <th>UN-ACCOUNTED ITEMS</th>
            <th>TOTAL SUPPLIED QUANTITY</th>
            <th>TOTAL DISPATCH QUANTITY</th>
    </thead>
        </tr>

    <?php
    if(isset($_POST["submit1"])){
    $search_value=$_POST["search"];
        
    $sql="SELECT * from item where id = $search_value";
    $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
        
            ?>
            <tbody>
                <tr>
                   
                    <td><?php echo $row['generic_name']; ?></td>
                     <td><?php echo $row['brand_name']; ?></td> 
                    <td><?php echo $row['stock_level']; ?></td>
                    <td><?php echo $row90[0] - $row91[0]; ?></td>
                    <td><?php echo $row90[0]; ?></td>
                    <td><b><?php echo "$row91[0]"; ?></b></td>
                
                
        <?php
            }
            }

        ?>

          
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
