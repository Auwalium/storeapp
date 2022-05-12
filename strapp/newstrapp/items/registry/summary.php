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
    <title>Staff Documentation</title>
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
                        <h4 class="page-title">CREATE A STAFF</h4>
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
                <div class="row" style='background-color:white;'>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-11 col-xlg-3" id='tab_sum_big'  >
                        <div class="card card-hover" id='tab_sum'>
                           


<?php
    
    include('../includes/dbconnect.php');

$LastName = $_SESSION['lastName'];
$FirstName = $_SESSION['firstName'];
$OtherNames = $_SESSION['otherNames'];
$DOB = $_SESSION['dob'];
$Gender = $_SESSION['gender'];
$Nationality = $_SESSION['nationality'];
$Passport = $_SESSION['passport'];
$fid = $_SESSION['fileNo'];    

$query="select * from staff where fileNo=$fid";
$result=mysqli_query($con, $query);

?>


    <div class="container">
    <center>
    
    </center>
    <h4 style='text-align:center;'>STAFF DOCUMENTATION SUMMARY </h4>
    <div class='table-responsive'>
    
    
	
	
	<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 CLICK HERE TO COMPLETE DOCOMENTATION
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <CENTER><h5 class="modal-title" id="exampleModalLabel">FMC KEFFI ONLINE FINAL CAPTURING STAGE</h5></CENTER>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method='POST' action=''>
    <div class='table-responsive' style='color:green;background-color:lavender;'>
    <?php
    
    include('../includes/dbconnect.php');
    $fid = $_SESSION['fid'];   
    if(isset($_POST['confirm'])){
    
    $sql ="INSERT INTO users(username,password,userlevel,usergroup) VALUES('$fid','pass','13','staff')";
    
    $result = mysqli_query($con, $sql);
    
    if($result){
    echo"<p style='color:green; text-align:center'>".$LastName."  ".$FirstName."  "."has successfully been Documented. The Staff can login with his/her file number as USERNAME and 'pass' as PASSWORD for the first time and change your default password to a SECRET password <a href='new_staff_documentation.php'> Click here to go Back</a>	";
  
  ?>
  <?php
  
  
  
		}
		
    }
    ?>
	  <!--<script>
            setTimeout(function(){
            window.location.href = 'dashboard.php';
            }, 2000);
       </script>-->
    </div>
    <br/>
    <center>
    <input type='submit' class='btn btn-success' name='confirm' value='FINISH DOCUMENTATION'>
    </center>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<br/>
    <table class='table' id='summary_table'>
        <tr>
            <th colspan="13"><h4>BIODATA</h4></th>

        </tr>
        <tr>
            
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>NATIONALITY</th>
            <th colspan='3'>PASSPORT</th>
            <th colspan="3">Action</th>


        </tr>

        <?php
		$query="select * from staff where fileNo=$fid";
$result=mysqli_query($con, $query);
print_r($query);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['fileNo']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['otherNames']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
					<td colspan='3'> 
                    <img src="<?php echo $row['passport']; ?>" width='60px' height='70px' style="border-radius:10px;border:1px solid black;" > 
                    </td>
                   
                    <td colspan='3'><?php $id =$row['fileNo']; ?>
                        
            <?php echo "<a href='update_admin_biodata.php?id=$id&ln=$row[LastName]&fn=$row[FirstName]&on=$row[OtherNames]&dob=$row[DOB]&gen=$row[Gender]&nat=$row[Nationality]&pass=$row[Passport]' class='badge badge-success'> Edit</a>";?> 
             

                    
                
        <?php
            }
        ?>

                    </td>
            </tr>
            
  
            
<?php

include('../includes/dbconnect.php');
    $fid 		= $_SESSION['fileNo'];         
 $sql = "SELECT * from staff where fileNo =  '$fid' ";
    
    $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $sid	 	= $row['id'];
  	
  	}
	 		 

include('../includes/dbconnect.php');
  $query="SELECT * FROM permanentcontact where staffID=$fid";
  $result=mysqli_query($con, $query);
print_r($query);
?>
         <tr>
            <th colspan="13"><h4>PERMANENT CONTACT ADDRESS</h4></th>

        </tr>
        <tr>
            <th >PHONE1</th>
            <th >PHONE2</th>
            <th >NATIONALITY</th>
            <th >STATE</th>
            <th >LGA</th>
            <th  colspan='3'>STREET</th>
            <th  colspan='2'>EMAIL</th>
            <th colspan="3">Action</th>

        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
                    $id =$row['CPID'];
            ?>
                <tr>
                    <td ><?php echo $row['phone1']; ?></td>
                    <td ><?php echo $row['phone2']; ?></td>
                    <td ><?php echo $row['nationality']; ?></td>
                    <td ><?php echo $row['state']; ?></td>
                    <td ><?php echo $row['LGA']; ?></td>
                    <td  colspan='3'><?php echo $row['street']; ?></td>
                    <td  colspan='2'><?php echo $row['email']; ?></td>
                    <td colspan='3'>
                        

                <?php echo "<a href='edit_staff_records.php?id=$id' title='Edit Staff Record' class='badge badge-success'> Edit</a>";?>  

            <?php   
            }
            ?>
                    </td>
                </tr>   
            
            
  <?php
             
  include('../includes/dbconnect.php');
  $query="select * from maritalstatus where staffID=$fid";
  $result=mysqli_query($con, $query);
