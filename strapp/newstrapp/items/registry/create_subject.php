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
    <title>New Subject File</title>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id='header-label'>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">CREATE A NEW SUBJECT FILE</h4>
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
                    <div class="col-md-6 col-lg-10 col-xlg-3" style='background-color:;box-shadow:5px 5px 5px 5px grey;padding:1%;' >
                        <div class="card card-hover" style='background-color:whitesmoke;broder-radius:10px;padding:2%;border-radius:10px;'>
                         <form action="" method="POST" enctype="multipart/form-data">
	          
	<header>
	<h4 align="center">SUBJECT FILE CREATION FORM </h4>
	</header>
	
	<div style="background-color: green; color:lavender; text-align: center;">
	<form method='post' action=''>
	<?php
	
	
	
	include('../includes/dbconnect.php');
	if(isset($_POST['submit'])){
	error_reporting();
	$fno = mysqli_real_escape_string($con, $_POST['fno']);
	$file_title = mysqli_real_escape_string($con,$_POST['file_title']) ;
	$volume = mysqli_real_escape_string($con,$_POST['volume']) ;
	$department1 = mysqli_real_escape_string($con,$_POST['department1']) ;
	$department = mysqli_real_escape_string($con,$_POST['department']) ;
	$user = $_SESSION['username'];
	
	 $sql = "SELECT * from department where department.id = $department1";
  print_R($sql);
   
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
$department			= $row['department'];

}	
		
 $sql = "INSERT into subject_folder(file_title, volume, department, created_by, fno)
		 values ('$file_title','$volume','$department','$user','$fno') ";
print_r($sql);
		 if (mysqli_query($con, $sql)){
		 	echo "The Subject Folder"." ".$file_title." "."Created Successfully";
			//header("Refresh:3; url=staff_contact.php");


		 } else{
		 	//header('Location: dashboard.php');
		 	echo"Subject File Creation Failed";
		 }
	 
	}

?>
</div>

	<hr>
		<label for="fno">FILE NUMBER</label> <input type="text" class="form-control" name="fno" placeholder="FMC/KEF/ADM/001">
		
		<label for="file_title">FILE TITLE:</label><input type="text" class="form-control" name="file_title" placeholder="Maintenance of Computer and Accessories" required>
		<label for="volume">VOLUME</label><input type="number" class="form-control" name="volume" placeholder="Select Volume Number">
		
		
		
		<label for="department">SELECT DEPARTMENT/UNIT </label>
		
	 
  

  
    
  <?php
	 include('../includes/dbconnect.php');
	
			$select = "SELECT * FROM department  ";
		$result1 = mysqli_query($con, $select);
		$row = mysqli_fetch_assoc($result1);

			echo "<select id='dept' name='department1'>";
	
			while($row = mysqli_fetch_assoc($result1)) {		   
			echo "<option value='" . $row["id"]." '>" .$row["department"]. "</option>";					
				}
			echo "</select>";

?>
<input type='submit' name='submit' value='SEND' >	
<?php
echo "</div>";
  

	?>
 
   </form>  

   </td>
   <td> 
  <?php  echo "<a class='btn-sm btn-primary' href='staff_folder1.php?sid=$staff_id&did=$id'> Click to Send to Directorate</a><br><br><br>" ?>

    <?php  echo "<a class='btn-sm btn-primary' href='staff_folder2.php?sid=$staff_id&did=$id'> Click to Send to Sub Units</a>" ?>
   

                            
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
