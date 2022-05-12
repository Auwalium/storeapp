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
    <title>View Open Files</title>
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
        <?php include('includes/header_admin.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('includes/department_unit_sidebar.php');?>
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
                        <h4 class="page-title">VIEW OPEN FILES</h4>
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
                <div class="table-responsive"style='background-color:white;padding:2%;'>
                <table class='table' id='doc_table'>
      
      <tr style='padding-top:2%;'>
      
      <?php     
 

$con = mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }






  
  		$sid =  $_GET['id'];   
echo $sid;		
               
                   $sql1="SELECT * FROM biodata where id = $sid";
                       
                        $res1=$con->query($sql1);
						Print_r ($sql1);
                while($row=$res1->fetch_assoc()){
                
             	$lname= $row['fname']; 	
             	$fname= $row['mname'];
             	$oname= $row['surnames']; 
    echo"<td> <a class='btn-sm btn-success' href='dashboard.php'> BACK</a> </td></td><td><h4>$lname</h4> </td> <td><h4>$fname</h4> </td> <td><h4>$oname</h4></td> <td><a class='btn-sm btn-success' href='view_electronic_files_new.php?id=$sid'>VIEW ELECTRONIC FILES </a></td> " ; 
             	
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
  $con = mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  		$sid =  $_GET['id'];                      
               
                   $sql="SELECT * FROM biodata where id= $sid";
                       
                        $res=$con->query($sql);
						Print_r ($sql);
                while($row=$res->fetch_assoc()){
                   $name = $row['name'];
                   $size = $row['size'];
                   $file_type = $row['file_type'];
                   $id = $row['id'];
				   echo $name;
      	
       echo"<tr> 
       <td> $id</td>
       <td> $name </td>
       <td> $file_type</td>
       <td> $size</td>";
       ?>
 <td> <a  class='btn-sm btn-info' href= "http://localhost/blog/schools/OPEN/<?php echo $name; ?>" > View Result </a>
        </td>
       
    
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
