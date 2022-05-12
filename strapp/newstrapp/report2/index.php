  
  
  
 

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
      
        <center><h2 class="form-signin-heading">REQUESTED ITEMS</h2><hr /><br><br></center>
       
		<br><br>
        
		<hr />
        <div class="content-loader">
        
        <table border="10" cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Dept</th>
        <th>Unit</th>
		<th>Request Name</th>
        <th>Sub Unit</th>
        
       
       
        </tr>
        </thead>
        <tbody>
        <?php
       include('dbconfig.php');
        $stmt = $db_con->prepare("SELECT * FROM requestitem    ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['unit']; ?></td>
			<td><?php echo $row['rname']; ?></td>
			<td><?php echo $row['sunit']; ?></td>
			
			
			
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
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