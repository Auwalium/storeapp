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
      
        <h2 class="form-signin-heading">Store Stock and their Stock Level.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Goods to Store</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Stock in Store</button>
        <hr />
        
        <div class="content-loader">
		<a  href="../store.php" title="Click here" target = "window">
		<img src="edit.png" width="20px" /></span> Go Back to Store Module for Report </button></a>
        
		<a  href="../dispatch4pharmacy" title="Click here" target = "window">
		<img src="edit.png" width="20px" /></span> Dispatch Item</button></a><br>
		
		<a  href="../pharmrec" title="Click here" target = "window">
		<img src="edit.png" width="20px" /></span> Approve Item</button></a><br>
		
		 <a  href="../addstock4pharmacy" title="Click here" target = "window">
		<img src="edit.png" width="20px" /></span> Store Ledger and Dispatched Report </button></a>
		
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>category</th>
        <th>stock level</th>
        <th>edit</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        $stmt = $db_con->prepare("DELETE FROM `stock` WHERE `slevel` = '0'");
		$stmt->execute();
        $stmt = $db_con->prepare("SELECT * FROM stock where category = 'pharmacy' ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['slevel']; ?></td>
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
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        
		<center><a href="../store.php" class="btn btn-warning">Back</a>
		
        <a href="../logout.php" class="btn btn-danger">Sign Out </a></center>
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



<a href="../logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		

</body>
</html>
