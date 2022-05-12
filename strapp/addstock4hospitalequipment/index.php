
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
      
        <h2 class="form-signin-heading">Dispatch Items.</h2>
        
        <div class="content-loader">
		
		
       
		
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
        $stmt = $db_con->prepare("SELECT * FROM dispatch  where category = 'Hospital Equipment' ORDER BY id DESC");
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



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="main">
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
 
  <table class="table table-hover">
  
  
  <h1 style="text-decoration:underline"><center>
 STORE LEDGER
  </center></h1>
   
  <h4 style="padding-top:100px;"><center>
 TEMS RECEIPTS
  </center></h4>
  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
	   <input class="form-control mr-sm-2" type="text" placeholder="enter Voucher Number" aria-label="Search" name="vnumber1">
      <center><input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search"></center>
    </form>
  
  
  
</div>

 
</div>

<div class="Footer">
  
</div>
</div>
  
</div>

	
	
	
	
	<?php

include("../config.php");


if(isset($_POST['search_submit'])){
  $item_description = $_POST['item_description']; 
   $vnumber1 = $_POST['vnumber1']; 
 $query="select * from voucher where  vnumber = '$vnumber1' or vnumber1 = '$vnumber1' ";
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
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Receipts Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>ITEM NAME</th>
      <th>DATE</th>
	   <th>SUPPLIED STORE</th>
	  <th>UNIT PRICE</th>
      <th>RECEIVED STORE</th>
	   <th>QTY</th>
	   <th>AMOUNT</th>
      <th>FOLIO</th>
	   <th>LPO NO</th>
	   <th>CHECKED BY</th>
	   <th>REMARKS</th>
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $item_description=$row['item_description'];
    $date1=$row['date1'];
	$storename=$row['storename'];
	$unit_price=$row['unit_price'];
    $vreceived=$row['vreceived'];
	$qty_received=$row['qty_received'];
    $amount=$row['amount'];
	 $folio=$row['folio'];
	$lpono=$row['lpono'];
	$check_by=$row['check_by'];
	$remarks=$row['remarks'];
	
	
	
    echo '<tr>
     
	  <td>'.$item_description.'</td>
      <td>'.$date1.'</td>
	  <td>'.$storename.'</td>
      <td>'.$unit_price.'</td>
      <td>'.$vreceived.'</td>
      <td>'.$qty_received.'</td>
	  <td>'.$amount.'</td>
	  <td>'.$folio.'</td>
	  <td>'.$lpono.'</td>
	  <td>'.$check_by.'</td>
	  <td>'.$remarks.'</td>
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

</div>



 <h4 ><center><h4 style="padding-top:50px;"><center>
	
	
	
</body>
</html>



  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
	   <input class="form-control mr-sm-2" type="text" placeholder="enter Item Name" aria-label="Search" name="item_description">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>
  
  
  
</div>

 
</div>

<div class="Footer">
  
</div>
</div>
  
</div>

	
	
	
	
	<?php

include("../config.php");


if(isset($_POST['search_submit'])){
  $item_description = $_POST['item_description']; 
   
 $query="select * from voucher where  item_description = '$item_description' ";
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
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Receipts Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th> ITEM NAME</th>
	  <th>UNIT PRICE</th>
	   <th>QTY</th>
	   <th>AMOUNT</th>
      <th>FOLIO</th>
	   <th>VOUCHER NUMBER</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
  
	 $item_description=$row['item_description'];
	$unit_price=$row['unit_price'];
	$qty_received=$row['qty_received'];
    $amount=$row['amount'];
	 $folio=$row['folio'];
	$vnumber=$row['vnumber'];
	
	
	
    echo '<tr>
     
	  <td>'.$item_description.'</td>
      <td>'.$unit_price.'</td>
      <td>'.$qty_received.'</td>
	  <td>'.$amount.'</td>
	  <td>'.$folio.'</td>
	  <td>'.$vnumber.'</td>
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

</div>

		
	
</body>
</html>



  <h4 ><center><h4 style="padding-top:50px;"><center>
 ITEMS ISSUED BY NAME
  </center></h4>
  
  <form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter item name" aria-label="Search" name="name">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit1" value="Search">
    </form>
<?php
if(isset($_POST['search_submit1'])){
  $name = $_POST['name'];
 $query="select * from dispatch where name = '$name' ";
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
  <body style="background-color:;color:;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>NAME</th>
      <th>DEPT</th>
	   <th>UNIT</th>
      <th>SUB UNIT</th>
	  <th>APPROVED BY</th>
      <th>QTY ISSUED</th>
	  <th>RECEIVED BY</th>
	   <th>ISSUED BY</th>
      <th>DATE</th>
	   
    
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
	 $cname=$row['cname'];
	  $dby=$row['dby'];
    $ddate=$row['ddate'];
	 
	
	
	
    echo '<tr>
     
	  <td>'.$name.'</td>
      <td>'.$dept.'</td>
	  <td>'.$unit.'</td>
	  <td>'.$sunit.'</td>
      <td>'.$appv.'</td>
      <td>'.$qis.'</td>
	  <td>'.$cname.'</td>
	  <td>'.$dby.'</td>
	  <td>'.$ddate.'</td>
	   
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
        <a href="../logout.php" class="btn btn-danger">Sign Out </a></center>
        </div>

</body>
</html>
