<?php

session_start();
/*$user = $_SESSION['username1'];
if(($_SESSION['username'] != procurement) and ($_SESSION['username'] != audit)) 
{
    header("Location: index.php");
}*/

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
                        <h4 class="page-title">SEARCH ITEM</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"><a href="" style="color:crimson; font-weight:bold;" >Welcome <?php echo $_SESSION['username']; ?></a></div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
            <
            !-- ============================================================== -->
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


<div class='table-responsive'>
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>COMPANIES AND THIER BIDDING PRICE ON ITEM</h4></th>

        </tr>
        
        <tr>
            <th>SUPPLIER ID</th>
            <th>PHONE</th>
            <th>SUPPLIER NAME</th>
            <th>ITEM NAME</th>
            <th>SUPPLIER PRICE</th>
			<th>CONTROL PRICE</th>
			<th>ITEM DESCRIPTION</th>
            
            <th colspan="2">Action</th>


	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
    
	$con = mysqli_connect("localhost","root", "","nsuk");	
	$sql="SELECT qoutation.id ,qoutation.supplierid as id1,supplier.name, supplier.phone, qoutation.price as price, item.generic_name, item.brand_name, item.price as price1 from qoutation inner join supplier on qoutation.supplierid = supplier.id inner join item on item.id =qoutation.itemid where item.id ='$search_value' AND qoutation.price <= item.price";
    //print_r($sql);
	$result = mysqli_query($con,$sql);
        
       
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <?php $id = $row['id']; ?>
					<td><?php echo $row['phone']; ?></td>
                    <?php $phone = $row['phone']; ?>
                    <td><?php echo $row['name']; ?></td>
					<?php $name = $row['name']; ?>
                    <td><?php echo $row['generic_name']; ?></td>
					<?php $generic_name = $row['generic_name']; ?>
					 <td><?php echo $row['price']; ?></td> 
					<td><?php echo $row['price1']; ?></td> 
					<td><?php echo $row['brand_name']; ?></td> 					
                    <?php $price = $row['price']; ?>
					<?php $descrip = $row['brand_name']; ?>
                    <td colspan='2'><?php $id =$row['id']; ?>
                        
            <?php echo "<a href='edit_form.php?price=$price&itemname=$generic_name&id=$id&supplier=$name&phone=$phone&descrip=$descrip' class='badge badge-primary'> CLICK TO SELECT</a>";?> 
             

                    
                
        <?php
            }
            }
        ?>

                    </td>
            </tr>
         </tbody>   

</table>

    </div>
  </div>
</div>	  

  

    </div>
  </div>
</div>	  	  
	  
	
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
