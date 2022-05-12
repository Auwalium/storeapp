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
            <div class="page-breadcrumb" id="header-label">
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
	          
	<header>
	<h5 align="center">STAFF BIO-DATA FORM </h5>
	</header>
	
	<div style="background-color: transparent; color:lavender; text-align: center;">
	
	<?php
	
	include('../includes/dbconnect.php');
	
	error_reporting();
	$fileNo = mysqli_real_escape_string($con, $_POST['fileNo']);
	$LastName = mysqli_real_escape_string($con,$_POST['lastName']) ;
	$FirstName = mysqli_real_escape_string($con,$_POST['firstName']) ;
	$OtherNames = mysqli_real_escape_string($con,$_POST['otherNames']) ;
	$DOB = mysqli_real_escape_string($con,$_POST['dob']) ;
	$Gender = mysqli_real_escape_string($con,$_POST['gender']) ;
	$nationality = mysqli_real_escape_string($con,$_POST['nationality']) ;
	$folder = "STAFF/".$filename;
	
	$ippis = mysqli_real_escape_string($con, $_POST['ippis']);
	$PoliticalWard = mysqli_real_escape_string($con, $_POST['PoliticalWard']);
	$RegionalCode = mysqli_real_escape_string($con, $_POST['RegionalCode']);
	$StateCode = mysqli_real_escape_string($con, $_POST['StateCode']);

	if(isset($_POST['submit'])){
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "STAFF/".$filename;
		move_uploaded_file($tempname, $folder);
		$_SESSION['fid']= $fileNo;
		$fid = $_SESSION['fid'];
		$_SESSION['fileNo'] = htmlentities($_POST['fileNo']);
		$_SESSION['lastName'] = htmlentities($_POST['lastName']);
		$_SESSION['firstName'] = htmlentities($_POST['firstName']);
		$_SESSION['otherNames'] = htmlentities($_POST['otherNames']);
		$_SESSION['dob'] = htmlentities($_POST['dob']);
		$_SESSION['gender'] = htmlentities($_POST['gender']);
		$_SESSION['nationality'] = htmlentities($_POST['nationality']);
		
		$_SESSION['ippis'] = htmlentities($_POST['ippis']);
		$_SESSION['PoliticalWard'] = htmlentities($_POST['PoliticalWard']);
		$_SESSION['RegionalCode'] = htmlentities($_POST['RegionalCode']);
		$_SESSION['StateCode'] = htmlentities($_POST['StateCode']);
 
 $sql = "INSERT into staff (fileNo, lastName, firstName, otherNames, dob, gender, nationality, passport, ippis,PoliticalWard,RegionalCode,StateCode)
		 values ('$fileNo', '$LastName', '$FirstName', '$OtherNames', '$DOB', '$Gender', '$nationality', '$folder', '$ippis', '$PoliticalWard', '$RegionalCode', '$StateCode') ";
//print_r($sql);
		 if (mysqli_query($con, $sql)){
		 	echo "<p class='btn-lg btn-success'>Staff Biodata Entered Successfully.";
			?>

            <script>

            setTimeout(function(){
            window.location.href = 'staff_contact.php';
            }, 2000);

            </script>
          </p>
      <?php

		 } else{
			 echo "<p class='btn-lg btn-success'>Staff File Number Already Exist.";
			?>

            <script>

            setTimeout(function(){
            window.location.href = 'new_staff_documentation.php';
            }, 2000);

            </script>
          </p>
      <?php
		 }
	 
	}

?>
</div>

	<hr>
		<label for="personnelnumber"><b>File Number FMC/KEF/PER/:</b></label><input type="number" class="form-control" name="fileNo">
		<label for="LastName"><b>Last Name:</b></label><input type="text" class="form-control" name="lastName" reqired>
		<label for="FirstName"><b>First Name:</b></label><input type="text" class="form-control" name="firstName" required>
		<label for="othernames"><b>Other Names:</b></label><input type="text" class="form-control" name="otherNames" >
		<label for="dateofbirth"><b>Date of Birth:</b></label><input type="date" class="form-control" name="dob" required>	
		
		<label for="IPPIS Number"><b>IPPIS Number:</b></label><input type="text" class="form-control" name="ippis" >
		<label for="Political Ward"><b>Political Ward:</b></label><input type="text" class="form-control" name="PoliticalWard" >
		<label for="Regional Code"><b>Regional Code:</b></label><input type="text" class="form-control" name="RegionalCode" >
		<label for="State Code"><b>State Code:</b></label><input type="text" class="form-control" name="StateCode" ><br>	
		
		
		
		<b>Gender : </b><br><br>
		<input type="radio" name="gender" value="m">Male
		<input type="radio" name="gender" value="f">Female
		<br><br><br>
		<b>Nationality : </b><br><br>
		<input type="radio" name="nationality" value="Nigerian">Nigerian
		<input type="radio" name="nationality" value="Non-Nigerian">Non-Nigerian
		<br><br><br>
		
		
		<b>Passport :</b> <input type="file" name="uploadfile" value="" class="custom-file"><br>
	

	<hr>
		
	<div>
		<input type="submit" class="btn btn-info" name="submit" value="Save">
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
