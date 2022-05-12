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
    <title>Search Staff</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
	
	      <link rel="stylesheet" href="../bootstrap.min.css" />  
           <script src="../bootstrap.min.js"></script>  
           <script src="jquery.min.js"></script>  
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
         <div class="page-wrapper" style='background-color:lavender;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id='header-label'>
                <div class="row" style='background-color:lavender;'>
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">SEARCH ITEM</h4>
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
            <div class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row" style="background-color:whitesmoke; padding:2%; box-shadow:0px 0px 5px 5px grey;">
                    <!-- Column -->
   <div class="search" style='background-color:whitesmoke;'>
<center>
<form  action="" method="post">
<!--<input type="text" name="search" width='100%' placeholder="Search with ITEM NAME ">-->
<input type="submit" name="submit1" value="Search ITEM " class='btn-sm btn-info'>
 <div class="container" style="width:500px;">  
                <label>Enter Country Name</label>  
                <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country Name" />  
                <div id="countryList"></div>  
           </div>  

</form>
</center>
</div>
<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search_staff.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  
 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "nsuk");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
     $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["country_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  
<div class='table-responsive'>
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>COMPANIES AND THEIR BIDDING PRICE ON ITEM</h4></th>

        </tr>
        
        <tr>
            <th>SUPPLIER ID</th>
            <th>ITEM ID</th>
            <th>SUPPLIER NAME</th>
            <th>ITEM NAME</th>
            <th>PRICE</th>
            
            <th colspan="2">Action</th>

	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["country"];
	
	include('../includes/dbconnect.php');
		
		$sql="SELECT qoutation.id ,supplier.id as id1,supplier.suppliername, qoutation.price, item.itemname from qoutation inner join supplier on qoutation.supplierid = supplier.id inner join item on item.id =qoutation.itemid where item.itemname like '%$search_value%'";

        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <?php $id = $row['id']; ?>
					<td><?php echo $row['id1']; ?></td>
                    <?php $id1 = $row['id1']; ?>
                    <td><?php echo $row['suppliername']; ?></td>
                    <td><?php echo $row['itemname']; ?></td>
					 <td><?php echo $row['price']; ?></td>                   
                    
                    <td colspan='2'><?php $id =$row['id']; ?>
                        
            <?php echo "<a href='edit_form.php?id1=$id1&itemname=$search_value&id=$id' class='badge badge-primary'> CLICK TO SELECT</a>";?> 
             

                    
                
        <?php
            }
            }
        ?>

                    </td>
            </tr>
         </tbody>   

</table>
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 CLICK HERE TO VIEW ITEM LIST
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><CENTER>FMC KEFFI REAL TIME COMPETITIVE BIDDING AUDITWARE</CENTER></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <link rel="stylesheet" href="bootstrap.min.css" />  
           <script src="bootstrap.min.js"></script>  
           <script src="jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <label>Enter Country Name</label>  
                <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country Name" />  
                <div id="countryList"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"cittu3.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  
 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "audit");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["country_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  
  
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	  
	  
	  
	  
	  
	  
	  
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 CLICK HERE TO VIEW ITEM LIST UNDER RADIOLOGY REVOLVING FUND
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
	  
	  
	 
	    
  
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	  	  
	  
	  
	  
	  
	  
	  