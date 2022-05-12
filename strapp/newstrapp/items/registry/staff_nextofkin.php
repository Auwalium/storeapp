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
    <title>Staff Documentation</title>
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
       <div class="page-wrapper" style='background-color:white;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id="page_head">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">STAFF DOCUMENTATION</h4>
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
            <div class="container-fluid" style='background-color:white;padding-left:3%;'>
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row" >
                    <!-- Column -->
<div class="col-md-6 col-lg-8 col-xlg-3" id="form_content">
   <div class="card" id='form'>
       
       
       <form action="" method="POST" enctype="multipart/form-data">
    <div class='table-responsive'>
    <?php
    
        include('../includes/dbconnect.php');
    $fid 		= $_SESSION['fileNo'];         
 $sql = "SELECT * from staff where fileNo =  '$fid' ";
    
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $sid	 	= $row['id'];
  	
  	}
  	?> 
    <form action="staff_nextofkin.php" method="POST">
    
   
        <!-- <a href='languages.php' style="float:right;"> Next</a> -->
	
    <div class="container">           
    
    <header>
    <h5 align="center">STAFF NEXT OF KIN DETAILS </h5>
    </header>
    <div style="background-color: green; color:lavender; text-align: center;">
    <?php
    session_start();
    $StaffID = $_SESSION['StaffID'];
    $fid = $_SESSION['fid'];
    error_reporting();
    $StaffID = $_POST['StaffID'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $DOB = $_POST['DOB'];
	$address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

        if (isset($_POST['submit'])){
        

        $_SESSION['StaffID'] = htmlentities($_POST['StaffID']);
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['sex'] = htmlentities($_POST['sex']);
        $_SESSION['DOB'] = htmlentities($_POST['DOB']);
		$_SESSION['address'] = htmlentities($_POST['address']);
        $_SESSION['phone'] = htmlentities($_POST['phone']);
        $_SESSION['email'] = htmlentities($_POST['email']);
         $sql = "INSERT INTO `staffnextofkin`( `StaffID`, `name`, `sex`, `DOB`, `address`, `phone`, `email`) 
		 VALUES ('$StaffID', '$name', '$sex', '$DOB', '$address', '$phone', '$email') ";

         if (mysqli_query($con, $sql)){
            echo "<p class='btn-lg btn-success'>Staff Next of Kin Details Created Successfully";
            ?>

            <script>

            setTimeout(function(){
            window.location.href = 'summary.php';
            }, 2000);

            </script>
          </p>
      <?php
           
           
         } else{
            echo "Something went wrong";
         }
        
    
}

?>
</div>
  
    <hr>
	    <input type="hidden" class="form-control" name="StaffID" value ="<?php echo $_SESSION['fileNo']; ?>"required><br>
		<label for="nameofnextofkin"><b>Name of Next Of Kin:</b></label><input type="text" class="form-control" name="name">
		<label for="addressofnextofkin"><b>Address of Next Of Kin:</b></label><input type="text" class="form-control" name="address">
		<label for="emailofnextofkin"><b>email of Next Of Kin:</b></label><input type="email" class="form-control" name="email">
		<label for="phoneofnextofkin"><b>Phone of Next Of Kin:</b></label><input type="text" class="form-control" name="phone">
	    <label for="DOBofnextofkin"><b>Date of Birth :</b></label><input type="date" class="form-control" name="DOB">
		<b>Gender : </b><br><br>
		<input type="radio" name="Gender" value="m">Male
		<input type="radio" name="Gender" value="f">Female
		<br><br><br>
   
    
 
    <hr>
        
    <div>
        <input type="submit" class="btn btn-info" value="Save" name="submit">
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
