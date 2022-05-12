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
                        <h4 class="page-title">SEARCH STAFF</h4>
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
<input type="text" name="search" width='100%' placeholder="Search with FILE NUMBER,FIRSTNAME,LASTNAME OR OTHERNAME ">
<input type="submit" name="submit1" value="Search Patient " class='btn-sm btn-info'>
</form>
</center>
</div>

<div class='table-responsive'>
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>BIO DATA</h4></th>

        </tr>
        
        <tr>
            
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>NATIONALITY</th>
            <th colspan='2'>PASSPORT</th>
            <th colspan='2'>View Staff Full Documentation</th>
            <th colspan="2">Action</th>

	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	
	include('../includes/dbconnect.php');

	
 $sql="select * from staff where fileNo like '%$search_value%' or LastName like '%$search_value%' or FirstName like '%$search_value%' or OtherNames like '%$search_value%'";
		
		//$sql="select * from patient_reg where phone = $search_value or pid = $search_value or firstname = $search_value or surname = $search_value";

        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['fileNo']; ?></td>
                    <?php $id = $row['id']; ?>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['otherNames']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td colspan='2'><?php echo $row['passport']; ?></td>
<td colspan='2'><?php echo"<a class='btn-sm btn-primary' href='full_documentation.php?id=$id'>View Full Staff Details</a>";?></td>
                    
                    
                    <td colspan='2'><?php $id =$row['id']; ?>
                        
            <?php echo "<a href='update_admin_biodata.php?id=$id'class='badge badge-primary'> Edit</a>";?> 
             

                    
                
        <?php
            }
            }
        ?>

                    </td>
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
