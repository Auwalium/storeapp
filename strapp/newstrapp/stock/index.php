  
  
  
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


 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0  and item_category = 'Office Stationary' ORDER BY id DESC");
  }

 elseif(($role) == ('officeequipment') )
   {

 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0  and item_category = 'office equipment' ORDER BY id DESC");
   }

   elseif(($role) == ('maintenance') )
   {

 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0 and item_category = 'Maintenance Items'   ORDER BY id DESC");
   }

   elseif(($role) == ('hospitalequipment') )
   {

 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0 and item_category = 'Hospital Equipment'   ORDER BY id DESC");
   }
   elseif(($role) == ('hstore') )
   {

 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0  ORDER BY id DESC");
   }
   elseif(($role) == ('hcittu') )
   {

 $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0 and item_category = 'cittu' ORDER BY id DESC");
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
      
        <center><h2 class="form-signin-heading">SEARCH FOR AVAILABLE ITEMS IN STORE</h2><hr /><br><br></center>
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Notify MGT on Out of Stock Goods</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Stock in Store</button>
    <br><br>
        <a  href="../addstock21" title="Click here" target = "new window">
    <img src="edit.png" width="20px" /></span> Click Here to Check Reserved Items</button> </a><br>
    <hr />
        <div class="content-loader">
        
        <table border="10" cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Brand Name</th>
		<th>Stock Level</th>
    <th>Sub Store</th>
       
        <th><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>Request For Store Item</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
      
        $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      ?>
      <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['generic_name']; ?></td>
      <td><?php echo $row['brand_name']; ?></td>
	  <td><?php echo $row['stock_level']; ?></td>
    <td><?php echo $row['item_category']; ?></td>
      
      <td align="center">
      <a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
      <img src="edit.png" width="20px" />
            </a></td>
      
      </tr>
      <?php
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