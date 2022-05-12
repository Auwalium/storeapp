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
    <title>All Files</title>
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
             <div class="page-breadcrumb" id='header-label'>
                <div class="row" style='background-color:lavender;'>
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">STAFF FILE MANAGEMENT</h4>
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
                <div class="row" style='background-color:;box-shadow:5px 5px 5px 5px grey;padding:1%;'>
                    <!-- Column 
                    <div class="col-md-6 col-lg-2 col-xlg-3" >
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Pending Applications</h6>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column -->
                    
                    
                   
         <div class="search">
<center>
<form  action="" method="post">
<input type="text" name="search" width='100%' placeholder="Search with FILE NUMBER,FIRSTNAME,LASTNAME OR OTHERNAME ">
<input type="submit" name="submit1" value="Search Staff " class='btn-sm btn-info'>
</form>
</center>
</div>

<div class='table-responsive' style='border:1px solid lavender;'>
 <table class='table' id='summary_table'>
        
        <thead>
       
        
        <tr>
            
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>NATIONALITY</th>
            <th colspan='2'>PASSPORT</th>
            <th colspan='1'>VIEW STAFF FULL DOCUMENTATION</th>
            <th colspan="1">VIEW OPEN FILES</th>
            <th colspan="1">VIEW SECRET FILES</th>
            <th colspan="1">ACTION</th>

	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	
	include('../includes/dbconnect.php');

	
 $sql="select * from staff where fileNo = '$search_value' or lastName like '%$search_value%' or firstName like '%$search_value%' or otherNames like '%$search_value%'or fileNo like '%$search_value%'";
		
		//$sql="select * from patient_reg where phone = $search_value or pid = $search_value or firstname = $search_value or surname = $search_value";

        $result = mysqli_query($con,$sql);
        
        
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['fileNo']; ?></td>
                    <?php $id = $row['fileNo']; ?>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['otherNames']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td colspan='2'><?php echo $row['Passport']; ?></td>
<td colspan='1'><?php echo"<a class='btn-sm btn-info' href='full_documentation.php?id=$id'>View Full Staff Details</a>";?></td>
                    
 <td colspan='1'><?php echo"<a href='view_open_files.php?id=$id' target='_blank' class='btn-sm btn-info'> Open File</a> ";?> </td>
                  <td colspan='1'><?php echo"<a href='view_secret_files.php?id=$id' target='_blank' class='btn-sm btn-info'> Secret File</a> ";?> </td>
                  <td colspan='1'><?php $id =$row['fileNo']; ?>
                        
            <?php echo "<a href='update_admin_biodata.php?id=$id'class='btn-sm btn-info'> Edit</a>";?> 
             

                    
                
        <?php
            }
            }
        ?>

                    </td>
            </tr>
            
          <tr><td colspan='13'> </td></tr>  
           <tr><td colspan='13'> </td></tr> 
            <tr><td colspan='13' style='background-color:white;color:black;'><h4 style="font-weight:normal;"> Kindly verify if files are already uploaded before archiving new ones. </h4> </td></tr>  
        <tr>
        <td colspan='13' style='color:red;padding:0px;padding-top:1%;padding-bottom:1px;background-color:white;'> 
   <span style='color:orange;'> Warning!</span>(Only .pdf, .jpg, .jpeg, .png, .docx, or .doc) are allowed for upload
       </td>
       </tr>
       <tr>
       <td colspan='7'>
       
       
         <form action="upload_open_files.php" method="POST" enctype="multipart/form-data">
         <table class='table' style='background-color:lavender';padding:10px; >
    <tr><td> <h4 style="font-weight:normal;">UPLOAD OPEN FILE:</h4></td><td> <input type="file" name="open_file" value="OPEN FILE" class="custom-file"></td></tr>
    <tr><td> <input type='text' name='staff_id' value="<?php echo $id; ?>"> </td> <td> </td></tr>
    <br>
	<tr><td colspan='2'>	
	<div>
		<input type="submit" class="btn-sm btn-info" name="submit_open" value="Upload Open Files">
	</div> 
	</td></tr> 
	</table> 
        </form>
        </td>
        
        
        
        <td colspan='6'>
         <form action="upload_secret_files.php" method="POST" enctype="multipart/form-data">
      <table class='table' style='background-color:lavender; padding:1%;'>
    <tr><td><h4 style='color:red;font-weight:normal'>UPLOAD SECRET FILE :</h4></td><td> <input type="file" name="secret_file" value="SECRET FILE" class="custom-file"></td></tr>
    <tr><td> <input type='text' name='staff_id' value="<?php echo $id; ?>"> </td> <td> </td></tr>
    <br>
	<tr><td colspan='2'>	
	<div>
		<input type="submit" class="btn-sm btn-danger" name="submit_secret" value="Upload Secret Files">
	</div> 
	</td></tr> 
	</table>   
        </form>
        </td>
        </tr>    
            
            
            
            
         </tbody> 
         
         
          

</table>
      
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
