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
    <title>Stock Statement</title>
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
         <div class="page-wrapper" style='background-color:lavender;'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb" id='header-label'>
                <div class="row" style='background-color:lavender;'>
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">SEARCH ITEM</h4>
						<?php// include('../includes/reportheader.php');?>
						
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
 
<div class='table-responsive'>
 
 
 
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>INCOME ACCOUNT</h4></th>

        </tr>
        </thead>
        <tr>
            <th>NAME</th>
			<th>SALE PRICE</th>
            <th>ORIGINAL STOCK LEVEL</th>
            <th>COST</th>
			<th>PRESENT STOCK LEVEL</th>
            <th>COST</th>
			<th>DISPATCH STOCK</th>
            <th>COST</th>
            <th>DATE</th>
            <th>DESCRIPTION</th>
           
		</tr>
	
       

        <?php


 require_once '../config.php';	
 
$sql="update stock set rcost = (slevel * sprice) ";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set cdispatch = (sprice *dispatch)";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set code = id where code = ''";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set dispatch = (oslevel - slevel)";
$result=mysqli_query($mysqli,$sql);
 
$sql="update stock set code = 1 where slevel = 0";
$result=mysqli_query($mysqli,$sql);

$sql="update stock set cost = (slevel*sprice) ";
$result=mysqli_query($mysqli,$sql);


$sql="update stock1 set dispatch = (oslevel - slevel)";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set cost = (oslevel*sprice) ";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set rcost = (slevel * sprice) ";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set code = 1 where slevel = 0";
$result=mysqli_query($mysqli,$sql);

$sql="update stock1 set cdispatch = (sprice *dispatch)";
$result=mysqli_query($mysqli,$sql);


$sql="SELECT SUM(oslevel*sprice) AS TotalItemsOrdered FROM stock";
$result=mysqli_query($mysqli,$sql);
$row6=mysqli_fetch_array($result);

$sql="SELECT SUM(oslevel) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row7=mysqli_fetch_array($result);


$sql="SELECT SUM(rcost) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row8=mysqli_fetch_array($result);

$sql="SELECT SUM(oslevel) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row9=mysqli_fetch_array($result);
 
 
$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM requestitem1 ";
$result=mysqli_query($mysqli,$sql);
$row10=mysqli_fetch_array($result);

$sql="SELECT SUM(qty) AS TotalItemsOrdered FROM requestitem1 ";
$result=mysqli_query($mysqli,$sql);
$row11=mysqli_fetch_array($result);

$sql="SELECT SUM(slevel) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row50=mysqli_fetch_array($result);



$sql="SELECT SUM(rcost) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row51=mysqli_fetch_array($result);

$sql="SELECT SUM(dispatch) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row52=mysqli_fetch_array($result);

$sql="SELECT SUM(cdispatch) AS TotalItemsOrdered FROM stock ";
$result=mysqli_query($mysqli,$sql);
$row53=mysqli_fetch_array($result);


$sql="SELECT SUM(rcost) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row54=mysqli_fetch_array($result);

$sql="SELECT SUM(dispatch) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row55=mysqli_fetch_array($result);

$sql="SELECT SUM(cdispatch) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row56=mysqli_fetch_array($result);
 
$sql="SELECT SUM(slevel) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row57=mysqli_fetch_array($result);

$sql="SELECT SUM(oslevel) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row58=mysqli_fetch_array($result);
 
$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM stock1 ";
$result=mysqli_query($mysqli,$sql);
$row59=mysqli_fetch_array($result);
       
		include('../includes/dbconnect.php');	
		$sql="SELECT * from stock";

        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
					<td><?php echo $row['sprice']; ?></td>
					<td><?php echo $row['oslevel']; ?></td>
                    <td><?php echo $row['cost']; ?></td>
					<td><?php echo $row['slevel']; ?></td>
					<td><?php echo $row['rcost']; ?></td>
					<td><?php echo $row['dispatch']; ?></td>
                    <td><?php echo $row['cdispatch']; ?></td>
                    <td><?php echo $row['date']; ?></td>
					 <td><?php echo $row['descrip']; ?></td>                   
            
        <?php
            }
            
        ?>

            </tr>
			
			<tr>
					<td style='color:purple;'>TOTAL</td>
					<td style='color:purple;'></td>
					<td style='color:blue;'><?php echo "$row9[0]"; ?></td>
                    <td style='color:blue;'><?php echo "$row6[0]"; ?></td>
                    <td style='color:blue;'><?php echo "$row50[0]"; ?></td>
					<td style='color:blue;'><?php echo "$row51[0]"; ?></td>                
					<td style='color:blue;'><?php echo "$row52[0]"; ?></td>
                    <td style='color:blue;'><?php echo "$row53[0]"; ?></td>
                    <td style='color:blue;'><?php echo $row[0]; ?></td>
					<td style='color:blue;'><?php echo $row[0]; ?></td>
            </tr>
         </tbody>   
</table>



