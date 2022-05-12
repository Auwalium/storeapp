 <?php
    session_start();
	
	

// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
echo ($currentDate);  


$con = mysqli_connect("localhost","root","","mpape");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




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
    <title>Customer Documentation</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
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
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Create A Customer</h4>
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
       
       
       <form action="" method="POST" enctype="multipart/form-data">
  
    
    <a href='index.php'> Back</a>
        <a href='index.php' style="float:right;"> Next</a>
	
    <div class="container">           
    
    <header>
	<div>
    <h4 align="center">Customer Details </h4>
    </header>
	
	
	
	
	</div>
    <div style="background-color: green; color:lavender; text-align: center;">
    <?php
    session_start();
	$platenumber = ($_GET[platenumber]);
	echo $platenumber;
  

        if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$date2 =  $_POST['date2'];
	$amount =  $_POST['amount'];
	$platenumber = $_POST['platenumber'];	
	$type = $_POST['type'];	


         $sql = "INSERT into nbook ( platenumber,date2,type)
         values ('$platenumber','$date2','$type') ";
print_r ($sql);
         if (mysqli_query($con, $sql)){
            echo "Successfully book ";
            header("Refresh:3; url=children.php");
         } else{
            echo "Something went wrong";
         }
        
    
}

        if (isset($_POST['submit1'])){
	
	$platenumber = $_POST['platenumber'];	


         $sql1 = "SELECT `id`, `phone`, `name`, `address`, `platenumber`, `date` FROM `park` WHERE platenumber = '$platenumber'";
print_r ($sql1);
 echo $row['name'];
 //print_r ($sql1);


         if (mysqli_query($con, $sql)){
			  echo $row['name'];
            echo "Successfully";
            header("Refresh:3; url=children.php");
         } else{
            echo "Something went wrong";
         }
        
    
}
?>
</div>




    <hr>
    <h4 align="center">Particulars of Customer</h4>

   
   <form name="form1" method="post" action="new.php">
  
	   <label for="platenum">Plate Number:</label><input type="text" class="form-control" name="platenumber" value="<?php echo $platenumber ?>"> 
	    <label for="platenum">Date Book:</label><input type="date" class="form-control" name="date2" value="<?php echo $currentDate ?>">
<label for="platenum">Customer Type:</label>
				  <select name="type">  
								<option value = "select ">select customer type</option>
				                <option value = "daily">Daily Customer</option>
				                <option value = "monthly">Monthly Customer</option>				
				</select>	
	
	<hr>
        
    <div>
        <input type="submit" class="btn btn-info" value="Save" name="submit">
    </div>
        </form>                    
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
