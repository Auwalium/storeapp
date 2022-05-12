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
    <title>Staff File</title>
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
                        <h4 class="page-title">REGISTRY ACTION ROOM</h4>
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
         <div class="card" id='card' >
         
     <div class='table-responsive' > 
      <table class='table' id= doc_table>
    <thead>
    <th>Document ID </th>
    <th>Minutes </th>
    <th>Minuted By </th>
    <th>Date/Time </th>
   
    </thead>
     <?php
        
        include("../includes/dbconnect.php");
  
       $sid = $_GET['sid']; 
       $did = $_GET['did'];
       
       
   $sql = "SELECT document.id, route.minute, route.minuteTime, route.minutedBy,route.id as idi, 
   route.arrivalTime,route.id as idi FROM route JOIN document on document.id = route.documentID 
   WHERE document.id = $did ORDER BY route.arrivalTime DESC limit 1";
  // print_R($sql);
   
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    	$id			= $row['id'];
    	$mid		= $row['minute'];
    	$min		= $row['minuteTime'];	
    	$min_by 	= $row['minutedBy'];	
    	$date	 	= $row['date'];
		$idi	 	= $row['idi'];
    	
    	
    echo"
    <tbody>
    
    <tr>
   <td>$sid/$did </td>
    <td> $min</td>
    <td>$min_by</td>
    <td>$date</td>
     
    </tr>
    
    </tbody>
    
    ";	
    	
    		
    	}
    
     ?>
      </table>
     <table class='table' id= doc_table >
 <?php 
 $sid = $_GET['sid']; 
       
 ?>
<th colspan='1'><a class='btn-sm btn-secondary' href='pending_applications.php'> Back</a></th> 
<th colspan='2'><?php echo"<a href='view_open_files.php?id=$sid' target='_blank' class='btn-sm btn-success'> OPEN FILE ARCHIVE</a> ";?> </th>

<th colspan='2'><?php echo"<a href='view_secret_files.php?id=$sid' target='_blank' class='btn-sm btn-danger'> SECRET FILE ARCHIVE</a> ";?></th>

</tr>
   <tr>
   
   <th>STAFF ID </th> 
   <th>LETTER </th> 
   
   <th>SELECT FILE NEW LOCATION</th> 
   
   <th>ACTION</th> 
     </tr>
       
        <?php
        
        include("../includes/dbconnect.php");

 
       $sql = "SELECT * from document where id=$id  "; 
      	   
	print_r($sql);
   
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    	
    	 
    	$w_add 		= $row['WritersAddress'];	 
    	$r_add 		= $row['receiverAddress'];	
    	$salute 	= $row['salutation'];	
    	$title 		= $row['title'];	
    	$body1 		= $row['content'];	
    	$body		= strip_tags($body1);
    	$comp 		= $row['complimentaryClose'];	
    	$doc_date 	= $row['document_date'];	
    	$department 	= $row['department_unit'];	
    	$status 	= $row['status'];	
    	
    	
   echo"<tbody> <tr> 
   <td style='font-weight:bold;'>FMC/KEF/PER/$sid 
    <br> <br> <br> <br> <br> <br> <br> <br> <br>
   
   <p style='color:#444;'>VIEW ATTACHEMENT</p>
   
   <a class='btn-sm btn-primary' target='_blank' href='../registry/view_attachement.php?id=$sid&did=$did'> Click to View</a>
   
   </td>
   
<td style='background-color:whitesmoke;'>"."<textarea cols='20' rows='4' readonly style='float:right;font-size:9;'>".$w_add."</textarea>"."<br/>"."<textarea cols='20' rows='5' readonly style='font-size:9;float:le
ft;'>".$r_add."</textarea>"."<br/>"."<input type='text' name='salute' value='$salute' style='width:100%;' readonly>"."<br/>"."<input type='text' readonly style='text-align:center;font-weight:bold; width:100%;' name='title' value='$title'>"."<br/>"."<textarea cols='45' rows='10' readonly>".$body."</textarea>"."<br/>"."<input type='text' name='comp' value='$comp' style='width:100%;' readonly><br/>"."<span style='color:crimson;font-weight:normal; font-size:12px;'>Date Written:$doc_date</span>"." </td>";
   
  
   }
   
   ?>
   
   <td>
   <form method='post' action=''>
  
  
  
    
  <?php
  
	
	
	
 include('../includes/dbconnect.php');
	
	
	
	$select = "SELECT * FROM directorate ";
		$result2 = mysqli_query($con, $select);
		$row = mysqli_fetch_assoc($result1);
		

			echo "<select id='directorate' name='department'>";
	
			while($row = mysqli_fetch_assoc($result2)) {
				   
				   
				    
					echo "<option value='" . $row["id"]." '>" .$row["directorate"]. "</option>";	
					
					
						
				}
			echo "</select>";
			
	



?>
<input type='submit' name='submit3' value='SEND' >
<?php
echo "</div>";		
	   if(isset($_POST['submit3']))
    
   {
	   $dept = $_POST['department'];
  $sql1="INSERT INTO `route`(`directorateID`,`documentid`) VALUES ('$dept','$id')";
  // print_r($sql1);
   if(mysqli_query($con, $sql1)){
   
   echo" Document Send Successfully ";
   
   }
   
    $sql1="update `route`set status =1 where id =$idi";
   print_r($sql1);
   if(mysqli_query($con, $sql1)){
   
   echo" and moved to the specified location";
   
   }
   mysqli_close($conn);
 } 
		
	?>
  
 
  
   </form>   
   </td>
   <td> 
   
   
   
   
   </td>
   </tr>
   <!-- Outputing Minutes-->
    <tr>
    
    
     <td colspan='5'> 
     
     
    
     </td>
    
    </tr>   
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
