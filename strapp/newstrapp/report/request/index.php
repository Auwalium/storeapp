  
  
  
  <?php
session_start();

if($_SESSION['username'] != users) 
{
    header("Location: ../index.php");

}
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
$today = ($currentDate); 

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
        <th>Name</th>
        <th>category</th>
       
        <th><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>Request For Store Item</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
       include('dbconfig.php');
        $stmt = $db_con->prepare("SELECT * FROM item WHERE stock_level > 0   ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['generic_name']; ?></td>
			<td><?php echo $row['brand_name']; ?></td>
			
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
      
       
		
		
       <center><h4>CURRENT REQUEST SENT SUCCESSFULLY</center></h4><br><br>
	   
	   <div >     	
      <table  border="10" cellspacing="0" width="100%" class="table table-striped table-hover table-responsive">
	<tr bgcolor='#CCCCCC'>
		<td>ID</td>
		<td>ITEM NAME</td>
		<td>CATEGORY</td>
		<td>QUANTITY</td>
		<td>DEPT</td>
		<td>UNIT</td>
		<td>SUB UNIT</td>
		<td>REQUEST DATE</td>
		<td>REQUEST BY</td>
		<td>DELETE</td>
	</tr>

<?php
     
       		$stmt = $db_con->prepare("select * from requestitem where rdate = '$today' and rname ='$user' ");
       		//print_r($stmt);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)) { 		
		?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['dept']; ?></td>
			<td><?php echo $row['unit']; ?></td>
			<td><?php echo $row['sunit']; ?></td>
			<td><?php echo $row['rdate']; ?></td>
			<td><?php echo $row['rname']; ?></td>
			<td align="center"><a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            		</a></td>
			<?php
	}
		
?>
        
        </div>

		
    </div>
    
<br>

	
    <div class="container">
     
       
	   
	   <div >     	
      <table  border="10" cellspacing="0" width="100%" class="table table-striped table-hover table-responsive">
	  <center><h4>REQUEST STATUS AS AT <?php echo $today;  ?> </center></h4>
	<tr bgcolor='#CCCCCC'>
		<td>ID</td>
		<td>ITEM NAME</td>
		<td>REQUEST DATE</td>
		<td>CATEGORY</td>
		<td>QUANTITY</td>
		<td>ADMIN RECOMM</td>
		<td>HCS RECOMM</td>
		<td>HON RECOMM</td>
		<td>MD RECOMM</td>
		<td>APPROV QTY</td>
		<td>RECOMM DATE</td>
		
	</tr>

<?php
     
       		$stmt = $db_con->prepare("select * from requestitem where rname ='$user' ");
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)) { 		
		?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['rdate']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['rqa']; ?></td>
			<td><?php echo $row['rqmd']; ?></td>
			<td><?php echo $row['rqhn']; ?></td>
			<td><?php echo $row['rqmd1']; ?></td>
			<td><?php echo $row['rqs']; ?></td>
			<td><?php echo $row['adate']; ?></td>
			
			<?php
	}
		
?>
        
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
include("config.php");
if(isset($_POST['search_submit2'])){
  $sunit = $_POST['sunit'];
 $query="select * from approveditem where sunit = '$sunit' ";
 $result=mysqli_query($mysqli,$query);


 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
 
  <table class="table table-hover">
  <thead>
    <tr>
      <th> Item Name</th>
      <th>Dept</th>
	   <th>Unit</th>
	    <th>Sub Unit</th>
	  <th>Approved By</th>
      <th>Quantity </th>
      <th>Date Approved</th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  
   while($row=mysqli_fetch_array($result)){
  
	 $name=$row['name'];
    $dept=$row['dept'];
	 $unit=$row['unit'];
	  $sunit=$row['sunit'];
    $appv=$row['appv'];
    $qis=$row['qis'];
    $adate=$row['adate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
	   <td>'.$unit.'</td>
	    <td>'.$sunit.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      
	  <td>'.$adate.'</td>
	   <td>'.$category.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';
	
}
	
	?>
	
	

	<h1 style="text-decoration:underline"><center>
	
<?php
include("config.php");
if(isset($_POST['search_submit2'])){
  $unit = $_POST['unit'];
 $query="select * from approveditem where unit = '$unit' ";
 $result=mysqli_query($mysqli,$query);


 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
 
  <table class="table table-hover">
  <thead>
    <tr>
      <th> Item Name</th>
      <th>Dept</th>
	  <th>Unit </th>
	  <th>Sub Unit </th>
	  <th>Approved By</th>
      <th>Qty Dispatch</th>
      <th>Date </th>
	   <th>Category</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  
   while($row=mysqli_fetch_array($result)){
  
	 $name=$row['name'];
    $dept=$row['dept'];
	$unit=$row['unit'];
	$sunit=$row['sunit'];
    $appv=$row['appv'];
    $qis=$row['qis'];
    $adate=$row['adate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
	   <td>'.$unit.'</td>
	    <td>'.$sunit.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
      
	  <td>'.$adate.'</td>
	   <td>'.$category.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';
	
}
	
	?>	
 

</body>
</html>