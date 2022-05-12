<?php
session_start();
$sid = $_GET['sid']; 
$did = $_GET['did'];
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
    <title>Decline Application</title>
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
        <?php include('../includes/department_unit_sidebar.php');?>
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
                        <h4 class="page-title">DECLINE APPLICATION</h4>
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
                   
                    <!--  <div class="col-md-6 col-lg-2 col-xlg-3" >
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    
                                
                    <!-- Column -->
                    
          <div class='row'> 
          <div class="col-md-6 col-lg-12 col-xlg-3"  id='large_card' style='background-color:#444;' >
         <div class="card card-hover" id='card' >
         <div class='table-responsive' style='background-color:black;padding:1%; width:96%;' > 
     
     <table class='table' id= doc_table > 
   <thead>
   
   <th>STAFF ID </th> 
   <th>DOCUMENT ID </th> 
   <th>LETTER </th> 
   <th>DECLINATION STATEMENT</th>
  <th> </th>
     </thead>
       
    <?php
        
        include("../includes/dbconnect.php");
  

       $sid = $_GET['sid']; 
       $did = $_GET['did'];
       
       
   $sql = "SELECT * from document1 where did=$did AND staff_id=$sid AND status='pending' AND department_unit=2";
   
   
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    	
    	 
    	$w_add 		= $row['writers_add'];	
    	$r_add 		= $row['recipient_add'];	
    	$salute 	= $row['salutation'];	
    	$title 		= $row['title'];	
    	$body1 		= $row['body'];	
    	$body		= strip_tags($body1);
    	$comp 		= $row['complimentary_close'];	
    	$doc_date 	= $row['document_date'];	
    	$department 	= $row['department_unit'];	
    	$status 	= $row['status'];	
    	
    	
   echo"<tbody> 
   <tr> 
   <td style='font-weight:bold;'>FMC/KEF/PER/$sid </td>
   <td style='font-weight:bold;'>$sid/$did</td>
   
<td style='background-color:whitesmoke;'>"."<textarea cols='20' rows='4' readonly style='float:right;font-size:9;'>".$w_add."</textarea>"."<br/>"."<textarea cols='20' rows='5' readonly style='font-size:9;float:left;'>".$r_add."</textarea>"."<br/>"."<input type='text' name='salute' value='$salute' style='width:100%;' readonly>"."<br/>"."<input type='text' readonly style='text-align:center;font-weight:bold; width:100%;' name='title' value='$title'>"."<br/>"."<textarea cols='45' rows='10' readonly>".$body."</textarea>"."<br/>"."<input type='text' name='comp' value='$comp' style='width:100%;' readonly><br/>"."<span style='color:crimson;font-weight:normal; font-size:12px;'>Date Written:$doc_date</span>"." </td>";
   
  
   }
   
   ?>
   
   
   <td style='background-color:black;'>
   
   
   <?php
  
  if(isset($_POST['submit_decline'])) {
  
  $sid	= $_POST['sid'];
  $did  = $_POST['did'];
  $dec_note = $_POST['decline_note'];
  $dec_by = $_SESSION['username'];
  $sql=" INSERT INTO declination_notes (staff_id, did, declination_statement, declined_by) VALUES ( '$sid', '$did', '$dec_note', '$dec_by')";
  
  if(mysqli_query($con, $sql)){
  
  
  echo"<p style='background-color:green;color:lavender; padding:2px;'>Letter Successfully Declined by "." "."REGISTRY-". $dec_by."</p>";
  
  }
 $sql1="UPDATE document1 set department_unit='-1' where staff_id='$sid' AND did='$did'";
   
   if(mysqli_query($con, $sql1)){
   
   echo" ";
  
  
  }
   }
  mysqli_close($con); 
   
   
   
   
   ?>
   
    <form method='post' action=''>
   
    <textarea cols='30' rows='18' name='decline_note'> Write Your Reasons for Declining this Letter</textarea>
    <br/> <br/>
    
    <input type='hidden' name='sid' value="<?php echo $sid; ?>">
    <input type='hidden' name='did' value="<?php echo $did; ?>">
    <input type='submit' class="btn-sm btn-danger" name='submit_decline' value='Send Declination Note' >
    </form>
    </td>
   <td>     
     <?php  echo"<a class='btn-sm btn-primary'href='dashboard.php'> Go Back</a>"?>
     </td> 
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