<table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="13"><h4>BALANCE ACCOUNT</h4></th>

        </tr>
        
       <tr>
            <th>NAME</th>
            <th>ORIGINAL STOCK LEVEL</th>
            <th>COST</th>
			<th>PRESENT STOCK LEVEL</th>
            <th>COST</th>
			<th>DISPATCH STOCK</th>
            <th>COST</th>
            <th>DATE</th>
            <th>DESCRIPTION</th>
           
		</tr>
        <?php
      
	
	include('../includes/dbconnect.php');
	$sql="SELECT * from stock1";

        $result = mysqli_query($con,$sql);
        
       // print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
					<td><?php echo $row['oslevel']; ?></td>
                    <td><?php echo $row['cost']; ?></td>
					<td><?php echo $row['slevel']; ?></td>
					<td><?php echo $row['rcost']; ?></td>
					<td><?php echo $row['dispatch']; ?></td>
                    <td><?php echo $row['cdispatch']; ?></td>
                    <td><?php echo $row['date']; ?></td>
					 <td><?php echo $row['category']; ?></td>                   
            
        <?php
            }
            
        ?>

            </tr>
			
			<tr>
                    <td style='color:purple;'>TOTAL</td>
					<td style='color:blue;'><?php echo $row58[0]; ?></td>
                    <td style='color:blue;'><?php echo "$row59[0]"; ?></td>
					<td style='color:blue;'><?php echo $row57[0]; ?></td>
					<td style='color:blue;'><?php echo $row54[0]; ?></td>
                    <td style='color:blue;'><?php echo "$row55[0]"; ?></td>
					<td style='color:blue;'><?php echo "$row56[0]"; ?></td>
                    <td></td>
					<td></td>                   
        

            </tr>
         </tbody>   

</table>

	<table class='table' id='summary_table'>       
        <thead>
        <tr>
            <th colspan="13"><h4>EXPENDITURE ACCOUNT</h4></th>
        </tr>       
        <tr>
            <th>NAME</th>
            <th>QUANTITY</th>
            <th>PID</th>
            <th>COST</th>
            <th>DATE</th>   
			<th>SUB-STORE</th>   			
	</thead>
        </tr>
        <?php	
	include('../includes/dbconnect.php');
	
		$sql="SELECT * from requestitem1";
        $result = mysqli_query($con,$sql);
        
       //print_r($sql);
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                   
					<td><?php echo $row['qty']; ?></td>
                   
                    <td><?php echo $row['pid']; ?></td>
                    <td><?php echo $row['cost']; ?></td>
					 <td><?php echo $row['date']; ?></td>   
					<td><?php echo $row['category']; ?></td>    					 
             
        <?php
            }
            
        ?>

                    </td>
            </tr>
		<tr>
                    <B><td style='color:purple;'>TOTAL</td></B>
                   
					<td style='color:blue;'><B><?php echo "$row11[0]"; ?></B></td>
                   
                    <td></td>
                    <td style='color:blue;'><B><?php echo "$row10[0]"; ?></td>
					 <td></td></B>                  
                    
                 
            </tr>	
			
			
         </tbody>   

</table>
<div>


 <div class="search" style='background-color:whitesmoke;'>
<center>
<form  action="new2.php" method="post">
<!--<input type="text" name="search" width='100%' placeholder="Search with ITEM NAME ">-->

 <div class="container" style="width:500px;">  
                <tr><td><label>Select Start Date</label></td>  
				<td><input type="date" name="date1" width='100%' id='autocomplete' placeholder="Type ITEM NAME "></td></tr>
                <br><tr><td><label>Select End Date</label></td>  
				<td><input type="date" name="date2" width='100%' id='autocomplete' placeholder="Type ITEM NAME "><br>
				<input type="submit" name="submit" value="Search " class='btn-sm btn-info'></td></tr>
           </div>  

</form>
</center>
</div>
	

<table class='table' id='summary_table'>       
        
		<thead>
        <tr>
            <th colspan="13"><h4>SALES SUMMARY ACCOUNT FROM VARIOUS SUB STORES</h4></th>
        </tr>       
        <tr>
            <th>NAME</th>
            <th>Amount</th>
           			
	</thead>
        </tr>
        <?php	
		
	 if(isset($_POST["submit"]))  
 {      $date1 =  $_POST['date1'];
        $date2 =  $_POST['date2'];
		
		require_once 'config.php';
		$sql="SELECT SUM(cost) as 'Total', category FROM requestitem1  where date between '$date1' and '$date2' GROUP by category";
        $result = mysqli_query($mysqli,$sql);
		//print_r($sql);
		
		while ($row=mysqli_fetch_assoc($result))
             {
				 $category= $row['category'];
		//echo "[('$category'),".$row['Total']."],"; 
		
	
            ?>
            <tbody>
                <tr>
                    <td><?php echo "$category";  ?></td>             
					
                   <td><?php echo $row['Total'];  ?></td>      
                    </td>
            </tr>
		
      
	   </tbody>   
<?php
}
 }
?>
</table>
<div>
<html>
  <head>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        
		<?php
		
		$sql="SELECT SUM(qty) as 'Total', name FROM requestitem1 GROUP by name";
        $result = mysqli_query($con,$sql);
		// print_r($result1);
		
		while ($row=mysqli_fetch_assoc($result))
             {
				 $name= $row['name'];
		echo "[('$name'),".$row['Total']."],"; 
		 }
		 
		
		 ?>
        ]);

        var options = {
          title: 'GRAPHICAL DEMONSTRATION OF EXPENDITURE ACCOUNT SHOWING MOST SALEABLE ITEMS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
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