print_r($query);
?>

    
        <tr>
            <th colspan="13"><h4>MARRIAGE DETAILS</h4></th>

        </tr>
        <tr>
            
            <th colspan='2'>STATUS</th>
            <th colspan="2">MARRIAGE DATE</th>
            <th colspan="3">SPOUSE NAME</th>
            <th colspan="3">SPOUSE DATE OF BIRTH</th>
            <th colspan="3">Action</th>


        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    
                    <td colspan="2"><?php echo $row['status']; ?></td>
                    <td colspan="2"><?php echo $row['marriageDate']; ?></td>
                    <td colspan="3"><?php echo $row['spouseName']; ?></td>
                    <td colspan="3"><?php echo $row['spouseDOB']; ?></td>
                    <td colspan="3">
                        
            <?php echo "<a href='' class='badge badge-success'> Edit</a>";?> 

                    
                
        <?php
            }
        ?>




        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td>
                        
            <?php echo "<a href='' class='badge badge-success'> Edit</a>";?>            
                
        <?php
            }
        ?>

                    </td>
            </tr>

                    </td>
            </tr>
           

<?php

$query="select * from stflanguage where staffID=$fid";
$result=mysqli_query($con, $query);
print_r($query);
?>
    
        <tr>
            <th colspan="13"><h4>LANGUAGES SPOKEN</h4></th>

        </tr>
        <tr>
            
        
            <th>LANGUAGE</th>
            <th>SPOKEN</th>
            <th>WRITTEN</th>
            <th>EXAM QUAL</th>
            <th>LANGUAGE</th>
            <th>SPOKEN</th>
            <th>WRITTEN</th>
            <th>EXAM QUAL</th>
            <th>LANGUAGE</th>
            <th>SPOKEN</th>
            <th>WRITTEN</th>
            <th>EXAM QUAL</th>
            <th>Action</th>


        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['Language1']; ?></td>
                    <td><?php echo $row['Spoken1']; ?></td>
                    <td><?php echo $row['Written1']; ?></td>
                    <td><?php echo $row['ExamQualified1']; ?></td>
                    <td><?php echo $row['Language2']; ?></td>
                    <td><?php echo $row['Spoken2']; ?></td>
                    <td><?php echo $row['Written2']; ?></td>
                    <td><?php echo $row['ExamQualified2']; ?></td>
                    <td><?php echo $row['Language3']; ?></td>
                    <td><?php echo $row['Spoken3']; ?></td>
                    <td><?php echo $row['Written3']; ?></td>
                    <td><?php echo $row['ExamQualified3']; ?></td>


                    <td>
                        
            <?php echo "<a href='' class='badge badge-success'> Edit</a>";?>        
                
        <?php
            }
        ?>

                    </td>
            </tr>
            
            <?php

  include('../includes/dbconnect.php');
  $query="SELECT * FROM employmentdetails where staffID= $fid";
  $result=mysqli_query($con, $query);
print_r($query);


?>           
 <tr>
            <th colspan="13"><h4>EMPLOYMENT DETAILS</h4></th>

        </tr>
        <tr>
            
            <th>MINISTRY</th>
            <th>LOCATION</th>
            <th>CONHESS</th>
            <th>LEVEL</th>
            <th>STEP</th>
            <th>DIRECTORATE</th>
            <th>DEPARTMENT</th>
			<th>UNIT</th>
			<th>DATE OF APPT WITH FMC</th>
           
        </tr>
		 

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['ministry']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['salaryScale']; ?></td>
                    <td><?php echo $row['gradeLevel']; ?></td>
                    <td><?php echo $row['step']; ?></td>
                    <td><?php echo $row['departmentID']; ?></td>
                    <td><?php echo $row['unitID']; ?></td>
					 <td><?php echo $row['directorateID']; ?></td>
					<td><?php echo $row['DateofAppwithFMC']; ?></td>
					
                </td>
				
			<tr>
            <th>QUAL 1</th>
			<th>Date</th>
			<th>QUAL 2</th>	
			<th>Date</th>
			<th>QUAL 3</th>
			<th>Date</th>
			<th>FIRST APPT</th>
            <th colspan="2">PRESENT APPT</th>
            <th colspan="3">Action</th>
        </</tr>
			
				<tr>
                    
					<td><?php echo $row['qualification1']; ?></td>
					<td><?php echo $row['dateq1']; ?></td>
					<td><?php echo $row['qualification2']; ?></td>
					<td><?php echo $row['dateq2']; ?></td>
					<td><?php echo $row['qualification3']; ?></td>
					<td><?php echo $row['dateq3']; ?></td>
                    <td><?php echo $row['DateOfFirstAppointment']; ?></td>
                    <td colspan="2"><?php echo $row['presentAppointment']; ?></td>
                    <td colspan="3">
                    <?php echo "<a href='update_admin_biodata.php?id=$id&ln=$row[LastName]&fn=$row[FirstName]&on=$row[OtherNames]&dob=$row[DOB]&gen=$row[Gender]&nat=$row[Nationality]&pass=$row[Passport]' class='badge badge-success'> Edit</a>";?> 
                    
                </td>
                </tr>
        <?php
            }
        ?>           
            
    </table>

    </div>

   
</div>
</div>
  </body>
 
</html>
                     
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
