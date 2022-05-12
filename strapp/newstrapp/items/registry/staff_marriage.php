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
    ?>
    <form action="staff_marriage.php" method="POST">
    
   
	
    <div class="container">           
    
    <header>
    <h5 align="center">STAFF MARRIAGE DETAILS </h5>
    </header>
    <div style="background-color: green; color:lavender; text-align: center;">
    <?php
    
        include('../includes/dbconnect.php');
    $fid 		= $_SESSION['fileNo'];         
 $sql = "SELECT * from staff where fileNo =  '$fid' ";
    
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $sid	 	= $row['id'];
  	
  	}
  	?> 

   <?php
    session_start();
    $FileNo = $_SESSION['StaffID'];
    $fid = $_SESSION['fid'];
	 $fid 		= $_SESSION['username'];
    error_reporting();
    $Mstatus = $_POST['status'];
    $DateOfMarriage = $_POST['marriageDate'];
    $NameOfSpouse = $_POST['spouseName'];
    $SpouseDateOfBirth = $_POST['spouseDOB'];
	$staffID = $_POST['staffID'];


        if (isset($_POST['submit'])){
        
		$_SESSION['staffID'] = htmlentities($_POST['staffID']);
        $_SESSION['Status'] = htmlentities($_POST['status']);
        $_SESSION['MarriageDate'] = htmlentities($_POST['marriageDate']);
        $_SESSION['SpouseName'] = htmlentities($_POST['spouseName']);
        $_SESSION['SpouseDOB'] = htmlentities($_POST['spouseDOB']);
         $sql = "INSERT into maritalstatus (staffID, status, marriageDate, spouseName, spouseDOB)
         values ('$staffID', '$Mstatus', '$DateOfMarriage', '$NameOfSpouse', '$SpouseDateOfBirth') ";
print_r($sql);
         if (mysqli_query($con, $sql)){
            echo "<p class='btn-lg btn-success'>Staff Marriage Details Created Successfully";
            ?>

            <script>

            setTimeout(function(){
            window.location.href = 'languages.php';
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
<script type="text/javascript">
		function hideMaritalStatus (){
			if (document.getElementById('single').checked) {
				document.getElementById('marriageDate').style.display='none';

			} 

		}

		function beSingle (){
			if (document.getElementById('married').checked) {
				document.getElementById('marriageDate').style.display='block';
				
			}
		}
	</script>

  <hr>
    <b>Marital Status :</b> <br> <br/>
		<input type="hidden" class="form-control" name="staffID" value ="<?php echo $_SESSION['fileNo']; ?>"required><br>

   <input type="radio" name="Status" value="single" id="single" onclick="hideMaritalStatus()"> Single<br>
  <input type="radio" name="Status" value="married" id="married" onclick="beSingle()"> Married<br>
 <hr>
    <section id="marriageDate" style="display:none;">
    <label for="dateofmarriage"><b>Date of Marriage :</b></label><input type="date" class="form-control" name="marriageDate">
    <br/>
    <label for="nameofspouse"><b>Name of Spouse:</b></label><input type="text" class="form-control" name="spouseName">
    <label for="dateofmarriage">Spouse Date of Birth:</b></label><input type="date" class="form-control" name="spouseDOB"><br>
    
 </section>
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
