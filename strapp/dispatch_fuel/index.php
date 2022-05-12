<?php
include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}


?>	

	
		<?php
session_start();

 $dispatchby = $_SESSION["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approved</title>
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
			window.location.href="dispatch.php";
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
      
       
        <!--<button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>-->
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        
	
		 </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
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









<body>
    


	<div class="container">
      
        <center><h2 class="form-signin-heading">Items Approved for Dispatch.</h2></center><hr />
    
        <hr />
       
        <div class="content-loader1"  style="overflow-x:auto;">
        
            <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
       
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Approved By</th>
        <th>Dept</th>
		<th>Unit</th>
        <th>Sub Unit</th>
        <th>Request Date</th>
		<th>Qty Requested</th>
		<th>Qty Recommended</th>
		<th>Qty Approved</th>
		<th>Qty Remaining in Store</th>
		
        <th><h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" > <span class="glyphicon glyphicon-pencil"></span>Dispatch Item</th>
        <th><h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" > <span class="glyphicon glyphicon-pencil"></span>Delete Dispatched Item</th>
        </tr>
        </thead>
        <tbody>
        
		<?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM approveditem where category = 'fuel' or category = 'diseal' ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['appv']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['unit']; ?></td>
			<td><?php echo $row['sunit']; ?></td>
			<td><?php echo $row['adate']; ?></td>
			<td><?php echo $row['qis']; ?></td>
			<td><?php echo $row['qa']; ?></td>
			<td><?php echo $row['qabs']; ?></td>
			<td><?php echo $row['total']; ?></td>
			
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
    
    <div class="container">
      
        <div class="alert alert-info">
       
        </div>

    </div>
    

    


     <center><h2>
<a href="../store.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.php?logout='1'" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>

</body>
</html>









