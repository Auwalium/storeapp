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
                          <form action="employment.php" method="POST">
                          
                          
        <!--<a href='summary.php' style="float:right;"> Next</a>-->
    <div class="container">           
<header>
    <h5 align="center">STAFF EMPLOYMENT DETAILS </h5>
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
    error_reporting(0);
    
    $ministry 		= $_POST['ministry'];
    $location 		= $_POST['location'];
    $salaryScale 	= $_POST['salaryScale'];
    $gradeLevel 	= $_POST['gradeLevel'] ;
    $designation    = $_POST['designation'];
    $step 			= $_POST['step'] ;
	$directorate 	= $_POST['directorate'] ;
    $department 	= $_POST['department'] ;
    $unit 			= $_POST['unit'] ;
    $dateOfFirstAppointment = $_POST['DateOfFirstAppointment'];
    $presentAppointment = $_POST['presentAppointment'];
    $dateofAppwithFMC 		= $_POST['DateofAppwithFMC'];
    $mda   					= $_POST['mda'];
	$qualification1 		= $_POST['qualification1'];
    $dateq1 				= $_POST['dateq1'];
    $qualification2 		= $_POST['qualification2'];
    $dateq2 				= $_POST['dateq2'] ;
    $qualification3    		= $_POST['qualification3'];
    $dateq3					= $_POST['dateq3'] ;
	$apptype				= $_POST['apptype'] ;
	$StaffID				= $_POST['StaffID'] ;
   

        
    if (isset($_POST['submit'])){
		$_SESSION['StaffID'] 		= htmlentities($_POST['StaffID']);
        $_SESSION['ministry'] 		= htmlentities($_POST['ministry']);
        $_SESSION['location'] 		= htmlentities($_POST['location']);
        $_SESSION['salaryScale'] 	= htmlentities($_POST['salaryScale']);
        $_SESSION['gradeLevel'] 	= htmlentities($_POST['gradeLevel']);
        $_SESSION['designation'] 	= htmlentities($_POST['designation']);
        $_SESSION['step'] 			= htmlentities($_POST['step']);
        $_SESSION['department'] 	= htmlentities($_POST['department']);
        $_SESSION['unit'] 			= htmlentities($_POST['unit']);
		$_SESSION['directorate'] 			= htmlentities($_POST['directorate']);
        $_SESSION['DateOfFirstAppointment'] = htmlentities($_POST['DateOfFirstAppointment']);
        $_SESSION['presentAppointment'] = htmlentities($_POST['presentAppointment']);
		
	  $_SESSION['DateofAppwithFMC'] 	= htmlentities($_POST['DateofAppwithFMC']); 
        $_SESSION['DateofAppwithFMC'] 	= htmlentities($_POST['DateofAppwithFMC']); 
        $_SESSION['mda'] 				= htmlentities($_POST['mda']);	
		$_SESSION['qualification1'] 	= htmlentities($_POST['qualification1']);
        $_SESSION['dateq1'] 			= htmlentities($_POST['dateq1']);
        $_SESSION['qualification2'] 	= htmlentities($_POST['qualification2']);
        $_SESSION['dateq2'] 			= htmlentities($_POST['dateq2']);
        $_SESSION['qualification3'] 	= htmlentities($_POST['qualification3']);
        $_SESSION['dateq3'] 			= htmlentities($_POST['dateq3']);
		$_SESSION['apptype'] 			= htmlentities($_POST['apptype']);
         $sql = "INSERT into employmentdetails (ministry, location, salaryScale, grade,designation, step, departmentID, unitID,directorateID, DateOfFirstAppointment, presentAppointment, StaffID,
		 DateofAppwithFMC,mda,qualification1,dateq1,qualification2,dateq2,qualification3,dateq3,apptype)
         values ('$ministry', '$location','$salaryScale', '$gradeLevel','$designation','$step', '$department', '$unit', '$directorate', '$dateOfFirstAppointment', '$presentAppointment', ' $StaffID',
		 '$dateofAppwithFMC','$mda','$qualification1','$dateq1','$qualification2','$dateq2','$qualification3','$dateq3','$apptype') ";

         if (mysqli_query($con, $sql)){

         	echo "<p class='btn-lg btn-success'>Employment Details Created Successfully";
            ?>

            <script>

            setTimeout(function(){
            window.location.href = 'staff_nextofkin.php';
            }, 2000);

            </script>
          </p>
      <?php
           
            
         }
         
    }


