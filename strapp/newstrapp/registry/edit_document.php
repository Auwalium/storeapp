<?php
session_start();
include("auth.php");
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
    <title>Formal Letter</title>
    <!-- Custom CSS -->
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
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
        <?php include('../includes/staff_sidebar.php');?>
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
                        <h4 class="page-title">All Formal Letter Template</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"  id='staff_details'>
                                
                                 <?php

include('../includes/dbconnect.php');
$fid 	= $_SESSION['username']; 
$query ="SELECT * FROM stfbiodata where StaffID=$fid";
$result =mysqli_query($con, $query);  
              
              while ($row=mysqli_fetch_assoc($result)){  
                         
                    $fname= $row['FirstName'];
                    $lname= $row['LastName'];
                          
                 echo"<a href='../logout.php'style='color:gold;font-weight:bold;'>"."Welcome"." ".$fname." "."$lname"." </a>";
                 echo"<p style='color:#fff; font-weight:normal'; text-decoration:underline;>"."File Number"."  :". "FMC/KEF/PER/".$fid."</p>";
                                
                                
                         }
                         mysqli_close($con);
                         ?>       
                                
                                
                                </div>
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
                <div class="row" >
                    <!-- Column -->
                   <div class="col-md-6 col-lg-11 col-xlg-3"  id='large_card' style='background-color:#444;' >
                        <div class="card card-hover" id='card' style='background-color:lavender;' > 
                        
         <div style='background-color:green;color:white;text-align:center;'> 
        <?php
   
    $did = $_GET['did'];
    $sid = $_GET['sid'];
        
    if(isset($_POST['update'])){
    include('../includes/dbconnect.php');
    
    $fid 	=  $_SESSION['username'];
    $wa 	=  mysqli_real_escape_string($con,$_POST['writers_add']);
    $ra 	=  mysqli_real_escape_string($con,$_POST['recipients_add']);
    $sal 	=  mysqli_real_escape_string($con,$_POST['salutation']);
    $tit 	=  mysqli_real_escape_string($con,$_POST['title']);
    $cont 	=  mysqli_real_escape_string($con, $_POST['content']);
    $cc 	=  mysqli_real_escape_string($con,$_POST['comp_close']);
    $dept_unit  =  $_POST['department'];
    
    $sql1 ="UPDATE document1 SET staff_id='$fid',writers_add='$wa',recipient_add='$ra',salutation='$sal', title='$tit',body='$cont',complimentary_close='$cc',department_unit='$dept_unit' where did='$did'";

    if(mysqli_query($con, $sql1)){
    
    
    echo" Your Letter was Updated Successfully";
    
    }
    }
    ?>               
      </div>                  
                        
      <div class='table-responsive'id='document'> 
        
        
       
        <?php
    
    include('../includes/dbconnect.php'); 
    
    $did = $_GET['did'];
    $sid = $_GET['sid'];
      
     $fid = $_SESSION['username'];   
    $sql = "SELECT * FROM document1 where staff_id= $sid  AND did= $did";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
  	$did	 		= $row['did'];
  	$writers_add 		= $row['writers_add'];
  	$recipient_add 		= $row['recipient_add'];
  	$salutation 		= $row['salutation'];
  	$title 			= $row['title'];
  	$body 			= $row['body'];
  	$complimentary_close 	= $row['complimentary_close'];
  	$date			= $row['date'];
  	}
   ?>
                                                                      

    
     <form action="" method="post">
    <table class='table' id ='formal_letter'>
    <thead>
   <th style='text-align:center;'> <?php echo"<p class='btn btn-primary' >"."APPLICATION ID".":"."<span style='color:red; font-weight:bold; font-size:15px;'>".$sid."/".$did."</span>"."</p>"; ?>
    </thead>
    
   <tr>
    <td>
    <?php
 include_once("../includes/dbconnect.php");

$sql = "SELECT  *  FROM department ORDER BY DID ASC ";
$result = $con->query($sql);
echo "<div class='table-responsive'>";

		echo "<label style='font-weight:bold; font-size:20px;'> Select Head of Department/Head of Unit. </label> <br/>";

			echo "<select id='dept' name='department'>";
	
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row['DID']." '>" .$row['Department']. "</option>";		
				}
			echo "</select>";
			
	

echo "</div>";

?>
    
    
    </td>
    </tr>
      
      
    
    <tr>
    
    <td style='float:right;'>
   <textarea cols='30' rows='5' id='writers_add' name='writers_add' >
   <?php echo $writers_add; ?>
   
   </textarea>
   </td>
    </tr>
   <tr> 
    <td>
   <textarea cols='30' rows='7' id='recipeints_add' name='recipients_add' value="">
   <?php echo $recipient_add; ?> </textarea></td>
   <td width='1000'>  </td>
    </tr>    
  <tr> 
    <td>
   <input type='text' name='salutation' id='salute' placeholder='Salutation' value='<?php echo$salutation;?>'> </td>
   <td width='100'>  </td>
    </tr>    
       
    <tr> 
    <td>
   <textarea cols='100px' rows='2' name='title' id='letter_title' placeholder='title'>
    <?php echo $title; ?>
   
    </textarea> </td>
  
    </tr>   
    
    
    <tr>
    <td colspan='2'>
      <textarea cols="100" rows="20" id="articlecontent" name="content"> 
        <?php echo $body; ?>
       
      </textarea>
      
      
      
      </td>
      </tr>
       <tr>
    
    <td style='float:right;'>
   <textarea cols='30' rows='2' id='writers_addcomp_close' name='comp_close' > <?php  echo $complimentary_close; ?>  </textarea>
   </td>
    </tr>
    
    <tr>
    <center>
      <td>
<input type="submit" name='update' value="UPDATE" class='btn btn-success'style='text-align:center;'>
      
      </td>
      </center>
      </tr>
    
   
     
      </table>
       </form>
    </div>
 
  
  
  
  
  
   </div>
    </div>
     </div>
     </div>
                    </div>
                    <!-- Column -->
                                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           <!-- footer -->
            <!-- ============================================================== -->
            <?php include('../includes/footer.php');?>
