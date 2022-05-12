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
<title>Company1</title>
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
      
       
        
        <hr />
        
        <div class="content-loader">
        
        
        
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


</html>




<html>

<body>
    


	<div class="container1">
      
        <center><h2 class="form-signin-heading1">Company Supply</center></h2><hr />
        
        <hr />
        
        <div class="content-loader1">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Description</th>
		<th>LPO Quantity</th>
        <th>LPO Approved Price</th>
		<th>Approved Company</th>
		<th>Audit Confirmed Quantity</th>
		<th>Confirmed by</th>
		<th>User Department Confirmed Description</th>
		<th>Confirmed by</th>
		<th>Total Cost</th>
		<th>1st payment</th>
		<th>2nd payment</th>
		<th>3rd payment</th>
		<th>Remaining Amount</th>
        <th>edit</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM company ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['descrip']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['aqp']; ?></td>
			<td><?php echo $row['acp']; ?></td>
			<td><?php echo $row['acq']; ?></td>
			<td><?php echo $row['aname']; ?></td>
			<td><?php echo $row['ucd']; ?></td>
			<td><?php echo $row['uname']; ?></td>
			<td><?php echo $row['tc']; ?></td>
			<td><?php echo $row['pay1']; ?></td>
			<td><?php echo $row['pay2']; ?></td>
			<td><?php echo $row['pay3']; ?></td>
			<td><?php echo $row['remain']; ?></td>
			
			
			<td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Recommend">
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
    
    <div class="container1">
      
        <div class="alert alert-info">
       
        </div>

    </div>
    <center><h2>
<a href="../account.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>
 

</html>