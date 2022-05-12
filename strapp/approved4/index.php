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
      
        <center><h2 class="form-signin-heading">STORE ITEMS AND THEIR STOCK LEVEL.</h2></center><hr />
        <!--<button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>-->
      
		
       
		 <br>
		<a  href="../store.php" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Go Back to Store Module for Report and to Dispatch Item</button> </a><br>
		
		<a  href="../addstock4officeequipment" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Office Equipment Receipt/Issues Voucher</button> </a><br>
		
		<a  href="../addstock4hospitalequipment" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Hospital Equipment Receipt/Issues Voucher</button> </a><br>
		
		<a  href="../addstock4maintenance" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Maintenance Receipt/Issues Voucher</button> </a><br>
		
		<a  href="../addstock4officestationary" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Office Stationary Receipt/Issues Voucher</button> </a><br>
		
		<a  href="../addstock20" title="Click here" target = "new window">
		</span> <marquee> <b><h1 style = "color:red;"> CLICK ON THIS MOVING TEXT TO SEE ITEMS <BR>WITH LOW STOCK LEVEL FOR RE-ORDER </h1></b> </marquee> </button> </a><br>
		<hr />
		
		
	
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
       
		<th>Item ID</th>
		<th>item Name</th>
		<th>Category</th>
		<th>stock level</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
		
		$stmt = $db_con->prepare("UPDATE stock set code = id where code is null");
        $stmt->execute();
        
        $stmt = $db_con->prepare("SELECT * FROM stock ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
		$id=$row['id'];
		$name=$row['name'];
		$consult_fee=$row['slevel'];
		$dept=$row['dept'];
		$appv=$row['appv'];
        $adate=$row['adate'];
		$qis=$row['qis'];
			
			?>
			<tr>
			
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['slevel']; ?></td>
			
			
			
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
      
        <center><h2 class="form-signin-heading">Items Recommended for Approval.</h2></center><hr />
       <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Comment on Item</button>
        <hr />
        <center><h4 class="form-signin-heading">Note Item Code and Stock Level of item you want to approve indicated below</h4></center><hr />
        <div class="content-loader1"  style="overflow-x:auto;">
        
            <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
       
        <thead>
        <tr>
		<th>Code</th>
		<th>Stock level</th>
        <th>ID</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Dept</th>
		<th>Unit</th>
        <th>Sub Unit</th>
        <th>Date</th>
		<th>Recom. Qty</th>
		
		
		<th>Comment From Store</th>
        <th>Comment From MD</th>
        <th><h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>Approve</th>
 <th><h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>Delete Approved Items</th>
        </tr>
        </thead>
        <tbody>
        
		<?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT stock.code, stock.slevel, requestitem.name, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.unit , requestitem.sunit, requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category 
	FROM stock inner join requestitem where  stock.name = requestitem.name AND (requestitem.noti = 0 and requestitem.category != 'fuel'and requestitem.category != 'cittu')  ");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['code']; ?></td>
			<td style="color: red; width: 20%"><b><?php echo $row['slevel']; ?>  </b></td> 
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['unit']; ?></td>
			<td><?php echo $row['sunit']; ?></td>
			<td><?php echo $row['rdate']; ?></td>
			<td style="color: blue; width: 20%"><b><?php echo $row['rqmd1']; ?>  </b></td> 
			<td><?php echo $row['comments']; ?></td>
			<td><?php echo $row['commentm']; ?></td>
			
			<td align="center">
			
			
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Approve">
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

<a href="../logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>

</body>
</html>









