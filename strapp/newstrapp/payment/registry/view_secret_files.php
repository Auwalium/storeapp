<?php
session_start();
error_reporting(1);
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
    <title>View Secret Files</title>
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
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title" style='color:red;'>VIEW SECRET FILES</h4>
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
                <div class="table-responsive"style='background-color:whitesmoke;padding:2%;'>
                <table class='table' id='doc_table'>
     <tr colspan='5'> <a class="btn-sm btn-danger" href="all_files.php"> BACK</a></tr>
     <tr>
      
      <?php     
  include('../includes/dbconnect.php');
  
  		$sid =  $_GET['id'];                      
               
                   $sql1="SELECT * FROM stfbiodata where StaffID = $sid";
                       
                        $res1=$con->query($sql1);
                while($row=$res1->fetch_assoc()){
                
             	$lname= $row['LastName']; 	
             	$fname= $row['FirstName'];
             	$oname= $row['OtherNames']; 
             	echo"<td><h4>Staff Names</h4></td><td><h4>$lname</h4> </td> <td><h4>$fname</h4> </td> <td><h4>$oname</h4></td> <td></td> " ; 
             	
             	} 
             ?>   
               
     
      </tr>
      
     <tr>
     
     <th>STAFF ID </th>
    
     <th>FILE NAME </th>
     <th>FILE TYPE </th>
     <th>FILE SIZE </th>
      <th>FILE </th>
      	
     </tr>

<?php     
  include('../includes/dbconnect.php');
  
  		$sid =  $_GET['id'];                      
               
                   $sql="SELECT * FROM secret_files where staff_id= $sid";
                       
                        $res=$con->query($sql);
                while($row=$res->fetch_assoc()){
                   $name = $row['name'];
                   $size = $row['size'];
                   $file_type = $row['file_type'];
                   $staff_id = $row['staff_id'];
      	
       echo"<tr> 
       <td> $staff_id</td>
       <td> $name </td>
       <td> $file_type</td>
       <td> $size</td>";
       ?>
       <td> <a  class='btn-sm btn-danger' href= "SECRET/<?php echo $name ?>" target= "_blank" > View File </a> </td>
    
       </tr>
	
  <?php	
  			
 
 }
 
 echo"</table>";
                       mysqli_close($con)
                       
               
                       ?> 
                       
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
