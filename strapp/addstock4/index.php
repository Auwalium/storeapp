<?php
include('../functions.php');

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
	<?php $user = $_SESSION['user']['username'];?>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
          </small>

        <?php endif ?>
    
  </div>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Store Stock </h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Notify MGT on Out of Stock Goods</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Stock in Store</button>
        <hr />
        <a  href="../addstock21" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> Click Here to Check Reserved Items</button> </a>
		<hr />
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
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
        require_once '../dbconfig.php';
        	$stmt = $db_con->prepare("DELETE FROM `stock` WHERE `slevel` = ''");
		$stmt->execute();
        $stmt = $db_con->prepare("SELECT * FROM stock WHERE `slevel` > '2'  AND category ='unused' or category = 'office equipment' or category= 'Hospital Equipment' or category='Maintenance Items' or category='Office Stationary' or category='cittu'  ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['category']; ?></td>
			
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
    


  <div >     	
      <table  border=0 cellspacing="0" width="100% ">
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
    <div class="container">
      
        <div class="alert alert-info">
        
		
		
       <center><h4>INTERACT WITH THE DATABASE</center></h4>
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




<h1 ><center><button class="btn btn-info" type="button" id="btn-add"> 
 <a href="../research.php" target = 'new window' style="text-decoration:none; color: white;">Comfirm your Application</a>
  </center></h1>
	
	<h1 style="text-decoration:underline"><center>
	
<h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span>
 Search Your Request that has been Aproved 
  </center></h1>
  </center></h1>
  
  <center><form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Enter Sub Unit Name" aria-label="Search" name="sunit">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit2" value="Search">
    </form></center>
	
<?php
include("../config.php");
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
	
	
  </center></h1>
  
  <center><form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter Unit name" aria-label="Search" name="unit">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit2" value="Search">
    </form></center>
	
<?php
include("../config.php");
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