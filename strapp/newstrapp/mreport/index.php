  
  
  
  <?php
session_start();
// variable to store the current time in seconds  
$currentTimeinSeconds = time();   
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds);   
$today = ($currentDate); 

$user = $_SESSION['username1'];
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {


 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0  and item_category = 'Office Stationary' ORDER BY id DESC");
  }

 elseif(($role) == ('officeequipment') )
   {

 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0  and item_category = 'office equipment' ORDER BY id DESC");
   }

   elseif(($role) == ('maintenance') )
   {

 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0 and item_category = 'Maintenance Items'   ORDER BY id DESC");
   }

   elseif(($role) == ('hospitalequipment') )
   {

 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0 and item_category = 'Hospital Equipment'   ORDER BY id DESC");
   }
   elseif(($role) == ('hstore') )
   {

 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0  ORDER BY id DESC");
   }
   elseif(($role) == ('hcittu') )
   {

 $stmt = $db_con->prepare("SELECT * FROM report WHERE stock_level > 0 and item_category = 'cittu' ORDER BY id DESC");
   }
else
   {
  echo "no query";
   }



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Stock to Store</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  
  $("#btn-view").hide();
  
  $("#btn-add").click(function(){
    $(".content-loader").fadeOut('slow', function()
    {
      $(".content-loader").fadeIn('slow');
      $(".content-loader").load('add_form.php');
      $("#btn-add").hide();
      $("#btn-view").show();
    });
  });
  
  $("#btn-view").click(function(){
    
    $("body").fadeOut('slow', function()
    {
      $("body").load('index.php');
      $("body").fadeIn('slow');
      window.location.href="index.php";
    });
  });
  
});
</script>

</head>

<body>
  <div class="well" style="display: table;">
    <h4>Welcome </h4>
      <?php  if (isset($_SESSION['username'])) : ?>
          <strong><?php echo $_SESSION['username1']; ?></strong>
          <small>
  <?php $user = $_SESSION['username1'];?>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['username']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
          </small>

        <?php endif ?>
    
  </div>
    


  <div class="container">
      
        <center><h2 class="form-signin-heading">GENERAL ITEMS REPORT</h2><hr /><br><br></center>
        
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Stock in Store</button>
    <br><br>
        
    <hr />
        <div class="content-loader">
        
        <table border="10" cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Brand Name</th>
	
    <th>Sub Store</th>
    <th>Opening Stock Level</th>
    <th>Qty Supply</th>
    <th>Qty Dispatch</th>
    <th>End Stock Level</th>
    <th>Detail Dispatch</th>
       
        
        </tr>
        </thead>
        <tbody>
        <?php
      
      $currentTimeinSeconds = time();  
      $currentDate = date('Y-m-d', $currentTimeinSeconds); 
      $y = date('Y'); 
      $m = date('m'); 
      $d = date('d');           
     
if ($m == 1)
 {
       $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['de']; ?></td>
    <td><?php echo $row['jana']; ?></td>
    <td><?php echo $row['jans']; ?></td>
    <td><?php echo $row['de'] + $row['jana'] - $row['jans']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>
      
      </tr>
      <?php
    }
 }
 elseif ($m == 2)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['jan']; ?></td>
    <td><?php echo $row['feba']; ?></td>
    <td><?php echo $row['febs']; ?></td>
    <td><?php echo $row['jan'] + $row['feba'] - $row['febs']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }

 }
  elseif ($m == 3)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['feb']; ?></td>
    <td><?php echo $row['mara']; ?></td>
    <td><?php echo $row['mars']; ?></td>
    <td><?php echo $row['feb'] + $row['mara'] - $row['mars']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }

 }
  elseif ($m == 4)
 {
 
       $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['generic_name']; ?></td>
      <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>

     <td><?php echo $row['mar']; ?></td>
    <td><?php echo $row['apra']; ?></td>
    <td><?php echo $row['aprs']; ?></td>
    <td><?php echo $row['mar'] + $row['apra'] - $row['aprs']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }
 }
  elseif ($m == 5)
 {
 
       $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['apr']; ?></td>
    <td><?php echo $row['maya']; ?></td>
    <td><?php echo $row['mays']; ?></td>
    <td><?php echo $row['apr'] + $row['maya'] - $row['mays']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }
 }
  elseif ($m == 6)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['may']; ?></td>
    <td><?php echo $row['juna']; ?></td>
    <td><?php echo $row['juns']; ?></td>
    <td><?php echo $row['may'] + $row['juna'] - $row['juns']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>  
      </tr>
      <?php
    }

 }
  elseif ($m == 7)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['jun']; ?></td>
    <td><?php echo $row['jula']; ?></td>
    <td><?php echo $row['juls']; ?></td>
    <td><?php echo $row['jun'] + $row['jula'] - $row['juls']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>  
      </tr>
      <?php
    }

 }
  elseif ($m == 8)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['jul']; ?></td>
    <td><?php echo $row['auga']; ?></td>
    <td><?php echo $row['augs']; ?></td>
    <td><?php echo $row['jul'] + $row['auga'] - $row['augs']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>  
      </tr>
      <?php
    }

 }
  elseif ($m == 9)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['aug']; ?></td>
    <td><?php echo $row['nova']; ?></td>
    <td><?php echo $row['novs']; ?></td>
    <td><?php echo $row['aug'] + $row['nova'] - $row['novs']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }

 }
  elseif ($m == 10)
 {
 
       $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['sep']; ?></td>
    <td><?php echo $row['octa']; ?></td>
    <td><?php echo $row['octs']; ?></td>
    <td><?php echo $row['sep'] + $row['octa'] - $row['octs']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>  
      </tr>
      <?php
    }
 }
  elseif ($m == 11)
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['oct']; ?></td>
    <td><?php echo $row['nova']; ?></td>
    <td><?php echo $row['novs']; ?></td>
    <td><?php echo $row['oct'] + $row['nova'] - $row['novs']; ?></td>
     <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td> 
      </tr>
      <?php
    }

 }
  
  else
 {
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['generic_name']; ?></td>
    <td><?php echo $row['brand_name']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
    <td><?php echo $row['nov']; ?></td>
    <td><?php echo $row['dea']; ?></td>
    <td><?php echo $row['des']; ?></td>
    <td><?php echo $row['nov'] + $row['dea'] - $row['des']; ?></td>
    <td><a href="detaildispatch.php?id='<?php echo $row['id']; ?>'">View Detail</td>  
      </tr>
      <?php
    }

 }

 
    ?>
        </tbody>
        </table>
        
        </div>

    </div>
    


    
    <div class="container">
      
    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
  $('#example').DataTable();

  $('#example')
  .removeClass( 'display' )
  .addClass('table table-bordered');
});
</script>


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
    require_once 'connection.php';
    $sql="SELECT SUM(quantity) as 'Total', name FROM requestitem GROUP by name";
        $result = mysqli_query($mysqli,$sql);
    // print_r($result1);
    
    while ($row=mysqli_fetch_assoc($result))
             {
         $name= $row['name'];
    echo "[('$name'),".$row['Total']."],"; 
     }
     
    
     ?>
        ]);

        var options = {
          title: 'Most Requested Items in Store'
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

 






</body>
</html>