?>
</div>
    <hr>
	 <input type="hidden" class="form-control" name="StaffID" value ="<?php echo $_SESSION['fileNo']; ?>"required><br>
    <label for="parastatal">MINISTRY:</label><input type="text" class="form-control" name="ministry" required><br>
	<label for="MDA">MDA/PARASTATAL:</label><input type="text" class="form-control" name="mda" required><br>
    <label for="location">LOCATION:</label><input type="text" class="form-control" name="location" required><br>
    <div class="form-group">
    <label for="conhess" name="SalaryScale">SALARY SCALE:</label>
        <select class="form-control" name="salaryScale" id="SalaryScale" required>
        <option>CONHESS</option>
        <option>CONMESS</option>
        </select>
    </div>
        <div class="form-group">
        <label for="level">LEVEL:</label>
        <select class="form-control" id="level" name="gradeLevel" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>13</option>
        <option>13</option>
        </select>
        </div>
        <div class="form-group">
        <label for="conhess">STEP:</label>
        <select class="form-control" id="step" name="step" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        </select>
        </div>
		<div class="form-group">
        <label for="apptype">APPOINTMENT TYPE:</label>
        <select class="form-control" id="step" name="apptype" required>
        <option></option>
	   <option>PERMANENT</option>
        <option>TEMPORARY</option>
        <option>CONTRACT</option>
      
        </select>
        </div>
        <br>


 <label for="designation">DESIGNATION/RANK:</label><input type="text" class="form-control" name="designation" required><br>

 <div class="form-group">
        <label for="department">DIRECTORATE:</label>
       
    <?php
	include('../includes/dbconnect.php');
	
	
	
	$select = "SELECT * FROM directorate ";
		$result2 = mysqli_query($con, $select);
		$row = mysqli_fetch_assoc($result1);
		

			echo "<select id='department' name='directorate'>";
	
			while($row = mysqli_fetch_assoc($result2)) {
				   
				   
				    
					echo "<option value='" . $row["id"]." '>" .$row["directorate"]. "</option>";	
					
				}
			echo "</select>";
	

echo "</div>";
?>
      
        </div>
        <br>
 
 
 
 
        <div class="form-group">
        <label for="department">DEPARTMENT:</label>
       
    <?php
	include('../includes/dbconnect.php');
	
	
	
	$select = "SELECT * FROM department ";
		$result2 = mysqli_query($con, $select);
		$row = mysqli_fetch_assoc($result1);
		

			echo "<select id='department' name='department'>";
	
			while($row = mysqli_fetch_assoc($result2)) {
				   
				   
				    
					echo "<option value='" . $row["id"]." '>" .$row["department"]. "</option>";	
					
				}
			echo "</select>";
	

echo "</div>";
?>
      
        </div>
        <br>

        <div class="form-group">
        <label for="unit">UNIT:</label>
         <?php
	include('../includes/dbconnect.php');
	
	
	
	$select = "SELECT * FROM unit ";
		$result2 = mysqli_query($con, $select);
		$row = mysqli_fetch_assoc($result1);
		

			echo "<select id='unit' name='unit'>";
	
			while($row = mysqli_fetch_assoc($result2)) {
				   
				   
				    
					echo "<option value='" . $row["id"]." '>" .$row["unit"]. "</option>";	
					
				}
			echo "</select>";
	

echo "</div>";
?>
        <br>


        <label for="dateOfFirstApp">Date of First Appointment :</label><input type="date" class="form-control" name="DateOfFirstAppointment" ><br>

        <label for="dateOfPresentApp">Date of Present Appointment :</label><input type="date" class="form-control" name="presentAppointment" ><br>  
		 <label for="DateofAppwithFMC">Date of Appointmnet With FMC :</label><input type="date" class="form-control" name="DateofAppwithFMC" ><br>  
        
   
      <label for="qualification1">Qualification 1(Select Option):</label>
        <select class="form-control" name="qualification1" required>
		<option>NECO</option>
        <option>WAEC</option>
        <option>FSLC</option>
        <option>B.SC</option>
        <option>ND</option>
        <option>HND</option>
        <option>MBBS</option>
        <option>OTHERS</option>
       
        </select>
        <br>
		 <label for="dateq1">Date:</label><input type="date" class="form-control" name="dateq1" required<br>
		 
		 
		 
		 
		 <label for="qualification2">Qualification 2(Select Option):</label>
        <select class="form-control" name="qualification2" >
       <option></option>
	   <option>NECO</option>
        <option>WAEC</option>
        <option>FSLC</option>
        <option>B.SC</option>
        <option>ND</option>
        <option>HND</option>
        <option>MBBS</option>
        <option>OTHERS</option>
       
        </select>
        <br>
		 <label for="dateq12">Date:</label><input type="date" class="form-control" name="dateq2" ><br>
		 
		 
		 
		 
		 <label for="qualification3">Qualification 3(Select Option):</label>
        <select class="form-control" name="qualification3" >
        <option></option>
		<option>NECO</option>
        <option>WAEC</option>
        <option>FSLC</option>
        <option>B.SC</option>
        <option>ND</option>
        <option>HND</option>
        <option>MBBS</option>
        <option>OTHERS</option>
       
        </select>
        <br>
		 <label for="dateq3">Date:</label><input type="date" class="form-control" name="dateq3"><br>
		
		
		
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
