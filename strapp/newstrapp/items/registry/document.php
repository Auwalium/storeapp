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
                        <h4 class="page-title">All Formal Letter Template</h4>
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
                <div class="row" >
                    <!-- Column -->
                   <div class="col-md-6 col-lg-11 col-xlg-3"  id='large_card' >
                        <div class="card card-hover" id='card' > 
      <div class='table-responsive'style='background-color:green;color:lavender;text-align:center;'>
        <?php
    
    include('../includes/dbconnect.php');   
        
    if (isset($_POST['submit'])){


    $fid 		= $_SESSION['username'];
    $fno		= "FMC/KEF/PER/".$fid;
    $writers_add 	= mysqli_real_escape_string($con,$_POST['writers_add']);
    $recipients_add 	= mysqli_real_escape_string($con,$_POST['recipients_add']);
    $salute 		= mysqli_real_escape_string($con,$_POST['salutation']);
    $title 		= mysqli_real_escape_string($con,$_POST['title']);
    $articlecontent 	= mysqli_real_escape_string($con, $_POST['content']);
    $Department 	= mysqli_real_escape_string($con,$_POST['department']);
    $comp_close		= mysqli_real_escape_string($con,$_POST['comp_close']);
    

$sql = "INSERT INTO document(staff_id,writers_add,recipient_add,salutation,title,body, complimentary_close) VALUES ('$fid','$writers_add','$recipients_add','$salute','$title', '$articlecontent','$comp_close')";
         //print_r($sql);
	$result = mysqli_query($con, $sql);

         if($result){
            
            echo "Your letter was successfully saved. Click on the CONTINUE link below <br/>";
            
           echo"<a href='letter.php' class='btn btn-success'> CONTINUE </a>";
    
         }else{
         
         echo"Error Submitting Document";
         
         }
         
    }


?>                
                        
 </div>                       
                        
                        
                        
                         
 <form action="" method="post">
    <div class='table-responsive'id='document'>
    <table class='table' id ='formal_letter'>
    <thead>
   
    </thead>
    <tr>
    
    <td style='float:right;'>
   <textarea cols='30' rows='4' id='writers_add' name='writers_add' >Type Writer Address</textarea>
   </td>
    </tr>
   <tr> 
    <td>
   <textarea cols='20' rows='5' id='recipeints_add' name='recipients_add' >The Receiver's Address </textarea></td>
   <td width='1000'>  </td>
    </tr>    
  <tr> 
    <td>
   <input type='text' name='salutation' id='salute' placeholder='Salutation'></td>
   <td width='100'>  </td>
    </tr>    
       
    <tr> 
    <td>
   <textarea cols='100px' rows='2' name='title' id='letter_title' placeholder='title'>
   Title of the letter 
   
    </textarea> </td>
  
    </tr>   
    
    
    <tr>
    <td colspan='2'>
      <textarea cols="10" rows="10" id="articlecontent" name="content"> 
        Body of the letter 
       
      </textarea>
      
      <script type="text/javascript"   >
        CKEDITOR.replace( 'articlecontent' );
      </script>
      
      </td>
      </tr>
       <tr>
    
    <td style='float:right;'>
   <textarea cols='30' rows='2' id='writers_add' name='comp_close' >Type Your Complementary Close</textarea>
   </td>
    </tr>
   
      <tr>
      <td>
      <input class="btn-sm btn-primary" type="submit" name='submit' value="Submit"/>
      </td>
      </tr>
      </table>
    </div>
  </form>
  
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
