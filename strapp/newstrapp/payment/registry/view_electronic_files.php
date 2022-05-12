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
    <title>View Electronic Files</title>
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
                        <h4 class="page-title">VIEW ELECTRONIC FILES</h4>
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
          <div class="table-responsive"style='background-color:#0067ab;padding:0%;'>
               <table class='table' id='doc_table'>
                <tr>
      
     		<?php     
  		include('../includes/dbconnect.php');
  
  		$sid =  $_GET['id'];                      
               
                $sql1="SELECT * FROM staff where StaffID = $sid";
                       
                $res1=$con->query($sql1);
                
                while($row=$res1->fetch_assoc()){
                
             	$lname= $row['LastName']; 	
             	$fname= $row['FirstName'];
             	$oname= $row['OtherNames']; 
             	
   		echo"
   		<td style='padding-top:1%;'> 
                <a class='btn-sm btn-success' 
                href='view_open_files.php?id=$sid'> BACK</a> 
    		</td>
    		
   		<td style='padding-top:1%;'>
    		<h4>$lname</h4> 
    		</td> 
    
    		<td style='padding-top:1%;'>
    		<h4>$fname</h4> 
    		</td> 
    		
    		<td style='padding-top:1%;'>
    		<h4>$oname</h4>
    		</td> 
    		
    		<td style='padding-top:1%;'>
    		</td> " ; 
             	
             	} 
             	
             	?>   
      		</tr>   
    

		<?php     
  		include('../includes/dbconnect.php');
  
  		$sid =  $_GET['id'];                      
               
                $sql="SELECT * FROM open_files where staff_id= $sid";
                       
                $res=$con->query($sql);
                
                while($row=$res->fetch_assoc()){
                  
                $name = $row['name'];
                $size = $row['size'];
                $file_type = $row['file_type'];
                $staff_id = $row['staff_id'];
      	
  		}
 
 		echo"</table>";
                
                mysqli_close($con)
                
                ?> 
                       
                </div>
                
                
                    
     <div class='table-responsive'>             
     <table class='table' id='doc_table'>       
     <tr>
     <th>STAFF ID </th> 
     <th>LETTER </th> 
     <th>DOCUMENT ID</th> 
     <th>MINUTES</th> 
     </tr>
     <?php
     include("../includes/dbconnect.php");
     $sid = $_GET['id']; 
     $sql = "SELECT * FROM document1 WHERE staff_id=$sid ORDER BY did ASC";
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
    	$did	 	= $row['did'];
    	
    		
    	echo" 
    	<tr> 
        <td style='font-weight:bold;'>FMC/KEF/PER/$sid </td>
        <td style='background-color:whitesmoke;'>"."<textarea cols='20' rows='4'  readonly style='float:right;font-size:9;'>".$w_add."</textarea>"."<br/>"."<textarea cols='20' rows='5' readonly style='font-size:9;float:le
ft;'>".$r_add."</textarea>"."<br/>"."<input type='text' name='salute' value='$salute' style='width:100%;' readonly>"."<br/>"."<input type='text' readonly style='text-align:center;font-weight:bold; width:100%;' name='title' value='$title'>"."<br/>"."<textarea cols='45' rows='10' readonly>".$body."</textarea>"."<br/>"."<input type='text' name='comp' value='$comp' style='width:100%;' readonly><br/>"."<span style='color:crimson;font-weight:normal; font-size:12px;'>Date Written:$doc_date</span>"." </td>"."<td>$sid/$did </td>";
   
   
   
   ?>
   
 <td style='background-color:whitesmoke;text-align:left;'>
 <?php 
 
  include("../includes/dbconnect.php");
  $sql1 ="SELECT * FROM minute WHERE did=$did ORDER BY mid DESC"; 
  
   $result1 = $con->query($sql1);
while($row = $result1->fetch_assoc()) {
  	$fid		= $row['fid'];
  	$mid		= $row['mid'];
    	$min		= $row['minute'];	
    	$min_by 	= $row['minuted_by'];	
    	$date	 	= $row['date'];
    	$did	 	= $row['did'];
  echo"
    <p>$min_by On $date</p>
   <p style='background-color:#0067ab; color:lavender; padding:2px;border-radius:5px;font-weight:bold;'>$min</p>
    <hr/>
   
   
  
    ";
    	
    }
    
  echo "</td>"; 
  echo "</tr> ";
  echo "<tr ><td colspan='4' style='background-color:#0067ab;'></td></tr> "; 	
   }
     ?>
     </tbody>
   </table>
                    
                    
                  
                    
                                </div>
                                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
