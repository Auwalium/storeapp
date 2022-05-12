<?php
session_start();
include("auth.php");
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
    <title>Create Department</title>
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
        <?php include('../includes/admin_sidebar.php');?>
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
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DEPARTMENT MANAGER</h4>
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
                    <!-- Column -->
                    <div class="col-md-6 col-lg-10 col-xlg-3" style='background-color:#444;broder-radius:10px;padding:2%;' >
                        <div class="card card-hover" style='background-color:#ccc;broder-radius:10px;padding:2%;border-radius:10px;'>
                        
                        <form method='POST' action='submit_dept.php'>
	<header>
	<h4 align="center">Create New Department </h4>
	</header>
	
	
	<div>
	<hr>
		<label for="department">New Department:</label>
		<input type="text" class="form-control" name="dept" placeholder='Enter The Name of Department'  reqired>
		
	</div>	
		
	<div style='margin-top:1%;'>
		<input type="submit" class="btn-lg btn-info" name="submit" value="Submit">
	</div>   
            </form>                
                        </div>
                        
  <div class='table-responsive' > 
  <table class='table' id='department_table'>
  <thead style='color:lavender;'>
  <th> ID </th><th> Department </th> <th> Created By </th><th> Date Created/Time </th> 
  <th> Edit</th><th> Delete</th> 
  <thead>
  
  <?php 
  
  include('../includes/dbconnect.php');
  
  $sql ="SELECT * FROM department ORDER BY DID ASC";
  
  $result = mysqli_query($con,$sql);
  
  while($row = mysqli_fetch_array($result)){
  
            $did 		= $row['DID'];
	    $depart 		= $row['Department'];
	    $created_by 	= $row['created_by'];
	    $date	 	= $row['date_created'];
	    
  echo"<tr style='color:lavender;'><td> $did </td> <td>$depart</td> <td>$created_by</td> <td>$date</td><td> <a href='edit_department.php?id=$did'> Edit</a> </td> <td><a href='delete_department.php?id=$did'> Delete</a> </td> </tr>";
  
  }
  mysqli_close($con);
  
  ?>
  
  </table>
  
                       
                        
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
