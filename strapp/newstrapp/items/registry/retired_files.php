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
    <title>Retired Files</title>
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
                        <h4 class="page-title">RETIRED FILES</h4>
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
                   
                   
                    
          <div class='row'> 
          <div class="col-md-6 col-lg-12 col-xlg-3"  id='large_card' style='background-color:#444;' >
         <div class="card" id='card' >
         
     <div class='table-responsive' > 
     <h4 style='text-align:center;'> VIEW ALL RETIRED APPLICATIONS</h4>
     <table class='table' id='doc_table'>
        <thead>
        
        <tr>
            
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>GENDER</th>
            <th>STAFF FILE</th>
            
        </tr>
</thead>
<tbody>
        <?php
        
        include('../includes/dbconnect.php');
            
$sql = "SELECT document.id,staff.lastName,staff.firstName, staff.otherNames,staff.gender,staff.id, route.minute, route.minuteTime, route.minutedBy, route.arrivalTime,route.id as idi FROM route JOIN document on document.id = route.documentID JOIN staff on document.staffID = staff.ID WHERE document.id = $did and route.status = 2 ORDER BY route.arrivalTime DESC limit 1";    
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
        $staff_id	 	= $row['StaffID'];
  	$lname	 		= $row['lastName'];
  	$fname	 		= $row['firstName'];
  	$oname	 		= $row['otherNames'];
  	$sex	 		= $row['gender'];
  	$docid	 		= $row['id'];
  	echo"
  	<tr>
  	<td style='color:black; font-weight:bold;text-align:left;padding-left:20px;'>FMC/KEF/PER/$staff_id/$docid</td>
  	<td>$lname</td>
  	<td>$fname</td>
  	<td>$oname</td>
  	<td>$sex</td>
  	<td>
<a class='btn-sm btn-primary' href='staff_folder.php?sid=$staff_id&did=$docid'> Open for Action</a>
           </td>

  	</tr>
  	
  	
  	
  	
  	";
  	}
  	?>
  	</tbody>
  	</table>
 </div>
          </div>
           </div>
          </div>  
           </div>   
            </div>       
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
