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
             <div class="page-breadcrumb"id="page_head">
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
                           <form action="languages.php" method="POST">
                           
                          
       <!-- <a href='employment.php' style="float:right;"> Next</a> -->
    <div class="container">           
   
    <header>
    <h5 align="center">LANGUAGES SPOKEN </h5>
    </header>
    <div class='table-responsive'>
<div style='background-color:green;color:white;text-align:center;'>
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
   $fid = $_SESSION['fid'];
    
    error_reporting();
    
    $Language1 = $_POST['Language1'];
    
    $Spoken1 = $_POST['Spoken1'];
    $Written1 = $_POST['Written1'];
    $ExamQualified1 = $_POST['ExamQualified1'];
    $Language2 = $_POST['Language2'];
    $Spoken2 = $_POST['Spoken2'];
    $Written2 = $_POST['Written2'];
    $ExamQualified2 = $_POST['ExamQualified2'];
    $Language3 = $_POST['Language3'];
    $Spoken3 = $_POST['Spoken3'];
    $Written3 = $_POST['Written3'];
    $ExamQualified3 = $_POST['ExamQualified3'];
	$StaffID = $_POST['StaffID'];

    if (isset($_POST['submit'])){
        
		$_SESSION['StaffID'] = htmlentities($_POST['StaffID']);
        $_SESSION['Language1'] = htmlentities($_POST['Language1']);
        $_SESSION['Spoken1'] = htmlentities($_POST['Spoken1']);
        $_SESSION['ExamQualified1'] = htmlentities($_POST['ExamQualified1']);
        $_SESSION['Written1'] = htmlentities($_POST['Written1']);
        $_SESSION['Language2'] = htmlentities($_POST['Language2']);
        $_SESSION['Spoken2'] = htmlentities($_POST['Spoken2']);
        $_SESSION['ExamQualified2'] = htmlentities($_POST['ExamQualified2']);
        $_SESSION['Written2'] = htmlentities($_POST['Written2']);
        $_SESSION['Language3'] = htmlentities($_POST['Language3']);
        $_SESSION['Spoken3'] = htmlentities($_POST['Spoken3']);
        $_SESSION['ExamQualified3'] = htmlentities($_POST['ExamQualified3']);
        $_SESSION['Written3'] = htmlentities($_POST['Written3']);

         $sql = "INSERT into stflanguage (Language1, StaffID, Spoken1, Written1, ExamQualified1, Language2, Spoken2, Written2, ExamQualified2, Language3, Spoken3, Written3, ExamQualified3)
         values ('$Language1', '$StaffID', '$Spoken1', '$Written1', '$ExamQualified1', '$Language2', '$Spoken2', '$Written2', '$ExamQualified2', '$Language3', '$Spoken3', '$Written3', '$ExamQualified3') ";

         if (mysqli_query($con, $sql)){

            echo "<p class='btn-lg btn-success'>Staff Language Details Created Successfully";
            ?>

            <script>
            setTimeout(function(){
            window.location.href = 'employment.php';
            }, 2000);
            </script>
            </p>
        <?php
              
             }
         else{
               echo "Something Went Wrong";
            }
        }

    ?>
</div>
</div>
    <hr>
    <input type="hidden" class="form-control" name="StaffID" value ="<?php echo $_SESSION['fileNo']; ?>"required><br>
    <label for="language1">Language I :</label><input type="text" class="form-control" name="Language1">
    <label for="pleasecheck">Please Check : </label>
    Spoken   : </label><input type="checkbox" name="Spoken1" value="Spoken">
    Written  : </label><input type="checkbox" name="Written1" value="Written">
   

	
	  <br><label for="ExamQualified1">Exam Qualified</label>
			
				  <select name="ExamQualified1">
                  
								<option value = "">SELECT Exam</option>
				                <option value = "NECO">NECO</option>
				                <option value = "WAEC">WAEC</option>
								<option value = "FSLC">FSLC</option>
								<option value = "OTHERS">OTHERS</option>
								
								
				</select><br>
			

	
    <label for="language1">Language II :</label><input type="text" class="form-control" name="Language2">
    Spoken   : </label><input type="checkbox" name="Spoken2" value="Spoken">
    Written  : </label><input type="checkbox" name="Written2" value="Written">
  <br><label for="ExamQualified2">Exam Qualified</label>
			
				  <select name="ExamQualified2">
                  
								<option value = "">SELECT Exam</option>
				                <option value = "NECO">NECO</option>
				                <option value = "WAEC">WAEC</option>
								<option value = "FSLC">FSLC</option>
								<option value = "OTHERS">OTHERS</option>
								
								
				</select><br>
    <label for="language1">Language III :</label><input type="text" class="form-control" name="Language3">
    Spoken   : </label><input type="checkbox" name="Spoken3" value="Spoken">
    Written  : </label><input type="checkbox" name="Written3" value="Written">
  <br><label for="ExamQualified3">Exam Qualified</label>
			
				  <select name="ExamQualified3">
                  
								<option value = "">SELECT Exam</option>
				                <option value = "NECO">NECO</option>
				                <option value = "WAEC">WAEC</option>
								<option value = "FSLC">FSLC</option>
								<option value = "OTHERS">OTHERS</option>
								
								
				</select><br>

    

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
