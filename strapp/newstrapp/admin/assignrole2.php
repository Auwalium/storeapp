<?php
session_start();
include("auth.php");
$did = $_GET['did'];
$username = $_GET['username'];
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
    <title>Assgin Roles</title>
    <!-- Custom CSS -->
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/style.main.css" rel="stylesheet">
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
        <?php include('../includes/admin_sidebar.php');?>
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
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <div class="p-l-30 p-10"><a href="" style="color:crimson; font-weight:bold;" >Welcome <?php echo $_SESSION['username']; ?></a></div>
                            </nav>
                        </div>
                    </div>'
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
                   <div class="col-md-6 col-lg-11 col-xlg-3" style='background-color:#444;padding:2%;' >
                        <div class="card card-hover" style='background-color:#ccc;broder-radius:10px;padding:2%;'>  
 	<form method='POST' action='assignrole2.php'>
 	<input type="hidden" class="form-control" name="username" value ="<?php echo $username   ?>"  required>
	<input type="hidden" class="form-control" name="did" value ="<?php echo $did   ?>"  required>
	<input type="text" class="form-control" placeholder='Are you sure that you want to reset role for staff with username ="<?php echo $username  ?>"? if no, click cancel else click yes'>		
	<div style='margin-top:1%;'>

	</div>  
 	<center><input type="submit" class="btn-lg btn-info" name="submit9" value="yes"> <a class='btn-sm btn-default  fa fa-folder-open' style='padding:4px;' href='user.php'>Cancel</a></center>
         </form> 
<?php
					if(isset($_POST['submit9']))
					{
						include('../includes/dbconnect.php');
						$username = $_POST['username'];
						$did = $_POST['did'];
						$sql = "update users set role = 'users', usergroup = 'users' where id =$did ";
						 print_r($sql);
						mysqli_query($con, $sql);
 						 echo "User Role Successfully Reset for '$username'";	
?>
			<script>
           // setTimeout(function(){
           // window.location.href = 'http://localhost/fmc/admin/user.php';
           // }, 100);
			</script>

<?php						 
			
						}
						
?>
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
