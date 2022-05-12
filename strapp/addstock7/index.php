<?php
include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recieve Scrap items</title>
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
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
          </small>

        <?php endif ?>
    
  </div>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Returned Scrap Items </h2><hr />
       
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Returned Scrap Items</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
		<tr>
        <th>A</th>
        <th>B</th>
		<th>C</th>
		<th>D</th>
		<th>E</th>
		<th>F</th>
        <th>G</th>
		<th>H</th>
		<th>I</th>
		<th>J</th>
		<th>K</th>
		<th>L</th>
		<th>M</th>
		<th>N</th>
		<th>O</th>
        
        </tr>

        <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Original Quantity</th>
		<th>Returned Quantity</th>
		<th>Remaining Quantity</th>
        <th>Serial Number</th>
		<th>Model</th>
		<th>Returned By</th>
		<th>Date Declared as scrap and Returned to store</th>
		<th>Auditor that Confirmed</th>
		<th>Confirmed Date by Auditor</th>
		<th>Store Officer that Confirmed Receipt</th>
		<th>Recieved Date by Store</th>
       
        <th><button class="btn btn-info" type="button" > <span class="glyphicon glyphicon-pencil"></span>Confirmed Item as scrap</th>
		<th><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>Delete Item Once you have Confirmed</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM scrap ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['qty2']; ?></td>
			<td><?php echo $row['qty1']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['snum']; ?></td>
			<td><?php echo $row['model']; ?></td>
			<td><?php echo $row['rname']; ?></td>
			<td><?php echo $row['rdate']; ?></td>
			<td><?php echo $row['aname']; ?></td>
			<td><?php echo $row['adate']; ?></td>
			<td><?php echo $row['sname']; ?></td>
			<td><?php echo $row['sdate']; ?></td>
			
			
			<td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			
			<td align="center"><a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td>
			
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    
    

    
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




 <div class="container">
      
        <div class="alert alert-info">
        
		
		
        <a href="../logout.php" class="btn btn-danger">Sign Out </a></center>
        </div>

</body>
</html>
