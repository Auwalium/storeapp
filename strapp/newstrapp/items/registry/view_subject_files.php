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
    <title>View Subject Files</title>
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
             <div class="page-breadcrumb" id="header-label">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">VIEW ALL SUBJECT FILES</h4>
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
                   <div class="col-md-6 col-lg-12 col-xlg-3"  id='large_card' style='background-color:#0067ab;' >
         <div class="card card-hover" id='card' >
         
     <div class='table-responsive' > 
     
     <table class='table' id='doc_table'>
        <thead>
        
        <tr>
            
            <th>FILE NUMBER</th>
            <th>TITLE</th>
            <th>VOLUME</th>
            <th>DEPARTMENT</th>
            <th>CREATED BY</th>
            <th>DATE CREATED</th>
            <th>EDIT</th>
            
        </tr>
</thead>
<tbody>
        <?php
        
        include('../includes/dbconnect.php');
            
 $sql = "SELECT * FROM subject_folder ORDER BY fno ASC";
     		 	 		
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
	$sid	 		= $row['sid'];
        $fno	 		= $row['fno'];
  	$ftitle	 		= $row['file_title'];
  	$vol	 		= $row['volume'];
  	$dept	 		= $row['department'];
  	$create	 		= $row['created_by'];
  	$date 	 		= $row['date'];
  	echo"
  	<tr>
  <td style='color:#444; font-weight:bold;text-align:left;padding-left:20px;'> $fno</td>
  	<td>$ftitle</td>
  	<td>$vol</td>
  	<td>$dept</td>
  	<td>$create</td>
  	<td>$date </td>
  	<td><a href='edit_subject_file.php?id=$sid'> Edit</a></td>

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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
