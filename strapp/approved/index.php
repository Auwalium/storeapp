
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>approved</title>
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
    


	
	<div class="container">
      
        <h2 class="form-signin-heading">Store Items and thier Stock Level.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
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
        
        $stmt = $db_con->prepare("SELECT * FROM stock1 ORDER BY id DESC");
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
		
		
		
		
		
    


	<div class="container">
      
        <h2 class="form-signin-heading">Approved Items to be Dispatched.</h2><hr />
        
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
       
		<th>Item ID</th>
		<th>item Name</th>
		<th>Dept</th>
		<th>Approved By</th>
		<th>Quantity</th>
      
	   
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM requestitem ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			$code=$row['id'];
		$name=$row['name'];
       
		$dept=$row['dept'];
		$appv=$row['appv'];
        $adate=$row['adate'];
		$qis=$row['qis'];
			
			?>
			<tr>
			
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['appv']; ?></td>
			<td><?php echo $row['qis']; ?></td>
			
			
			
	<td> <a href=\edit.php?id=$res[id]\>Edit</a> | <a href=\delete.php?id=$res[id]\ onClick=\return confirm(Are you sure you want to delete?)\>Delete</a></td>;

			
			
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
    
	
	<div class="container">
      
        <h2 class="form-signin-heading">Dispatch Item.</h2><hr />
        
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
       
		<th>Item ID</th>
		<th>item Name</th>
		<th>Dept</th>
		<th>Approved By</th>
		<th>Date</th>
		<th>Quantity</th>
      
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM dispatch ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		
		$name=$row['name'];
       
		$dept=$row['dept'];
		$appv=$row['appv'];
        $adate=$row['adate'];
		$qis=$row['qis'];
			
			?>
			<tr>
			
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['appv']; ?></td>
			<td><?php echo $row['qa']; ?></td>
			<td><?php echo $row['adate']; ?></td>
			
			
			<td><a href="edit.php?id=$res[emp_id]">Edit</a> | <a href="delete.php?id=$res[emp_id]" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
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
	
			
		<?php
session_start();
?>
<style type="text/css">
#dis{
	display:none;
}
</style>
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
<table width="25%" align = center border="5">
 <tr> 
			<tr> 
				<td>Item code</td>
				<td><input type="int" name="id" value=<?php echo "$code" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 	
			<tr> 
				<td>Item id</td>
				<td><input type="int" name="id" value=<?php echo "$id" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			 
			<tr> 
				<td>Item name</td>
				<td><input type="text" name="name" value=<?php echo "$name" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr> <tr> </tr>  
			
			<tr> 
				<td>Dept or Unit</td>
				<td><input type="text" name="dept" <?php echo "$dept" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dispatch By</td>
				<td><input type="int" name="appv"   value=<?php echo "$appv" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity in Store</td>
				<td><input type="text" id="consult_fee"   name="consult_fee" value=<?php echo "$consult_fee" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity needed</td>
				<td><input type="text" id="glass_fee"     name="glass_fee"     placeholder="Enter Quantity Needed"></td>

			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" name="adate"></td>
			</tr>
			
				
				<script>
function sumBill(){
var consult, glasses,  total;
	consult	= parseInt(document.getElementById('consult_fee').value);
	glasses	= parseInt(document.getElementById('glass_fee').value);
	
	total 	= (consult - glasses );
	document.getElementById('total').value = total;
	
	return;
}
</script>	
				
			<td><input type="submit" name="sum_bill" value="Subtract Stock" onclick="sumBill(); return false;"></td>
			<td><input type="text" id="total"         name="total" required /></td>
			</tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>

<center><h2>

<a href="../logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>
</body>
</html>

</body>
</html>

