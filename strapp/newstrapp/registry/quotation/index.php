
<?php
session_start();
$user = $_SESSION['username1'];
if(($_SESSION['username'] != store) and ($_SESSION['username'] != hstore) and ($_SESSION['username'] != procurement)) 
{
    header("Location: index.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supplier's Qoutation</title>
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
      
        <center><h2 class="form-signin-heading">Supplier's Quotation</h2></center><hr />
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View All Qoutation</button>
       <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Register A New Qoutation</button>
        <hr />
	
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
       
		<th>ID</th>
		<th>GENERIC NAME</th>	
		<th>SUPPLIER NAME</th>
		<th>BRAND NAME</th>
		<th>PRICE</th>
		<th>EDIT</th>
		<th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM qoutation  ORDER BY id DESC");
		//print_r($stmt);
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			$id=$row['id'];
		$itemid=$row['itemid'];
        $price=$row['price'];
		$supplierid=$row['supplierid'];
       
	   	
		require_once '../config.php';
		$sql="SELECT  name from supplier where id = $supplierid";
		//print_r($sql);
		$result=mysqli_query($mysqli,$sql);
		$row1=mysqli_fetch_array($result);
		
		
		$sql="SELECT  generic_name from item where id = $itemid";
		//print_r($sql);
		$result=mysqli_query($mysqli,$sql);
		$row2=mysqli_fetch_array($result);
	    
		$sql="SELECT  brand_name from item where id = $itemid";
		//print_r($sql);
		$result=mysqli_query($mysqli,$sql);
		$row3=mysqli_fetch_array($result);
	   
	   
	   
			?>
			<tr>
			
			<td><?php echo $row['id']; ?></td>
			<td><?php echo "$row2[0]"; ?></td>
			<td><?php echo "$row1[0]"; ?></td>
			<td><?php echo "$row3[0]"; ?></td>
			<td><?php echo $row['price']; ?></td>
		
			<td><a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="BOOK">
			<img src="edit.png" width="20px" />
            </a></td>
			
			<td align="center"><a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="UPDATE">
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
	
        
		<center><a href="../dashboard.php" class="btn btn-warning">Back</a>
		
     
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

</body>
</html>
