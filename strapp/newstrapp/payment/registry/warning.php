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
    <title>Warning Page</title>
    <!-- Custom CSS -->
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
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
        <?php include('../includes/staff_sidebar.php');?>
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
                        <h4 class="page-title">Instruction Page</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"  id='staff_details'>
                                
                                 <?php

include('../includes/dbconnect.php');
$fid 	= $_SESSION['username']; 
$query ="SELECT * FROM stfbiodata where StaffID=$fid";
$result =mysqli_query($con, $query);  
              
              while ($row=mysqli_fetch_assoc($result)){  
                         
                    $fname= $row['FirstName'];
                    $lname= $row['LastName'];
                          
                 echo"<a href='../logout.php'style='color:gold;font-weight:bold;'>"."Welcome"." ".$fname." "."$lname"." </a>";
                 echo"<p style='color:#fff; font-weight:normal'; text-decoration:underline;>"."File Number"."  :". "FMC/KEF/PER/".$fid."</p>";
                                
                                
                         }
                         mysqli_close($con);
                         ?>       
                                
                                
                                </div>
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
                <div class="row" >
                    <!-- Column -->
                   <div class="col-md-6 col-lg-11 col-xlg-3"  id='large_card' style='background-color:#444;' >
                        <div class="card card-hover" id='card' style='background-color:lavender;' > 
      <div class='table-responsive'style='background-color:lavender;'>
        
        
         <div style='background-color:red;color:white;padding:2%;border-radius:10px;font-weight:normal;'> 
        <h3> Please Note that you can not apply for any other thing until your file returns to the registry.</h3>
        
        <h3> Always check your dashboard to confirm the location of your file per time. </h3>
     
    </div>
  
  
  
  
   </div>
    </div>
     </div>
     </div>
                    </div>
                    <!-- Column -->
                                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
