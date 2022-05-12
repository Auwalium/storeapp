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
        <div class="page-wrapper" style='background-color:white;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" style='background-color:whitesmoke;padding-bottom:2%;'>
                <div class="row" style='background-color:whitesmoke;'>
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">STAFF FULL DOCUMENTATION</h4>
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
                <div class="row">
                    <!-- Column -->
                    <center>
                    <div class='table-responsive'>
                        <div class="card " id='tab_sum'>
                           


<?php
    
    include('../includes/dbconnect.php');

$LastName = $_SESSION['lastName'];
$FirstName = $_SESSION['firstName'];
$OtherNames = $_SESSION['otherNames'];
$DOB = $_SESSION['dob'];
$Gender = $_SESSION['gender'];
$Nationality = $_SESSION['nationality'];
$Passport = $_SESSION['passport'];
$fid = $_GET['id'];    

$query="select * from staff where id=$fid";
//print_r($query);
$result=mysqli_query($con, $query);

?>


    <div class="container">
    
    <h4>STAFF DOCUMENTATION SUMMARY </h4>
    <div class='table-responsive'>
    <table class='table' id='summary_table'>
        <tr>
            <th colspan="13"><h4>BIO DATA</h4></th>

        </tr>
        <tr>
             <th colspan='3'>STAFF PHOTOGRAPH</th>
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>NATIONALITY</th>
           
            <th colspan="3">Action</th>


        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
             $photo = $row['Passport'];
            ?>
                <tr>
                    <td colspan='3'> 
                    <img src="<?php echo $photo;?>" width='60px' height='70px' style="border-radius:10px;border:1px solid black;" > 
                    </td>
                    <td><?php echo $row['fileNo']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['otherNames']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td colspan='3'><?php $id =$row['id']; ?>
                        
            <?php echo "<a href='update_admin_biodata.php?id=$id' class='btn-sm btn-primary'> Edit</a>";?> 
             

                    
                
        <?php
            }
        ?>

                    </td>
            </tr>
            
  
            
         <?php


include('../includes/dbconnect.php');
  $query="SELECT * FROM stfcontactperm where StaffID=$fid";
  $result=mysqli_query($con, $query);

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
                    <td ><?php echo $row['Phone1']; ?></td>
                    <td ><?php echo $row['Phone2']; ?></td>
                    <td ><?php echo $row['Nationality']; ?></td>
                    <td ><?php echo $row['State']; ?></td>
                    <td ><?php echo $row['LGA']; ?></td>
                    <td  colspan='3'><?php echo $row['StreetArea']; ?></td>
                    <td  colspan='2'><?php echo $row['Email']; ?></td>
                    <td colspan='3'>
                        

                <?php echo "<a href='edit_staff_records.php?id=$id' title='Edit Staff Record' class='btn-sm btn-primary'> Edit</a>";?>  

            <?php   
            }
            ?>
                    </td>
                </tr>   
            
            
  <?php
             
  include('../includes/dbconnect.php');
  $query="select * from stfmaritalstatus where StaffID=$fid";
  $result=mysqli_query($con, $query);

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
                    
                    <td colspan="2"><?php echo $row['Status']; ?></td>
                    <td colspan="2"><?php echo $row['MarriageDate']; ?></td>
                    <td colspan="3"><?php echo $row['SpouseName']; ?></td>
                    <td colspan="3"><?php echo $row['SpouseDOB']; ?></td>
                    <td colspan="3">
                        
            <?php echo "<a href='' class='btn-sm btn-primary'> Edit</a>";?> 

                    
                
        <?php
            }
        ?>


<?php

//$query="select * from stfchildren where StaffID=$fid";
//$result=mysqli_query($con, $query);

?>

   <!--
        <tr>
            <th colspan="9"><h4 >Children</h4></th>

        </tr>
        <tr>
            
            <th>NAME</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th colspan="2">Action</th>


        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td>
                        
            <?php echo "<a href='' class='badge badge-success'> Edit</a>";?>            
                
        <?php
            }
        ?>

                    </td>
            </tr>

                    </td>
            </tr>
            -->

<?php

$query="select * from stflanguage where StaffID=$fid";
$result=mysqli_query($con, $query);

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
            <th colspan="2">Action</th>


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
                        
            <?php echo "<a href='' class='btn-sm btn-primary'> Edit</a>";?>        
                
        <?php
            }
        ?>

                    </td>
            </tr>
            
            <?php

  include('../includes/dbconnect.php');
  $query="SELECT * FROM stfemploymentdetails where StaffID= $fid";
  $result=mysqli_query($con, $query);



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
            <th>DEPARTMENT</th>
            <th>UNIT</th>
            <th>FIRST APPT</th>
			 <th>QUAL 1</th>
			  <th>Date</th>
			  <th>QUAL 2</th>
			  <th>Date</th>
			  <th>QUAL 3</th>
			  <th>Date</th>
            <th colspan="2">PRESENT APPT</th>
            <th colspan="3">Action</th>
        </tr>

        <?php
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
                <tr>
                    <td><?php echo $row['Ministry']; ?></td>
                    <td><?php echo $row['Location']; ?></td>
                    <td><?php echo $row['SalaryScale']; ?></td>
                    <td><?php echo $row['GradeLevel']; ?></td>
                    <td><?php echo $row['Step']; ?></td>
                    <td><?php echo $row['Department']; ?></td>
                    <td><?php echo $row['Unit']; ?></td>
                    <td><?php echo $row['DateOfFirstAppointment']; ?></td>
					<td><?php echo $row['qualification1']; ?></td>
					<td><?php echo $row['dateq1']; ?></td>
					<td><?php echo $row['qualification2']; ?></td>
					<td><?php echo $row['dateq2']; ?></td>
					<td><?php echo $row['qualification3']; ?></td>
					<td><?php echo $row['dateq3']; ?></td>
                    <td colspan="2"><?php echo $row['PresentAppointment']; ?></td>
                    <td colspan="3">
                    <?php echo "<a href='update_admin_biodata.php?id=$id&ln=$row[LastName]&fn=$row[FirstName]&on=$row[OtherNames]&dob=$row[DOB]&gen=$row[Gender]&nat=$row[Nationality]&pass=$row[Passport]' class='btn-sm btn-primary'> Edit</a>";?> 
                    
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
                   </center>
                     
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
