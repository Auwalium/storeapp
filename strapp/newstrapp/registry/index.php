<?php
session_start();
include('../functions.php');
?>


<?php
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
$today = ($currentDate); 

  require_once 'config.php';

$sql="SELECT SUM(cost) AS TotalItemsOrdered FROM requestitem where date = '$today' and noti = 0 ";
$result=mysqli_query($mysqli,$sql);
$row6=mysqli_fetch_array($result);

 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item to Bulk Store</title>
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
      <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">LOGOUT</a>
			
          </small>

        <?php endif ?>
    
  </div>  

    <div class="container">
      
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Stock in Store </button>
       <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Add Goods to Store</button>
        <hr />
		
	
        
        <div class="content-loader">
		
       
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
		 <th>Original stock level</th>
		 <th>Present stock level</th>
		 <th>Quantity Dispatch</th>
		 <th>Amount Generated <br>on Dispatch Items</th>  
		<th>Sale Price</th>
		<th>Cost Price</th>
		<th>Item Total Cost</th>
       <th>Category</th>
      
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
		$stmt = $db_con->prepare(" update audit.stock set dispatch = (oslevel - slevel)");
        $stmt->execute();
		$stmt = $db_con->prepare(" update audit.stock set cdispatch = (dispatch * sprice)");
        $stmt->execute();
        $stmt = $db_con->prepare("SELECT * FROM stock  where slevel !=0 ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['oslevel']; ?></td>
			<td><?php echo $row['slevel']; ?></td>
			<td><?php echo $row['dispatch']; ?></td>
			<td><?php echo $row['cdispatch']; ?></td>
			<td><?php echo $row['sprice']; ?></td>
			<td><?php echo $row['cprice']; ?></td>
			<td><?php echo $row['cost']; ?></td>
			<td><?php echo $row['category']; ?></td>
		
		
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        
		<center><a href="index.php" class="btn btn-warning">Back</a>
		
       
        </div>

		
    </div>
    

    
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




</body>
</html>
